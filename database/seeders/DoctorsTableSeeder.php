<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();

        // // Seed the doctors table with fake data
        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('doctors')->insert([
        //         'user_id' => $faker->unique()->randomNumber(),
        //         'username' => $faker->userName,
        //         'email' => $faker->email,
        //         'first_name' => $faker->firstName,
        //         'last_name' => $faker->lastName,
        //         'phone_number' => $faker->phoneNumber,
        //         'gender' => $faker->randomElement(['Male', 'Female']),
        //         'date_of_birth' => $faker->date(),
        //         'biography' => $faker->paragraph,
        //         'clinic_name' => $faker->company,
        //         'clinic_address' => $faker->address,
        //         'address_line_1' => $faker->streetAddress,
        //         'address_line_2' => $faker->secondaryAddress,
        //         'city' => $faker->city,
        //         'state' => $faker->state,
        //         'country' => $faker->country,
        //         'postal_code' => $faker->postcode,
        //         'pricing' => $faker->randomFloat(2, 50, 500),
        //         'services' => $faker->words(3, true),
        //         'specialization' => $faker->jobTitle,
        //         'degree' => $faker->randomElement(['MD', 'MBBS', 'PhD']),
        //         'college' => $faker->company,
        //         'year_of_completion' => $faker->year,
        //         'hospital_name' => $faker->company,
        //         'from' => $faker->time('H:i'),
        //         'to' => $faker->time('H:i'),
        //         'designation' => $faker->jobTitle,
        //     ]);
        // }
        Doctor::factory()->count(30)->create();
    }
}
