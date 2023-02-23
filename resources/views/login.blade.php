@extends('header')
@section('login')
{{View :: make('title')}}
<main class="form-signin w-100 m-auto">
  <form action="login" method="post">
    @csrf
    <img class="mb-4" src="images/ogg.png" alt="" width="100" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button><br><br>
    <div class="d-flex justify-content-center">
    <button class="w-80 btn btn-sm btn-secondary" type="button" onclick="window.location='/register'">Register</button>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
  </form>
</main>

{{View :: make('footer')}}
@endsection