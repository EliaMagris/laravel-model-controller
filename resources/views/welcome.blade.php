@extends('layouts.app')

@section('main-content')

    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <h1 class="text-center text-white">Movies</h1>
                @foreach ($all_movies as $elem)
                    <div class="col-4 d-flex text-center justify-content-center mt-3 p-3">
                        <div class="card bg-warning h-100" style="width: 18rem;">
                            <div class="card-body">
                                <h2 class="card-title">{{ $elem->title }}</h2>
                                <h3>{{ $elem->original_title }}</h3>
                                <h5>Lingua: {{ $elem->nationality }}</h5>
                                <h5>Data di rilascio: {{ $elem->date }}</h5>
                                <h5>Voto: {{ $elem->vote }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection