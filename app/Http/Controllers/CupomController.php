<?php

namespace App\Http\Controllers;

use App\Cupom;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CupomController extends Controller
{
    public function cupom($cupom){

        $cupom = Cupom::where('cupom', $cupom)->first();

        return $cupom != null ? response()->json(['result' => true])  : response()->json(['result' => false]);

    }

    public function store(Request $request){
        $cupom = Cupom::create($request->all());
        if($cupom){
            return response()->json($cupom);
        }

        return response()->json(['result' => false]);
    }
}
