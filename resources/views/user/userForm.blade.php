<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Car Service Status</title>
    <link rel="stylesheet" href="{{ asset('css/userForm.css') }}">
</head>
<body>
    <div class="container">
        <h1>Check Your Car Service Status</h1>
        
        <!-- Form to search car status by username -->
        <form
         action="{{ route('result') }}"
          method="POST">
            @csrf
            <label for="username">Enter Your Email:</label>
            <input type="text" id="username" name="email" placeholder="Your Email" required>
            <button type="submit">Check Status</button>
        </form>
    </div>
</body>
</html>