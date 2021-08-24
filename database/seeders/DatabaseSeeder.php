<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AlamatTableSeeder::class,
            PerusahaanTableSeeder::class,
            CeoTableSeeder::class,
            CtoTableSeeder::class,
            ClientsTableSeeder::class,
        ]);
    }
}
