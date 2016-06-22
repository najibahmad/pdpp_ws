<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

use Elasticquent\ElasticquentTrait;


class Pesantren extends Model
{
    use ElasticquentTrait;
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
        'jumlah_santri_mukim_pria',
        'jumlah_santri_mukim_wanita',
        'jumlah_santri_tidak_mukim_pria',
        'jumlah_santri_tidak_mukim_wanita',
        'nonformal_pria',
        'nonformal_wanita',
        'formal_nonsarjana_pria',
        'formal_nonsarjana_wanita',
        'formal_sarjana_pria',
        'formal_sarjana_wanita',
        'formal_pascasarjana_pria',
        'formal_pascasarjana_wanita',
        'kabupaten_id_kabupaten',
        'longitude',
        'latitude',
        'tahun_berdiri',
        'tipe_pesantren_id',
        'potensi_ekonomi_id',
        'konsentrasi_id'
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

    public function santri()
    {
        return $this->belongsTo('App\Santri', 'santri_id');
    }

    public function tenaga_pengajar()
    {
        return $this->belongsTo('App\Tenaga_pengajar', 'tenaga_pengajar_id');
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
