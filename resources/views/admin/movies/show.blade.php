@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-4">Movie Details</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin/movies">Movies</a></li>
            <li class="breadcrumb-item active">{{ $movie->title }}</li>
        </ol>
        <a href="/admin/movies/{{ $movie->id }}/edit">
            <button class="btn btn-warning" type="submit">Edit</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-film me-1"></i>
            {{ $movie->title }}
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Title:</strong> {{ $movie->title }}
            </div>
            <div class="mb-3">
                <strong>Poster:</strong> {{ $movie->poster }}
            </div>
            <div class="mb-3">
                <strong>Genre:</strong> {{ $movie->genre->name }}
            </div>
            <div class="mb-3">
                <strong>Synopsis:</strong> {{ $movie->synopsis }}
            </div>
            <div class="mb-3">
                <strong>Release Date:</strong> {{ $movie->release_date }}
            </div>
            <div class="mb-3">
                <strong>Country:</strong> {{ $movie->country->name }}
            </div>
            <div class="mb-3">
                <strong>Rating:</strong> {{ $movie->rating }}
            </div>
        </div>
    </div>
@endsection
