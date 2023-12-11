<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

    function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'id_fakultas', 'id');
    }
}
