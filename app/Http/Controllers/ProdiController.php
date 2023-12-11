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
        // where staff.id_prodi = pengajuan->mahasiswa->id_prodi
        $id = auth()->user()->staff->id_prodi;

        // mendapatkan data hanya yang sesuai dengan prodi
        $pengajuan = Pengajuan::whereHas('mahasiswa', function($query) use ($id) {
            $query->where('id_prodi', $id);
        })->get();

        return view('prodi.pengajuan', [
            'title' => 'Prodi Pengajuan',
            'pengajuan' => $pengajuan
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
        $pengajuan->status = 'Teruskan';
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

    public function detail($id)
    {
        $pengajuan = Pengajuan::find($id);

        return view('prodi.pengajuan-detail', [
            'title' => 'Prodi Pengajuan Detail',
            'pengajuan' => $pengajuan
        ]);
    }
}
