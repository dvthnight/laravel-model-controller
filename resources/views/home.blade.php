@extends('layouts.standard')
@section('metaTitle')
    Movies
@endsection
@section('content')
    <main>
        <h2>Film Card</h2>
        
        <div class="container">
            @foreach ($movies as $movie)
            <ul class="card">
                <li><h4>Titolo:</h4> {{$movie->title}}</li>
                <li><h4>Titolo originale:</h4> {{$movie->original_title}}</li>
                <li><h4>Nazionalità:</h4> {{$movie->nationality}}</li>
                <li><h4>Data uscita:</h4> {{$movie->date}}</li>
                <li><h4>Voto:</h4> {{$movie->vote}}</li>
            </ul>
        @endforeach
        </div>
        
    </main>
@endsection