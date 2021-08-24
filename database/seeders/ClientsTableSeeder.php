<?php

namespace Database\Seeders;

use App\Models\Clients;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate Table
        DB::table('clients')->truncate();

        $clients = [
            [
                'perusahaan_id' => 1,
                'client_id' => 2,
                'jadwal' => '2021-06-25 00:00:00',
                'create_at' => '2021-03-21 08:00:00',
                'update_at' => '2021-03-21 08:00:00',

            ],
            [
                'perusahaan_id' => 2,
                'client_id' => 1,
                'jadwal' => '2021-08-09 00:00:00',
                'create_at' => '2021-03-21 08:00:00',
                'update_at' => '2021-03-21 08:00:00',
            ],
            [
                'perusahaan_id' => 3,
                'client_id' => 4,
                'jadwal' => '2021-08-18 00:00:00',
                'created_at' => '2021-03-21 08:00:00',
                'updated_at' => '2021-03-21 08:00:00',
            ]
        ];
        Clients::insert($clients);
    }
}
