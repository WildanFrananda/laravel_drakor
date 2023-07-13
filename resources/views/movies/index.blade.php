@extends('layouts.main')

@section('content')
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <p>Movie</p>
            </div>
            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                <div class="tab-pane fade active show" id="menu-starters">
                    <div class="row gy-5">
                        @foreach ($movies as $movie)
                            <div class="col-lg-4 menu-item">
                                <a href="/about/{{ $movie->id }}">
                                    <img src="/admin/assets/img/{{ $movie->poster }}" class="menu-img img-fluid" alt="">
                                </a>
                                <h4>{{ $movie->title }}</h4>
                                <p class="ingredients">
                                    {{ $movie->genre->name }}
                                </p>
                                <p class="price">
                                    {{ $movie->release_date }}
                                </p>
                            </div><!-- Menu Item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
