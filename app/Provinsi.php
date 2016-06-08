<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table='provinsi';

    protected $fillable = ['nama_provinsi'];

    public $timestamps = false;

    protected $primaryKey = 'id_provinsi';

    public function kabupatens()
  	{
           return $this->hasMany('App\Kabupaten','provinsi_id_provinsi','id_provinsi');
    }
}
