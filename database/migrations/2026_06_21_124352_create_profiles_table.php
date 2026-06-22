<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            //Definisemo kolone koje ce Profile tabela imati
            //Kao i strani kljuc koji je povezuje sa User tabelom
            $table->id();
            //Ako se user obrise brisemo i profile
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('bio');
            $table->string('title')->nullable();
            $table->json('skills')->nullable();
            $table->decimal('hourly_rate', 8, 2)->nullable();
            $table->string('avatar_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
