<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

use App\Http\Requests\AddComxRequest;

class ScriptController extends Controller
{

    public function buyProduct(Request $request){
        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response); 
    }
}
