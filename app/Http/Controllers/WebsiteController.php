<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $latestPosts = Post::orderBy('id','desc')->take(5)->get();
        $categories = Categorie::take(5)->get();
        $posts = Post::where('is_publish', Post::Published)->simplePaginate(1);

        return view('website.blog.index' , [
            'posts' => $posts , 'latestPosts' => $latestPosts ,
            'categories' => $categories
        ]);
    }

    public function show(Post $post)
    {
        return view('website.blog.single', ['post' => $post]);
    }
}
