<?php

namespace App\Http\Controllers;

use App\Models\Xuxemon;
use Illuminate\Http\Request;

class XuxemonsController extends Controller
{
    public function index()
    {
        $xuxemons = Xuxemon::all();
        return response()->json($xuxemons,200);

    }
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string',
            'vida'=>'required|integer',
            'tipo_id'=>'required',
            'archivo'=>'required|string',
            'descripcion' => 'required|string',
        ]);


        Xuxemon::create($request->all());
        return response()->json('Xuxemon creado con exito');

    }

    public function destroy(Request $request)
    {
        $idXuxemon = $request->input('id');
        $xuxemon = Xuxemon::findOrFail($idXuxemon);
        $xuxemon->delete();
        return response()->json('xuxemon elimninado con exito',200);
    }
    public function findXuxemon(Request $request)
    {
        $idXuxemon = $request->input('id');
        $xuxemon = Xuxemon::findOrFail($idXuxemon);
        return response()->json($xuxemon,200);
    }


    public function update(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'nombre' => 'required|string|max:255',
            'vida'=>'required|integer',
            'tipo_id'=>'required',
            'archivo'=>'required|string',
            'descripcion' => 'required|string',
        ]);



        $xuxemon= Xuxemon::findOrFail($request->input('id'));
        $xuxemon->update($request->all());

        return response()->json('editado',200);
    }
}
