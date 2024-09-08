<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Under Repair</title>
    <link rel="stylesheet" href="{{ asset('css/userForm.css') }}">
</head>
<body>
    <div class="container">
        <h1>Cars Currently Under Repair</h1>
        
        <!-- Table to display the list of cars under repair -->
        <table>
            <thead>
                <tr>
                    <th>Owner</th>
                    <th>Brand</th>
                    <th>License Plate</th>
                    <th>Current Status</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                    <tr>
                      
                        <td>{{ $car->user->name }}</td>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->license_plate }}</td>
                        <td>{{ $car->latestServiceLog->status }}</td>
                        <td>{{ $car->latestServiceLog->updated_at->format('d M Y, H:i') }}</td>
                        <td>
                           <a href="/cars/{{ $car->id }}" style="color: blue; font-weight: bold; text-decoration: none; padding: 10px 20px; background-color: #f0f0f0; border: 1px solid #ccc; border-radius: 4px;">
    Update
</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
