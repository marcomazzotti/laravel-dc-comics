@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="text-center">Modifica il fumetto</h2>
        <form action="{{ route('comics.update', $comics->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comics->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $comics->description }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Url dell'immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comics->thumb }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comics->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comics->series }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comics->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comics->type }}">
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla home</a>

        </form>
    </div>
@endsection
