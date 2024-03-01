<?php

namespace Database\Seeders;

use App\Models\Mochila;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MochilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Por ejemplo, asignamos algunos objetos al primer usuario
        $inventario = [
            ['user_id' => 1, 'objeto_id' => 1, 'cantidad' => 3],
            ['user_id' => 1, 'objeto_id' => 2, 'cantidad' => 5],
            // Agrega más objetos al inventario aquí si es necesario
        ];

        foreach ($inventario as $item) {
            Mochila::create($item);
        }
    }



}
