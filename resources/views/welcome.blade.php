@extends('templates.layout')
@section('title')
Laravel
@endsection
@section('content')
    <div class="title m-b-md">
        Laravel
    </div>

    <h1>Bonjour, {{$prenom}} {{$nom}}</h1>

    <div class="links">
        <a href="https://laravel.com/docs">Documentation</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
@endsection
