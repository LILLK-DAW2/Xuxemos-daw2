<?php

namespace App\Http\Controllers;

use App\Models\ChuchesUser;
use App\Models\ConfigLvlXuxemons;
use App\Models\InventarioXuxemons;
use App\Models\Xuxemon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Nette\Schema\ValidationException;
class InventarioXuxemonsController extends Controller{
     public function index(){
    $xuxemons = InventarioXuxemons::all();
    return response()->json($xuxemons,200);

    }
    public function indexXuxemonsUsu(Request $request)
    {

        try {
            $xuxemons = InventarioXuxemons::select(['inventarioxuxemons.*','xuxemons.nombre as nombreXuxemon','xuxemons.archivo as archivo','tipos.nombre as tipo'])
                                                    ->join('xuxemons','xuxemons.id','=','inventarioxuxemons.xuxemon_id')
                                                    ->join('tipos','tipos.id','=','xuxemons.tipo_id')
                                                    ->where('user_id', 'like','%'.$request['user_id'].'%')->get();
            return response()->json($xuxemons, 200);
        }catch (ValidationException|QueryException|Exception $e){
            return response()->json( ['error'=>$e]);
        }

    }

    public function store(Request $request){

        try {
            $request->validate([
                'user_id'=>'required',
                'xuxemon_id'=>'required',
                'vida'=>'required|integer',
                'ataque' =>'required|integer',
                'defensa'=>'required|integer',
                'tamano'=>'required|string',
                'caramelos'=>'required|integer'
            ]);


            InventarioXuxemons::create($request->all());
            return response()->json('Xuxemon creado con exito');
        }catch (ValidationException|QueryException|Exception $e){
            return response()->json( ['error'=>$e]);
        }


    }

    public function debug(Request $request){

        try {

            $tamaos=['pequeño','mediano','grande'];

            $user_id = $request['user_id'];

            for ($i = 1; $i <= 10; $i++) {

                $xuxemons = Xuxemon::inRandomOrder()->first();
                $request->merge([
                    'user_id'=> $user_id,
                    'xuxemon_id'=> $xuxemons['id'] ,
                    'vida'=>rand(50,10),
                    'ataque' =>rand(50,100),
                    'defensa'=>rand(50,100),
                    'tamano'=>$tamaos[rand(0,2)],
                    'caramelos'=>0
                ]);


                $request->validate([
                    'user_id'=>'required',
                    'xuxemon_id'=>'required',
                    'vida'=>'required|integer',
                    'ataque' =>'required|integer',
                    'defensa'=>'required|integer',
                    'tamano'=>'required|string',
                    'caramelos'=>'required|integer'
                ]);


                InventarioXuxemons::create($request->all());
            }

            return response()->json('Xuxemon creado con exito');
        }catch (ValidationException|QueryException|Exception $e){
            return response()->json( ['error'=>$e]);
        }


    }

    protected function alimentarXuxemon(Request $request){



        try {
            $config = ConfigLvlXuxemons::first();
            $xuxemon = InventarioXuxemons::where('id', $request['xuxemon_id'])->first();
            $chuche = ChuchesUser::where('id', $request['chuche_id'])->first();


            if ($chuche->cantidad > 0) {
                $xuxemon->caramelos++;
                $chuche->cantidad--;

                if($xuxemon->tamano == 'pequeño')
                {

                    if($xuxemon->caramelos >= $config->peq_med)
                        {
                            $xuxemon->tamano = 'mediano';
                            $xuxemon->caramelos = $xuxemon->caramelos-$config->peq_med;
                        }

                }
                elseif($xuxemon->tamano == 'mediano')
                {

                    if($xuxemon->caramelos >= $config->med_gra)
                        {
                            $xuxemon->tamano = 'grande';
                            $xuxemon->caramelos = $xuxemon->caramelos- $config->med_gra;
                        }
                }

                $xuxemon->save();
                $chuche->save();
            }

            return response()->json(['xuxemon' => 'Xuxemon alimentado']);
        } catch (ValidationException | QueryException | Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }






    }

}
