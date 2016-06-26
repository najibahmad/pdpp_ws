<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potensi_ekonomi extends Model
{
    protected $table='potensi_ekonomi';

    public $timestamps = false;

    protected $primaryKey = 'id_potensi_ekonomi';

    protected $fillable = ['nama_potensi_ekonomi'];

    public function pesantrens()
  	{
           return $this->hasMany('App\Pesantren','potensi_ekonomi_id','id_potensi_ekonomi');
    }

}
