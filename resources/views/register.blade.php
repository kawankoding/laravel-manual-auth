<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

      <form class="form-signin" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <h1 class="h3 mb-3 font-weight-normal">Register {{ config('app.name') }}</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="text" name="name" id="inputName" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Please insert your name" value="{{ old('name') }}" required autofocus>
          @if ($errors->has('name'))
            <div class="invalid-feedback">
              {{ $errors->first('name') }}
            </div>
          @endif

          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" name="email" value="{{ old('email') }}" id="inputEmail" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email address" required>
          @if ($errors->has('email'))
            <div class="invalid-feedback">
              {{ $errors->first('email') }}
            </div>
          @endif

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control  {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
          @if ($errors->has('password'))
            <div class="invalid-feedback">
              {{ $errors->first('password') }}
            </div>
          @endif

          <label for="inputPassword" class="sr-only">Password Confirmation</label>
          <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
          @if ($errors->has('password_confirmation'))
            <div class="invalid-feedback">
              {{ $errors->first('password_confirmation') }}
            </div>
          @endif

          <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>

  </body>
</html>
