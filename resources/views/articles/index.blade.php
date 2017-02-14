@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>Liste des articles</h1>

                        <ul>
                            @forelse($articles as $article)
                                <li>{{$article->title}}</li>
                            @empty
                                <li>Aucun article</li>
                            @endforelse
                            {{$articles->links()}}
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection