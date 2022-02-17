<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  if (!Auth::user() === "administrador") {
            return response()->json("No tienes permisos", 401);
        } */
        $categories = Category::get();
        return response()->json($categories, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* if (Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
        $validator = Validator::make($request->all(), [
            'nombre' => 'string|required|max:50|min:5',
            'descripcion' => 'max:255|min:10|required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        } else {
            $category = new Category();
            $category -> nombre = $request->get('nombre');
            $category -> descripcion = $request->get('descripcion');

            $category->save();

            return response()->json(['Categoria' => $category->nombre], 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
    /*     if (!Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
        $products = Product::where("category_id", $category->id)->with('images')->paginate(20);
        return response()->json($products);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
/*         if (!Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
        $category->delete();
        return response()->json(null, 204);
    }
}
