<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
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

        // $dep =  Department::all()->random();
        return [
            'employee_id' => fake()->numberBetween(1000,99999),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->lastName(),
            'last_name' => fake()->lastName(),
            'birth_date' => fake()->date(),
            // 'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->streetAddress(),
            'gender' => fake()->randomElement(['Male','Female']),
            'department_id' => fake()->numberBetween(1,7),
            // 'image' => fake()->image('public/storage/images',640,480, null, false),
            'nationality' => 'Filipino',
            'date_hired' => fake()->date(),
            'zip_code' => fake()->numberBetween(1000,99999),
            'tin_id' => fake()->numberBetween(1000000000,9999999999),
            'sss_id' => fake()->numberBetween(1000000000,9999999999),
            'philhealth_id' => fake()->numberBetween(1000000000,9999999999),
            'pagibig_id' => fake()->numberBetween(1000000000,9999999999),
        ];
    }
}
