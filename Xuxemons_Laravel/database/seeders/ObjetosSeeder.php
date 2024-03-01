<?php

namespace Database\Seeders;

use App\Models\Objetos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objetos = [
            ['nombre' => 'Espada', 'descripcion' => 'Una poderosa espada', 'precio' => 50, 'cantidad' => 100],
            ['nombre' => 'Poción de salud', 'descripcion' => 'Restaura 50 puntos de salud', 'precio' => 20, 'cantidad' => 200],
            ['nombre' => 'Poción de mana', 'descripcion' => 'Restaura 50 puntos de mana', 'precio' => 20, 'cantidad' => 150],
            // Agrega más objetos aquí si es necesario
        ];

        foreach ($objetos as $objeto) {
            Objetos::create($objeto);
        }    }
}
