<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view(
            'posts.index',
            [
                'posts' => Post::published()->latest("published_at")->take(9)->get(),
            ]
        );
    }
}
