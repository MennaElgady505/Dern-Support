<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<style>
.nav-wrapper { background-color: white; padding: 10px; }
.navbar { background-color: black; border-radius: 30px; margin: 10px auto; max-width: 1200px; font-family: 'Fira Sans Condensed', sans-serif; }
.nav-link { color: white; padding: 0.5rem 1rem; display: flex; align-items: center; gap: 5px; }
.book-repair-btn { color: green; }
.navbar-toggler-icon { filter: invert(1); }
.nav-link:hover {
  color: green !important; 
  background-color: transparent !important; 
}
.logout-btn {
  background: none;
  border: none;
  color: white;
  font-size: 1rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 0.5rem 1rem;
}
.logout-btn:hover {
  color: green;
}
</style>

<nav class="navbar navbar-expand-lg fixed-top ps-2 pe-2">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/repair/individual" id="userTypeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Book a repair
          </a>
          <ul class="dropdown-menu" aria-labelledby="userTypeDropdown">
            <li><a class="dropdown-item" href="/repair/business">Business</a></li>
            <li><a class="dropdown-item" href="/repair/individual">Individual</a></li>
          </ul>
        </li>

        <li class="nav-item">
  <a href="{{ url('/') }}#services" class="nav-link">Services</a>
</li>

      </ul>
      <a class="navbar-brand mx-auto" href="/">
        <img src="{{ asset('logo.png') }}" alt="Logo" height="50">
      </a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        <li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>

        @auth
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="logout-btn">
                Log out <i class="fas fa-sign-out-alt"></i>
              </button>
            </form>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link">
              <i class="fas fa-user"></i> Log In
            </a>
          </li>
        @endauth

      </ul>
    </div>
  </div>
</nav>
