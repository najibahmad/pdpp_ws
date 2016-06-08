<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengasuh extends Model
{
    protected $table='pengasuh';

    public $timestamps = false;

    protected $primaryKey = 'id_pengasuh';

    protected $fillable = [
      'NIK','nama_pengasuh','jabatan','hp_pengasuh','email_pengasuh','facebook_pengasuh'
    ];


    public function pesantren()
  	{
      return $this->hasOne('App\Pesantren','pengasuh_id_pengasuh');
    }
}
