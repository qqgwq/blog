<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
        $post = Post::where('slug', '=', $slug)->first();

        return view('blog.single')->withPost($post);
    }

    public function getIndex(){
        $posts = Post::paginate(5);
        return view('blog.index', compact('posts'));
    }
}
