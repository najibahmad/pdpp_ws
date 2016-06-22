<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenaga_pengajar extends Model
{
    protected $table='tenaga_pengajar';

    public $timestamps = false;

  	protected $primaryKey = 'id_tenaga_pengajar';

    protected $fillable = [
    	'nonformal_pria',
    	'nonformal_wanita',
    	'formal_nonsarjana_pria',
    	'formal_nonsarjana_wanita',
    	'formal_sarjana_pria',
    	'formal_sarjana_wanita',
    	'formal_pascasarjana_pria',
    	'formal_pascasarjana_wanita'

    ];

    public function pesantren()
    {
        return $this->hasOne('App\Pesantren','tenaga_pengajar_id','id_tenaga_pengajar');
    }

}
