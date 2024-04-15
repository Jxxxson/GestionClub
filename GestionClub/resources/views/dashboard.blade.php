@extends("layouts.master")
@section('content')
    <x-app-layout>
        <!-- Titre de la page -->
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <!-- Contenu de la page -->
        <div class="py-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <!-- Carte principale -->
                        <div class="card">
                            <!-- Entête de la carte -->
                            <div class="card-header">{{ __('Welcome!') }}</div>

                            <!-- Corps de la carte -->
                            <div class="card-body">
                                <!-- Message de bienvenue -->
                                <p class="mb-4">Vous êtes connecté !</p>

                                <!-- Bouton de gestion des utilisateurs -->
                                <a href="{{ route('users') }}" class="btn btn-primary">
                                    Gestion des utilisateurs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
