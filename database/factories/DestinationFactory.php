<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Destination::class;
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text,
            'quote' => $this->faker->sentence(),
        ];
    }
}
