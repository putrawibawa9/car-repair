<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // register the user and also the car at once
        $user = User::create($request->all());
        $user->cars()->create($request->all());
        // add a default service log
        $user->cars->first()->serviceLogs()->create([
            'status' => 'Delivery Order',
            'description' => 'Issuing Delivery Order',
        ]);
        // direct to '/' route
        return view('user.userForm');
    }
}
