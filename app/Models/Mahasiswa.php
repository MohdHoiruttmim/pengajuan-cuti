<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    function user()
    {
        // return $this->belongsTo(User::class, 'id_user', 'id');
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'id_fakultas', 'id');
    }

    function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_mahasiswa', 'id');
    }
}
