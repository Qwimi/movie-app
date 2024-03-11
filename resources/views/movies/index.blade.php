@extends('layouts.layout')
@section('content')
    <div class="container rounded-3 mt-5">

        <div class="row mb-3">
            <h1>Главная</h1>
        </div>

        @foreach ($movies as $movie)
            <div class="row movie-item">
                <div class="col">
                    <img src="{{ $movie->preview }}" class="movie-img">
                </div>
                <div class="col">
                    <p class="movie-name">{{ $movie->name }}</p>
                    <p class="movie-date">{{ $movie->created_at }}</p>
                </div>
                <div class="col">
                    <a href="{{ route('movies.show', ['movie' => $movie->id]) }}" type="button"
                        class="btn btn-light">Смотреть</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
