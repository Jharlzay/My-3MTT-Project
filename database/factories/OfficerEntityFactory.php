<?php

namespace Database\Factories;

use App\Entities\Officers\OfficerEntity;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OfficerEntityFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OfficerEntity::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make(fake()->password), // password
            'identification_number' => fake()->randomNumber(6),
            'rank' => 'Inspector',
            'phone' => fake()->phoneNumber(),
        ];

    }
}
