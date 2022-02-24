@extends('layouts.base')

@section('content')
    <div class="contaiener">
        <div class="row">
            <div class="col-6 card">
                <h1>{{$comic->author}}</h1>
                <h2>{{$comic->illustrator}}</h2>
                <p>{{$comic->description}}</p>
                <span>{{$comic->price}}</span>
                <a href="{{route('comic.index')}}">Torna alla home</a>
            </div>
        </div>
    </div>
@endsection