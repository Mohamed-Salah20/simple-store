<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name(),
            'desc'=>$this->faker->text(),
            'price'=>$this->faker->numberBetween(100,500),
            'img'=>'/assets/images/' . 'product-0' . rand(1,6) .".jpg",
            'category_id'=>'1'
        ];
    }
}