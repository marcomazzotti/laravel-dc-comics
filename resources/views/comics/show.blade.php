@extends('layouts.app')

@section('content')
    <div class="container py-2">
        <h2 class="text-center">Dettagli del fumetto</h2>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card text-center w-50 pt-4">
                    <img class="w-50 mx-auto" src="{{ $comics->thumb }}" class="card-img-top" alt="locandina">
                    <div class="card-body">
                        <h5 class="p-4">{{ $comics->title }}</h5>
                        <p>Descrizione: <br> {{ $comics->description }}</p>
                        <p>Prezzo: {{ $comics->price }}</p>
                        <p>Serie: {{ $comics->series }}</p>
                        <p>In vendita dal: {{ $comics->sale_date }}</p>
                        <p>Tipo: {{ $comics->type }}</p>
                        <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla home</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
