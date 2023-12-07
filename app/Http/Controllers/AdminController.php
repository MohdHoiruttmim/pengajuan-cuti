<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class AdminController extends Controller
{
    public function index()
    {
        $pengajuan = Pengajuan::all();

        return view('admin.index', [
            'title' => 'Admin Dashboard',
            'pengajuan' => $pengajuan,
        ]);
    }

    public function pengajuan()
    {
        return view('admin.pengajuan', [
            'title' => 'Admin Pengajuan'
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
        dd($request->all());
    }
}
