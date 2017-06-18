<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Desa extends Authenticatable
{
    protected $table='desa';
    public $timestamps=false;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_desa', 'kode_login', 'password', 'logo_desa',
        'nama_kepala_desa', 'latitude', 'longitude'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
    public function umkm()
    {
        return $this->hasMany('App\Models\PemilikUmkm', 'desa_id', 'id');
    }
}
