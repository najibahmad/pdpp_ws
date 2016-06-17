<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Pesantren extends Model
{
    use SearchableTrait;

    protected $table='pesantren';

    public $timestamps = false;

    protected $primaryKey = 'id_pesantren';

    protected $fillable = [
        'NSPP',
        'nama_pesantren',
        'alamat_pesantren',
        'kecamatan_pesantren',
        'no_telepon',

        'website',
        'nama_pengasuh',
        'jumlah_santri',
        'jumlah_santri_mukim'
    ];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'pesantren.nama_pesantren' => 10,
            'pesantren.NSPP' => 10,
        ],
        'joins' => [
            'kabupaten' => ['pesantren.kabupaten_id_kabupaten','kabupaten.id_kabupaten'],
            'provinsi' => ['kabupaten.provinsi_id_provinsi','provinsi.id_provinsi']
        ],
    ];

    public function kabupaten()
  	{
        return $this->belongsTo('App\Kabupaten','kabupaten_id_kabupaten','id_kabupaten');
    }

    // public function provinsi()
    // {
    //     return $this->hasManyThrough('App\Provinsi', 'App\Kabupaten',
    //         'id_kabupaten', 'id_provinsi', 'id_pesantren');
    // }

    /**
     * Get all of the posts for the country.
     */
    // public function provinsi()
    // {
    //     return $this->hasManyThrough('App\Pesantren', 'App\Kabupaten',
    //         'id_provinsi', 'id_kabupaten', 'id_pesantren');
    // }
}
