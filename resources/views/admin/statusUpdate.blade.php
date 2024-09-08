<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Car Status</title>
    <link rel="stylesheet" href="{{ asset('css/userForm.css') }}">
</head>
<body>
    <div class="container">
        <h1>Update Car Service Status</h1>
        
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="status">Update  Status:</label>
            <select id="status" name="status" required>
             <option value="Delivery Order">Delivery Order</option>
            <option value="Pre Delivery Inspection">Pre Delivery Inspection</option>
            <option value="Washing">Washing</option>
            <option value="Return Delivery">Return Delivery</option>

            </select>

            <label for="description">Description:</label>
            <textarea required id="description" name="description" rows="4" placeholder="Enter details here"></textarea>

            <button type="submit">Update Status</button>
        </form>
    </div>
</body>
</html>
