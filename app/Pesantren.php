<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Aloko\Elasticquent\ElasticquentTrait;


class Pesantren extends Model
{
//    use SearchableTrait;

    protected $table='pesantren';

    public $timestamps = false;

    protected $primaryKey = 'id_pesantren';

    protected $fillable = [
      'NSPP','nama_pesantren','jumlah_santri', 'kabupaten_id_kabupaten','pengasuh_id_pengasuh'
    ];

    /**
     * Searchable rules.
     *
     * @var array
     */
//    protected $searchable = [
//        'columns' => [
//            'pesantren.nama_pesantren' => 10,
//            'pesantren.NSPP' => 10,
//        ],
//        'joins' => [
//            'kabupaten' => ['pesantren.kabupaten_id_kabupaten','kabupaten.id_kabupaten'],
//            'provinsi' => ['kabupaten.provinsi_id_provinsi','provinsi.id_provinsi']
//        ],
//    ];


    use ElasticquentTrait;

    private $mapProps = array(
        'NSPP' =>[
            'type' => 'string',
            "analyzer" => "standard",
        ],
        'nama_pesantren' =>[
            'type' => 'string',
            "analyzer" => "standard",
        ],
    );

    private $customAnalyzer = array(
        'myAnalyzer' => [
            'type' => 'stop',
            "stopword" => [","]
        ]
    );

    public static function createIndexWithCustomAnalyzer($shards = null, $replicas = null){
        $instance = new static;
        $client = $instance->getElasticSearchClient();

        $params = [
            'index' => 'default',
            'body' => [
                'settings' =>[
                    'number_of_shards' => $shards,
                    'number_of_replicas' => $replicas,
                    'analysis' => [
                        'analyzer' => $instance->customAnalyzer,
                    ]
                ],
                'mappings' => [
                    'pesantren' => [
                        'properties' => $instance->mapProps,
                    ],
                ]
            ]
        ];

        return $client->indices()->create($params);
    }

    public function kabupaten()
  	{
      return $this->belongsTo('App\Kabupaten','kabupaten_id_kabupaten');
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
