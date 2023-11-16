<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;

class ApiPostController extends Controller
{
    public function index()
    {
        $posts = Post::select('id', 'titulo', 'autor', 'fecha', 'contenido')
            ->get()
            ->map(function ($post) {
                $post->contenido = Str::limit($post->contenido, 60);
                return $post;
            });

        return response()->json($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post no encontrado'], 404);
        }

        return response()->json($post);
    }

    public function search($keyword)
    {
        $posts = Post::where('contenido', 'like', '%' . $keyword . '%')
        ->select('id', 'titulo', 'autor', 'fecha', 'contenido')
        ->get();

        return response()->json($posts);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string',
            'autor' => 'required|string',
            'fecha' => 'required|date_format:Y-m-d',
            'contenido' => 'required|string',
        ]);

        $post = Post::find($id);

        if (!$post) {
            return response()->json(['error' => 'Articulo no encontrado'], 404);
        }

        $post->titulo = $request->input('titulo');
        $post->autor = $request->input('autor');
        $post->contenido = $request->input('contenido');

        $post->save();

        return response()->json($post);
    }
}
