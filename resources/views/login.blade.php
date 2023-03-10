<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    .form-login{
      border: 1px solid;
      padding: 10px;
      border-radius: 10px;
    }
  </style>
  <body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <div class="form-login">

            {{-- seesion --}}
            @if (session('status'))
            <div class="alert alert-danger mt-3">
                {{ session('message')}}
            </div>
            @endif
            {{-- endsession --}}

            <form action="" method="post" style="width: 500px">
                @csrf
                <div class="mb-3 text-center">
                    <h2>Login</h2>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <div class="text-center">
                  <p>Don't Have a account? <a href="/register" style="text-decoration: none;">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>