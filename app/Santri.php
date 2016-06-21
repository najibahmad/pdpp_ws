<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    //
    protected $primaryKey = 'id_santri';

    protected $fillable = [
    	'jumlah_santri_mukim_pria',
    	'jumlah_santri_mukim_wanita',
    	'jumlah_santri_tidak_mukim_pria',
    	'jumlah_santri_tidak_mukim_wanita'

    ];
}
