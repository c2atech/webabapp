<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\models\Galeria;

class publicController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'category', 'tags', 'comments'])->orderBy('id', 'DESC')->paginate(3);
        return view('publico.views.welcome', compact('posts'));
    }

    public function conteudop(Post $post)
    {
       
        $post = $post->load(['user', 'category', 'tags', 'comments']);
        return view('publico.views.partials.conteudo-noticia', compact('post'));
    }

    public function galeria()
    {
        $galeria = Galeria::orderBy('id', 'DESC')->paginate(10);
        return view('publico.views.partials.conteudo-galeria', compact('galeria'));
    }
}
