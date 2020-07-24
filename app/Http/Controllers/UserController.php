<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = User::paginate(3);
         return view ('administrador.usuarios')->with('usuarios',$usuarios);
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    //Mismos Usuarios//
    public function edit()
    {
        $user_id = Auth::id();
        $usuario = User::find($user_id);
        return view('MiCuenta',compact('usuario'));
    }

    public function update(Request $request)
    {
        $user_id = Auth::id();
        $usuario = User::find($user_id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->telef = $request->get('telef');

        if($request->get('status') != null){
            $usuario->status = 0;
        }else{
            $usuario->status = 1;
        }
        $usuario->save();
        return redirect(action('UserController@edit'))->with('status','Las credenciales fueron modificadas correctamente');
    }
///////////////////////////////////////

///////Admin////////
    public function destroy($id)
    {
        $usuario = User::find($id);
        $mascotas = Post::where("user_id","=",$id)->get();

        for($i=0; $i<count($mascotas); $i++){
            $mascotas[$i]->delete();
        }

        $allmascotas = Post::all();

        for($i=0; $i<count($allmascotas); $i++){
            $allcomentarios = $allmascotas[$i]->Comentarios;
            for($x=0; $x < count($allcomentarios); $x++){
                if($allcomentarios[$x]->user_id == $id){
                    $allcomentarios[$x]->delete();
                }
            }
        }

        $usuario->delete();

        return redirect()->route('registros');
    }
   
    #public function editAdmin($id)
   # {
    #    $edicion = User::find($id);
     #   return view('administrador.usuariosedit')->with('edicion',$edicion);
   # }

   # public function updateAdmin(Request $request,$id)
   # {
    #    $usuario = User::find($id);
    #    $usuario->name = $request->get('name');
    #    $usuario->email = $request->get('email');
    #    $usuario->telef = $request->get('telef');
    #    $usuario->save();

     #   return redirect()->route('registros');
    #}
/////////////////////
}
