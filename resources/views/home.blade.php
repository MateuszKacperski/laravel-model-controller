@extends('layouts.main')

@section('main-content')
      <div class="container my-4">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card my-4">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie->title }}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                      <p><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                      <p><strong>Date:</strong> {{ $movie->date }}</p>
                      <p><strong>Vote:</strong> {{ $movie->vote }}</p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
      </div>
      @endsection


