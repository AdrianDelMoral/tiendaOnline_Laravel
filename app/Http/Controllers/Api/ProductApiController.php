<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product -> nombre = $request->get('nombre');
        $product -> descripcion = $request->get('descripcion');
        $product -> visibilidad = $request->get('visibilidad');
        $product -> category_id = $request->get('category_id');
        $product -> precio_base = $request->get('precio_base');
        $product -> impuestos = $request->get('impuestos');
        $product -> descuento = $request->get('descuento');
        $path = Storage::putFile('products-imgs', $request->file('prod-img'));
        $product->save();

        $imgs = new Image();

        $imgs -> product_id = $product->id;
        $imgs -> img_path = $path;
        $imgs->save();
        //Storage::move("/storage/app/".$imgs->img_path, "/storage/public/".$imgs->img_path);
        return response()->json($product, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
