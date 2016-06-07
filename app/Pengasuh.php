<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengasuh extends Model
{
    protected $table='pengasuh';

    public $timestamps = false;

    protected $primaryKey = 'id_pengasuh';
}
