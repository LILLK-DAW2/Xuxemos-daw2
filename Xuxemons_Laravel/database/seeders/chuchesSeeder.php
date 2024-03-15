<?php

namespace Database\Seeders;

use App\Models\Chuches;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chuchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dummy data
        $chuches = [
            ['nombre' => 'Candies', 'descripcion' => 'Descripción de la chuche 1', 'archivo' => 'candies.png', 'expLvl' => 1],
            ['nombre' => 'Candies1', 'descripcion' => 'Descripción de la chuche 2', 'archivo' => 'candies1.png', 'expLvl' => 1],
            ['nombre' => 'Candy', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'candy.png', 'expLvl' => 1],
            ['nombre' => 'Candy1', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'candy1.png', 'expLvl' => 1],
            ['nombre' => 'Candy2', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'candy2.png', 'expLvl' => 1],
            ['nombre' => 'Candy-Cane', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'candy-cane.png', 'expLvl' => 1],
            ['nombre' => 'Chocolate-bar', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'chocolate-bar.png', 'expLvl' => 1],
            ['nombre' => 'Cotton-Candy', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'cotton-candy.png', 'expLvl' => 1],
            ['nombre' => 'Lollipop', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'lollipop.png', 'expLvl' => 1],
            ['nombre' => 'Sweets', 'descripcion' => 'Descripción de la chuche 3', 'archivo' => 'sweets.png', 'expLvl' => 1],
            // Add more dummy data as needed
        ];

        // Insert dummy data into the database
        foreach ($chuches as $chuche) {
            Chuches::create($chuche);
        }
    }
}
