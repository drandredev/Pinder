<?php

namespace App\Http\Controllers;

use App\Accesorios;
use App\User;
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
        $nombreA =$request->get('buscarpor');

        if(empty($nombreA)){
            $accesor = Accesorios::paginate(6);
            return view ('busquedaAccesorios',compact('accesor'));
        }else{
            $accesor =Accesorios::where('nombre','like',"%$nombreA%")->paginate();
            return view('busquedaAccesorios',compact('accesor'));
        }
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
        return view('administrador.NewAccesoriosAdmin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required:max:120',
            'marca' => 'required:max:10',
            'precio' => 'required:max:2200',
            'tipo' => 'required:max:25',
            'imagen' => 'required|image|mimes:jpeg,png,jpg|:max2048',
            'talla' => 'required:max:1',
            'color' => 'required:max:8',
        ]);

        $image = $request->file('imagen');
        $imageName = time().$image->getClientOriginalName();
        $nombre = $request->get('nombre');
        $marca = $request->get('marca');
        $precio = $request->get('precio');
        $tipo = $request->get('tipo');
        $talla = $request->get('talla');
        $color = $request->get('color');


        $accesorio = $request->user()->accesorios()->create([
            'nombre' => $nombre,
            'marca' => $marca,
            'imagen' => 'img/'.$imageName,
            'precio' => $precio,
            'tipo' => $tipo,
            'talla' => $talla,
            'color' => $color,

        ]);

        $request->imagen->move(public_path('img'), $imageName);
        
        return redirect()->route('accesorios', ['id' => $accesorio->id]);
    }


    public function edit($id)
    {
        $edicionAcc = Accesorios::find($id);
        return view('administrador.accesorioedit')->with('edicionAcc',$edicionAcc);
    }


    public function update(Request $request, $id)
    {
        $accesorio = Accesorios::find($id);
        $accesorio->nombre = $request->get('nombre');
        $accesorio->marca = $request->get('marca');
        $accesorio->precio = $request->get('precio');
        $accesorio->tipo = $request->get('tipo');
        $accesorio->talla = $request->get('talla');
        $accesorio->color = $request->get('color');

        $accesorio->save();

        return redirect()->route('accesorios');
    }


    public function destroy($id)
    {
        $accesorio = Accesorios::find($id);
        $accesorio->delete();

        return redirect()->route('accesorios');
    }

    public function accesorios(Request $request)
    {
        $accesorios = Accesorios::paginate(5);
        return view ('administrador.accesorios')->with('accesorios',$accesorios);
    }
}
