<?php

namespace Database\Seeders;

use App\Models\Tipos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            ['nombre' => 'Tierra', 'descripcion' => 'Xuxemons del tipo Tierra'],
            ['nombre' => 'Aire', 'descripcion' => 'Xuxemons del tipo Aire'],
            ['nombre' => 'Agua', 'descripcion' => 'Xuxemons del tipo Agua'],
            // Agrega más tipos aquí si es necesario
        ];

        foreach ($tipos as $tipo) {
            Tipos::create($tipo);
        }    }
}
