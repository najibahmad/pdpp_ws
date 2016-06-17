<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table='kabupaten';

    public $timestamps = false;

    protected $primaryKey = 'id_kabupaten';

    protected $fillable = ['nama_kabupaten','provinsi_id_provinsi'];

    public function provinsi()
  	{
      return $this->belongsTo('App\Provinsi','provinsi_id_provinsi');
    }

    public function pesantrens()
  	{
      return $this->hasMany('App\Pesantren','kabupaten_id_kabupaten','id_kabupaten');
    }
}