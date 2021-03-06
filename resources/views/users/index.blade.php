@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>{{Auth::user()->name}}</h1>
                        <p>email : {{Auth::user()->email}}</p>
                        <p>Articles de {{Auth::user()->name}} :</p>
                        <ul>
                            @forelse(Auth::user()->articles as $article)
                                <li>{{$article->title}}</li>
                            @empty
                                <li>Aucun article</li>
                            @endforelse

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection