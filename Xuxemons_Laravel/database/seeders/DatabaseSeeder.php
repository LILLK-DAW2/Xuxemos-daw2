<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mochila;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class,
                    TiposSeeder::class,
                    ObjetosSeeder::class,
                    XuxemonSeeder::class,
                    MochilaSeeder::class,
                    InventarioXuxemonsSeeder::class
        ]);
    }
}
