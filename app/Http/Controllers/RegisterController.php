<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        //code here
    }

    public function store(Request $request){
        // ddd($request);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'university' => 'required',
            'major' => 'required',
            'password' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        
        User::create($validateData);

        return redirect('/')->with('success', 'Registration successfull! Please login');
    }
}