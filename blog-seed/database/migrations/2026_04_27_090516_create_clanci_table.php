<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clanci', function (Blueprint $table) {
            $table->id();                                    // primarni kljuc
            $table->string('naslov');                        // VARCHAR(255)
            $table->text('sadrzaj');                         // dugacki tekst
            $table->string('autor');                         // ime autora
            $table->string('kategorija')->default('opce');   // kategorija clanka
            $table->boolean('objavljeno')->default(false);   // objavljen da/ne
            $table->timestamps();                            // created_at i updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clanci');
    }
};