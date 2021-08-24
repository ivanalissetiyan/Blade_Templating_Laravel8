<?php

namespace Database\Seeders;

use App\Models\Alamat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlamatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate table
        DB::table('alamat')->truncate();

        $alamat = [
            [
                'nama' => 'Batam Centre',
                'kapasitas' => 1000,
                'alamat_detail' => 'Batam Centre, Orchid Park, Blok C 59',
                'create_at' => '2021-03-21 10:00:00',
                'update_at' => '2021-03-21 10:00:00',
            ],
            [
                'nama' => 'Batu Aji',
                'kapasitas' => 900,
                'alamat_detail' => 'Batu Aji, Cipta, Blok D 10',
                'create_at' => '2021-03-21 09:00:00',
                'update_at' => '2021-03-21 09:00:00',
            ],
            [
                'nama' => 'Tiban',
                'kapasitas' => 2000,
                'alamat_detail' => 'Tiban, House Coffe, Blok D 10',
                'create_at' => '2021-03-21 08:00:00',
                'update_at' => '2021-03-21 08:00:00',
            ],
        ];

        Alamat::insert($alamat);
    }
}
