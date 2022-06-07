<?php

namespace Database\Factories;

use App\Models\DestinationCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DestinationCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $models = DestinationCategory::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
        ];
    }
}
