<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddComxRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin', ['products' => Product::simplePaginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddComxRequest $request)
    {
        $request->validate([
            'publisher_manufacturer' => 'required',
            'header' => 'required',
            'stock_availability' => 'required',
            'price_site' => 'required',
            'price_purchase' => 'required',
            'discount_rate' => 'required',
            'ISBN' => 'required',
            'RRP' => 'required',
            'solded' => 'required',
            'year' => 'required',
            'comx_img_1' => 'required',
            'comx_img_2' => 'required',
            'comx_img_3' => 'required',
            'comx_img_4' => 'required',
            'comx_img_5' => 'required',
            'comx_description' => 'max:1800|min:100'
        ]);

        Product::create([
            'publisher_manufacturer' => $request->publisher_manufacturer,
            'header' => $request->header,
            'stock_availability' => $request->stock_availability,
            'price_site' => $request->price_site,
            'price_purchase' => $request->price_purchase,
            'discount_rate' => $request->discount_rate,
            'ISBN' => $request->ISBN,
            'RRP' => $request->RRP,
            'solded' => $request->solded,
            'year' => $request->year,
            'comx_img_1' => $request->file('comx_img_1')->store('app/admin', 'public'),
            'comx_img_2' => $request->file('comx_img_2')->store('app/admin', 'public'),
            'comx_img_3' => $request->file('comx_img_3')->store('app/admin', 'public'),
            'comx_img_4' => $request->file('comx_img_4')->store('app/admin', 'public'),
            'comx_img_5' => $request->file('comx_img_5')->store('app/admin', 'public'),
            'comx_description' => $request->comx_description
        ]);

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Product $admin)
    {
        return view('admin.show', ['product' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $admin)
    {
        return view('admin.edit', ['product' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AddComxRequest $request
     * @param Product $admin
     * @return \Illuminate\Http\Response
     */
    public function update(AddComxRequest $request, Product $admin)
    {
        $request->validate([
            'publisher_manufacturer' => 'required',
            'header' => 'required',
            'stock_availability' => 'required',
            'price_site' => 'required',
            'price_purchase' => 'required',
            'discount_rate' => 'required',
            'ISBN' => 'required',
            'RRP' => 'required',
            'solded' => 'required',
            'year' => 'required',
            'comx_img_1' => '',
            'comx_img_2' => '',
            'comx_img_3' => '',
            'comx_img_4' => '',
            'comx_img_5' => '',
            'comx_description' => 'required|max:1800|min:100'
        ]);
        $admin->publisher_manufacturer = $request->publisher_manufacturer;
        $admin->header = $request->header;
        $admin->stock_availability = $request->stock_availability;
        $admin->price_site = $request->price_site;
        $admin->price_purchase = $request->price_purchase;
        $admin->discount_rate = $request->discount_rate;
        $admin->ISBN = $request->ISBN;
        $admin->RRP = $request->RRP;
        $admin->solded = $request->solded;
        $admin->year = $request->year;

        if ($request->comx_img_1 ) {
            $admin->comx_img_1 = $request->file('comx_img_1')->store('app/admin', 'public');
        }
        if ($request->comx_img_2 ) {
            $admin->comx_img_2 = $request->file('comx_img_1')->store('app/admin', 'public');
        }
        if ($request->comx_img_3 ) {
            $admin->comx_img_3 = $request->file('comx_img_1')->store('app/admin', 'public');
        }
        if ($request->comx_img_4 ) {
            $admin->comx_img_4 = $request->file('comx_img_1')->store('app/admin', 'public');
        }
        if ($request->comx_img_5 ) {
            $admin->comx_img_5 = $request->file('comx_img_1')->store('app/admin', 'public');
        }

        $admin->comx_description = $request->comx_description;

        $admin->update();

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $admin)
    {
        if ($admin->delete()) {
            return redirect()->back();
        }
    }
}
