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
            Movies Data
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/movies" enctype="multipart/form-data">
                @csrf
                <div class="form-inline mb-3">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="form-inline mb-3">
                    <label for="poster">Poster</label>
                    <input class="form-control" type="file" id="poster" name="poster">
                </div>
                <div class="form-inline mb-3">
                    <label for="genre">Genre</label>
                    <select class="form-control" id="genre_id" name="genre_id">
                        <option selected>Choose Genre...</option>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-inline mb-3">
                    <label for="synopsys">Synopsys</label>
                    <input class="form-control" type="text" id="synopsys" name="synopsys">
                </div>
                <div class="form-inline mb-3">
                    <label for="release_date">Release Date</label>
                    <input class="form-control" type="date" id="release_date" name="release_date">
                </div>
                <div class="form-inline mb-3">
                    <label for="countries">Country</label>
                    <select class="form-control" id="countries_id" name="countries_id">
                        <option selected>Choose Country...</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-inline mb-3">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="number" id="rating" name="rating" min="0.1" max="10" step="0.1">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Add Movie</button>
            </form>
        </div>
    </div>
@endsection