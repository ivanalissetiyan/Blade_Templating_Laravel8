<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    // use HasFactory;

    public $table = 'alamat';

    protected $fillable = [
        'nama',
        'kapasitas',
        'alamat_detail',
        'create_at',
        'update_at',
    ];

}
