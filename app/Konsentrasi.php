<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsentrasi extends Model
{
    protected $table='konsentrasi';

    public $timestamps = false;

    protected $primaryKey = 'id_konsentrasi';

    protected $fillable = ['nama_konsentrasi'];

}
