<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_name' => $this->faker->name(),
            'student_email' => $this->faker->unique()->safeEmail(),
            'student_roll'=> $this->faker->randomDigit(2),
            'student_class'=> $this->faker->randomDigit(2),
            'student_age'=> $this->faker->randomDigit(2),
            'student_phone'=> $this->faker->e164PhoneNumber(2),
            'student_img'=>$this->faker->imageUrl($width = 640, $height = 480),

        ];
    }
}
