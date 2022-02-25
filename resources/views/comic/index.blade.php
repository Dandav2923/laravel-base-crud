@extends('layouts.base')

@section('content')
@if (session('status'))
    <div class="alert">
        {{session('status')}}
    </div>
@endif
    <div class="container">
        <div class="row">
            @foreach ($comics as $item)
                <div class="col-6 card">
                        <h1>{{$item->author}}</h1>
                        <h2>{{$item->illustrator}}</h2>
                        <p>{{$item->description}}</p>
                        <span>{{$item->price}}</span>
                        <a href="{{route('comic.create')}}">Create new element</a>
                        <a href="{{route('comic.edit', $item->id)}}">Modifica elemento</a>
                        <form action="{{route('comic.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="delete">
                        </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection