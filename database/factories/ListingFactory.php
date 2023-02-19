<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'title' => $this->faker->sentence(),
           'tags' => 'larave, api, packend',
           'company' => $this->faker->company(),
           'email' => $this->faker->companyEmail(),
           'website' => $this->faker->url(),
           'location' => $this->faker->City(),
           'description' => $this->faker->paragraph(5),
        ];
    }
}
