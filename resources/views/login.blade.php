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
    .login {
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
    .form-group input, .form-group select {
      background-color: #333;
      color: white;
      border: 1px solid #444;
    }
    .form-group input::placeholder, .form-group select::placeholder {
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
    .error-message {
      color: red;
      font-size: 0.9rem;
      margin-top: 5px;
    }
    .hidden {
      display: none;
    }
  </style>
</head>
<body>
  @include('components.navbar')

  <div class="login">
    <h1 class="section-heading">Log In</h1>
    <form action="{{ route('login.perform') }}" method="POST">
      @csrf
      <div class="form-group mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
      </div>
      <div class="separator"></div>
      <div class="form-group mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
        @error('email')
          <div class="error-message">{{ $message }}</div>
        @enderror
      </div>
      @if(session('error'))
        <div class="error-message">{{ session('error') }}</div>
      @endif
      <button type="submit" class="btn btn-green d-block mx-auto w-40">Log In</button>
      <div class="text-center mt-3">
        <a href="/signup" class="text-white text-decoration-underline">Don't have an account? Create an account</a>
      </div>
    </form>
  </div>

  @include('components.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function toggleServiceFields() {
      const serviceType = document.getElementById('serviceType').value;
      const officeLocationSection = document.getElementById('officeLocationSection');
      const pickupLocationSection = document.getElementById('pickupLocationSection');

      if (serviceType === 'drop-off') {
        officeLocationSection.classList.remove('hidden');
        pickupLocationSection.classList.add('hidden');
      } else if (serviceType === 'pickup') {
        officeLocationSection.classList.add('hidden');
        pickupLocationSection.classList.remove('hidden');
      } else {
        officeLocationSection.classList.add('hidden');
        pickupLocationSection.classList.add('hidden');
      }
    }
  </script>
</body>
</html>
