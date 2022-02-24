@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('comic.update', $comic->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="author" class="form-label">New Element</label>
                        <input type="text" class="form-control" id="author"           aria-describedby="emailHelp" name="author" placeholder="Inserisci l'autore" value="{{$comic->author}}">
                    </div>
                    <div class="mb-3">
                        <label for="illustrator" class="form-label"></label>
                        <input type="text" class="form-control" id="illustrator" name="illustrator" placeholder="inserisci l'illustratore" value="{{$comic->illuastrator}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"></label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="inserisci la descrizione" value="{{$comic->description}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label"></label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="inserisci il prezzo del fumetto" value="{{$comic->price}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica un elemento</button>
                </form>                 
            </div>
        </div>
    </div>
@endsection