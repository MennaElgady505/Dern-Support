<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
  <title>Dern-Support</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <style>
    body { background-color: black; color: white; font-family: 'Fira Sans Condensed', sans-serif; }
    .hero-section { background-color: white; color: black; padding: 50px 0; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px; }
    .hero-content h1 { font-size: 2.5rem; font-weight: 700; line-height: 1.4; margin-bottom: 20px; width: 58% }
    .book-now-btn { background-color: green; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 1.2rem; font-weight: 600; }
    .book-now-btn:hover { background-color: rgb(43, 112, 43); }
    .hero-image { max-width: 45%; border-radius: 10px; }
    .services-heading { font-size: 3rem; font-weight: 700; text-align: center; margin: 40px 0; color: white; }
    .services-heading::after {
      content: '';
      display: block;
      width: 100px;
      height: 4px;
      background-color: green;
      margin: 10px auto 0;
    }
    .card { background-color: rgba(255, 255, 255, 0.5); border-radius: 15px; padding: 25px; width: 350px; transition: transform 0.3s ease, box-shadow 0.3s ease; position: relative; overflow: hidden; }
    .card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3); }
    .card img { width: 100px; height: 100px; border-radius: 10px; margin-bottom: 20px; }
    .card h3 { font-size: 1.5rem; font-weight: 700; margin-bottom: 15px; color: black; }
    .card p { font-size: 1.1rem; font-weight: 400; line-height: 1.6; color: rgba(0, 0, 0, 0.8); }
    .card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, rgba(0, 128, 0, 0.1), rgba(0, 128, 0, 0.05));
      z-index: -1;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .card:hover::before { opacity: 1; }
  </style>
</head>
<body data-bs-smooth-scroll="true">

  @include('components.navbar')

  <section class="hero-section d-flex justify-content-between align-items-center">
    <div class="hero-content ps-5 pe-5">
      <h1>Fast & Reliable <span style="color: green;">IT Support </span>for Businesses and Individuals</h1>
      <a class="book-now-btn btn " href="/repair/business">Book Now</a>
    </div>
    <img src="{{ asset('hero.png') }}" alt="Hero Image" class="hero-image">
  </section>
  <section id="services">
  <h1 class="services-heading">Our Services</h1>

<div class="card-container d-flex flex-wrap justify-content-center gap-4 p-4">
  <div class="card">
    <img src="{{ asset('card1.png') }}" alt="Device Drop-Off">
    <h3>Device Drop-Off</h3>
    <p>Customers can drop off their devices for repair at any of our office locations.</p>
  </div>
  <div class="card">
    <img src="{{ asset('card2.png') }}" alt="Pickup & Delivery">
    <h3>Pickup & Delivery</h3>
    <p>Customers can arrange for their devices to be picked up or delivered via a courier.</p>
  </div>
  <div class="card">
    <img src="{{ asset('card3.png') }}" alt="On-Site Support">
    <h3>On-Site Support</h3>
    <p>Companies can request on-site technical support to ensure smooth and efficient IT operations.</p>
  </div>
</div>
</section>
  @include('components.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>