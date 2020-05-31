<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class publicController extends Controller
{
    public function index(){
        $posts = Post::with(['user', 'category', 'tags', 'comments'])->orderBy('id', 'DESC')->paginate(6);
        return view('publico.views.welcome', compact('posts'));
    }

    public function galeria(){
        return view('publico.views.partials.conteudo-galeria');
    }
}
