@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="text-center">Modifica il fumetto</h2>
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('comics.update', $comics->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title', $comics->title) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ old('description', $comics->description) }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Url dell'immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    value="{{ old('thumb', $comics->thumb) }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price"
                    value="{{ old('price', $comics->price) }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series"
                    value="{{ old('series', $comics->series) }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    value="{{ old('sale_date', $comics->sale_date) }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type"
                    value="{{ old('type', $comics->type) }}">
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla home</a>

        </form>
    </div>
@endsection
