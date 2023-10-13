@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container ">
        <div class="row ">
            @forelse($movies as $movie)
                <div class="col-2 ">
                    <h2> {{ $comic['title'] }}</h2>
                    <h6 class="my-2 fw-bold">
                        {{ $comic['original_title'] }}
                    </h6>
                </div>
            @empty
                <h3>nessun comic</h3>
            @endforelse
        </div>
    </div>
@endsection
