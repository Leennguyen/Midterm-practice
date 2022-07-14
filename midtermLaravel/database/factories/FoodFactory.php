<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imgs = ["bo.jpg", "bido.jpg", "cachua.jpg","cam.jpg","nho.jpg","thơm.jpg"];
        return [
            'name' => $this->faker->name(),
            'price' => rand(1, 100),
            'img'=>$imgs[rand(0, 5)],
            'idCategory' =>rand(1,10)
        ];
    }
}
