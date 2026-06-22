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
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            //Povezujemo gig sa userom koji je napravio gig
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('delivery_days');

            //Omogucuje dodavanje tagova npr. 'React' 'Laravel' itd.
            $table->json('tags')->nullable();
            //Prati status gig-a 'Live' 'Draft' 'Paused'
            $table->string('status')->default('draft');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gigs');
    }
};
