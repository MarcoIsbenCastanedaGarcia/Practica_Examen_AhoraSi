@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')

<div class="auth-page">

    <section class="auth-card">

        @include('partials.logo')


        <h1>
            Iniciar sesión
        </h1>


        <form
            action="{{ route('login.store') }}"
            method="POST"
        >

            @csrf


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


            <button
                type="submit"
                class="button-primary button-large"
            >
                Ingresar
            </button>

        </form>


        <p class="auth-link">

            ¿No tienes cuenta?

            <a href="{{ route('register') }}">
                Crear cuenta
            </a>

        </p>

    </section>

</div>

@endsection