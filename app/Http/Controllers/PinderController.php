<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Carbon\Carbon;

class PinderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        $nombreM =$request->get('buscarporM');

        if(empty($nombreM)){
            $registros = Post::paginate(6);
            return view ('index',compact('registros'));
        }else{
            $registros =Post::where('name','like',"%$nombreM%")->paginate(6);
            return view('index',compact('registros'));
        }
    }

    public function busquedaAv(Request $request)
    {
        $raza =$request->get('buscarRaza');
        $sexo = $request->get('buscarSexo');
        $tipo = $request->get('buscarTipo');

        $busquedaA =Post::rasas($raza)->types($tipo)->sexos($sexo)->paginate(6);
        return view('busquedaMascota',compact('busquedaA'));
      
    }

    public function create()
    {
        return view('NuevaMascot');
    }
    
    public function show($id)
    { 
        #$usuario = User::find($user_id);
        #$contacto = Post::where($id,'=',$usuario);
        return view ('MascotaPublic',['post'=> Post::findOrfail($id) ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required:max:120',
            'sex' => 'required:max:2',
            'image' => 'required|image|mimes:jpeg,png,jpg|:max2048',
            'description' => 'required:max:2200',
            'race' => 'required:max:25',
            'type' => 'required:max:8',
        ]);

        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();
        $title = $request->get('name');
        $sex = $request->get('sex');
        $content = $request->get('description');
        $race = $request->get('race');
        $type = $request->get('type');


        $post = $request->user()->posts()->create([
            'name' => $title,
            'sex' => $sex,
            'image' => 'img/'.$imageName,
            'description' => $content,
            'race' => $race,
            'type' => $type,

        ]);

        $request->image->move(public_path('img'), $imageName);
        
        return redirect()->route('post', ['id' => $post->id]);
    }

    public function userPosts()
    {
        $user_id = Auth::id();
        $registros = Post::where('user_id', '=', $user_id)->paginate(6);
        return view('MisMascotas', compact('registros'));
    }

    public function Delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('mascota/myPosts');
    }

    public function edit($id)
    {
        return view('editMascota', ['post'=> Post::findOrFail($id)]);
    }

    public function update(Request $request,$id)
    {
        $user_id = Auth::id();
        $post = Post::find($id);
        //Campos del Modelo Post//
        $post->name = $request->get('name');
        $post->sex = $request->get('sex');
        $post->description = $request->get('description');
        $post->race = $request->get('race');
        $post->type = $request->get('type');
        ///////////////////////////

        if($request->get('status') != null){
            $post->status = 0;
        }else{
            $post->status = 1;
        }
        $post->save();
        return redirect('mascota/myPosts')->with('status','El Post ha sido modificado correctamente');
    }

    public function today()
    {
        $hoy=Carbon::today();
        $mañana=Carbon::tomorrow();
        $siempre=Post::WhereBetween('created_at',[$hoy,$mañana])->paginate(6);   
        
        return view('today',compact('siempre'));
    }

   // public function correo(Request $request)
    //{
    //    $mail =$request->input('email');
    //    Mail::to($mail)->send(new WelcomeEmail());
    //}
    
    //ADMIN//
    public function mascotas(Request $request)
    {
        $mascotas = Post::paginate(5);
        return view ('administrador.mascotas')->with('mascotas',$mascotas);
    }

    public function DeleteAdministrador($id)
    {
        $postAd = Post::find($id);
        $postAd->delete();
        return redirect('/admin/mascotas');
    }

    public function editAdministrador($id)
    {
        $edicionMas = Post::find($id);
        return view('administrador.mascotaedit')->with('edicionMas',$edicionMas);
    }

    public function updateAdministrador(Request $request,$id)
    {
        $mascota = Post::find($id);
        //Campos del Modelo Post//
        $mascota->name = $request->get('name');
        $mascota->sex = $request->get('sex');
        $mascota->description = $request->get('description');
        $mascota->race = $request->get('race');
        $mascota->type = $request->get('type');
        ///////////////////////////

        if($request->get('status') != null){
            $mascota->status = 0;
        }else{
            $mascota->status = 1;
        }
        $mascota->save();
        return redirect('/admin/mascotas')->with('status','La mascota ha sido modificada correctamente');
    }
}
