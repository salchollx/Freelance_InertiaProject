<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Gig;

class GigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if ($user) {
            // Create 6 fake gigs attached to your user ID
            Gig::factory()->count(6)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
