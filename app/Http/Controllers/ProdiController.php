<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function uploadTtd(Request $request) {
        $request->validate([
            'ttd' => 'required|image|mimes:png|max:2048',
        ]);

        $ttd_prodi = $request->file('ttd');
        $filenameTtd = time() . '.' . $ttd_prodi->extension();
        $pathTtd = $ttd_prodi->storeAs('public/ttd', $filenameTtd);
        $ttdPath = Storage::url($pathTtd);

        $pengajuan = Pengajuan::find($request->id);
        $pengajuan->ttd_prodi = $ttdPath;
        $pengajuan->status = 'Diteruskan';
        $pengajuan->surat_permohonan = "/permohonan/".$request->id;
        $pengajuan->save();
        
        return redirect()->route('prodi-pengajuan');
    }

    public function permohonan($id) {
        return view('prodi.permohonan', [
            'id' => $id,
            'title' => 'Prodi Permohonan',
        ]);
    }

    public function printPermohonan($id) {
        $pengajuan = Pengajuan::find($id);

        return view('surat.permohonan', [
            'title' => 'Prodi Permohonan Print',
            'pengajuan' => $pengajuan
        ]);
    }

    public function sendToBak(Request $request) {

        $permohonan = $request->file('permohonan');
        $filenamePermohonan = time() . '.' . $permohonan->extension();
        $pathPermohonan = $permohonan->storeAs('public/permohonan', $filenamePermohonan);
        $permohonanPath = Storage::url($pathPermohonan);
        dd($permohonanPath);
        $pengajuan = Pengajuan::find($id);
        $pengajuan->status = 'Diajukan';
        // $pengajuan->save();

        return redirect()->route('prodi-pengajuan');
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
