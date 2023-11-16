<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{



    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string',
            'autor' => 'required|string',
            'fecha' => 'required|date',
            'contenido' => 'required|string',
        ]);

       
        Post::create([
            'titulo' => $request->input('titulo'),
            'autor' => $request->input('autor'),
            'fecha' => $request->input('fecha'),
            'contenido' => $request->input('contenido'),
        ]);
        
        return redirect('/posts/create')->with('success', 'Entrada creada correctamente!.');
    }

 

    public function index()
    {
        $posts = Post::select('id', 'titulo', 'autor', 'fecha', 'contenido')
            ->get()
            ->map(function ($post) {
                $post->content = str_limit($post->content, 60);
                return $post;
            });

        return response()->json($posts);
    }
}