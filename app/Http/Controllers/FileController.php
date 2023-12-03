<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pengajuan;
use App\Models\Mahasiswa;
use App\Models\User;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'from' => 'required|size:4',
            'to' => 'required|size:4',
            'ktm' => 'required|mimes:pdf|max:2048',
            'free_fak' => 'required|mimes:pdf|max:2048',
            'free_per' => 'required|mimes:pdf|max:2048',
            'free_ortu' => 'required|mimes:pdf|max:2048',
            'ttd' => 'required|image|mimes:png|max:2048',
        ]);

        $ktm = $request->file('ktm');
        $free_fak = $request->file('free_fak');
        $free_per = $request->file('free_per');
        $free_ortu = $request->file('free_ortu');
        $ttd = $request->file('ttd');

        $fileNameKtm = time() . '.' . $ktm->extension();
        $fileNameFreeFak = time() . '.' . $free_fak->extension();
        $fileNameFreePer = time() . '.' . $free_per->extension();
        $fileNameFreeOrtu = time() . '.' . $free_ortu->extension();
        $fileNameTtd = time() . '.' . $ttd->extension();

        $pathKtm = $ktm->storeAs('public/ktm', $fileNameKtm);
        $pathFreeFak = $free_fak->storeAs('public/fakultas', $fileNameFreeFak);
        $pathFreePer = $free_per->storeAs('public/perpustakaan', $fileNameFreePer);
        $pathFreeOrtu = $free_ortu->storeAs('public/orangtua', $fileNameFreeOrtu);
        $pathTtd = $ttd->storeAs('public/ttd', $fileNameTtd);

        $pengajuan = new Pengajuan;
        $pengajuan->keterangan = $request->reason;
        $pengajuan->semester = $request->semester;
        $tahun = $request->from . '/' . $request->to;
        $pengajuan->tahun = $tahun;
        
        $ktmPath = Storage::url($pathKtm);
        $pengajuan->ktm = $ktmPath;
        
        $freeFakPath = Storage::url($pathFreeFak);
        $pengajuan->free_fak = $freeFakPath;
        
        $freePerPath = Storage::url($pathFreePer);
        $pengajuan->free_per = $freePerPath;
        
        $freeOrtuPath = Storage::url($pathFreeOrtu);
        $pengajuan->free_ortu = $freeOrtuPath;
        
        $ttdPath = Storage::url($pathTtd);
        $pengajuan->ttd = $ttdPath;

        $pengajuan->status = 'Proses';
        $pengajuan->id_mahasiswa = auth()->user()->mahasiswa->id;

        $pengajuan->save();

        return redirect()->route('status');
    }
}
