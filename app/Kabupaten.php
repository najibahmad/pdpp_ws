<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table='kabupaten';

    public $timestamps = false;

    protected $primaryKey = 'id_kabupaten';
}
