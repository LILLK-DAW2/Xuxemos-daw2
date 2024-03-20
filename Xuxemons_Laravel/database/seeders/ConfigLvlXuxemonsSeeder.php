<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigLvlXuxemonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('config_lvl_xuxemons')->insert([
                   'peq_med' => 3,
                  'med_gra' => 5,
              ]);
    }
}
