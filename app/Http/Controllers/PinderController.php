<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PinderController extends Controller
{
    public function index()
    {
        $registros = Post::all();
        return view ('index2',compact('registros'));
    }

    public function show($id)
    {
        $busqueda = Post::find($id);
        return view ('MascotaPublic',['registro1'=> $busqueda ]);
    }

}
