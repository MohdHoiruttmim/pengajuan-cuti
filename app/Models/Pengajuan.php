<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'keterangan',
        'semester',
        'tahun',
        'ktm',
        'free_fak',
        'free_per',
        'free_ortu',
        'ttd',
        'status',
        'keterangan_ditolak',
        'surat_permohonan',
        'id_mahasiswa'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa', 'id');
    }

    // public function prodi()
    // {
    //     return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    // }

    // public function fakultas()
    // {
    //     return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id');
    // }
}
