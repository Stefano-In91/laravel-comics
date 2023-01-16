@extends('layouts.main')

@section('page-title')
  Homepage
@endsection

@section('section-content')
  @include('partials.jumbo')

  <section id="carousel" class="card-box">

    <div class="container">
      @foreach ($comics as $index => $comic)
        <div class="carousel_card">
          <a href="{{ route('show', $index) }}"><img src="{{ $comic['thumb'] }}"
              alt="{{ $comic['series'] }}" /></a>
          <h4>{{ $comic['title'] }}</h4>
        </div>
      @endforeach
    </div>

  </section>
@endsection
