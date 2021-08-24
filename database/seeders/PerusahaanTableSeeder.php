<?php

namespace Database\Seeders;

use App\Models\Perusahaan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate db
        DB::table('perusahaan')->truncate();

        $perusahaan = [
          [
            'alamat_id' => '1',
            'nama' => 'PT Kuadran Technology',
            'logo' => 'https://resources.premierleage.com/premierleague/badges/t8.svg',
            'url' => 'www.kuadrantechnology',
            'jml_karyawan' =>  53,
            'create_at' => '2021-03-21 10:00:00',
            'update_at' => '2021-03-21 10:00:00',
        ],
        [
            'alamat_id' => '2',
            'nama' => 'PT ASD Technology',
            'logo' => 'https://resources.premierleage.com/premierleague/badges/t3.svg',
            'url' => 'www.asdtechnology',
            'jml_karyawan' =>  53,
            'create_at' => '2021-03-22 00:00:00',
            'update_at' => '2021-03-22 00:00:00',
        ],
        [
            'alamat_id' => '3',
            'nama' => 'PT ABC Technology',
            'logo' => 'https://resources.premierleage.com/premierleague/badges/t5.svg',
            'url' => 'www.abctechnology',
            'jml_karyawan' =>  53,
            'created_at' => '2021-03-20 00:00:00',
            'updated_at' => '2021-03-20 00:00:00',
        ],

    ];

        Perusahaan::insert($perusahaan);

    }
}
