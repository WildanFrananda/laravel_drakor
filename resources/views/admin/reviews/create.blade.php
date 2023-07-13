@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
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
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/reviews">
                @csrf
                <div class="form-inline mb-3">
                    <label for="movie_id">Film</label>
                    <select class="form-control" type="text" id="movie_id" name="movie_id">
                        <option selected>Choose Film...</option>
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-inline mb-3">
                    <label for="user_id">User</label>
                    <select class="form-control" type="text" id="user_id" name="user_id">
                        <option selected>Choose User...</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-inline mb-3">
                    <label for="date">Date</label>
                    <input class="form-control" type="date" id="date" name="date">
                </div>
                <div class="form-inline mb-3">
                    <label for="description">Review</label>
                    <input class="form-control" type="text" id="description" name="description">
                </div>
                <div class="form-inline mb-3">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="number" step="0.1" min="0.1" max="10" id="rating" name="rating" placeholder="0.1 to 10">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Add Review</button>
            </form>
        </div>
    </div>
@endsection