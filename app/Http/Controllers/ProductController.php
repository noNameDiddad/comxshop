<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function showProduct ()
    {
        $product = new ProductModel();
        return view('main', ['product' => $product->all()]);
    }

    public function updateProduct($id){
        $product =new ProductModel;
        return view('update', ['product' => $product->find($id)]);
    }

    public function updateProductSubmit($id, AddComxRequest $req){
        $product = ProductModel::find($id);

        $product->update([
            'header' => $request->input('header'),
            'price_site' => $request->input('price_site'),
            'comx_img' => $request->file('comx_img')->store('admin', 'public'),
        ]);

        return redirect()->route('admin')->with('success', 'Сообщение было обновлено');
    }
    public function deleteProduct($id){
        $product = ProductModel::find($id);
        unlink(public_path('/storage/'.$product->comx_img));
        $product->delete();
        return redirect()->route('admin')->with('success', 'Сообщение было удалено');
    }

    public function buyProduct(Request $request){
        $response = array(
            'status' => 'success',
            'msg' => $request->message,
        );
        return response()->json($response); 
    }

    public function infoProduct($id){
        $product =new ProductModel;
        return view('product', ['product' => $product->find($id)]);
    }
}   