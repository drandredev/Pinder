<?php

namespace App\Http\Controllers;

use App\Accesorios;
use Illuminate\Http\Request;

class AccesoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    
     public function index(Request $request)
    {
        $nombre =$request->get('buscarpor');

        $Accesorio =Accesorios::where('nombre','like',"%$nombre%")->paginate(5);

        return view('busquedaAccesorios',compact('Accesorio'));

        $accesor = Accesorios::all();
        return view ('busquedaAccesorios',compact('accesor'));
    }
    

    public function show($id)
    {
        $muestra = Accesorios::find($id);
        return view ('AccesorPublic',['accesoPu'=> $muestra ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accesorios  $accesorios
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accesorios  $accesorios
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesorios $accesorios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accesorios  $accesorios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesorios $accesorios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accesorios  $accesorios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesorios $accesorios)
    {
        //
    }
}
