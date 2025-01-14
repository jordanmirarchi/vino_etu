<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call([
            PaysSeeder::class,
            CategorieSeeder::class,
            UserSeeder::class,
            CellierSeeder::class,
            BouteilleSeeder::class,
            ListeAchatSeeder::class,
        ]);
    }
}
