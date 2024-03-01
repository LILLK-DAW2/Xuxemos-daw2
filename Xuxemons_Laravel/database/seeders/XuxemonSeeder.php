<?php

namespace Database\Seeders;

use App\Models\Xuxemon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XuxemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $xuxemons = [
            ['nombre' => 'Apleki', 'tipo_id' => 1, 'archivo' => 'apleki.png'],
            ['nombre' => 'Avecrem', 'tipo_id' => 2, 'archivo' => 'avecrem.png'],
            ['nombre' => 'Bambino', 'tipo_id' => 1, 'archivo' => 'bambino.png'],
            ['nombre' => 'Beeboo', 'tipo_id' => 2, 'archivo' => 'beeboo.png'],
            ['nombre' => 'Boo-hoot', 'tipo_id' => 2, 'archivo' => 'boo-hoot.png'],
            ['nombre' => 'Cabrales', 'tipo_id' => 1, 'archivo' => 'cabrales.png'],
            ['nombre' => 'Catua', 'tipo_id' => 2, 'archivo' => 'catua.png'],
            ['nombre' => 'Catyuska', 'tipo_id' => 2, 'archivo' => 'catyuska.png'],
            ['nombre' => 'Chapapá', 'tipo_id' => 3, 'archivo' => 'chapapa.png'],
            ['nombre' => 'Chopper', 'tipo_id' => 1, 'archivo' => 'chopper.png'],
            ['nombre' => 'Cuellilargui', 'tipo_id' => 1, 'archivo' => 'cuellilargui.png'],
            ['nombre' => 'Deskangoo', 'tipo_id' => 1, 'archivo' => 'deskangoo.png'],
            ['nombre' => 'Doflamingo', 'tipo_id' => 2, 'archivo' => 'doflamingo.png'],
            ['nombre' => 'Dolly', 'tipo_id' => 1, 'archivo' => 'dolly.png'],
            ['nombre' => 'Elconchudo', 'tipo_id' => 3, 'archivo' => 'elconchudo.png'],
            ['nombre' => 'Eldientes', 'tipo_id' => 3, 'archivo' => 'eldientes.png'],
            ['nombre' => 'Elgominas', 'tipo_id' => 1, 'archivo' => 'elgominas.png'],
            ['nombre' => 'Flipper', 'tipo_id' => 3, 'archivo' => 'flipper.png'],
            ['nombre' => 'Floppi', 'tipo_id' => 1, 'archivo' => 'floppi.png'],
            ['nombre' => 'Horseluis', 'tipo_id' => 3, 'archivo' => 'horseluis.png'],
            ['nombre' => 'Krokolisko', 'tipo_id' => 3, 'archivo' => 'krokolisko.png'],
            ['nombre' => 'Kurama', 'tipo_id' => 1, 'archivo' => 'kurama.png'],
            ['nombre' => 'Ladybug', 'tipo_id' => 2, 'archivo' => 'ladybug.png'],
            ['nombre' => 'Lengualargui', 'tipo_id' => 1, 'archivo' => 'lengualargui.png'],
            ['nombre' => 'Medusation', 'tipo_id' => 3, 'archivo' => 'medusation.png'],
            ['nombre' => 'Meekmeek', 'tipo_id' => 1, 'archivo' => 'meekmeek.png'],
            ['nombre' => 'Megalo', 'tipo_id' => 3, 'archivo' => 'megalo.png'],
            ['nombre' => 'Mocha', 'tipo_id' => 3, 'archivo' => 'mocha.png'],
            ['nombre' => 'Murcimurci', 'tipo_id' => 2, 'archivo' => 'murcimurci.png'],
            ['nombre' => 'Nemo', 'tipo_id' => 3, 'archivo' => 'nemo.png'],
            ['nombre' => 'Oinkcelot', 'tipo_id' => 1, 'archivo' => 'oinkcelot.png'],
            ['nombre' => 'Oreo', 'tipo_id' => 1, 'archivo' => 'oreo.png'],
            ['nombre' => 'Otto', 'tipo_id' => 1, 'archivo' => 'otto.png'],
            ['nombre' => 'Pinchimott', 'tipo_id' => 3, 'archivo' => 'pinchimott.png'],
            ['nombre' => 'Pollis', 'tipo_id' => 2, 'archivo' => 'pollis.png'],
            ['nombre' => 'Posón', 'tipo_id' => 2, 'archivo' => 'poson.png'],
            ['nombre' => 'Quakko', 'tipo_id' => 3, 'archivo' => 'quakko.png'],
            ['nombre' => 'Rajoy', 'tipo_id' => 2, 'archivo' => 'rajoy.png'],
            ['nombre' => 'Rawlion', 'tipo_id' => 1, 'archivo' => 'rawlion.png'],
            ['nombre' => 'Rexxo', 'tipo_id' => 1, 'archivo' => 'rexxo.png'],
            ['nombre' => 'Ron', 'tipo_id' => 1, 'archivo' => 'ron.png'],
            ['nombre' => 'Sesssi', 'tipo_id' => 1, 'archivo' => 'sesssi.png'],
            ['nombre' => 'Shelly', 'tipo_id' => 3, 'archivo' => 'shelly.png'],
            ['nombre' => 'Sirucco', 'tipo_id' => 2, 'archivo' => 'sirucco.png'],
            ['nombre' => 'Torcas', 'tipo_id' => 3, 'archivo' => 'torcas.png'],
            ['nombre' => 'Trompeta', 'tipo_id' => 2, 'archivo' => 'trompeta.png'],
            ['nombre' => 'Trompi', 'tipo_id' => 1, 'archivo' => 'trompi.png'],
            ['nombre' => 'Tux', 'tipo_id' => 3, 'archivo' => 'tux.png'],
        ];


        foreach ($xuxemons as $xuxemon) {
            Xuxemon::create([
                'nombre' => $xuxemon['nombre'],
                'tipo_id' => $xuxemon['tipo_id'],
                'archivo' => $xuxemon['archivo'],
            ]);
        }
    }
}
