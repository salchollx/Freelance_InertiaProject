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
        Schema::table('users', function (Blueprint $table) {
            //Dodavanje role u tabelu Users
            // up() -> Ovo se desava kad se migracija pokrene
            $table->string('role')->default('client');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //Brisanje kolone role u Users
            // down() -> Ovo se desava ako uradimo UNDO za migraciju
            $table->dropColumn('role');
        });
    }
};
