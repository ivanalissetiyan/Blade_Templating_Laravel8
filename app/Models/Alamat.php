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
        'created_at',
        'updated_at',
    ];

    // relation
    public function perusahaan()
    {
        return $this->hasOne('App\Models\Perusahaan', 'alamat_id');
    }

}
