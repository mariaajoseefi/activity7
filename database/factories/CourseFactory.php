<?php

namespace Database\Factories;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true), // genera un título de curso de 3 palabras
            'description' => $this->faker->paragraph, // genera un párrafo aleatorio para la descripción
            'robotics_kit_id' => $this->faker->numberBetween(1, 3), // suponiendo que hay 3 kits de robótica diferentes
        ];
    }
}
