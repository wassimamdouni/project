<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <style>
            /* Styles pour la liste déroulante */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                right: 0;
                background-color: white;
                min-width: 160px;
                box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content a, .dropdown-content button {
                color: black;
                padding: 8px 12px; /* Réduit la taille du bouton */
                text-decoration: none;
                display: block;
                background-color: rgba(255, 255, 255, 0.7); /* Transparence ajoutée */
                border: none;
                width: auto; /* Réduit la largeur du bouton */
                border-radius: 4px;
            }

            .dropdown-content a:hover, .dropdown-content button:hover {
                background-color: rgba(0, 0, 0, 0.1); /* Effet de survol */
            }

            /* Affichage de la liste déroulante au survol */
            .dropdown:hover .dropdown-content {
                display: block;
            }

            /* Bouton principal (nom de l'utilisateur) */
            .dropdown button {
                font-size: 14px; /* Réduit la taille de la police */
                padding: 6px 10px; /* Réduit la taille du bouton */
                background-color: rgba(255, 255, 255, 0.7); /* Transparence */
                border-radius: 4px;
                border: 1px solid #ccc; /* Ajout d'une bordure légère */
                transition: background-color 0.3s ease, color 0.3s ease; /* Transition pour effet de survol */
            }

            .dropdown button:hover {
                background-color: rgba(0, 0, 0, 0.3); /* Fond plus sombre au survol */
                color: white; /* Texte blanc au survol */
            }

            /* Style du lien Logout */
            .dropdown-content a.logout {
                background-color: rgba(255, 255, 255, 0.7); /* Transparence */
                padding: 8px 12px;
                border-radius: 4px;
                text-decoration: none;
                color: black;
            }

            .dropdown-content a.logout:hover {
                background-color: rgba(0, 0, 0, 0.1); /* Effet de survol */
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <!-- Dropdown User Button -->
        @auth
        <div class="dropdown">
            <button>{{ Auth::user()->name }}</button>
            <div class="dropdown-content">
                <a href="{{ route('profile.show') }}">Profile</a>
                <a href="{{ route('logout') }}" class="logout"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>

        <!-- Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </body>
</html>
