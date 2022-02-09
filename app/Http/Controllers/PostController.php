<?php

namespace App\Http\Controllers;

use App\Models\Post;
use vendor;

class PostController extends Controller
{
    public function index(){

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post){   //this is something like: Post::where('slug', $post)->firstOrFail()
        return view('posts.show', ['post' => $post]);
    }





}
