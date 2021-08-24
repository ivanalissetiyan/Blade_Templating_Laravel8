<?php

namespace Database\Seeders;

use App\Models\Cto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CtoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //// truncate table
        DB::table('cto')->truncate();

        $cto = [

            [
                'perusahaan_id' => 1,
                'foto' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p182539.png',
                'nama' => 'Alissetiyan',
                'tinggi' => '168',
                'posisi' => 'Software Developer',
                'create_at' => '2021-03-20 00:00:00',
                'update_at' => '2021-03-20 00:00:00',
            ],
            [
                'perusahaan_id' => 2,
                'foto' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p182168.png',
                'nama' => 'Lewis Pratama',
                'tinggi' => '158',
                'posisi' => 'Full Stack Developer',
                'create_at' => '2021-03-22 00:00:00',
                'update_at' => '2021-03-22 00:00:00',
            ],
            [
                'perusahaan_id' => 3,
                'foto' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p189539.png',
                'nama' => 'Hudoro',
                'tinggi' => '178',
                'posisi' => 'Mobile Apps Developer',
                'create_at' => '2021-03-10 00:00:00',
                'update_at' => '2021-03-10 00:00:00',
            ],
            [
                'perusahaan_id' => 4,
                'foto' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p182839.png',
                'nama' => 'Galih',
                'tinggi' => '108',
                'posisi' => 'Software Developer',
                'create_at' => '2021-03-26 00:00:00',
                'update_at' => '2021-03-26 00:00:00',
            ],
            [
                'perusahaan_id' => 5,
                'foto' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p162539.png',
                'nama' => 'Darmawan',
                'tinggi' => '166',
                'posisi' => 'UI UX Design',
                'create_at' => '2021-03-28 00:00:00',
                'update_at' => '2021-03-28 00:00:00',
            ],

        ];
        Cto::insert($cto);
    }
}
