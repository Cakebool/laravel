@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>Formulaire pour créer un article</h1>

                        @if(count($error) > 0)
                            @include('messages.errors')
                        @endif

                        <form method="POST" action="{{route('articles.store')}}">
                            {{csrf_field()}}
                            <input type="text" name="title" placeholder="Titre">
                            <br>
                            <textarea name="content" id="" cols="30" rows="10"></textarea>
                            <br>
                            <input type="submit" value="Envoyer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection