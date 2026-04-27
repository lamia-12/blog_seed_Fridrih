<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    use HasFactory;  // OBAVEZNO za Factory!

    protected $table = 'komentari';

    protected $fillable = [
        'clanak_id',
        'ime_autora',
        'email',
        'tekst',
        'odobren',
    ];

    // Relacija: svaki komentar PRIPADA jednom clanku
    public function clanak(): BelongsTo
    {
        return $this->belongsTo(Clanak::class);
    }
}