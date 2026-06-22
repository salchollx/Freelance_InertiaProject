<?php

namespace Database\Factories;

use App\Models\Gig;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Gig>
 */
class GigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // This will temporarily map to user ID 1 (we will handle this properly in the seeder)
            'user_id' => 1,
            'title' => $this->faker->randomElement([
                'I will build a responsive React landing page',
                'I will design a modern logo for your tech startup',
                'I will set up a professional Laravel API backend',
                'I will optimize your PostgreSQL database queries',
                'I will write SEO friendly copy for your blog'
            ]),
            'description' => $this->faker->paragraph(4), // Generates a paragraph with 4 sentences
            'price' => $this->faker->randomElement([15, 50, 120, 250, 500]),
            'delivery_days' => $this->faker->numberBetween(1, 14),
            'tags' => ['web', 'development', 'design', 'freelance'],
            'status' => 'active', // Make sure it matches the 'active' status our controller is looking for!
        ];
    }
}
