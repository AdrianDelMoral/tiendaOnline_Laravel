<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/* use App\Http\Requests\AddressApiRequest; */
use Illuminate\Support\Facades\Validator;
/* use Illuminate\Http\Response;
use Exception; */

class AddressApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $addresses = Address::get();
        return response()->json($addresses, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*         if (!Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
       /*  $messages = [
            'calle.required' => 'La :attribute se requiere',
        ]; */
        $validator = Validator::make($request->all(), /* $messages, */ [
            'calle' => 'string|required|max:10|min:5',
            // 'patio' => 'integer|required|min:0|max:100',
            // 'puerta' => 'integer|required|min:0|max:100',
            'numero' => 'integer|required|min:0|max:100',
            'cod_postal' => 'integer|required|min:0|max:50000',
            'ciudad' => 'string|required|max:10|min:5',
            'provincia' => 'string|required|max:20|min:5',
            'pais' => 'string|required|max:20|min:5',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        } else {
            $address = new Address();
            $address->user_id =  $request->get('userId');
            $address->calle = $request->get('calle');
            $address->patio = $request->get('patio');
            $address->puerta = $request->get('puerta');
            $address->numero = $request->get('numero');
            $address->cod_postal = $request->get('cod_postal');
            $address->ciudad = $request->get('ciudad');
            $address->provincia = $request->get('provincia');
            $address->pais = $request->get('pais');
            $address->save();
            return response()->json(['Direccion' => $address->calle], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
/*         if (!Auth::user()) {
            return response()->json("No tienes permisos", 401);
        } */
        $validator = Validator::make($request->all(), /* $messages, */ [
            'calle' => 'string|required|max:10|min:5',
            // 'patio' => 'integer|required|min:0|max:100',
            // 'puerta' => 'integer|required|min:0|max:100',
            'numero' => 'integer|required|min:0|max:100',
            'cod_postal' => 'integer|required|min:0|max:50000',
            'ciudad' => 'string|required|max:10|min:5',
            'provincia' => 'string|required|max:20|min:5',
            'pais' => 'string|required|max:20|min:5',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        } else {
            $address->calle = $request->get('calle');
            $address->patio = $request->get('patio');
            $address->puerta = $request->get('puerta');
            $address->numero = $request->get('numero');
            $address->cod_postal = $request->get('cod_postal');
            $address->ciudad = $request->get('ciudad');
            $address->provincia = $request->get('provincia');
            $address->pais = $request->get('pais');
            $address->save();
            return response()->json(['Direccion' => $address->calle], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return response()->json(null, 204);
    }
}
