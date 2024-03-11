<?php

namespace App\Http\Controllers;

use App\Models\InventarioXuxemons;
use App\Models\Xuxemon;
use Illuminate\Http\Request;

class InventarioXuxemonsController extends Controller{
     public function index(){
    $xuxemons = InventarioXuxemons::all();
    return response()->json($xuxemons,200);

    }

    public function store(Request $request){

        $request->validate([
            'user_id'=>'required',
            'xuxemon_id'=>'required',
            'vida'=>'required|integer',
            'ataque ' =>'required|integer',
            'defensa'=>'required|integer',
            'tamaño'=>'required|string',
            'caramelos'=>'required|integer'
        ]);


        InventarioXuxemons::create($request->all());
        return response()->json('Xuxemon creado con exito');

    }

}
