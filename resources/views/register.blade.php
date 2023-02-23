
{{View:: make('title')}}

<!--<form action="/register" method="post">
@csrf
    <h1> Register here </h1>
    <div>
        <input type="text" name="fullname" placeholder="Full Name" required>
    </div>
    <div>
        <input type="email" name="email" placeholder="Email Address" required>
    </div>
    <div>
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit">Register</button>
    <button type="button" onclick="javascript:history.back()">Cancel</button>

</form> -->
<main class="form-signin w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <img class="mb-4" src="images/ogg.png" alt="" width="100" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="john" name="fullname" required>
      <label for="floatingInput">Full Name</label>
    </div>
<br>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
      <label for="floatingInput">Email address</label>
    </div>
<br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>
<br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <br><br>
    <div class="d-flex justify-content-center">
    <button class="w-50 btn btn-sm btn-secondary" type="button" onclick="javascript:history.back()">Cancel</button>
    <!--<button type="button" onclick="javascript:history.back()">Cancel</button>-->
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
  </form>
</main>

{{View:: make('footer')}}