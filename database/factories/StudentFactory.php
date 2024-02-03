<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'FirstName' => $this->faker->firstName(),
            'LastName' => $this->faker->lastName(),
            'PhoneNumber' => $this->faker->phoneNumber(),
            'Gmail' => $this->faker->email(),
            'Gender' => 'Unisex',
            'Religion' => 'Catholic',
            'Birth' => $this->faker->dateTime(),
            'Address' => $this->faker->address(),
            'City' => $this->faker->city(),
            'Country' => $this->faker->country(),
            'MotherName' => $this->faker->titleFemale() . $this->faker->firstNameFemale(),
            'FatherName' => $this->faker->titleMale() . $this->faker->firstNameMale(),
            'ImageProfile' => 'default.jpg'
        ];
    }
}
