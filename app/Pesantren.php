<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesantren extends Model
{
    protected $table='pesantren';

    public $timestamps = false;

    protected $primaryKey = 'id_pesantren';

    protected $fillable = [
      'NSPP','nama_pesantren','jumlah_santri', 'kabupaten_id_kabupaten','pengasuh_id_pengasuh'
    ];

    public function kabupaten()
  	{
      return $this->belongsTo('App\Kabupaten','kabupaten_id_kabupaten');
    }

    public function pengasuh()
  	{
      return $this->belongsTo('App\Pengasuh','pengasuh_id_pengasuh');
    }
}
