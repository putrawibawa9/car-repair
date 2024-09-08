<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service Form</title>
    <link rel="stylesheet" href="{{ asset('css/userForm.css') }}">
</head>
<body>
    <div class="container">
        <h1>Car Service Form</h1>
        <form action="/register" method="POST">
            @csrf
            <!-- Email Input -->
            <label for="email">Name:</label>
            <input type="text" id="email" name="name" placeholder="Enter your email" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>

            <label for="email">Password:</label>
            <input type="password" id="email" name="password" placeholder="Enter your email" required>

            <!-- Car Make Input -->
            <label for="car-make">Car Brand:</label>
            <input type="text" id="car-make" name="brand" placeholder="Enter the car make" required>

            <!-- Car Model Input -->
            <label for="car-model">License Plate:</label>
            <input type="text" id="car-model" name="license_plate" placeholder="Enter the car model" required>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
