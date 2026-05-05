<?php

namespace Database\Factories;

use App\Models\Clanak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clanak>
 */
class ClanakFactory extends Factory
{
    protected $model = Clanak::class;

    public function definition(): array
    {
        return [
            'naslov'     => fake()->sentence(6),              // 6 laznih rijeci kao naslov
            'sadrzaj'    => fake()->paragraphs(3, true),       // 3 paragrafa teksta
            'autor'      => fake()->name(),                    // lazno ime i prezime
            'kategorija' => fake()->randomElement([            // nasumicna kategorija
                'tehnologija', 'sport', 'kultura', 'politika', 'zabava'
            ]),
            'objavljeno' => fake()->boolean(80),               // 80% sanse da je true
        ];
    }
}