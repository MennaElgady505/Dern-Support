<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
    <title>Dern-Support - Individual Repair</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Fira Sans Condensed', sans-serif; }
        .book-repair { background-color: black; color: white; padding: 40px; border-radius: 10px; max-width: 900px; margin: 100px auto; }
        .section-heading { font-weight: 700; text-align: center; color: white; margin-bottom: 30px; }
        .section-heading::after { content: ''; display: block; width: 100px; height: 4px; background-color: green; margin: 10px auto 0; }
        .form-group input, .form-group select, .form-group textarea { background-color: #333; color: white; border: 1px solid #444; }
        .form-group input::placeholder, .form-group textarea::placeholder { color: #777; }
        .separator { border-top: 1px solid #444; margin: 20px 0; }
        .btn-green { background-color: green; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 1.2rem; font-weight: 600; }
        .btn-green:hover { background-color: darkgreen; }
        .hidden { display: none; }
        .toast-container {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 9999;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @include('components.navbar')

    <!-- Success Toast -->
    @if(session('success'))
        <div class="toast-container">
            <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <script>
            var toast = new bootstrap.Toast(document.getElementById('successToast'));
            toast.show();
        </script>
    @endif

    <div class="book-repair">
        <h1 class="section-heading">Book an Individual Repair</h1>

        <form action="{{ route('repair.store') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <input type="hidden" name="user_type" value="individual">

            <div class="form-group mb-3">
                <label for="full_name" class="form-label">Full Name:</label>
                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter your full name" required>
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
            </div>

            <div class="form-group mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group mb-3">
                <label for="device_type" class="form-label">Device Type (Enter number of devices):</label>
                <input type="text" id="device_type" name="device_type" class="form-control" placeholder="Device/s type and number" required>
            </div>

            <div class="form-group mb-3">
                <label for="issue_description" class="form-label">Issue Description:</label>
                <textarea id="issue_description" name="issue_description" class="form-control" placeholder="Describe the issue" rows="5" required></textarea>
            </div>

            <div class="form-group mb-3">
    <label for="service_type" class="form-label">Service Type:</label>
    <select id="service_type" name="service_type" class="form-control" required onchange="toggleServiceOptions()">
        <option value="">Select</option>
        <option value="drop-off">Drop Off</option>
        <option value="pickup">Pickup & Delivery</option>
    </select>
</div>

<div class="form-group mb-3 hidden" id="pickup-location">
    <label for="pickup_location" class="form-label">Pickup Location:</label>
    <input type="text" id="pickup_location" name="pickup_location" class="form-control" placeholder="Enter pickup location">
</div>

<div class="form-group mb-3 hidden" id="dropoff-location">
    <label for="dropoff_location" class="form-label">Enter Drop Off Office:</label>
    <input type="text" id="dropoff_location" name="dropoff_location" class="form-control" placeholder="Enter the office location">
</div>
            <div class="form-group mb-3">
                <label for="preferred_date" class="form-label">Preferred Date:</label>
                <input type="date" id="preferred_date" name="preferred_date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-green d-block mx-auto w-40">Submit</button>
        </form>
    </div>

    <script>
    function toggleServiceOptions() {
        var serviceType = document.getElementById('service_type').value;
        document.getElementById('pickup-location').classList.add('hidden');
        document.getElementById('dropoff-location').classList.add('hidden');

        if (serviceType === 'pickup') {
            document.getElementById('pickup-location').classList.remove('hidden');
            document.getElementById('pickup_location').setAttribute('required', 'true');
            document.getElementById('dropoff_location').removeAttribute('required');
        } else if (serviceType === 'drop-off') {
            document.getElementById('dropoff-location').classList.remove('hidden');
            document.getElementById('dropoff_location').setAttribute('required', 'true');
            document.getElementById('pickup_location').removeAttribute('required');
        }
    }
</script>
      @include('components.footer')
</body>
</html>
