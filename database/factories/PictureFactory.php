<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Picture>
 */
class PictureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'author' => $this->faker->name(),
           'title'  => $this->faker->sentence(5),
           'description' => $this->faker->text(),
           'url' => $this->faker->imageUrl(640,480,$this->faker->words(2,true), true),
           'like' => $this->faker->numberBetween(0,10)
        ];
    }
}
