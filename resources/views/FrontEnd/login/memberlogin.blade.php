<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
    .logo {
      width: 100px;
      height: auto;
      display: block;
      margin: 0 auto 20px;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <!-- Logo -->
    <img src="{{ asset('FrontEnd/images/logo.png') }}" class="logo" alt="Logo">
     @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <!-- Login Form -->
        <form method="POST" action="{{ url('/member-login') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

      <h4 class="text-center mb-4">Member Login</h4>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      </div>

      <div class="d-grid mb-2">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>

      <div class="text-center">
        <a href="#" class="btn btn-link">Forgot Password?</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
