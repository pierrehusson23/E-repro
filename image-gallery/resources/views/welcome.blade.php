@extends('layouts.app')

@section('content')

<form class="jumbotron text-center">
    <div>
        @if (Route::has('login'))
        <div class="container">
            <h1>Galerie d'images</h1>
            @auth
            <a href="{{ url('view-uploads') }}" class="btn btn-secondary my-2">Voir les images</a>
            <a href="{{ url('file-upload') }}" class="btn btn-secondary my-2">Uploader une image</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-secondary my-2">Se connecter</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-secondary my-2">Créer un compte</a>
            @endif
            @endif
        </div>
        @endif
    </div>
</form>

@endsection