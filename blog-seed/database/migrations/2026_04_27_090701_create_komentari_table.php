<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('komentari', function (Blueprint $table) {
            $table->id();

            // Foreign Key — povezuje komentar s clankom
            $table->foreignId('clanak_id')->constrained('clanci')->onDelete('cascade');
            //      ↑ kreira kolonu clanak_id    ↑ FK na tablicu clanci  ↑ brisi komentare ako se clanak obrise

            $table->string('ime_autora');
            $table->string('email');
            $table->text('tekst');
            $table->boolean('odobren')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('komentari');
    }
};