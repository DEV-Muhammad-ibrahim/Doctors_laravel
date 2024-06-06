<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->email,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'date_of_birth' => $this->faker->date(),
            'biography' => $this->faker->paragraph,
            'clinic_name' => $this->faker->company,
            'clinic_address' => $this->faker->address,
            'address_line_1' => $this->faker->streetAddress,
            'address_line_2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'postal_code' => $this->faker->postcode,
            'pricing' => $this->faker->randomFloat(2, 50, 500),
            'services' => $this->faker->words(3, true),
            'specialization' => $this->faker->randomElement(['Urology', 'Neurology','Dentist','Orthopedic','Cardiologist','Immunology','Dermatology','Radiology']),
            'degree' => $this->faker->randomElement(['MD', 'MBBS', 'PhD']),
            'college' => $this->faker->company,
            'year_of_completion' => $this->faker->year,
            'hospital_name' => $this->faker->company,
            // 'from' => $this->faker->time('H:i'),
            // 'to' => $this->faker->time('H:i'),
            'designation' => $this->faker->jobTitle,
            'user_id' =>'1',
        ];
    }
}
