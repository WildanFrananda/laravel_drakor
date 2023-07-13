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
        <p>Login</p>
      </div>
<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form class="card p-5" method="POST" action="/login">
      @csrf
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
      <!-- Submit button -->
      <div class="text-center">
      <button type="submit" class="btn btn-danger">Sign in</button>
      </div>
      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="/register">Register</a></p>
      </div>
    </form>
  </div>
</div>
<!-- Pills content -->
    </div>
  </section>
@endsection