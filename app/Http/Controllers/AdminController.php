<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

use App\Http\Requests\AddComxRequest;

class AdminController extends Controller
{
    public function redirectPath($id)
    {
        if ($id == 1) {
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/admin';
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }

    public function admin()
    {
        $product = new ProductModel();
        return view('admin', ['product' => $product->all()]);
    }

    public function addPhoto(AddComxRequest $request)
    {
        $product = new ProductModel();
        $product->publisher_manufacturer = $request->input('publisher_manufacturer');
        $product->header = $request->input('header');
        $product->stock_availability = $request->input('stock_availability');
        $product->price_site = $request->input('price_site');
        $product->price_purchase = $request->input('price_purchase');
        $product->discount_rate = $request->input('discount_rate');
        $product->ISBN = $request->input('ISBN');
        $product->RRP = $request->input('RRP');
        $product->solded = $request->input('solded');
        $product->year = $request->input('year');
        $product->comx_img_1 = $request->file('comx_img_1')->store('admin', 'public');
        $product->comx_img_2 = $request->file('comx_img_2')->store('admin', 'public');
        $product->comx_img_3 = $request->file('comx_img_3')->store('admin', 'public');
        $product->comx_img_4 = $request->file('comx_img_4')->store('admin', 'public');
        $product->comx_img_5 = $request->file('comx_img_5')->store('admin', 'public');
        $product->comx_description = $request->input('comx_description');

        $product->save();

        return redirect()->route('admin');
    }
}
