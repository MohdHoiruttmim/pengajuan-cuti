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
}