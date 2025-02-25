<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
  <title>Dern-Support</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: white;
      font-family: 'Fira Sans Condensed', sans-serif;
    }
    .signup {
      background-color: black;
      color: white;
      padding: 40px;
      border-radius: 10px;
      max-width: 900px;
      margin: 100px auto;
    }
    .section-heading {
      font-weight: 700;
      text-align: center;
      color: white;
      margin-bottom: 30px;
    }
    .section-heading::after {
      content: '';
      display: block;
      width: 100px;
      height: 4px;
      background-color: green;
      margin: 10px auto 0;
    }
    .form-group input {
      background-color: #333;
      color: white;
      border: 1px solid #444;
    }
    .form-group input::placeholder {
      color: #777;
    }
    .separator {
      border-top: 1px solid #444;
      margin: 20px 0;
    }
    .btn-green {
      background-color: green;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 1.2rem;
      font-weight: 600;
    }
    .btn-green:hover {
      background-color: darkgreen;
    }
    .login-link {
      text-align: center;
      margin-top: 20px;
    }
    .login-link a {
      color: white;
      text-decoration: underline;
    }
    .login-link a:hover {
      color: #ccc;
    }
    .error-message {
      color: #ff6b6b;
      font-size: 0.9rem;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  @include('components.navbar')

  <div class="signup">
    <h1 class="section-heading">Sign Up</h1>

    <form action="{{ route('signup.store') }}" method="POST" id="signupForm">
      @csrf
      <div class="row mb-3">
        <div class="col">
          <div class="form-group">
            <label for="firstName" class="form-label">First Name:</label>
            <input type="text" id="firstName" name="first_name" class="form-control" placeholder="Enter your first name" value="{{ old('first_name') }}" required>
            @error('first_name')
              <div class="error-message">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="col">
          <div class="form-group">
            <label for="lastName" class="form-label">Last Name:</label>
            <input type="text" id="lastName" name="last_name" class="form-control" placeholder="Enter your last name" value="{{ old('last_name') }}" required>
            @error('last_name')
              <div class="error-message">{{ $message }}</div>
            @enderror
          </div>
        </div>
      </div>

      <div class="separator"></div>

      <div class="form-group mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
        @error('email')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>

      <div class="separator"></div>

      <div class="form-group mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
        @error('password')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>

      <div class="separator"></div>

      <div class="form-group mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>
        <div class="error-message" id="passwordError" style="display: none;">Passwords do not match.</div>
        @error('password_confirmation')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-green d-block mx-auto w-40">Sign Up</button>

      <div class="login-link">
        <a href="{{ route('login.show') }}">Already have an account? Log In</a>
      </div>
    </form>
  </div>

  @include('components.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById('signupForm').addEventListener('submit', function (event) {
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
      const errorMessage = document.getElementById('passwordError');

      if (password !== confirmPassword) {
        event.preventDefault();
        errorMessage.style.display = 'block';
      } else {
        errorMessage.style.display = 'none';
      }
    });
  </script>
</body>
</html>
