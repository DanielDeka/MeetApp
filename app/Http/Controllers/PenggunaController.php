<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mitra;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;
use Exception;

class PenggunaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mitra = Mitra::all();
        return view('pengguna.dashboard', compact('mitra'));
    }

    public function mitra($id_mitra)
    {
        $mitra = Mitra::where('id_mitra', $id_mitra)->first();
        // dd($mitra);
        return view('pengguna.mitra', compact('mitra'));
    }

    public function booking($id_mitra)
    {
        $mitra = Mitra::where('id_mitra', $id_mitra)->first();
        return view('pengguna.booking', compact('mitra'));
    }

    public function statusPemesanan()
    {
        $pemesanan = Booking::where('id_pengguna', Auth::user()->id)->with('getMitra')->get();
        // dd($pemesanan);
        return view('pengguna.status-pemesanan', compact('pemesanan'));
    }

    public function formPembayaran(Request $request)
    {
        dd($request);
        $biaya = $request->biaya_booking;
        $pembayaran = $request->pembayaran_booking;
        return view('pengguna.form-pembayaran', compact('biaya', 'pembayaran'));
    }

    public function buatPemesanan(Request $request)
    {
        try {
            DB::beginTransaction();

            $booking = new Booking;

            $booking->waktu_booking = $request->waktu_booking;
            $booking->tanggal_booking = $request->tanggal_booking;
            $booking->durasi_booking = $request->durasi_booking;
            $booking->kuota_booking = $request->jumlah_orang;
            $booking->tipe_booking = $request->tipe_booking;
            $booking->pembayaran_booking = $request->pembayaran_booking;
            $booking->status_booking = 'Menunggu Verifikasi';
            $booking->biaya_booking = 50000;
            // $booking->biaya_booking = $request->biaya_booking;
            $booking->id_pengguna = Auth::user()->id;
            $booking->id_mitra = $request->id_mitra;
            $booking->save();

            $mitra = $booking['id_mitra'];
            $booking_id = $booking['id_booking'];
            $biaya = $booking['biaya_booking'];
            $pembayaran = $booking['pembayaran_booking'];
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with(['error' => $e]);
        }
        DB::commit();
        return view('pengguna.form-pembayaran', compact('biaya', 'pembayaran', 'booking_id', 'mitra'));
        // return redirect()->back()->with(['success' => 'Pemesanan berhasil dilakukan']);
    }

    public function verifikasiPemesanan(Request $request)
    {
        // dd($request);
        try {
            DB::beginTransaction();

            $booking = Booking::where('id_booking', $request->id_booking)->update(['no_verifikasi_booking' => $request->no_verifikasi]);
        } catch (Exception $e) {
            DB::rollback();

            $booking = Booking::where('id_booking', $request->id_booking)->update(['status_booking' => 'Gagal']);
            return redirect('/pengguna/mitra/'.$request->id_mitra.'/booking')->with(['error' => 'Pembayaran Gagal. Pemesanan anda dibatalkan. Silahkan memesan ulang.']);
        }
        DB::commit();

        $pemesanan = Booking::where('id_pengguna', Auth::user()->id)->with('getMitra')->get();
        return view('pengguna.status-pemesanan', compact('pemesanan'));
    }
}
