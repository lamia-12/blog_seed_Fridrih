<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clanak;

class ClanakSeeder extends Seeder
{
    public function run(): void
    {
        // Kreiraj 20 laznih clanaka
        Clanak::factory()->count(20)->create();

        // Dodaj jedan specifican clanak koji sigurno postoji
        Clanak::create([
            'naslov'     => 'Dobrodosli na nas blog!',
            'sadrzaj'    => 'Ovo je uvodni clanak bloga. Ovdje cete pronaci razne teme iz svijeta tehnologije, sporta i kulture.',
            'autor'      => 'Urednik',
            'kategorija' => 'opce',
            'objavljeno' => true,
        ]);
    }
}