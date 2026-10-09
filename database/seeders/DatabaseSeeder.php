<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $rodrigo = User::updateOrCreate(
            [
                'email' =>
                    'rodrigo@fakestack.com',
            ],
            [
                'name' =>
                    'Rodrigo Mendez',

                'password' =>
                    Hash::make(
                        'Password123!'
                    ),
            ]
        );


        $cinthia = User::updateOrCreate(
            [
                'email' =>
                    'cinthia@fakestack.com',
            ],
            [
                'name' =>
                    'Cinthia White',

                'password' =>
                    Hash::make(
                        'Password123!'
                    ),
            ]
        );


        $jessica = User::updateOrCreate(
            [
                'email' =>
                    'jessica@fakestack.com',
            ],
            [
                'name' =>
                    'Jessica Garcia',

                'password' =>
                    Hash::make(
                        'Password123!'
                    ),
            ]
        );


        Post::firstOrCreate([
            'user_id' =>
                $rodrigo->id,

            'content' =>
                'Las ideas se vuelven más interesantes cuando encontramos un espacio para compartirlas.',
        ]);


        Post::firstOrCreate([
            'user_id' =>
                $cinthia->id,

            'content' =>
                'Escribir también es una forma de ordenar lo que pensamos.',
        ]);


        Post::firstOrCreate([
            'user_id' =>
                $jessica->id,

            'content' =>
                'Todo proyecto comienza con una idea, pero crece cuando alguien decide desarrollarla.',
        ]);
    }
}