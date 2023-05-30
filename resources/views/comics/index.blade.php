@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="text-center">Tutti i fumetti</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td><img class="w-50" src="{{ $comic->thumb }}" alt=""></td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Dettagli</a></td>
                        <td><a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a></td>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <td><button class="btn btn-primary" onclick="showAlert()">Elimina</button></td>
                            <script>
                                function showAlert() {
                                    if (confirm("Sei sicuro di voler eliminare questo fumetto?")) {
                                        document.getElementById("delete-form").submit();
                                    }
                                }
                            </script>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h4 class="text-center">Non trovi quello che stai cercando?</h4>
        <h4 class="text-center">Aggiungi un fumetto al catalogo!</h4>
        <div class="text-center mt-3"><a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi</a></div>

    </div>
@endsection
