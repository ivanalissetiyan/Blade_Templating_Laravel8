<?php

namespace Database\Seeders;

use\App\Models\Ceo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate table
        DB::table('ceo')->truncate();

        $ceo = [
            [
                'perusahaan_id' => 1,
                'foto' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png',
                'nama' => 'Agung Hapsah',
                'umur' => '50',
                'negara' => 'Indonesia',
                'create_at' => '2021-03-20 10:00:00',
                'update_at' => '2021-03-20 10:00:00',

            ],
                'perusahaan_id' => 2,
                'foto' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/man51018.png',
                'nama' => 'Ribowo Johansen',
                'umur' => '53',
                'negara' => 'Indonesia',
                'created_at' => '2021-03-20 10:00:20',
                'updated_at' => '2021-03-20 10:00:20',
        ];

        Ceo::insert($ceo);

    }
}
