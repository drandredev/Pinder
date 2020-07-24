<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'comentario' => 'required:max:250',
        ]);

        $comment = new Comentarios();
        $comment->user_id = $request->user()->id;
        $comment->comentario = $request->get('comentario');

        $post = Post::find($request->get('post_id'));
        $post->Comentarios()->save($comment);

        return redirect()->route('post', ['id' => $request->get('post_id')]);
    }
}
?>
