<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     'FirstName' => $faker->firstName(),
        //     'LastName' => $faker->lastName(),
        //     'PhoneNumber' => $faker->phoneNumber(),
        //     'Gmail' => $faker->email(),
        //     'Gender' => 'Unisex',
        //     'Religion' => 'Catholic',
        //     'Birth' => $faker->dateTime(),
        //     'Address' => $faker->address(),
        //     'City' => $faker->city(),
        //     'Country' => $faker->country(),
        //     'MotherName' => $faker->titleFemale() . $faker->firstNameFemale(),
        //     'FatherName' => $faker->titleMale() . $faker->firstNameMale()
        // ];
        // Student::create($data);
        Student::factory(5)->create();
    }
}
