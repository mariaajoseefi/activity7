<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoboticsKitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('robotics_kits')->insert([
            [
                'name' => 'Starter Kit',
                'description' => 'Un kit perfecto para principiantes en robótica, incluye componentes básicos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Educational Robotics Kit',
                'description' => 'Un kit avanzado para aprender y enseñar robótica en entornos educativos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pro Robotics Kit',
                'description' => 'El kit definitivo para los entusiastas de la robótica que buscan llevar sus proyectos al siguiente nivel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
