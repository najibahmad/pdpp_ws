<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table='santri';

    public $timestamps = false;

    protected $primaryKey = 'id_santri';

    protected $fillable = [
    	'jumlah_santri_mukim_pria',
    	'jumlah_santri_mukim_wanita',
    	'jumlah_santri_tidak_mukim_pria',
    	'jumlah_santri_tidak_mukim_wanita'

    ];

    public function pesantren()
    {
        return $this->hasOne('App\Pesantren','santri_id','id_santri');
    }
}
