<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\ServiceLog;
use Illuminate\Http\Request;

class CarCheckController extends Controller
{
    public function userForm()
    {
        return view('user.userForm');
    }

    public function userResult(Request $request)
    {
        // Get the user by their username
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        
        if ($user) {
            // Get the car associated with the user
            $car = Car::where('user_id', $user->id)->first();
            // Get the latest service log for the car
            $serviceLog = ServiceLog::where('car_id', $car->id)->latest('updated_at')->first();

            // Pass the car and service log data to the view
            return view('user.userResult', compact('car', 'serviceLog'));
        } else {
            // No car found for this username
            return view('user.userResult', ['car' => null]);
        }
    }

}
