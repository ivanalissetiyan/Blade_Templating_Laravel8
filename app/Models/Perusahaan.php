<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    // use HasFactory;

    public $table = 'perusahaan';
    protected $fillable = [
        'alamat_id',
        'nama',
        'logo',
        'url',
        'jml_karyawan',
        'created_at',
        'updated_at',

    ];
}
