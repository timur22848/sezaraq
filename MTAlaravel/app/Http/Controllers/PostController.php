<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        // Retrieve all posts
        $posts = Posts::all();

        // Pass the posts to the view
        return view('posts.index', compact('posts'));
    }
}