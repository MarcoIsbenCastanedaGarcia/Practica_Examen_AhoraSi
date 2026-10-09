<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()
            ->with('user')
            ->latest()
            ->get();

        return view(
            'home',
            compact('posts')
        );
    }
}