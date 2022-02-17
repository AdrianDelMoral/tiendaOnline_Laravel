<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        /*    if (!Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
        $validator = Validator::make($request->all(), [
            'nombre' => 'string|required|max:10|min:5',
            'descripcion' => 'max:255|min:10|required',
            'visibilidad' => 'required',
            'cantidad' => 'integer|min:0|required',
            'category_id' => 'integer|required',
            'precio_base' => 'integer|required|min:0',
            'impuestos' => 'integer|required|min:0',
            'descuento' => 'integer|required|min:0',
            'prod-img' => 'required|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        } else {

            $product = new Product();
            $product->nombre = $request->get('nombre');
            $product->descripcion = $request->get('descripcion');
            $product->visibilidad = $request->get('visibilidad');
            $product->cantidad = $request->get('cantidad');
            $product->category_id = $request->get('category_id');
            $product->precio_base = $request->get('precio_base');
            $product->impuestos = $request->get('impuestos');
            $product->descuento = $request->get('descuento');
            //$path = Storage::putFile('products-imgs', $request->file('prod-img'));
            $product->save();

            $archivos = $request->file("prod-img");
            foreach ($archivos as $archivo) {
                $path = Storage::putFile('products-imgs', $archivo);
                //return $path;
                $imgs = new Image();
                $imgs->product_id = $product->id;
                $imgs->img_path = $path;
                $imgs->save();
            }

            return response()->json(['producto' => $product->nombre], 201);
        }
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
        $products = Product::where("id", $product->id)->with("images")->get();
        return $products;
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
        /* if (!Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
        $validator = Validator::make($request->all(), [
            'nombre' => 'string|required|max:10|min:5',
            'descripcion' => 'max:255|min:10|required',
            'visibilidad' => 'required',
            'cantidad' => 'integer|min:0|required',
            'category_id' => 'integer|required',
            'precio_base' => 'integer|required|min:1',
            'impuestos' => 'integer|required|min:0',
            'descuento' => 'integer|required|min:0',
            'prod-img' => 'required|min:1'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        } else {
            $product->nombre = $request->get('nombre');
            $product->descripcion = $request->get('descripcion');
            $product->visibilidad = $request->get('visibilidad');
            $product->cantidad = $request->get('cantidad');
            $product->category_id = $request->get('category_id');
            $product->precio_base = $request->get('precio_base');
            $product->impuestos = $request->get('impuestos');
            $product->descuento = $request->get('descuento');
            $product->save();

            if ($request->hasFile('prod-img')) {
                $archivos = $request->file("prod-img");

                foreach ($archivos as $archivo) {
                    $path = Storage::putFile('products-imgs', $archivo);
                    //return $path;
                    $imgs = new Image();
                    $imgs->product_id = $product->id;
                    $imgs->img_path = $path;
                    $imgs->save();
                }
            }

            return response()->json(['producto' => $product->nombre], 201);
        }
    }

    public function deshabilitar(Product $product)
    {
        /* if (!Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
        $product->visibilidad = 0;
        $product->save();
        return $product;
        return response()->json($product, 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        /*  if (!Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
        //$product = Product::findOrFail($product->id);
        $product->delete();
    }
}
