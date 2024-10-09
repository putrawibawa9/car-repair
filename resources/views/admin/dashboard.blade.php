{{-- @dd($cars) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 800px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0072ff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td a {
            color: #0072ff;
            text-decoration: none;
            font-weight: bold;
        }

        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Car Service List</h1>
        <table>
            <thead>
                <tr>
                    <th>Owner</th>
                    <th>Car Brand</th>
                    <th>License Plate</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->user->name }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->license_plate }}</td>
                    <td>{{ $car->latestServiceLog->status }}</td>
                    <td><a href="/cars/{{ $car->id }}">Update</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
