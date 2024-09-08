{{-- @dd($serviceLog); --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service Status</title>
    <link rel="stylesheet" href="{{ asset('css/userForm.css') }}">
</head>
<body>
    <div class="container">
        <h1>Car Service Status</h1>

        @if (isset($car))
            <div id="car-status-display">
                <h2>Car Details:</h2>
                <p><strong>Brand:</strong> {{ $car->brand }}</p>
                <p><strong>License Plate:</strong> {{ $car->license_plate }}</p>
                <p><strong>Current Service Status:</strong> {{ $serviceLog->status }}</p>
                <p><strong>Description:</strong> {{ $serviceLog->description }}</p>
            </div>
        @else
            <p>Sorry, no car found for this username.</p>
        @endif
    </div>
</body>
</html>
