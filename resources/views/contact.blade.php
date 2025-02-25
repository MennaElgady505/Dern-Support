<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
  <title>Dern-Support</title>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .contact-us {
      background-color: black;
      color: white;
      padding: 40px;
      border-radius: 10px;
      max-width: 900px;
      margin: 100px auto;
      font-family: 'Fira Sans Condensed', sans-serif;
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

    .form-group input,
    .form-group textarea {
      background-color: #333;
      color: white;
      border: 1px solid #444;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
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
    }

    .btn-green:hover {
      background-color: darkgreen;
    }
  </style>
</head>
<body>
@include('components.navbar')

<div class="contact-us">
  <h1 class="section-heading">Contact Us</h1>

  @if(session('success'))
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
      <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ session('success') }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
  @endif

  <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
    @csrf
    <div class="row mb-3">
      <div class="col">
        <div class="form-group">
          <label for="firstName" class="form-label">First Name:</label>
          <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter your first name" value="{{ old('firstName') }}">
          @error('firstName')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="lastName" class="form-label">Last Name:</label>
          <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter your last name" value="{{ old('lastName') }}">
          @error('lastName')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
    </div>
    <div class="separator"></div>
    <div class="form-group mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}">
      @error('email')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="separator"></div>
    <div class="form-group mb-3">
      <label for="phone" class="form-label">Phone:</label>
      <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" value="{{ old('phone') }}">
      @error('phone')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="separator"></div>
    <div class="form-group mb-3">
      <label for="message" class="form-label">Message:</label>
      <textarea id="message" name="message" class="form-control" placeholder="Enter your message" rows="5">{{ old('message') }}</textarea>
      @error('message')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-green d-block mx-auto w-40">Submit</button>
  </form>
</div>

@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var toastElement = document.getElementById('successToast');
    if (toastElement) {
      var toast = new bootstrap.Toast(toastElement);
      toast.show();
    }
  });
</script>

</body>
</html>