<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class OutputController extends Controller
{
    // sections ================================
    public function outputNewItems()
    {
        $product = new ProductModel();
        return view('sections.main', ['product' => $product->all()]);
    }

    // program_pages ================================
    public function outputTable()
    {
        $product = new ProductModel();
        return view('program_pages.admin', ['product' => $product->all()]);
    }

    public function outputItemsInfo($id){
        $product =new ProductModel;
        return view('program_pages.product', ['product' => $product->find($id)]);
    }


    public function outputUpdatedItems($id){
        $product =new ProductModel;
        return view('program_pages.update', ['product' => $product->find($id)]);
    }
}
