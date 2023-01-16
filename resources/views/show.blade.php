@extends('layouts.main')

@section('page-title')
  {{ $comic['series'] }}
@endsection

@section('section-content')
  @include('partials.jumbo')

  <section id="carousel" class="card-box">

    <div class="container">
      <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
    </div>

  </section>
@endsection
