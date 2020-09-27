<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Post;

class BlogController extends Controller
{
    

    public function index()
    {
    	$posts = Post::get()->all();
        return view('ui.blog.index', compact('posts'));
    }
    public function post($id)
    {
        
       
        $postquery = Post::orderBy('id','DESC');
        $postquery->where('slug',$id);
        $post = $postquery->first();

        return view('ui.blog.single', compact('post'));
    }

}

