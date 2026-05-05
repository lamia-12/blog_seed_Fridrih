<?php

namespace Database\Factories;

use App\Models\Clanak;
use App\Models\Komentar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komentar>
 */
class KomentarFactory extends Factory
{
    protected $model = Komentar::class;

    public function definition(): array
    {
        return [
            'clanak_id'  => Clanak::inRandomOrder()->first()->id,  // nasumicni postojeci clanak
            'ime_autora' => fake()->name(),
            'email'      => fake()->safeEmail(),
            'tekst'      => fake()->paragraph(),
            'odobren'    => fake()->boolean(70),  // 70% odobrenih
        ];
    }
}