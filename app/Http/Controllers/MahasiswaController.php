<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa');
    }

    public function pengajuan()
    {
        $user = Mahasiswa::where('id_user', auth()->user()->id)->first();
        return view('users.pengajuan', [
            'title' => 'Pengajuan',
            'user' => $user,
        ]);
    }
}
