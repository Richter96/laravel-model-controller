@extends('layouts.app')


@section('content')
    <h1>Same Good Films</h1>

    <div class="container">
        <div class="row row-cols-xl-5 g-5">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card text-start">

                        <img class="card-img-top" src="https://picsum.photos/300" alt="Title">
                        <div class="card-body">
                            <h3 class="card-title">{{ $movie->title }}</h3>
                            <h5 class="card-title">{{ $movie->original_title }}</h5>
                            <span class="card-text">Voto: {{ $movie->vote }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p>Qui non ci sono Film a disposizione </p>
            @endforelse
        </div>
    </div>
@endsection
