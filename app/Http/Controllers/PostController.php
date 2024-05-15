<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function menampilkan(){

        $posts = Post::all();                    // menampilkan semua data
        return view('posts.index', compact('posts'));
    }

    public function show($id){                  // menampilkan hanya 1 (by id)
         $posts = Post::findOrFail($id);
         return view('posts.show', compact('posts'));
    }

}
