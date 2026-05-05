<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clanak extends Model
{
    use HasFactory;  // OBAVEZNO — omogucuje koristenje Factory-a!

    // Laravel sam pretpostavlja tablicu "clanaks" — moramo mu reci pravo ime
    protected $table = 'clanci';

    // Polja koja smijemo masovno popuniti (sigurnosna zastita)
    protected $fillable = [
        'naslov',
        'sadrzaj',
        'autor',
        'kategorija',
        'objavljeno',
    ];

    // Relacija: jedan clanak ima VISE komentara
    public function komentari(): HasMany
    {
        return $this->hasMany(Komentar::class);
    }
}