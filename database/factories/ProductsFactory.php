<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Products;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Cardiac Monitor',
                'MRI Machine',
                'CT Scan Machine',
                'Ultrasound Machine',
                'Defibrillator',
                'Respiratory Ventilator',
                'X-Ray Machine',
                'Anesthesia Machine',
                'Dialysis Machine',
                'Surgical Laser Machine'
            ]),
            'description' => $this->faker->realText(200), // Generates "real" text of a given length.
            'cost' => $this->faker->randomFloat(2, 1000, 10000), // Cost between 1000 and 10000.
            'price' => $this->faker->randomFloat(2, 1500, 15000), // Price between 1500 and 15000.
            'image_url' => $this->faker->imageUrl(), // This still generates a random image. It's hard to generate specific images with Faker.
            'images' => [$this->faker->imageUrl(), $this->faker->imageUrl()],
        ];
        
    }
}
