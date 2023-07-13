@extends('admin.layouts.main')

@section('content')
    <h1 class="mt-4">Countries Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Countries</li>
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
            Edit Country
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/countries/{{ $country->id }}">
                @csrf
                @method('PUT')
                <div class="form-inline mb-3">
                    <label for="name">Country</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $country->name }}">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Update Country</button>
            </form>
        </div>
    </div>
@endsection