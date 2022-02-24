{{-- // qui ci va il form --}}
@extends('layouts.base')

@section('documentTitle')
    {{$title}}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('comic.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="author" class="form-label">New Element</label>
                        <input type="text" class="form-control" id="author"           aria-describedby="emailHelp" name="Author" placeholder="Inserisci l'autore">
                    </div>
                    <div class="mb-3">
                        <label for="illustrator" class="form-label"></label>
                        <input type="password" class="form-control" id="illustrator" name="illustrator" placeholder="inserisci l'illustratore">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"></label>
                        <input type="password" class="form-control" id="description" name="description" placeholder="inserisci la descrizione">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label"></label>
                        <input type="password" class="form-control" id="price" name="price" placeholder="inserisci il prezzo del fumetto">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea un nuovo elemento</button>
                </form>                 
            </div>
        </div>
    </div>
@endsection