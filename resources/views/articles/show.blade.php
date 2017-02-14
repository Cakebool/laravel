@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>{{$article->title}}</h1>
                        <p>{{$article->content}}</p>
                        <p>créé par : {{$article->user->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection