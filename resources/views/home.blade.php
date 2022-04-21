@extends('layouts.standard')
@section('metaTitle')
    Movies
@endsection
@section('content')
    <main>
        <h2>Film Card</h2>
        
        @foreach ($movies as $movie)
            <ul class="card">
                <li>{{$movie->title}}</li>
                <li>{{$movie->original_title}}</li>
                <li>{{$movie->nationality}}</li>
                <li>{{$movie->date}}</li>
                <li>{{$movie->vote}}</li>
            </ul>
        @endforeach
        
    </main>
@endsection