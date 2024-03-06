<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarioXuxemonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 10) as $userId) {
            foreach (range(1, 5) as $xuxemonId) {

                InventarioXuxemons::create([
                    'user_id' => $userId,
                    'xuxemon_id' => $xuxemonId,
                    'vida' => rand(50, 100),
                    'xuxes' => rand(1, 10),
                    'tamaño' => ['pequeño', 'mediano', 'grande'][rand(0, 2)],
                ]);

            }

        }

    }

}

