@extends('layouts.main_layout')

@section('page-title', 'Boolflix - Homepage')

@section('content')

<div class="container">
    <div class="row row-cols-5 g-3">

        @foreach ($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-3 text-muted">{{$movie->original_title}}</h6>
                    <p class="card-text"><strong>Uscita:</strong> {{date('d-m-Y', strtotime($movie->date))}}</p>
                    <p class="card-text"><strong>Voto: </strong>{{$movie->vote}}</p>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>
    
@endsection