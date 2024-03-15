<?php

namespace App\Http\Controllers;

use App\Models\Chuches;
use App\Models\ChuchesUser;
use App\Models\Xuxemon;
use Illuminate\Http\Request;

class ChuchesUserController extends Controller
{



    public function debug(Request $request){

        try {


            $user_id = $request->input('user_id');

            for ($i = 1; $i <= 10; $i++) {



                $chuches = Chuches::inRandomOrder()->first();
                $request->merge([
                    'user_id'=> $user_id,
                    'chuches_id'=> $chuches['id'] ,
                    'cantidad'=> 1 ,
                ]);


                $chuce = ChuchesUser::where('user_id', $request['user_id'])->where('chuches_id', $request['chuches_id'])->first();


                if($chuce != null){

                    $chuce->cantidad ++;
                    $chuce->save();

                }else{
                    ChuchesUser::create( $request->all());
                }


            }

            return response()->json('ChuchesUser creado con éxito');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function indexChuchesUsu(Request $request){

        try {
            $chuches = ChuchesUser::select(['chuches_users.*','chuches.nombre as nombre',
                'chuches.descripcion as descripcion','chuches.archivo as archivo','chuches.expLvl as expLvl'])
                ->join('chuches','chuches.id','=','chuches_users.chuches_id')
                ->where('user_id', 'like','%'.$request['user_id'].'%')->get();
            return response()->json($chuches, 200);
        }catch (ValidationException|QueryException|Exception $e){
            return response()->json( ['error'=>$e]);
        }
    }
}
