<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chuchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dummy data
        $chuches = [
            ['nombre' => 'Chuche1', 'descripcion' => 'Descripción de la chuche 1', 'archivo' => 'archivo1.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche2', 'descripcion' => 'Descripción de la chuche 2', 'archivo' => 'archivo2.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche3', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'archivo3.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche4', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'archivo3.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche5', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'archivo3.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche6', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'archivo3.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche7', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'archivo3.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche8', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'archivo3.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche9', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'archivo3.jpg', 'expLvl' => 1],
            ['nombre' => 'Chuche10', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'archivo3.jpg', 'expLvl' => 1],
            // Add more dummy data as needed
        ];

        // Insert dummy data into the database
        foreach ($chuches as $chuche) {
            DB::table('chuches')->insert($chuche);
        }
    }
}
