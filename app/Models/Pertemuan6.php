<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pertemuan6 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'jurusan'
    ];

    protected $table = 'pertemuan6s';
}
