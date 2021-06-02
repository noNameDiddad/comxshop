<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    // sections ================================
    public function outputMain()
    {
        $product = new Product();
        return view('sections.main', ['product' => $product->all()]);
    }
}
