<style>
    footer {
      background-color: green; 
      color: white; 
      padding: 40px 20px; 
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
      font-family: 'Fira Sans Condensed', sans-serif;
    }
    footer h3 { font-size: 1.5rem; margin-bottom: 15px; }
    footer p, footer ul { font-size: 1rem; }
    footer a { text-decoration: none; color: white; }
    footer ul { list-style-type: none; padding-left: 0; }
    footer .social-icons { display: flex; gap: 10px; margin-top: 10px; }
    footer .social-icons img { width: 24px; }
    </style>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <img src="{{ asset('logo.png') }}" alt="Derm-Support Logo" class="img-fluid" style="width: 180px; margin-bottom: 10px;">
        <p style="max-width: 300px;">A dedicated IT technical support company specializing in computer system repairs for businesses and individuals.</p>
        <div class="social-icons">
          <a href="#"><img src="{{ asset('facebook.png') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ asset('instagram.png') }}" alt="Instagram"></a>
          <a href="#"><img src="{{ asset('twitter.png') }}" alt="Twitter"></a>
          <a href="#"><img src="{{ asset('linkedin.png') }}" alt="LinkedIn"></a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <h3>Quick Links</h3>
        <ul>
        <li><a href="/">Home Page</a></li>
          <li><a href="{{ url('/') }}#services">Services</a></li>
          <li><a href="/contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <h3>Contact Us</h3>
        <p><img src="{{ asset('email.png') }}" alt="Email" style="width: 16px;"> contact@Dern_Support.com</p>
        <p><img src="{{ asset('location.png') }}" alt="Location" style="width: 16px;"> 1234 Sentinel Drive, Springfield, USA: 62704</p>
        <p><img src="{{ asset('phone.png') }}" alt="Phone" style="width: 16px;"> +1 (595) 019-2837</p>
      </div>
    </div>
  </div>
</footer>