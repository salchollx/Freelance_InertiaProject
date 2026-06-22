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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            //Id projekta koji se kupuje
            $table->foreignId('gig_id')->constrained()->onDelete('cascade');

            //Id klijenta koji kupuje
            //Primenovali smo u buyer_id 
            //Pokazuje na user tabelu (buyer_id = user_id)
            $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade');

            $table->decimal('amount', 10, 2);

            //Pending, in_progress, delivered, completed, cancelled
            $table->string('status')->default('pending');

            $table->timestamp('due_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
