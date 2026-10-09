@extends('layouts.app')

@section('title', 'Crear cuenta')

@section('content')

<div class="auth-page">

    <section class="auth-card">

        @include('partials.logo')


        <h1>
            Crear cuenta
        </h1>


        <form
            action="{{ route('register.store') }}"
            method="POST"
        >

            @csrf


            <div class="form-group">

                <label for="name">
                    Nombre de usuario
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Ingresa tu username"
                    maxlength="100"
                    required
                >

            </div>


            <div class="form-group">

                <label for="email">
                    Correo electrónico
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Ingresa tu correo electrónico"
                    required
                >

            </div>


            <div class="form-group">

                <label for="password">
                    Contraseña
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Ingresa tu contraseña"
                    required
                >

            </div>


            <div class="form-group">

                <label for="password_confirmation">
                    Confirmar contraseña
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Vuelve a escribir tu contraseña"
                    required
                >

            </div>


            <button
                type="submit"
                class="button-primary button-large"
            >
                Crear cuenta
            </button>

        </form>


        <p class="auth-link">

            ¿Ya tienes cuenta?

            <a href="{{ route('login') }}">
                Inicia sesión
            </a>

        </p>

    </section>

</div>

@endsection