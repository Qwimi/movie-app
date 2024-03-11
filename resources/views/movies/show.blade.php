@extends('layouts.layout')
@section('content')
    <div class="container rounded-3 mt-5">

        <div class="row p-5">
            <div class="col">
                <h2>{{ $movie->name }}</h2>
            </div>
            <div class="col">
                <p>{{ $movie->created_at }}</p>
            </div>
        </div>

        <div class="row p-5">
            <iframe src="{{ $movie->movies }}" width="250" height="400" frameborder="0"></iframe>
        </div>

        <div class="row p-5">
            <div class="col">
                <p><b>Описание:</b> {{ $movie->description }}</p>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        Понравилось: {{ $movie->likes }}
                    </div>
                    <div class="col">
                        Не понравилось: {{ $movie->dislikes }}
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
