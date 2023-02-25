<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /* 'first_name' => fake()->first_name(),
            'middle_name' => fake()->middle_name(),
            'last_name' => fake()->last_name(),
            'birth_date' => fake()->date(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->streetAddress(),
            'age'=> fake()->numberBetween($min = 18, $max = 50),
            'gender' => fake()->randomElement(['Front Office','HouseKeeping','Food & Beverage Service','Kitchen','Engineering/Maintenance','Accounts','Security']),
            'image' => fake()->image('public/storage/images',640,480, null, false),
            'nationality' => 'Filipino',
            'date_hired' => fake()->date(),
            'zip_code' => fake()->numberBetween(1000,99999),
            'tin_id' => fake()->numberBetween(1000000000,9999999999),
            'sss_id' => fake()->numberBetween(1000000000,9999999999),
            'philhealth_id' => fake()->numberBetween(1000000000,9999999999),
            'pagibig_id' => fake()->numberBetween(1000000000,9999999999), */
        ];
    }
}
