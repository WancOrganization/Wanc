<?php

namespace Database\Factories;

use App\Models\GetInTouch;
use Illuminate\Database\Eloquent\Factories\Factory;

class GetInTouchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GetInTouch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'mobile_number' => $this->faker->phoneNumber,
            'subject' => $this->faker->sentence,
            'message' => $this->faker->sentence,
        ];
    }
}
