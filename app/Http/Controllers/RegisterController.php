<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            "title" => "Register",
            "active" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $validateRegister = $request->validate([
            'name' => 'required|max:25|min:3',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:255',
        ]);

        $validateRegister['password'] = Hash::make($validateRegister['password']);

        User::create($validateRegister);

        $request->session()->flash('success', 'Registration Success, Login Now!');

        return redirect('/login');
    }
}
