<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CategoriesController extends Controller
{
    public function showCat($category)
    {
        $posts = Post::where('category', $category)
        ->orderBy('created_at', 'desc')->paginate(4);
        $data = array(
            'posts' => $posts,
            'category' => $category
        );
        return view('posts.index')->with($data);
    }
}
