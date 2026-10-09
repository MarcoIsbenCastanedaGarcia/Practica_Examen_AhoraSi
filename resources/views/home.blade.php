@extends('layouts.app')

@section('title', 'Inicio - FakeSTACK')

@section('content')

<div class="feed-page">

    @guest

        <section class="guest-actions">

            <p>
                ¿No tienes una cuenta?
            </p>

            <a
                href="{{ route('register') }}"
                class="button-primary"
            >
                Regístrate aquí
            </a>

            <span>
                o
            </span>

            <a
                href="{{ route('login') }}"
                class="button-outline"
            >
                Inicia sesión
            </a>

        </section>

    @endguest


    <section class="feed">

        @forelse ($posts as $post)

            <article class="post-card">

                <div class="post-user">

                    <div class="avatar">

                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M4 21a8 8 0 0 1 16 0"/>
                        </svg>

                    </div>


                    <div>

                        <strong>
                            {{ $post->user->name }}
                        </strong>

                        <small>
                            {{ $post->created_at->diffForHumans() }}
                        </small>

                    </div>

                </div>


                <div class="post-content">

                    <p>
                        {{ $post->content }}
                    </p>

                </div>

            </article>

        @empty

            <div class="empty-state">

                <svg viewBox="0 0 24 24">
                    <path d="M4 5.5A2.5 2.5 0 0 1 6.5 3h11A2.5 2.5 0 0 1 20 5.5v8a2.5 2.5 0 0 1-2.5 2.5H10l-5 4v-4.6A2.5 2.5 0 0 1 4 13.5z"/>
                </svg>

                <h2>
                    Aún no hay publicaciones
                </h2>

                <p>
                    Sé la primera persona en compartir una idea.
                </p>

            </div>

        @endforelse

    </section>

</div>

@endsection