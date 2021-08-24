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

    //Relation
    public function alamat()
    {
        return $this->belongsTo('App\Models\Alamat', 'alamat_id', 'id');
    }

    public function ceo()
    {
        return $this->hasmany('App\Models\Ceo', 'perusahaan_id');
    }

    public function cto()
    {
        return $this->hasMany('App\Models\Cto', 'perusahaan_id');
    }

    public function match_perusahaan()
    {
        return $this->hasOne('App\Models\Clients', 'perusahaan_id');
    }

    public function match_client()
    {
        return $this->hasOne('App\Models\Clients', 'client_id');
    }

}
