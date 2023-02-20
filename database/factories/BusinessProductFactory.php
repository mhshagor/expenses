<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BusinessProduct;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BusinessProduct>
 */
class BusinessproductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
		
            'code' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'product_name' => $this->faker->text(30),
            'product_details' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'product_price' => $this->faker->randomNumber(5),
            'product_quantity' => $this->faker->randomNumber(2),
            'slug'=>Str::slug(product_name),
            'product_image' => 'storage/app/product/zU17wDOg5h.jpg',
            'visibility' => $this->faker->numberBetween(0,1),
        ];
    }
}
