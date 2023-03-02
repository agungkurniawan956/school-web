<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 6)),
            'slug' => $this->faker->slug(),
            'tempat' => 'Asrama Putra',
            'time' => $this->faker->dateTime(),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 9)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            'user_id' => mt_rand(1, 3)
        ];
    }
}
