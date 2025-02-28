<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    function AddUser(Request $request){
        $request->validate([
        'name'     => 'required',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:6'
    ]);

    $data = $request->all();

    User::create([
        'name'     => $data['name'],
        'email'    => $data['email'],
        'password' => Hash::make($data['password'])
    ]);
    }
    function validate_registration(Request $request)
{
    $request->validate([
        'name'     => 'required',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:6'
    ]);

    $data = $request->all();

    User::create([
        'name'     => $data['name'],
        'email'    => $data['email'],
        'password' => Hash::make($data['password'])
    ]);

    return redirect('login')->with('success', 'Registration Completed, now you can login');
}

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }
    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
    public function addConnection(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'connection_name' => 'required|string|max:255',
        'debt' => 'required|numeric|min:0',
        'debt_date' => 'required|date',
    ]);

    // Insert into database
    Connection::create([
        'email' => $request->email,
        'connection_name' => $request->connection_name,
        'debt' => $request->debt,
        'debt_date' => $request->debt_date,
    ]);

    return response()->json(['message' => 'Connection added successfully'], 201);
}
public function getUserConnections(Request $request)
{
    // Validate email input
    $request->validate([
        'email' => 'required|email|exists:users,email'
    ]);

    // Fetch connections where email matches
    $connections = DB::table('connection')->where('email', $request->email)->get();

    // Return response
    if ($connections->isEmpty()) {
        return response()->json(['message' => 'No connections found'], 404);
    }

    return response()->json($connections);
}


}