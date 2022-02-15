<?php

namespace App\Http\Controllers;

use App\Models\address;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Auth::user()->id;
        $addresses = address::paginate(4);
        return view("address.index", compact("addresses", "usuario"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //strcmp
         if(!Auth::user()){
            abort(404);
        }
        $usuario = Auth::user()->id;
        return view("address.store", compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* $address = new Address();
        $address -> user_id =  $request->get('userId');
        $address -> calle = $request->get('calle');
        $address -> patio = $request->get('patio');
        $address -> puerta = $request->get('puerta');
        $address -> numero = $request->get('numero');
        $address -> cod_postal = $request->get('cod_postal');
        $address -> ciudad = $request->get('ciudad');
        $address -> provincia = $request->get('provincia');
        $address -> pais = $request->get('pais');
        $address->save();

        return response()->json($address, 201); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(address $address)
    {
        return view('address.show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(address $address)
    {
         //strcmp
         if(!Auth::user()){
            abort(404);
        }

        $usuario = Auth::user()->id;
        return view("address.edit", compact('address', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(address $address)
    {
        $address->delete();
        return redirect()->route('direccion.index');
    }
}
