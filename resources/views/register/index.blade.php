@extends('layouts.main')
@section('content')
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      @if (session('success'))
      <div class="alert alert-success">
          <h2>{{ session('success') }}</h2>
      </div>
      @endif
      <div class="section-header">
        <p>Register</p>
      </div>
<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form class="card p-5" method="POST" action="/register">
      @csrf
      <div class="form-outline mb-4">
        <label class="form-label" for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required/>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="email">Email</label>
        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus />
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="password">Password</label>
        <input id="password" type="password" class="form-control" name="password" required/>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <!-- Confirm Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required/>
      </div>
      <!-- Role input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="role">Role</label>
        <select id="role" class="form-control" name="role" required>
          <option value="" selected disabled>-- Select one --</option>
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <!-- Submit button -->
      <div class="text-center">
      <button type="submit" class="btn btn-danger">Register</button>
      </div>
    </form>
  </div>
</div>
<!-- Pills content -->
    </div>
  </section>
@endsection