@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/movies/{{ $movie->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-inline mb-3">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title" value="{{ $movie->title }}">
                </div>

                <div class="form-inline mb-3">
                    <label for="poster">Poster</label>
                    <img style="width: 100px" src="/assets/img/{{ $movie->poster }}" alt="">
                    <input class="form-control" type="file" id="poster" name="poster">
                </div>
                
                <div class="form-inline mb-3">
                    <label for="genre_id">Genre</label>
                    <select class="form-control" id="genre_id" name="genre_id">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? "selected" : '' }}>{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-inline mb-3">
                    <label for="synopsys">Synopsys</label>
                    <input class="form-control" type="text" id="synopsys" name="synopsys" value="{{ $movie->synopsys }}">
                </div>

                <div class="form-inline mb-3">
                    <label for="release_date">Release Date</label>
                    <input class="form-control" type="date" id="release_date" name="release_date" value="{{ $movie->release_date }}">
                </div>

                <div class="form-inline mb-3">
                    <label for="countries_id">Country</label>
                    <select class="form-control" id="countries_id" name="countries_id">
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}" {{ $country->id == $movie->country_id ? "selected" : '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-inline mb-3">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="number" id="rating" name="rating" min="0.1" max="10" step="0.1" value="{{ $movie->rating }}">
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Update Movie</button>
            </form>
        </div>
    </div>
@endsection