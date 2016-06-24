<?php

use Illuminate\Database\Seeder;

class KabupatenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //remove any existing data in provinsi table
        DB::table('kabupaten')->truncate();
        
        $data =
        [
            ['id_kabupaten'=>   1   , 'nama_kabupaten' => 'Aceh Selatan', 'provinsi_id_provinsi'    =>  11],
            ['id_kabupaten'=>   2   , 'nama_kabupaten' => 'Simeulue    ', 'provinsi_id_provinsi'    =>  11],
            ['id_kabupaten'=>   3   , 'nama_kabupaten' => 'Aceh Tenggara', 'provinsi_id_provinsi'   =>  11],
            ['id_kabupaten'=>   4   , 'nama_kabupaten' => 'Aceh Timur', 'provinsi_id_provinsi'      =>  11],
            ['id_kabupaten'=>   5   , 'nama_kabupaten' => 'Aceh Tengah', 'provinsi_id_provinsi'     =>  11],
            ['id_kabupaten'=>   6   , 'nama_kabupaten' => 'Aceh Barat', 'provinsi_id_provinsi'      =>  11],
            ['id_kabupaten'=>   7   , 'nama_kabupaten' => 'Aceh Besar', 'provinsi_id_provinsi'      =>  11],
            ['id_kabupaten'=>   8   , 'nama_kabupaten' => 'Pidie   ', 'provinsi_id_provinsi'        =>  11],
            ['id_kabupaten'=>   9   , 'nama_kabupaten' => 'Aceh Utara', 'provinsi_id_provinsi'      =>  11],
            ['id_kabupaten'=>   10  , 'nama_kabupaten' => 'Simeulue      ', 'provinsi_id_provinsi'  =>  11],
            ['id_kabupaten'=>   11  , 'nama_kabupaten' => 'Aceh Singkil', 'provinsi_id_provinsi'    =>  11],
            ['id_kabupaten'=>   12  , 'nama_kabupaten' => 'Bireuen ', 'provinsi_id_provinsi'        =>  11],
            ['id_kabupaten'=>   13  , 'nama_kabupaten' => 'Aceh BaratDaya', 'provinsi_id_provinsi'  =>  11],
            ['id_kabupaten'=>   14  , 'nama_kabupaten' => 'Gayo Lues', 'provinsi_id_provinsi'       =>  11],
            ['id_kabupaten'=>   15  , 'nama_kabupaten' => 'Aceh Jaya', 'provinsi_id_provinsi'       =>  11],
            ['id_kabupaten'=>   16  , 'nama_kabupaten' => 'Nagan Raya', 'provinsi_id_provinsi'      =>  11],
            ['id_kabupaten'=>   17  , 'nama_kabupaten' => 'Aceh Tamiang', 'provinsi_id_provinsi'    =>  11],
            ['id_kabupaten'=>   18  , 'nama_kabupaten' => 'Aceh Jaya', 'provinsi_id_provinsi'       =>  11],
            ['id_kabupaten'=>   19  , 'nama_kabupaten' => 'Bener Meriah', 'provinsi_id_provinsi'    =>  11],
            ['id_kabupaten'=>   20  , 'nama_kabupaten' => 'Pidie Jaya', 'provinsi_id_provinsi'      =>  11],
            ['id_kabupaten'=>   21  , 'nama_kabupaten' => 'Kota Banda Aceh ', 'provinsi_id_provinsi'=>  11], 
            ['id_kabupaten'=>   22  , 'nama_kabupaten' => 'Kota Sabang', 'provinsi_id_provinsi'     =>  11],
            ['id_kabupaten'=>   23  , 'nama_kabupaten' => 'Kota Lhokseumawe', 'provinsi_id_provinsi'=>  11],
            ['id_kabupaten'=>   24  , 'nama_kabupaten' => 'Kota Langsa', 'provinsi_id_provinsi'     =>  11],
            ['id_kabupaten'=>   25  , 'nama_kabupaten' => 'Kota Subulussalam', 'provinsi_id_provinsi'=> 11],
            ['id_kabupaten'=>   26  , 'nama_kabupaten' => 'Tapanuli Tengah', 'provinsi_id_provinsi' =>  12],
            ['id_kabupaten'=>   27  , 'nama_kabupaten' => 'Tapanuli Utara', 'provinsi_id_provinsi'  =>  12],
            ['id_kabupaten'=>   28  , 'nama_kabupaten' => 'Tapanuli Selatan', 'provinsi_id_provinsi'=>  12],
            ['id_kabupaten'=>   29  , 'nama_kabupaten' => 'Nias    ', 'provinsi_id_provinsi'        =>  12],
            ['id_kabupaten'=>   30  , 'nama_kabupaten' => 'Langkat ', 'provinsi_id_provinsi'        =>  12],
            ['id_kabupaten'=>   31  , 'nama_kabupaten' => 'Karo    ', 'provinsi_id_provinsi'        =>  12],
            ['id_kabupaten'=>   32  , 'nama_kabupaten' => 'Deli Serdang', 'provinsi_id_provinsi'    =>  12],
            ['id_kabupaten'=>   33  , 'nama_kabupaten' => 'Simalungun  ', 'provinsi_id_provinsi'    =>  12],
            ['id_kabupaten'=>   34  , 'nama_kabupaten' => 'Asahan  ', 'provinsi_id_provinsi'        =>  12],
            ['id_kabupaten'=>   35  , 'nama_kabupaten' => 'Labuhan Batu', 'provinsi_id_provinsi'    =>  12],
            ['id_kabupaten'=>   36  , 'nama_kabupaten' => 'Dairi   ', 'provinsi_id_provinsi'        =>  12],
            ['id_kabupaten'=>   37  , 'nama_kabupaten' => 'Toba Samosir', 'provinsi_id_provinsi' =>     12],
            ['id_kabupaten'=>   38  , 'nama_kabupaten' => 'Mandailing Natal', 'provinsi_id_provinsi' => 12],
            ['id_kabupaten'=>   39  , 'nama_kabupaten' => 'Nias Selatan', 'provinsi_id_provinsi' =>     12],
            ['id_kabupaten'=>   40  , 'nama_kabupaten' => 'Pakpak Bharat', 'provinsi_id_provinsi' =>    12],
            ['id_kabupaten'=>   41  , 'nama_kabupaten' => 'Humbang Hasundutan', 'provinsi_id_provinsi'=>12],
            ['id_kabupaten'=>   42  , 'nama_kabupaten' => 'Samosir ', 'provinsi_id_provinsi'          =>12],
            ['id_kabupaten'=>   43  , 'nama_kabupaten' => 'Serdang Bedagai', 'provinsi_id_provinsi' =>  12],
            ['id_kabupaten'=>   44  , 'nama_kabupaten' => 'Padang Lawas', 'provinsi_id_provinsi' =>     12],
            ['id_kabupaten'=>   45  , 'nama_kabupaten' => 'Padang Lawas Utara', 'provinsi_id_provinsi'=>12], 
            ['id_kabupaten'=>   46  , 'nama_kabupaten' => 'Batu Bara', 'provinsi_id_provinsi'       =>  12],
            ['id_kabupaten'=>   47  , 'nama_kabupaten' => 'Labuhan Batu Selatan', 'provinsi_id_provinsi'=> 12],    
            ['id_kabupaten'=>   48  , 'nama_kabupaten' => 'Labuhan Batu Utara', 'provinsi_id_provinsi' => 12],  
            ['id_kabupaten'=>   49  , 'nama_kabupaten' => 'Nias Barat', 'provinsi_id_provinsi'      =>  12],
            ['id_kabupaten'=>   50  , 'nama_kabupaten' => 'Nias Utara', 'provinsi_id_provinsi'      =>  12],
            ['id_kabupaten'=>   51  , 'nama_kabupaten' => 'Kota Medan', 'provinsi_id_provinsi'      =>  12],
            ['id_kabupaten'=>   52  , 'nama_kabupaten' => 'Kota Pematang Siantar', 'provinsi_id_provinsi'=> 12], 
            ['id_kabupaten'=>   53  , 'nama_kabupaten' => 'Kota Sibolga', 'provinsi_id_provinsi' =>    12],
            ['id_kabupaten'=>   54  , 'nama_kabupaten' => 'Kota Tanjung Balai', 'provinsi_id_provinsi'=> 12],
            ['id_kabupaten'=>   55  , 'nama_kabupaten' => 'Kota Binjai', 'provinsi_id_provinsi' => 12],
            ['id_kabupaten'=>   56  , 'nama_kabupaten' => 'Kota Tebing Tinggi', 'provinsi_id_provinsi' => 12], 
            ['id_kabupaten'=>   57  , 'nama_kabupaten' => 'Kota Padangsidimpuan', 'provinsi_id_provinsi' =>12],
            ['id_kabupaten'=>   58  , 'nama_kabupaten' => 'Kota Gunungsitoli', 'provinsi_id_provinsi' =>  12],
            ['id_kabupaten'=>   59  , 'nama_kabupaten' => 'Pesisir Selatan', 'provinsi_id_provinsi' => 13],
            ['id_kabupaten'=>   60  , 'nama_kabupaten' => 'Solok ', 'provinsi_id_provinsi'          =>13],
            ['id_kabupaten'=>   61  , 'nama_kabupaten' => 'Sijunjung ', 'provinsi_id_provinsi'      =>13],
            ['id_kabupaten'=>   62  , 'nama_kabupaten' => 'Tanah Datar', 'provinsi_id_provinsi'     => 13],
            ['id_kabupaten'=>   63  , 'nama_kabupaten' => 'Padang Pariaman', 'provinsi_id_provinsi' => 13],
            ['id_kabupaten'=>   64  , 'nama_kabupaten' => 'Agam    ', 'provinsi_id_provinsi'        =>13],
            ['id_kabupaten'=>   65  , 'nama_kabupaten' => 'Lima Puluh Kota', 'provinsi_id_provinsi' => 13],
            ['id_kabupaten'=>   66  , 'nama_kabupaten' => 'Pasaman ', 'provinsi_id_provinsi'        =>13],
            ['id_kabupaten'=>   67  , 'nama_kabupaten' => 'Kepulauan Mentawai', 'provinsi_id_provinsi'=>  13],
            ['id_kabupaten'=>   68  , 'nama_kabupaten' => 'Dharmasraya ', 'provinsi_id_provinsi' => 13],
            ['id_kabupaten'=>   69  , 'nama_kabupaten' => 'Solok Selatan', 'provinsi_id_provinsi' =>   13],
            ['id_kabupaten'=>   70  , 'nama_kabupaten' => 'Pasaman Barat', 'provinsi_id_provinsi' =>   13],
            ['id_kabupaten'=>   71  , 'nama_kabupaten' => 'Kota Padang', 'provinsi_id_provinsi' => 13],
            ['id_kabupaten'=>   72  , 'nama_kabupaten' => 'Kota Solok', 'provinsi_id_provinsi' =>  13],
            ['id_kabupaten'=>   73  , 'nama_kabupaten' => 'Kota Sawah Lunto', 'provinsi_id_provinsi' => 13],    
            ['id_kabupaten'=>   74  , 'nama_kabupaten' => 'Kota Padang Panjang', 'provinsi_id_provinsi' => 13], 
            ['id_kabupaten'=>   75  , 'nama_kabupaten' => 'Kota Bukittinggi', 'provinsi_id_provinsi' =>    13],
            ['id_kabupaten'=>   76  , 'nama_kabupaten' => 'Kota Payakumbuh', 'provinsi_id_provinsi' => 13],
            ['id_kabupaten'=>   77  , 'nama_kabupaten' => 'Kota Pariaman', 'provinsi_id_provinsi' =>   13],
            ['id_kabupaten'=>   78  , 'nama_kabupaten' => 'Kampar  ', 'provinsi_id_provinsi'        =>14],
            ['id_kabupaten'=>   79  , 'nama_kabupaten' => 'Indragiri Hulu', 'provinsi_id_provinsi' =>  14],
            ['id_kabupaten'=>   80  , 'nama_kabupaten' => 'Bengkalis   ', 'provinsi_id_provinsi' =>   14],
            ['id_kabupaten'=>   81  , 'nama_kabupaten' => 'Indragiri Hilir', 'provinsi_id_provinsi' => 14],
            ['id_kabupaten'=>   82  , 'nama_kabupaten' => 'Pelalawan   ', 'provinsi_id_provinsi' =>14],
            ['id_kabupaten'=>   83  , 'nama_kabupaten' => 'Rokan Hulu', 'provinsi_id_provinsi' =>  14],
            ['id_kabupaten'=>   84  , 'nama_kabupaten' => 'Rokan Hilir', 'provinsi_id_provinsi' => 14],
            ['id_kabupaten'=>   85  , 'nama_kabupaten' => 'Siak    ', 'provinsi_id_provinsi' =>14],
            ['id_kabupaten'=>   86  , 'nama_kabupaten' => 'Kuantan Singingi', 'provinsi_id_provinsi' =>    14],
            ['id_kabupaten'=>   87  , 'nama_kabupaten' => 'Kepulauan Meranti', 'provinsi_id_provinsi' =>   14],
            ['id_kabupaten'=>   88  , 'nama_kabupaten' => 'Kota Pekanbaru', 'provinsi_id_provinsi' =>  14],
            ['id_kabupaten'=>   89  , 'nama_kabupaten' => 'Kota Dumai', 'provinsi_id_provinsi' =>  14],
            ['id_kabupaten'=>   90  , 'nama_kabupaten' => 'Kerinci', 'provinsi_id_provinsi' =>15],
            ['id_kabupaten'=>   91  , 'nama_kabupaten' => 'Merangin    15', 'provinsi_id_provinsi' =>],
            ['id_kabupaten'=>   92  , 'nama_kabupaten' => 'Sarolangun ', 'provinsi_id_provinsi' =>15],
            ['id_kabupaten'=>   93  , 'nama_kabupaten' => 'Batang Hari', 'provinsi_id_provinsi' => 15],
            ['id_kabupaten'=>   94  , 'nama_kabupaten' => 'Muaro Jambi', 'provinsi_id_provinsi' => 15],
            ['id_kabupaten'=>   95  , 'nama_kabupaten' => 'Tanjung Jabung Barat', 'provinsi_id_provinsi' => 15],    
            ['id_kabupaten'=>   96  , 'nama_kabupaten' => 'Tanjung Jabung Timur', 'provinsi_id_provinsi' => 15],    
            ['id_kabupaten'=>   97  , 'nama_kabupaten' => 'Bungo', 'provinsi_id_provinsi'                => 15],
            ['id_kabupaten'=>   98  , 'nama_kabupaten' => 'Tebo    ', 'provinsi_id_provinsi'              =>15],
            ['id_kabupaten'=>   99  , 'nama_kabupaten' => 'Kota Jambi', 'provinsi_id_provinsi'          =>  15],
            ['id_kabupaten'=>   100, 'nama_kabupaten' => 'Kota Sungai Penuh', 'provinsi_id_provinsi'    => 15],
            ['id_kabupaten'=>   101, 'nama_kabupaten' => 'Ogan Komering Ulu', 'provinsi_id_provinsi'    => 16], 
            ['id_kabupaten'=>   102, 'nama_kabupaten' => 'Ogan Komering Ilir', 'provinsi_id_provinsi'   => 16],
            ['id_kabupaten'=>   103, 'nama_kabupaten' => 'Muara Enim', 'provinsi_id_provinsi'           => 16],
            ['id_kabupaten'=>   104, 'nama_kabupaten' => 'Lahat   ', 'provinsi_id_provinsi'             => 16],
            ['id_kabupaten'=>   105, 'nama_kabupaten' => 'Musi Rawas', 'provinsi_id_provinsi'           => 16],
            ['id_kabupaten'=>   106, 'nama_kabupaten' => 'Musi Banyuasin', 'provinsi_id_provinsi'       => 16],
            ['id_kabupaten'=>   107, 'nama_kabupaten' => 'Banyuasin', 'provinsi_id_provinsi'            => 16],
            ['id_kabupaten'=>   108, 'nama_kabupaten' => 'Ogan Komering Ulu Timur', 'provinsi_id_provinsi' => 16], 
            ['id_kabupaten'=>   109, 'nama_kabupaten' => 'Ogan Komering Ulu Selatan', 'provinsi_id_provinsi' => 16], 
            ['id_kabupaten'=>   110, 'nama_kabupaten' => 'Ogan Ilir', 'provinsi_id_provinsi'            => 16],
            ['id_kabupaten'=>   111, 'nama_kabupaten' => 'Empat Lawang', 'provinsi_id_provinsi'         => 16],
            ['id_kabupaten'=>   112, 'nama_kabupaten' => 'Penukal Abab Lematang Ilir', 'provinsi_id_provinsi' => 16], 
            ['id_kabupaten'=>   113, 'nama_kabupaten' => 'Musi Rawas Utara', 'provinsi_id_provinsi'         => 16],
            ['id_kabupaten'=>   114, 'nama_kabupaten' => 'Kota Palembang', 'provinsi_id_provinsi'           => 16],
            ['id_kabupaten'=>   115, 'nama_kabupaten' => 'Kota Pagar Alam', 'provinsi_id_provinsi' => 16], 
            ['id_kabupaten'=>   116, 'nama_kabupaten' => 'Kota Lubuklinggau', 'provinsi_id_provinsi' =>   16],
            ['id_kabupaten'=>   117, 'nama_kabupaten' => 'Kota Prabumulih', 'provinsi_id_provinsi' => 16],
            ['id_kabupaten'=>   118, 'nama_kabupaten' => 'Bengkulu Selatan', 'provinsi_id_provinsi' =>    17],
            ['id_kabupaten'=>   119, 'nama_kabupaten' => 'Rejang Lebong', 'provinsi_id_provinsi' =>   17],
            ['id_kabupaten'=>   120, 'nama_kabupaten' => 'Bengkulu Utara', 'provinsi_id_provinsi' =>  17],
            ['id_kabupaten'=>   121, 'nama_kabupaten' => 'Kaur', 'provinsi_id_provinsi'            =>17],
            ['id_kabupaten'=>   122, 'nama_kabupaten' => 'Seluma  ', 'provinsi_id_provinsi'        => 17],
            ['id_kabupaten'=>   123, 'nama_kabupaten' => 'Mukomuko   ', 'provinsi_id_provinsi'      =>17],
            ['id_kabupaten'=>   124, 'nama_kabupaten' => 'Lebong  ', 'provinsi_id_provinsi'         =>17],          
            ['id_kabupaten'=>   125, 'nama_kabupaten' => 'Kepahiang   ', 'provinsi_id_provinsi' = > 17],
            ['id_kabupaten'=>   126, 'nama_kabupaten' => 'Bengkulu Tengah', 'provinsi_id_provinsi' => 17],
            ['id_kabupaten'=>   127, 'nama_kabupaten' => 'Kota Bengkulu', 'provinsi_id_provinsi' =>   17],
            ['id_kabupaten'=>   128, 'nama_kabupaten' => 'Lampung Selatan', 'provinsi_id_provinsi' => 18],
            ['id_kabupaten'=>   129, 'nama_kabupaten' => 'Lampung Tengah', 'provinsi_id_provinsi' =>  18],
            ['id_kabupaten'=>   130, 'nama_kabupaten' => 'Lampung Utara', 'provinsi_id_provinsi' =>   18],
            ['id_kabupaten'=>   131, 'nama_kabupaten' => 'Lampung Barat', 'provinsi_id_provinsi' =>   18],
            ['id_kabupaten'=>   132, 'nama_kabupaten' => 'Tulangbawang ', 'provinsi_id_provinsi'   => 18],
            ['id_kabupaten'=>   133, 'nama_kabupaten' => 'Tanggamus  ', 'provinsi_id_provinsi'   => 18],
            ['id_kabupaten'=>   134, 'nama_kabupaten' => 'Lampung Timur', 'provinsi_id_provinsi' =>  18],
            ['id_kabupaten'=>   135, 'nama_kabupaten' => 'Way Kanan', 'provinsi_id_provinsi' =>   18],
            ['id_kabupaten'=>   136, 'nama_kabupaten' => 'Pesawaran  ', 'provinsi_id_provinsi' => 18],
            ['id_kabupaten'=>   137, 'nama_kabupaten' => 'Pringsewu  ', 'provinsi_id_provinsi' => 18],
            ['id_kabupaten'=>   138, 'nama_kabupaten' => 'Tulang Bawang Barat', 'provinsi_id_provinsi' => 18], 
            ['id_kabupaten'=>   139, 'nama_kabupaten' => 'Mesuji', 'provinsi_id_provinsi'               =>18],
            ['id_kabupaten'=>   140, 'nama_kabupaten' => 'Pesisir Barat', 'provinsi_id_provinsi'        =>18],
            ['id_kabupaten'=>   141, 'nama_kabupaten' => 'Kota Bandar Lampung', 'provinsi_id_provinsi'=> 18], 
            ['id_kabupaten'=>   142, 'nama_kabupaten' => 'Kota Metro', 'provinsi_id_provinsi'        =>  18],
            ['id_kabupaten'=>   143, 'nama_kabupaten' => 'Bangka  ', 'provinsi_id_provinsi'       =>   19],
            ['id_kabupaten'=>   144, 'nama_kabupaten' => 'Belitung    ', 'provinsi_id_provinsi'      =>19],
            ['id_kabupaten'=>   145, 'nama_kabupaten' => 'Bangka Selatan', 'provinsi_id_provinsi' =>  19],
            ['id_kabupaten'=>   146, 'nama_kabupaten' => 'Bangka Tengah', 'provinsi_id_provinsi' =>   19],
            ['id_kabupaten'=>   147, 'nama_kabupaten' => 'Bangka Barat', 'provinsi_id_provinsi' =>    19],
            ['id_kabupaten'=>   148, 'nama_kabupaten' => 'Belitung Timur', 'provinsi_id_provinsi' =>  19],
            ['id_kabupaten'=>   149, 'nama_kabupaten' => 'Kota Pangkal Pinang', 'provinsi_id_provinsi' => 19], 
            ['id_kabupaten'=>   150, 'nama_kabupaten' => 'Bintan  ', 'provinsi_id_provinsi'             =>21],
            ['id_kabupaten'=>   151, 'nama_kabupaten' => 'Karimun ', 'provinsi_id_provinsi'           =>21],
            ['id_kabupaten'=>   152, 'nama_kabupaten' => 'Natuna  ', 'provinsi_id_provinsi'           =>21],
            ['id_kabupaten'=>   153, 'nama_kabupaten' => 'Lingga  ', 'provinsi_id_provinsi'         =>21],
            ['id_kabupaten'=>   154, 'nama_kabupaten' => 'Kepulauan Anambas', 'provinsi_id_provinsi' => 21],
            ['id_kabupaten'=>   155, 'nama_kabupaten' => 'Kota Batam', 'provinsi_id_provinsi' =>  21],
            ['id_kabupaten'=>   156, 'nama_kabupaten' => 'Kota Tanjung Pinang', 'provinsi_id_provinsi' => 21], 
            ['id_kabupaten'=>   157, 'nama_kabupaten' => 'Kepulauan Seribu', 'provinsi_id_provinsi' =>    31],
            ['id_kabupaten'=>   158, 'nama_kabupaten' => 'Kota Jakarta Pusat', 'provinsi_id_provinsi' => 31],  
            ['id_kabupaten'=>   159, 'nama_kabupaten' => 'Kota Jakarta Utara', 'provinsi_id_provinsi' => 31],  
            ['id_kabupaten'=>   160, 'nama_kabupaten' => 'Kota Jakarta Barat', 'provinsi_id_provinsi' => 31],  
            ['id_kabupaten'=>   161, 'nama_kabupaten' => 'Kota Jakarta Selatan', 'provinsi_id_provinsi' =>31],
            ['id_kabupaten'=>   162, 'nama_kabupaten' => 'Kota Jakarta Timur', 'provinsi_id_provinsi' => 31],  
            ['id_kabupaten'=>   163, 'nama_kabupaten' => 'Bogor', 'provinsi_id_provinsi'                =>32],
            ['id_kabupaten'=>   164, 'nama_kabupaten' => 'Sukabumi    ', 'provinsi_id_provinsi'       =>32],
            ['id_kabupaten'=>   165, 'nama_kabupaten' => 'Cianjur ', 'provinsi_id_provinsi'           =>32],
            ['id_kabupaten'=>   166, 'nama_kabupaten' => 'Bandung ', 'provinsi_id_provinsi'           =>32],
            ['id_kabupaten'=>   167, 'nama_kabupaten' => 'Garut   ', 'provinsi_id_provinsi'           =>32],
            ['id_kabupaten'=>   168, 'nama_kabupaten' => 'Tasikmalaya ', 'provinsi_id_provinsi'       =>32],
            ['id_kabupaten'=>   169, 'nama_kabupaten' => 'Ciamis  ', 'provinsi_id_provinsi'           =>32],
            ['id_kabupaten'=>   170, 'nama_kabupaten' => 'Kuningan    ', 'provinsi_id_provinsi'       =>32],
            ['id_kabupaten'=>   171, 'nama_kabupaten' => 'Cirebon ', 'provinsi_id_provinsi'          =>32],
            ['id_kabupaten'=>   172, 'nama_kabupaten' => 'Majalengka', 'provinsi_id_provinsi'   =>32],
            ['id_kabupaten'=>   173, 'nama_kabupaten' => 'Sumedang  ', 'provinsi_id_provinsi'   =>32],
            ['id_kabupaten'=>   174, 'nama_kabupaten' => 'Indramayu ', 'provinsi_id_provinsi'   =>32],
            ['id_kabupaten'=>   175, 'nama_kabupaten' => 'Subang  ', 'provinsi_id_provinsi'       =>32],
            ['id_kabupaten'=>   176, 'nama_kabupaten' => 'Purwakarta', 'provinsi_id_provinsi' =>32],
            ['id_kabupaten'=>   177, 'nama_kabupaten' => 'Karawang ', 'provinsi_id_provinsi' =>32],
            ['id_kabupaten'=>   178, 'nama_kabupaten' => 'Bekasi  ', 'provinsi_id_provinsi' =>32],
            ['id_kabupaten'=>   179, 'nama_kabupaten' => 'Bandung Barat', 'provinsi_id_provinsi' =>   32],
            ['id_kabupaten'=>   180, 'nama_kabupaten' => 'Pangandaran', 'provinsi_id_provinsi' => 32],
            ['id_kabupaten'=>   181, 'nama_kabupaten' => 'Kota Bogor', 'provinsi_id_provinsi' =>  32],
            ['id_kabupaten'=>   182, 'nama_kabupaten' => 'Kota Sukabumi', 'provinsi_id_provinsi' =>   32],
            ['id_kabupaten'=>   183, 'nama_kabupaten' => 'Kota Bandung', 'provinsi_id_provinsi' =>    32],
            ['id_kabupaten'=>   18 4, 'nama_kabupaten' => 'Kota Cirebon', 'provinsi_id_provinsi' =>    32],
            ['id_kabupaten'=>   18 5, 'nama_kabupaten' => 'Kota Bekasi', 'provinsi_id_provinsi' => 32],
            ['id_kabupaten'=>   18 6, 'nama_kabupaten' => 'Kota Depok', 'provinsi_id_provinsi' =>  32],
            ['id_kabupaten'=>   18 7, 'nama_kabupaten' => 'Kota Cimahi', 'provinsi_id_provinsi' => 32],
            ['id_kabupaten'=>   18 8, 'nama_kabupaten' => 'Kota Tasikmalaya', 'provinsi_id_provinsi' =>    32],
            ['id_kabupaten'=>   18 9, 'nama_kabupaten' => 'Kota Banjar', 'provinsi_id_provinsi' => 32],
            ['id_kabupaten'=>   190, 'nama_kabupaten' => 'Cilacap', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   191, 'nama_kabupaten' => 'Banyumas', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   192, 'nama_kabupaten' => 'Purbalingga', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   193, 'nama_kabupaten' => 'Banjarnegara', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   194, 'nama_kabupaten' => 'Kebumen', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   195, 'nama_kabupaten' => 'Purworejo', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   196, 'nama_kabupaten' => 'Wonosobo', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   197, 'nama_kabupaten' => 'Magelang', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   198, 'nama_kabupaten' => 'Boyolali', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   199, 'nama_kabupaten' => 'Klaten ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   200, 'nama_kabupaten' => 'Sukoharjo ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   201, 'nama_kabupaten' => 'Wonogiri  ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   202, 'nama_kabupaten' => 'Karanganyar', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   203, 'nama_kabupaten' => 'Sragen', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   204, 'nama_kabupaten' => 'Grobogan', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   205, 'nama_kabupaten' => 'Blora   ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   206, 'nama_kabupaten' => 'Rembang ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   207, 'nama_kabupaten' => 'Pati    ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   208, 'nama_kabupaten' => 'Kudus   ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   209, 'nama_kabupaten' => 'Jepara  ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   210, 'nama_kabupaten' => 'Demak   ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   211, 'nama_kabupaten' => 'Semarang  ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   212, 'nama_kabupaten' => 'Temanggung', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   213, 'nama_kabupaten' => 'Kendal  ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   214, 'nama_kabupaten' => 'Batang  ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   215, 'nama_kabupaten' => 'Pekalongan ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   216, 'nama_kabupaten' => 'Pemalang', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   217, 'nama_kabupaten' => 'Tegal   ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   218, 'nama_kabupaten' => 'Brebes  ', 'provinsi_id_provinsi' =>33],
            ['id_kabupaten'=>   219, 'nama_kabupaten' => 'Kota Magelang', 'provinsi_id_provinsi' =>   33],
            ['id_kabupaten'=>   220, 'nama_kabupaten' => 'Kota Surakarta', 'provinsi_id_provinsi' =>  33],
            ['id_kabupaten'=>   221, 'nama_kabupaten' => 'Kota Salatiga', 'provinsi_id_provinsi' =>   33],
            ['id_kabupaten'=>   222, 'nama_kabupaten' => 'Kota Semarang', 'provinsi_id_provinsi' =>   33],
            ['id_kabupaten'=>   223, 'nama_kabupaten' => 'Kota Pekalongan', 'provinsi_id_provinsi' => 33],
            ['id_kabupaten'=>   224, 'nama_kabupaten' => 'Kota Tegal', 'provinsi_id_provinsi' =>  33],
            ['id_kabupaten'=>   225, 'nama_kabupaten' => 'Kulon Progo', 'provinsi_id_provinsi' => 34],
            ['id_kabupaten'=>   226, 'nama_kabupaten' => 'Bantul  ', 'provinsi_id_provinsi'   =>34],
            ['id_kabupaten'=>   227, 'nama_kabupaten' => 'Gunung Kidul', 'provinsi_id_provinsi' =>  34],
            ['id_kabupaten'=>   228, 'nama_kabupaten' => 'Sleman  ', 'provinsi_id_provinsi' =>34],
            ['id_kabupaten'=>   229, 'nama_kabupaten' => 'Kota Yogyakarta', 'provinsi_id_provinsi' => 34],
            ['id_kabupaten'=>   230, 'nama_kabupaten' => 'Pacitan ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   231, 'nama_kabupaten' => 'Ponorogo', 'provinsi_id_provinsi' =>35],        
            ['id_kabupaten'=>   232, 'nama_kabupaten' => 'Trenggalek  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   233, 'nama_kabupaten' => 'Tulungagung ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   234, 'nama_kabupaten' => 'Blitar  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   235, 'nama_kabupaten' => 'Kediri  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   236, 'nama_kabupaten' => 'Malang  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   237, 'nama_kabupaten' => 'Lumajang  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   238, 'nama_kabupaten' => 'Jember  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   239, 'nama_kabupaten' => 'Banyuwangi  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   240, 'nama_kabupaten' => 'Bondowoso   ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   241, 'nama_kabupaten' => 'Situbondo   ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   242, 'nama_kabupaten' => 'Probolinggo ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   243, 'nama_kabupaten' => 'Pasuruan    ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   244, 'nama_kabupaten' => 'Sidoarjo    ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   245, 'nama_kabupaten' => 'Mojokerto   ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   246, 'nama_kabupaten' => 'Jombang ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   247, 'nama_kabupaten' => 'Nganjuk ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   248, 'nama_kabupaten' => 'Madiun  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   249, 'nama_kabupaten' => 'Magetan ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   250, 'nama_kabupaten' => 'Ngawi   ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   251, 'nama_kabupaten' => 'Bojonegoro ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   252, 'nama_kabupaten' => 'Tuban   ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   253, 'nama_kabupaten' => 'Lamongan', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   254, 'nama_kabupaten' => 'Gresik  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   255, 'nama_kabupaten' => 'Bangkalan ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   256, 'nama_kabupaten' => 'Sampang ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   25 7, 'nama_kabupaten' => 'Pamekasan  ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   25 8, 'nama_kabupaten' => 'Sumenep ', 'provinsi_id_provinsi' =>35],
            ['id_kabupaten'=>   25 9, 'nama_kabupaten' => 'Kota Kediri', 'provinsi_id_provinsi' => 35],
            ['id_kabupaten'=>   26 0, 'nama_kabupaten' => 'Kota Blitar', 'provinsi_id_provinsi' => 35],
            ['id_kabupaten'=>   26 1, 'nama_kabupaten' => 'Kota Malang', 'provinsi_id_provinsi' => 35],
            ['id_kabupaten'=>   26 2, 'nama_kabupaten' => 'Kota Probolinggo', 'provinsi_id_provinsi' =>    35],
            ['id_kabupaten'=>   26 3, 'nama_kabupaten' => 'Kota Pasuruan', 'provinsi_id_provinsi' =>   35],
            ['id_kabupaten'=>   26 4, 'nama_kabupaten' => 'Kota Mojokerto', 'provinsi_id_provinsi' =>  35],
            ['id_kabupaten'=>   26 5, 'nama_kabupaten' => 'Kota Madiun', 'provinsi_id_provinsi' => 35],
            ['id_kabupaten'=>   26 6, 'nama_kabupaten' => 'Kota Surabaya', 'provinsi_id_provinsi' =>   35],
            ['id_kabupaten'=>   26 7, 'nama_kabupaten' => 'Kota Batu', 'provinsi_id_provinsi' =>   35],
            ['id_kabupaten'=>   26 8, 'nama_kabupaten' => 'Pandeglang', 'provinsi_id_provinsi' =>36],
            ['id_kabupaten'=>   26 9, 'nama_kabupaten' => 'Lebak   ', 'provinsi_id_provinsi' =>36],
            ['id_kabupaten'=>   27 0, 'nama_kabupaten' => 'Tangerang ', 'provinsi_id_provinsi' =>36],
            ['id_kabupaten'=>   27 1, 'nama_kabupaten' => 'Serang  ', 'provinsi_id_provinsi' =>36],
            ['id_kabupaten'=>   27 2, 'nama_kabupaten' => 'Kota Tangerang', 'provinsi_id_provinsi' =>  36],
            ['id_kabupaten'=>   27 3, 'nama_kabupaten' => 'Kota Cilegon', 'provinsi_id_provinsi' =>    36],
            ['id_kabupaten'=>   27 4, 'nama_kabupaten' => 'Kota Serang', 'provinsi_id_provinsi' => 36],
            ['id_kabupaten'=>   27 5, 'nama_kabupaten' => 'Kota Tangerang Selatan', 'provinsi_id_provinsi' => 36], 

            
            ['id_kabupaten'=>   27 6, 'nama_kabupaten' => 'Jembrana    51', 'provinsi_id_provinsi' =>],
'[id_kabupaten'=>   27 7, 'nama_kabupaten' => 'Tabanan 51', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   27 8, 'nama_kabupaten' => 'Badung  51', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   27 9, 'nama_kabupaten' => 'Gianyar 51', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   28 0, 'nama_kabupaten' => 'Klungkung   51', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   28 1, 'nama_kabupaten' => 'Bangli  51', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   28 2, 'nama_kabupaten' => 'Karang Asem', 'provinsi_id_provinsi' => 51],
'[id_kabupaten'=>   28 3, 'nama_kabupaten' => 'Buleleng    51', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   28 4, 'nama_kabupaten' => 'Kota Denpasar', 'provinsi_id_provinsi' =>   51],
['id_kabupaten'=>   28 5, 'nama_kabupaten' => 'Lombok Barat', 'provinsi_id_provinsi' =>    52],
['id_kabupaten'=>   28 6, 'nama_kabupaten' => 'Lombok Tengah', 'provinsi_id_provinsi' =>   52],
['id_kabupaten'=>   28 7, 'nama_kabupaten' => 'Lombok Timur', 'provinsi_id_provinsi' =>    52],
'[id_kabupaten'=>   28 8, 'nama_kabupaten' => 'Sumbawa 52', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   28 9, 'nama_kabupaten' => 'Dompu   52', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   29 0, 'nama_kabupaten' => 'Bima    52', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   29 1, 'nama_kabupaten' => 'Sumbawa Barat', 'provinsi_id_provinsi' =>   52],
['id_kabupaten'=>   29 2, 'nama_kabupaten' => 'Lombok Utara', 'provinsi_id_provinsi' =>    52],
['id_kabupaten'=>   29 3, 'nama_kabupaten' => 'Kota Mataram', 'provinsi_id_provinsi' =>    52],
['id_kabupaten'=>   29 4, 'nama_kabupaten' => 'Kota Bima', 'provinsi_id_provinsi' =>   52],
'[id_kabupaten'=>   29 5, 'nama_kabupaten' => 'Kupang  53', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   29 6, 'nama_kabupaten' => 'Timor Tengah', 'provinsi_id_provinsi' => Selatan],    53
['id_kabupaten'=>   29 7, 'nama_kabupaten' => 'Timor Tengah', 'provinsi_id_provinsi' => Utara],  53
'[id_kabupaten'=>   29 8, 'nama_kabupaten' => 'Belu    53', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   29 9, 'nama_kabupaten' => 'Alor    53', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   30 0, 'nama_kabupaten' => 'Flores Timur', 'provinsi_id_provinsi' =>    53],
'[id_kabupaten'=>   30 1, 'nama_kabupaten' => 'Sikka   53', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   30 2, 'nama_kabupaten' => 'Ende    53', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   30 3, 'nama_kabupaten' => 'Ngada   53', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   30 4, 'nama_kabupaten' => 'Manggarai   53', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   30 5, 'nama_kabupaten' => 'Sumba Barat', 'provinsi_id_provinsi' => 53],
['id_kabupaten'=>   30 6, 'nama_kabupaten' => 'Sumba Timur', 'provinsi_id_provinsi' => 53],
'[id_kabupaten'=>   30 7, 'nama_kabupaten' => 'Lembata 53', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   30 8, 'nama_kabupaten' => 'Rote Ndao', 'provinsi_id_provinsi' =>   53],
['id_kabupaten'=>   30 9, 'nama_kabupaten' => 'Manggarai Barat', 'provinsi_id_provinsi' => 53],
'[id_kabupaten'=>   31 0, 'nama_kabupaten' => 'Nagekeo 53', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   31 1, 'nama_kabupaten' => 'Sumba Tengah', 'provinsi_id_provinsi' =>    53],
['id_kabupaten'=>   31 2, 'nama_kabupaten' => 'Sumba Barat', 'provinsi_id_provinsi' => Daya],    53
['id_kabupaten'=>   31 3, 'nama_kabupaten' => 'Manggarai Timur', 'provinsi_id_provinsi' => 53],
['id_kabupaten'=>   31 4, 'nama_kabupaten' => 'Sabu Raijua', 'provinsi_id_provinsi' => 53],
'[id_kabupaten'=>   31 5, 'nama_kabupaten' => 'Malaka  53', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   31 6, 'nama_kabupaten' => 'Kota Kupang', 'provinsi_id_provinsi' => 53],
'[id_kabupaten'=>   31 7, 'nama_kabupaten' => 'Sambas  61', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   31 8, 'nama_kabupaten' => 'Mempawah    61', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   31 9, 'nama_kabupaten' => 'Sanggau 61', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   32 0, 'nama_kabupaten' => 'Ketapang    61', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   32 1, 'nama_kabupaten' => 'Sintang 61', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   32 2, 'nama_kabupaten' => 'Kapuas Hulu', 'provinsi_id_provinsi' => 61],
'[id_kabupaten'=>   32 3, 'nama_kabupaten' => 'Bengkayang  61', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   32 4, 'nama_kabupaten' => 'Landak  61', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   32 5, 'nama_kabupaten' => 'Melawi  61', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   32 6, 'nama_kabupaten' => 'Sekadau 61', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   32 7, 'nama_kabupaten' => 'Kayong Utara', 'provinsi_id_provinsi' =>    61],
['id_kabupaten'=>   32 8, 'nama_kabupaten' => 'Kubu Raya', 'provinsi_id_provinsi' =>   61],
['id_kabupaten'=>   32 9, 'nama_kabupaten' => 'Kota Pontianak', 'provinsi_id_provinsi' =>  61],
['id_kabupaten'=>   33 0, 'nama_kabupaten' => 'Kota Singkawang', 'provinsi_id_provinsi' => 61],
['id_kabupaten'=>   33 1, 'nama_kabupaten' => 'Kotawaringin Barat', 'provinsi_id_provinsi' =>  62],
['id_kabupaten'=>   33 2, 'nama_kabupaten' => 'Kotawaringin Timur', 'provinsi_id_provinsi' =>  62],
'[id_kabupaten'=>   33 3, 'nama_kabupaten' => 'Kapuas  62', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   33 4, 'nama_kabupaten' => 'Barito Selatan', 'provinsi_id_provinsi' =>  62],
['id_kabupaten'=>   33 5, 'nama_kabupaten' => 'Barito Utara', 'provinsi_id_provinsi' =>    62],
'[id_kabupaten'=>   33 6, 'nama_kabupaten' => 'Katingan    62', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   33 7, 'nama_kabupaten' => 'Seruyan 62', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   33 8, 'nama_kabupaten' => 'Sukamara    62', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   33 9, 'nama_kabupaten' => 'Lamandau    62', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   34 0, 'nama_kabupaten' => 'Gunung Mas', 'provinsi_id_provinsi' =>  62],
['id_kabupaten'=>   34 1, 'nama_kabupaten' => 'Pulang Pisau', 'provinsi_id_provinsi' =>    62],
['id_kabupaten'=>   34 2, 'nama_kabupaten' => 'Murung Raya', 'provinsi_id_provinsi' => 62],
['id_kabupaten'=>   34 3, 'nama_kabupaten' => 'Barito Timur', 'provinsi_id_provinsi' =>    62],
['id_kabupaten'=>   34 4, 'nama_kabupaten' => 'Kota Palangka', 'provinsi_id_provinsi' => Raya],  62
['id_kabupaten'=>   34 5, 'nama_kabupaten' => 'Tanah Laut', 'provinsi_id_provinsi' =>  63],
['id_kabupaten'=>   34 6, 'nama_kabupaten' => 'Kota Baru', 'provinsi_id_provinsi' =>   63],
'[id_kabupaten'=>   34 7, 'nama_kabupaten' => 'Banjar  63', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   34 8, 'nama_kabupaten' => 'Barito Kuala', 'provinsi_id_provinsi' =>    63],
'[id_kabupaten'=>   34 9, 'nama_kabupaten' => 'Tapin   63', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   35 0, 'nama_kabupaten' => 'Hulu Sungai', 'provinsi_id_provinsi' => Selatan], 63
['id_kabupaten'=>   35 1, 'nama_kabupaten' => 'Hulu Sungai', 'provinsi_id_provinsi' => Tengah],  63
['id_kabupaten'=>   35 2, 'nama_kabupaten' => 'Hulu Sungai', 'provinsi_id_provinsi' => Utara],   63
'[id_kabupaten'=>   35 3, 'nama_kabupaten' => 'Tabalong    63', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   35 4, 'nama_kabupaten' => 'Tanah Bumbu', 'provinsi_id_provinsi' => 63],
'[id_kabupaten'=>   35 5, 'nama_kabupaten' => 'Balangan    63', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   35 6, 'nama_kabupaten' => 'Kota Banjarmasin', 'provinsi_id_provinsi' =>    63],
['id_kabupaten'=>   35 7, 'nama_kabupaten' => 'Kota Banjar', 'provinsi_id_provinsi' => Baru],    63
'[id_kabupaten'=>   35 8, 'nama_kabupaten' => 'Paser   64', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   35 9, 'nama_kabupaten' => 'Kutai Kartanegara', 'provinsi_id_provinsi' =>   64],
'[id_kabupaten'=>   36 0, 'nama_kabupaten' => 'Berau   64', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   36 1, 'nama_kabupaten' => 'Kutai Barat', 'provinsi_id_provinsi' => 64],
['id_kabupaten'=>   36 2, 'nama_kabupaten' => 'Kutai Timur', 'provinsi_id_provinsi' => 64],
['id_kabupaten'=>   36 3, 'nama_kabupaten' => 'Penajam Paser', 'provinsi_id_provinsi' => Utara], 64
['id_kabupaten'=>   36 4, 'nama_kabupaten' => 'Mahakam Hulu', 'provinsi_id_provinsi' =>    64],
['id_kabupaten'=>   36 5, 'nama_kabupaten' => 'Kota Balikpapan', 'provinsi_id_provinsi' => 64],
['id_kabupaten'=>   36 6, 'nama_kabupaten' => 'Kota Samarinda', 'provinsi_id_provinsi' =>  64],
['id_kabupaten'=>   36 7, 'nama_kabupaten' => 'Kota Bontang', 'provinsi_id_provinsi' =>    64],
'[id_kabupaten'=>   36 8, 'nama_kabupaten' => 'Bulungan    65', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   36 9, 'nama_kabupaten' => 'Malinau 65', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   37 0, 'nama_kabupaten' => 'Nunukan 65', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   37 1, 'nama_kabupaten' => 'Tana Tidung', 'provinsi_id_provinsi' => 65],
['id_kabupaten'=>   37 2, 'nama_kabupaten' => 'Kota Tarakan', 'provinsi_id_provinsi' =>    65],
['id_kabupaten'=>   37 3, 'nama_kabupaten' => 'Bolaang Mongondow', 'provinsi_id_provinsi' =>   71],
'[id_kabupaten'=>   37 4, 'nama_kabupaten' => 'Minahasa    71', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   37 5, 'nama_kabupaten' => 'Kepulauan Sangihe', 'provinsi_id_provinsi' =>   71],
['id_kabupaten'=>   37 6, 'nama_kabupaten' => 'Kepulauan Talaud', 'provinsi_id_provinsi' =>    71],
['id_kabupaten'=>   37 7, 'nama_kabupaten' => 'Minahasa Selatan', 'provinsi_id_provinsi' =>    71],
['id_kabupaten'=>   37 8, 'nama_kabupaten' => 'Minahasa Utara', 'provinsi_id_provinsi' =>  71],
['id_kabupaten'=>   37 9, 'nama_kabupaten' => 'Bolaang Mongondow', 'provinsi_id_provinsi' => Utara], 71
['id_kabupaten'=>   38 0, 'nama_kabupaten' => 'Minahasa Tenggara', 'provinsi_id_provinsi' =>   71],
['id_kabupaten'=>   38 1, 'nama_kabupaten' => 'Siau Tagulandang', 'provinsi_id_provinsi' => Biaro],  71
['id_kabupaten'=>   38 2, 'nama_kabupaten' => 'Bolaang Mongondow', 'provinsi_id_provinsi' => Timur], 71
['id_kabupaten'=>   38 3, 'nama_kabupaten' => 'Bolaang Mongondow', 'provinsi_id_provinsi' => Selatan],   71
['id_kabupaten'=>   38 4, 'nama_kabupaten' => 'Kota Manado', 'provinsi_id_provinsi' => 71],
['id_kabupaten'=>   38 5, 'nama_kabupaten' => 'Kota Bitung', 'provinsi_id_provinsi' => 71],
['id_kabupaten'=>   38 6, 'nama_kabupaten' => 'Kota Tomohon', 'provinsi_id_provinsi' =>    71],
['id_kabupaten'=>   38 7, 'nama_kabupaten' => 'Kota Kotamobagu', 'provinsi_id_provinsi' => 71],
'[id_kabupaten'=>   38 8, 'nama_kabupaten' => 'Banggai 72', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   38 9, 'nama_kabupaten' => 'Poso    72', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   39 0, 'nama_kabupaten' => 'Donggala    72', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   39 1, 'nama_kabupaten' => 'Toli-Toli', 'provinsi_id_provinsi' =>   72],
'[id_kabupaten'=>   39 2, 'nama_kabupaten' => 'Buol    72', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   39 3, 'nama_kabupaten' => 'Morowali    72', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   39 4, 'nama_kabupaten' => 'Morowali Utara', 'provinsi_id_provinsi' =>  72],
['id_kabupaten'=>   39 5, 'nama_kabupaten' => 'Banggai Laut', 'provinsi_id_provinsi' =>    72],
['id_kabupaten'=>   39 6, 'nama_kabupaten' => 'Banggai Kepulauan', 'provinsi_id_provinsi' =>   72],
['id_kabupaten'=>   39 7, 'nama_kabupaten' => 'Parigi Moutong', 'provinsi_id_provinsi' =>  72],
['id_kabupaten'=>   39 8, 'nama_kabupaten' => 'Tojo Una', 'provinsi_id_provinsi' =>-Una],    72
'[id_kabupaten'=>   39 9, 'nama_kabupaten' => 'Sigi    72', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   40 0, 'nama_kabupaten' => 'Kota Palu', 'provinsi_id_provinsi' =>   72],
['id_kabupaten'=>   40 1, 'nama_kabupaten' => 'Kepulauan Selayar', 'provinsi_id_provinsi' =>   73],
'[id_kabupaten'=>   40 2, 'nama_kabupaten' => 'Bulukumba   73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   40 3, 'nama_kabupaten' => 'Bantaeng    73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   40 4, 'nama_kabupaten' => 'Jeneponto   73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   40 5, 'nama_kabupaten' => 'Takalar 73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   40 6, 'nama_kabupaten' => 'Gowa    73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   40 7, 'nama_kabupaten' => 'Sinjai  73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   40 8, 'nama_kabupaten' => 'Bone    73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   40 9, 'nama_kabupaten' => 'Maros   73', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   41 0, 'nama_kabupaten' => 'Pangkajene Dan', 'provinsi_id_provinsi' => Kepulauan],    73
'[id_kabupaten'=>   41 1, 'nama_kabupaten' => 'Barru   73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   41 2, 'nama_kabupaten' => 'Soppeng 73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   41 3, 'nama_kabupaten' => 'Wajo    73', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   41 4, 'nama_kabupaten' => 'Sidenreng Rappang', 'provinsi_id_provinsi' =>   73],
'[id_kabupaten'=>   41 5, 'nama_kabupaten' => 'Pinrang 73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   41 6, 'nama_kabupaten' => 'Enrekang    73', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   41 7, 'nama_kabupaten' => 'Luwu    73', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   41 8, 'nama_kabupaten' => 'Tana Toraja', 'provinsi_id_provinsi' => 73],
['id_kabupaten'=>   41 9, 'nama_kabupaten' => 'Toraja Utara', 'provinsi_id_provinsi' =>    73],
['id_kabupaten'=>   42 0, 'nama_kabupaten' => 'Luwu Utara', 'provinsi_id_provinsi' =>  73],
['id_kabupaten'=>   42 1, 'nama_kabupaten' => 'Luwu Timur', 'provinsi_id_provinsi' =>  73],
['id_kabupaten'=>   42 2, 'nama_kabupaten' => 'Kota Makassar', 'provinsi_id_provinsi' =>   73],
['id_kabupaten'=>   42 3, 'nama_kabupaten' => 'Kota Parepare', 'provinsi_id_provinsi' =>   73],
['id_kabupaten'=>   42 4, 'nama_kabupaten' => 'Kota Palopo', 'provinsi_id_provinsi' => 73],
'[id_kabupaten'=>   42 5, 'nama_kabupaten' => 'Kolaka  74', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   42 6, 'nama_kabupaten' => 'Konawe  74', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   42 7, 'nama_kabupaten' => 'Konawe Kepulauan', 'provinsi_id_provinsi' =>    74],
'[id_kabupaten'=>   42 8, 'nama_kabupaten' => 'Muna    74', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   42 9, 'nama_kabupaten' => 'Buton   74', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   43 0, 'nama_kabupaten' => 'Konawe Selatan', 'provinsi_id_provinsi' =>  74],
'[id_kabupaten'=>   43 1, 'nama_kabupaten' => 'Bombana 74', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   43 2, 'nama_kabupaten' => 'Wakatobi    74', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   43 3, 'nama_kabupaten' => 'Kolaka Utara', 'provinsi_id_provinsi' =>    74],
['id_kabupaten'=>   43 4, 'nama_kabupaten' => 'Buton Utara', 'provinsi_id_provinsi' => 74],
['id_kabupaten'=>   43 5, 'nama_kabupaten' => 'Konawe Utara', 'provinsi_id_provinsi' =>    74],
['id_kabupaten'=>   43 6, 'nama_kabupaten' => 'Kolaka Timur', 'provinsi_id_provinsi' =>    74],
['id_kabupaten'=>   43 7, 'nama_kabupaten' => 'Kota Kendari', 'provinsi_id_provinsi' =>    74],
['id_kabupaten'=>   43 8, 'nama_kabupaten' => 'Kota Baubau', 'provinsi_id_provinsi' => 74],
'[id_kabupaten'=>   43 9, 'nama_kabupaten' => 'Gorontalo   75', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   44 0, 'nama_kabupaten' => 'Boalemo 75', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   44 1, 'nama_kabupaten' => 'Bone Bolango', 'provinsi_id_provinsi' =>    75],
'[id_kabupaten'=>   44 2, 'nama_kabupaten' => 'Pohuwato    75', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   44 3, 'nama_kabupaten' => 'Gorontalo Utara', 'provinsi_id_provinsi' => 75],
['id_kabupaten'=>   44 4, 'nama_kabupaten' => 'Kota Gorontalo', 'provinsi_id_provinsi' =>  75],
['id_kabupaten'=>   44 5, 'nama_kabupaten' => 'Mamuju Utara', 'provinsi_id_provinsi' =>    76],
'[id_kabupaten'=>   44 6, 'nama_kabupaten' => 'Mamuju  76', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   44 7, 'nama_kabupaten' => 'Mamasa  76', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   44 8, 'nama_kabupaten' => 'Polewali Mandar', 'provinsi_id_provinsi' => 76],
'[id_kabupaten'=>   44 9, 'nama_kabupaten' => 'Majene  76', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   45 0, 'nama_kabupaten' => 'Mamuju Tengah', 'provinsi_id_provinsi' =>   76],
['id_kabupaten'=>   45 1, 'nama_kabupaten' => 'Maluku Tengah', 'provinsi_id_provinsi' =>   81],
['id_kabupaten'=>   45 2, 'nama_kabupaten' => 'Maluku Tenggara', 'provinsi_id_provinsi' => 81],
['id_kabupaten'=>   45 3, 'nama_kabupaten' => 'Maluku Tenggara', 'provinsi_id_provinsi' => Barat],   81
'[id_kabupaten'=>   45 4, 'nama_kabupaten' => 'Buru    81', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   45 5, 'nama_kabupaten' => 'Seram Bagian', 'provinsi_id_provinsi' => Timur],  81
['id_kabupaten'=>   45 6, 'nama_kabupaten' => 'Seram Bagian', 'provinsi_id_provinsi' => Barat],  81
['id_kabupaten'=>   45 7, 'nama_kabupaten' => 'Kepulauan Aru', 'provinsi_id_provinsi' =>   81],
['id_kabupaten'=>   45 8, 'nama_kabupaten' => 'Maluku Barat', 'provinsi_id_provinsi' => Daya],   81
['id_kabupaten'=>   45 9, 'nama_kabupaten' => 'Buru Selatan', 'provinsi_id_provinsi' =>    81],
['id_kabupaten'=>   46 0, 'nama_kabupaten' => 'Kota Ambon', 'provinsi_id_provinsi' =>  81],
['id_kabupaten'=>   46 1, 'nama_kabupaten' => 'Kota Tual', 'provinsi_id_provinsi' =>   81],
['id_kabupaten'=>   46 2, 'nama_kabupaten' => 'Halmahera Barat', 'provinsi_id_provinsi' => 82],
['id_kabupaten'=>   46 3, 'nama_kabupaten' => 'Halmahera Tengah', 'provinsi_id_provinsi' =>    82],
['id_kabupaten'=>   46 4, 'nama_kabupaten' => 'Halmahera Utara', 'provinsi_id_provinsi' => 82],
['id_kabupaten'=>   46 5, 'nama_kabupaten' => 'Halmahera Selatan', 'provinsi_id_provinsi' =>   82],
['id_kabupaten'=>   46 6, 'nama_kabupaten' => 'Kepulauan Sula', 'provinsi_id_provinsi' =>  82],
['id_kabupaten'=>   46 7, 'nama_kabupaten' => 'Halmahera Timur', 'provinsi_id_provinsi' => 82],
['id_kabupaten'=>   46 8, 'nama_kabupaten' => 'Pulau Morotai', 'provinsi_id_provinsi' =>   82],
['id_kabupaten'=>   46 9, 'nama_kabupaten' => 'Pulau Taliabu', 'provinsi_id_provinsi' =>   82],
['id_kabupaten'=>   47 0, 'nama_kabupaten' => 'Kota Ternate', 'provinsi_id_provinsi' =>    82],
['id_kabupaten'=>   47 1, 'nama_kabupaten' => 'Kota Tidore', 'provinsi_id_provinsi' => Kepulauan],   82
'[id_kabupaten'=>   47 2, 'nama_kabupaten' => 'Merauke 91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   47 3, 'nama_kabupaten' => 'Jayawijaya  91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   47 4, 'nama_kabupaten' => 'Jayapura    91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   47 5, 'nama_kabupaten' => 'Nabire  91', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   47 6, 'nama_kabupaten' => 'Kepulauan Yapen', 'provinsi_id_provinsi' => 91],
['id_kabupaten'=>   47 7, 'nama_kabupaten' => 'Biak Numfor', 'provinsi_id_provinsi' => 91],
['id_kabupaten'=>   47 8, 'nama_kabupaten' => 'Puncak Jaya', 'provinsi_id_provinsi' => 91],
'[id_kabupaten'=>   47 9, 'nama_kabupaten' => 'Paniai  91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   48 0, 'nama_kabupaten' => 'Mimika  91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   48 1, 'nama_kabupaten' => 'Sarmi   91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   48 2, 'nama_kabupaten' => 'Keerom  91', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   48 3, 'nama_kabupaten' => 'Pegunungan Bintang', 'provinsi_id_provinsi' =>  91],
'[id_kabupaten'=>   48 4, 'nama_kabupaten' => 'Yahukimo    91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   48 5, 'nama_kabupaten' => 'Tolikara    91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   48 6, 'nama_kabupaten' => 'Waropen 91', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   48 7, 'nama_kabupaten' => 'Boven Digoel', 'provinsi_id_provinsi' =>    91],
'[id_kabupaten'=>   48 8, 'nama_kabupaten' => 'Mappi   91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   48 9, 'nama_kabupaten' => 'Asmat   91', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   49 0, 'nama_kabupaten' => 'Lanny Jaya', 'provinsi_id_provinsi' =>  91],
'[id_kabupaten'=>   49 1, 'nama_kabupaten' => 'Nduga   91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   49 2, 'nama_kabupaten' => 'Supiori 91', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   49 3, 'nama_kabupaten' => 'Intan Jaya', 'provinsi_id_provinsi' =>  91],
'[id_kabupaten'=>   49 4, 'nama_kabupaten' => 'Puncak  91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   49 5, 'nama_kabupaten' => 'Deiyai  91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   49 6, 'nama_kabupaten' => 'Dogiyai 91', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   49 7, 'nama_kabupaten' => 'Yalimo  91', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   49 8, 'nama_kabupaten' => 'Mamberamo Tengah', 'provinsi_id_provinsi' =>    91],
['id_kabupaten'=>   49 9, 'nama_kabupaten' => 'Mamberamo Raya', 'provinsi_id_provinsi' =>  91],
['id_kabupaten'=>   50 0, 'nama_kabupaten' => 'Kota Jayapura', 'provinsi_id_provinsi' =>   91],
'[id_kabupaten'=>   50 1, 'nama_kabupaten' => 'Sorong  92', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   50 2, 'nama_kabupaten' => 'Manokwari   92', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   50 3, 'nama_kabupaten' => 'Fakfak  92', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   50 4, 'nama_kabupaten' => 'Sorong Selatan', 'provinsi_id_provinsi' =>  92],
['id_kabupaten'=>   50 5, 'nama_kabupaten' => 'Raja Ampat', 'provinsi_id_provinsi' =>  92],
['id_kabupaten'=>   50 6, 'nama_kabupaten' => 'Teluk Bintuni', 'provinsi_id_provinsi' =>   92],
['id_kabupaten'=>   50 7, 'nama_kabupaten' => 'Teluk Wondama', 'provinsi_id_provinsi' =>   92],
'[id_kabupaten'=>   50 8, 'nama_kabupaten' => 'Kaimana 92', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   50 9, 'nama_kabupaten' => 'Maybrat 92', 'provinsi_id_provinsi' =>
],'[id_kabupaten'=>   51 0, 'nama_kabupaten' => 'Tambrauw    92', 'provinsi_id_provinsi' =>
],['id_kabupaten'=>   51 1, 'nama_kabupaten' => 'Pegunungan Arfak', 'provinsi_id_provinsi' =>    92],
['id_kabupaten'=>   51 2, 'nama_kabupaten' => 'Manokwari Selatan', 'provinsi_id_provinsi' =>   92],
['id_kabupaten'=>   51 3, 'nama_kabupaten' => 'Kota Sorong', 'provinsi_id_provinsi' => 92],

        ];

        DB::table('kabupaten')->insert($data);


    }
}
