<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe_pesantren extends Model
{
    protected $table='tipe_pesantren';

    public $timestamps = false;

    protected $primaryKey = 'id_tipe_pesantren';

    protected $fillable = ['nama_tipe_pesantren'];

    public function pesantrens()
  	{
           return $this->hasMany('App\Pesantren','tipe_pesantren_id','id_tipe_pesantren');
    }

}
