<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    // use HasFactory;

    public $table = 'clients';

    protected $fillable = [
        'perusahaan_id',
        'clients_id',
        'jadwal',
        'created_at',
        'updated_at',

    ];
}
