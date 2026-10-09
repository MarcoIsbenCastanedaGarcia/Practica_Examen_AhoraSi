@extends('layouts.app')

@section('title', 'Crear publicación')

@section('content')

<div class="create-post-page">

    <section class="create-post-card">

        @include('partials.logo')


        <div class="publication-user">

            <div class="publication-avatar">

                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M4 21a8 8 0 0 1 16 0"/>
                </svg>

            </div>

            <strong>
                {{ auth()->user()->name }}
            </strong>

        </div>


        <form
            action="{{ route('posts.store') }}"
            method="POST"
        >

            @csrf


            <div class="form-group">

                <label for="content">
                    Publicación
                </label>

                <textarea
                    id="content"
                    name="content"
                    rows="12"
                    maxlength="5000"
                    placeholder="Comparte tus ideas, pensamientos y mucho más..."
                    required
                >{{ old('content') }}</textarea>

            </div>


            <div class="publication-actions">

                <a
                    href="{{ route('home') }}"
                    class="button-outline"
                >
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="button-primary"
                >
                    Publicar
                </button>

            </div>

        </form>

    </section>

</div>

@endsection