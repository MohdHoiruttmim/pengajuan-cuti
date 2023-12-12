<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Mahasiswa;
use App\Models\Pembayaran;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'title' => 'Dashboard',
        ]);
    }

    public function pengajuan()
    {
        $user = Mahasiswa::where('id_user', auth()->user()->id)->first();
        return view('users.pengajuan', [
            'title' => 'Pengajuan',
            'user' => $user,
        ]);
    }

    public function status()
    {
        $user = Mahasiswa::where('id_user', auth()->user()->id)
                ->first();

        return view('users.status', [
            'title' => 'Status',
            'user' => $user,
        ]);
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'confirm' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
        
        $confirm = $request->file('confirm');
        $fileNameConfirm = time() . '.' . $confirm->extension();
        $pathConfirm = $confirm->storeAs('public/confirm', $fileNameConfirm);

        $confirmPath = Storage::url($pathConfirm);

        $pembayaran = Pembayaran::find($request->id);
        $pembayaran->bukti_pembayaran = $confirmPath;
        $pembayaran->status = 'Menunggu';
        $pembayaran->save();

        return redirect()->route('users');
    }
}
