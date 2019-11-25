<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Booking;
use App\Mitra;
use DB;
use Session;

class MitraController extends Controller
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
        $mitra = Mitra::where('id_user', Auth::user()->id)->first();
        return view('mitra.dashboard', compact('mitra'));
    }

    public function edit(){
        $mitra = Mitra::where('id_user', Auth::user()->id)->first();
        return view('mitra.edit', compact('mitra'));
    }

    public function konfirmasi(){
        $mitra = Mitra::where('id_user', Auth::user()->id)->first();
        $pesanan = Booking::where('id_mitra', $mitra->id_mitra)->with(['getPengguna'])->get();
        // dd($pesanan);
        return view('mitra.konfirmasi', compact('pesanan', 'mitra'));
    }

    public function toggleStatusToko(Request $request){
        try {
            DB::beginTransaction();
            $mitra = Mitra::where('id_mitra', $request->id_mitra)->update(['status_restoran' => $request->status_resto]);
        } catch (\Exception $e) {
            DB::rollback();
            Session::put('notifikasi' , 'button_gagal');
            return redirect()->back()->with(['error' => $e]);
        }
        DB::commit();
        Session::put('notifikasi' , 'button_'.strtolower($request->status_resto));
        return redirect()->back()->with(['success' => 'Berhasil mengubah status toko']);
    }

    public function profilMitra(Request $request)
    {
        try {
            DB::beginTransaction();
            $mitra = Mitra::where('id_mitra', $request->id_mitra)->update(['nama_mitra' => $request->nama_mitra]);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with(['error' => $th]);
        }
        DB::commit();
        return redirect()->back()->with(['success' => 'Berhasil mengubah profil toko']);
    }

    public function hargaMitra(Request $request)
    {
        // dd($request);
        try {
            DB::beginTransaction();
            $mitra = Mitra::where('id_mitra', $request->id_mitra)->update(['harga_meja_kecil' => $request->harga_meja_kecil]);
            $mitra = Mitra::where('id_mitra', $request->id_mitra)->update(['harga_meja_sedang' => $request->harga_meja_sedang]);
            $mitra = Mitra::where('id_mitra', $request->id_mitra)->update(['harga_meja_besar' => $request->harga_meja_besar]);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with(['error' => $th]);
        }
        DB::commit();
        return redirect()->back()->with(['success' => 'Berhasil mengubah harga toko']);
    }

    public function tolakPemesanan(Request $request)
    {
        try {
            DB::beginTransaction();
            $booking = Booking::where('id_booking', $request->id_booking)->update(['status_booking' => 'Gagal', 'pesan_status_booking' => $request->pesan_konfirmasi]);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with(['error' => $th]);
        }
        DB::commit();
        return redirect()->back()->with(['success' => 'Berhasil melakukan konfirmasi']);
    }

    public function terimaPemesanan(Request $request)
    {
        try {
            DB::beginTransaction();
            $booking = Booking::where('id_booking', $request->id_booking)->update(['status_booking' => 'Berhasil', 'pesan_status_booking' => $request->pesan_konfirmasi]);
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with(['error' => $th]);
        }
        DB::commit();
        return redirect()->back()->with(['success' => 'Berhasil melakukan konfirmasi']);
    }

}
