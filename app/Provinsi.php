<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Provinsi extends Model
{
    use ElasticquentTrait;

    protected $table='provinsi';

    protected $fillable = ['nama_provinsi'];

    public $timestamps = false;

    protected $primaryKey = 'id_provinsi';

    public function kabupatens()
  	{
           return $this->hasMany('App\Kabupaten','provinsi_id_provinsi','id_provinsi');
    }

    // public function pesantrens()
    // {
    //     return $this->hasManyThrough('App\Pesantren', 'App\Kabupaten',
    //         'id_provinsi', 'id_kabupaten', 'id_pesantren');
    // }
}
