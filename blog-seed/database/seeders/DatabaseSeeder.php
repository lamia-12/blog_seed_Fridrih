<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // REDOSLJED JE BITAN! Najprije clanci, pa komentari
        // (jer komentari referenciraju clanke preko clanak_id)
        $this->call([
            ClanakSeeder::class,
            KomentarSeeder::class,
        ]);
    }
}