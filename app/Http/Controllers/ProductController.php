<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil semua data dari database api_laravel8 table products
        $products = Product::all();

        // return respon berupa json
        return response()->json([
            $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Proses input data
        $product =  Product::create([
                        'name'          => $request->name,
                        'price'         => $request->price,     
                        'description'   => $request->description,
                        'enable_status' => $request->enable_status,
                        'quantity'      => $request->quantity
                    ]);

        // return respon berupa json
        return response()->json([
            "message"   => "Store Success",
            "data"      => $product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // return respon berupa json
        return response()->json([
            "message"   => "Show row with id=".$product->id." Success",
            "data"      => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // return respon berupa json
        return response()->json([
            "message"   => "Show row with id=".$product->id." Success",
            "data"      => $product
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        Product::where('id', $request->id)
                ->where('enable_status', true)
                ->update([
                    "name"          => $request->name,
                    "price"         => $request->price,
                    "description"   => $request->description,
                    "quantity"      => $request->quantity
                ]);

        // return respon berupa json
        return response()->json([
            "message"       => "Update row with id=".$product->id." Success",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Delete row data yang memiliki id=$id dari database api_laravel8 table products
        Product::destroy($product->id);

        // return respon berupa json
        return response()->json([
            "message"   => "Destroy row with id=".$product->id." Success",
            "data"      => $product
        ]); 
    }
}
