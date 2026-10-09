<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'FakeSTACK')
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet"
    >

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body>

@php
    $icons = [
        'home' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M3 11.5 12 4l9 7.5v8A1.5 1.5 0 0 1 19.5 21h-5v-6h-5v6h-5A1.5 1.5 0 0 1 3 19.5z"/>
            </svg>
        ',

        'bookmark' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M6 3.5h12a1 1 0 0 1 1 1V21l-7-4-7 4V4.5a1 1 0 0 1 1-1z"/>
            </svg>
        ',

        'chat' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 5.5A2.5 2.5 0 0 1 6.5 3h11A2.5 2.5 0 0 1 20 5.5v8a2.5 2.5 0 0 1-2.5 2.5H10l-5 4v-4.6A2.5 2.5 0 0 1 4 13.5z"/>
            </svg>
        ',

        'bell' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M18 9a6 6 0 1 0-12 0c0 6-3 6-3 8h18c0-2-3-2-3-8zM10 20h4"/>
            </svg>
        ',

        'search' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="11" cy="11" r="7"/>
                <path d="m16.5 16.5 4 4"/>
            </svg>
        ',

        'user' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="12" cy="8" r="4"/>
                <path d="M4 21a8 8 0 0 1 16 0"/>
            </svg>
        ',

        'plus' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 5v14M5 12h14"/>
            </svg>
        ',

        'logout' => '
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M10 4H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5M14 8l4 4-4 4M18 12H8"/>
            </svg>
        ',
    ];
@endphp


    <div class="site-wrapper">

        <header class="main-header">

            @include('partials.logo')

            <button
                type="button"
                class="mobile-menu-button"
                data-menu-button
                aria-label="Abrir menú"
            >
                <svg viewBox="0 0 24 24">
                    <path d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>

        </header>


        <div class="app-layout">

            @auth

                <aside class="sidebar" data-sidebar>

                    <nav>

                        <a
                            href="{{ route('home') }}"
                            class="sidebar-link"
                        >
                            <span class="sidebar-icon">
                                {!! $icons['home'] !!}
                            </span>

                            Inicio
                        </a>


                        <a
                            href="#"
                            class="sidebar-link"
                        >
                            <span class="sidebar-icon">
                                {!! $icons['bookmark'] !!}
                            </span>

                            Suscripciones
                        </a>


                        <a
                            href="#"
                            class="sidebar-link"
                        >
                            <span class="sidebar-icon">
                                {!! $icons['chat'] !!}
                            </span>

                            Chat
                        </a>


                        <a
                            href="#"
                            class="sidebar-link"
                        >
                            <span class="sidebar-icon">
                                {!! $icons['bell'] !!}
                            </span>

                            Actividad
                        </a>


                        <a
                            href="#"
                            class="sidebar-link"
                        >
                            <span class="sidebar-icon">
                                {!! $icons['search'] !!}
                            </span>

                            Explorar
                        </a>


                        <a
                            href="#"
                            class="sidebar-link"
                        >
                            <span class="sidebar-icon">
                                {!! $icons['user'] !!}
                            </span>

                            Perfil
                        </a>

                    </nav>


                    <a
                        href="{{ route('posts.create') }}"
                        class="create-button"
                    >
                        <span class="sidebar-icon">
                            {!! $icons['plus'] !!}
                        </span>

                        Crear
                    </a>


                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                    >
                        @csrf

                        <button
                            type="submit"
                            class="logout-button"
                        >
                            <span class="sidebar-icon">
                                {!! $icons['logout'] !!}
                            </span>

                            Cerrar sesión
                        </button>

                    </form>

                </aside>

            @endauth


            <main class="main-content">

                @if (session('success'))

                    <div class="alert-success">
                        {{ session('success') }}
                    </div>

                @endif


                @if ($errors->any())

                    <div class="alert-error">

                        <strong>
                            Revisa los siguientes datos:
                        </strong>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                @yield('content')

            </main>

        </div>


        <footer class="main-footer">

            <strong>
                FakeSTACK
            </strong>

            <span>
                Plataforma escolar para compartir ideas y pensamientos.
            </span>

        </footer>

    </div>

</body>

</html>