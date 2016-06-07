<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesantren extends Model
{
    protected $table='pesantren';

    public $timestamps = false;

    protected $primaryKey = 'id_pesantren';
}
