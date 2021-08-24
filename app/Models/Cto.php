<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cto extends Model
{
    // use HasFactory;
    public $table 'cto';

    protected $fillable = [
        'perusahaan_id',
        'nama',
        'tinggi',
        'posisi',
        'created_at',
        'updated_at',

    ];
}
