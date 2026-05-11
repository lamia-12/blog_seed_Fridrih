<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clanak;
use App\Models\Komentar;

class KomentarSeeder extends Seeder
{
    public function run(): void
    {
        // Za svaki clanak u bazi, kreiraj 2-5 komentara
        Clanak::all()->each(function ($clanak) {
            Komentar::factory()
                ->count(rand(2, 5))
                ->create(['clanak_id' => $clanak->id]);
        });
    }
}