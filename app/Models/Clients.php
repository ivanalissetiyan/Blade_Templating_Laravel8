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

    //relation
    public function perusahaan()
    {
        return $this->belongsTo('App\Models\Perusahaan', 'perusahaan_id', 'id');
    }

    public function clients()
    {
        return $this->belongsTo('App\Models\Perusahaan', 'client_id', 'id');
    }
}
