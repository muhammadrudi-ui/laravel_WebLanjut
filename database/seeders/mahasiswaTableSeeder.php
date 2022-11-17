<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert(array
        (['nim' => '362155401044',
        'nama' => 'Muhammad Rudi Hartono',
         'kelas' => '2',
          'jenis_kelamin' => 'Laki - Laki',
          'alamat' => 'Pakistaji',
           'no_telp' => '9574', ],

           ['nim' => '362155401039',
           'nama' => 'Andre Pebriano',
           'kelas' => '2',
            'jenis_kelamin' => 'Laki - Laki',
            'alamat' => 'Labanasem',
              'no_telp' => '081', ] )); 
    }
}
