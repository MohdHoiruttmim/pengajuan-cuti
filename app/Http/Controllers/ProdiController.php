<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class ProdiController extends Controller
{
    public function index()
    {
        return view('prodi.index', [
            'title' => 'Prodi Dashboard'
        ]);
    }

    public function pengajuan()
    {
        $all = Pengajuan::all();

        return view('prodi.pengajuan', [
            'title' => 'Prodi Pengajuan',
            'pengajuan' => $all
        ]);
    }

    public function detail($id)
    {
        $pengajuan = Pengajuan::find($id);

        return view('prodi.pengajuan-detail', [
            'title' => 'Prodi Pengajuan Detail',
            'pengajuan' => $pengajuan
        ]);
    }
}
