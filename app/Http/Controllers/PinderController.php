<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PinderController extends Controller
{
    public function index()
    {
        $registros = Post::all();
        return view ('index',compact('registros'));
    }

    public function busqueda(Request $request)
    {
        $nombreM =$request->get('buscarporM');
        $AccesorioM =Post::where('name','like',"%$nombreM%")->paginate(5);
        return view('busquedaMascota',compact('AccesorioM'));
    }

    public function show($id)
    {
        $busqueda = Post::find($id);
        return view ('MascotaPublic',['registro1'=> $busqueda ]);
    }

}
