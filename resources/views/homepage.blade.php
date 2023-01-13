@extends('layouts.main')

@section('section-content')
  @include('partials.jumbo')

  <section id="carousel" class="card-box">

    <div class="container">
      @foreach ($comics as $comic)
        <div class="card">
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
          <h4>{{ $comic['title'] }}</h4>
        </div>
      @endforeach
    </div>

  </section>
@endsection
