<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

use App\Http\Requests\AddComxRequest;

class ScriptController extends Controller
{
    public function scriptItemUpdate($id, AddComxRequest $req){
        $product = ProductModel::find($id);

        $product->update([
            'header' => $request->input('header'),
            'price_site' => $request->input('price_site'),
            'comx_img' => $request->file('comx_img_1')->store('app/admin', 'public'),
        ]);

        return redirect()->route('outputTable');
    }

    public function buyProduct(Request $request){
        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response); 
    }

    public function scriptItemDelete($id){
        $product = ProductModel::find($id);
        if (file_exists(storage_path().$product->comx_img_1)) {
            unlink(storage_path().$product->comx_img_1);
        }
        $product->delete();
        return redirect()->route('outputTable');
    }
}
