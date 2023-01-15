<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->randomNumber(8),//郵便番号は8桁の数字でsedderファイルは代替する
            'address' => $this->faker->address,
            'building_name'=> $this->faker->company,
            'option'=> $this->faker->text(255),
        ];
    }
}
