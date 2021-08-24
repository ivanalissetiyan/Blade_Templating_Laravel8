<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceo extends Model
{
    // use HasFactory;

    public $table = 'ceo';

    protected $fillable = [
        'perusahaan_id',
        'nama',
        'umur',
        'negara',
        'created_at',
        'updated_at',

    ];
}
