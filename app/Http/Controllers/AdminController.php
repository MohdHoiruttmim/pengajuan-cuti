<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Pembayaran;

class AdminController extends Controller
{
    public function index()
    {
        $pengajuan = Pengajuan::all();
        $pengajuanTotal = Pengajuan::count();
        $pengajuanDiproses = Pengajuan::where('status', 'proses')->count();
        $pengajuanDiterima = Pengajuan::where('status', 'teruskan')->count();
        $pengajuanSelseai = Pengajuan::where('status', 'selesai')->count();

        return view('admin.index', [
            'title' => 'Admin Dashboard',
            'pengajuan' => $pengajuan,
            'total' => $pengajuanTotal,
            'diproses' => $pengajuanDiproses,
            'diterima' => $pengajuanDiterima,
            'selesai' => $pengajuanSelseai,
        ]);
    }

    public function pengajuan()
    {
        $pengajuan = Pengajuan::all();

        return view('admin.pengajuan', [
            'title' => 'Admin Pengajuan',
            'pengajuan' => $pengajuan,
        ]);
    }

    public function detail($id)
    {
        $pengajuan = Pengajuan::find($id);

        return view('admin.pengajuan-detail', [
            'title' => 'Admin Detail Pengajuan',
            'pengajuan' => $pengajuan,
        ]);
    }

    public function confirm(Request $request) {
        $random = rand(100000000, 999999999);

        $pembayaran = new Pembayaran;

        $pembayaran->kode_pembayaran = $random;
        $pembayaran->id_pengajuan = $request->id;
        $pembayaran->status = 'Belum Dibayar';
        $pembayaran->save();

        return redirect()->route('admin-pengajuan');
    }

    public function status()
    {
        $pembayaran = pembayaran::all();
        return view('admin.status', [
            'title' => 'Admin Status',
            'pembayaran' => $pembayaran,
        ]);
    }

    public function verify(Request $request)
    {
        $pembayaran = Pembayaran::find($request->id);
        $pembayaran->status = 'Lunas';
        $pembayaran->save();

        return redirect()->route('admin-status');
    }

    public function keterangan($id)
    {
        $pengajuan = Pengajuan::find($id);

        $pengajuan->status = 'Diterima';
        $pengajuan->save();

        return view('surat.keterangan', [
            'title' => 'Surat Keterangan BSS',
            'pengajuan' => $pengajuan,
        ]);
    }
}
