<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potensi_ekonomi extends Model
{
    protected $primaryKey = 'id_potensi_ekonomi';

    protected $fillable = [
    	'nama_potensi_ekonomi'
    ];

}
