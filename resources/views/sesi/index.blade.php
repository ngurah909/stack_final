@extends('layout/aplikasi')

@section('konten')
<div class="min-vh-100 bg-light d-flex align-items-center">
  <main class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
            <h1 class="text-center mb-4">LOG IN</h1>

            <form action="/sesi/login" method="POST" class="mb-3">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" id="email" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="#" class="text-decoration-none">Forgot password?</a>
                <button type="submit" class="btn btn-primary">Log in</button>
              </div>
            </form>
            <p class="text-center text-muted">Don't have an account? <a href="register" class="text-decoration-none">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection