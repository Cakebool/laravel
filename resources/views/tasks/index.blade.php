@extends('templates.layout')
@section('title')
Tâches
@endsection
@section('content')
    <h1>Liste des taches</h1>

    <ul>
        @forelse($tasks as $task)
            <li>{{$task->title}}</li>
        @empty
            <li>Aucune tache</li>
        @endforelse
    </ul>
@endsection