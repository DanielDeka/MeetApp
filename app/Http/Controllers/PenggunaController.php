<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mitra;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

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
            // $booking->id_mitra = $request->id_mitra;
            $booking->id_mitra = 1;
            $booking->save();

        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with(['error' => $e]);
        }
        DB::commit();

        return redirect()->back()->with(['success' => 'Pemesanan berhasil dilakukan']);
    }
}
