<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function create(): View
    {
        return view(
            'posts.create'
        );
    }


    public function store(
        Request $request
    ): RedirectResponse {

        $datos = $request->validate([
            'content' => [
                'required',
                'string',
                'max:5000',
            ],
        ]);


        $request
            ->user()
            ->posts()
            ->create($datos);


        return redirect()
            ->route('home')
            ->with(
                'success',
                'Publicación creada correctamente.'
            );
    }
}