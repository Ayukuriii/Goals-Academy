<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class FormValidationController extends Controller
{
    public function validate_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|numeric',
            'university' => 'required',
            'major' => 'required',
            'password' => 'required|min:8',
            'confirmation_password' => 'required|same:password',
        ]);

        if ($validator->passes()) {
            return response()->json(['success'=>'Input is valid']);
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    public function validate_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

        if ($validator->passes()) {
            return response()->json(['success'=>'Input is valid']);
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    public function validate_tambah_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users,username',
            'university' => 'required',
            'major' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric',
            'password' => 'required|min:8'
        ]);

        if ($validator->passes()) {
            return response()->json(['success'=>'Input is valid']);
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    public function validate_edit_user(Request $request, string $id)
    {
        // Check if the role has changed from 'tutor' to 'user'
        $data = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => 'required|unique:users,username,' . $data->id,
            'email' => 'required|email|unique:users,email,' . $data->id,
            'phone_number' => 'required|numeric',
            'university' => 'required',
            'major' => 'required'
        ]);

        if ($validator->passes()) {
            return response()->json(['success'=>'Input is valid']);
        }

        return response()->json(['error'=>$validator->errors()]);
    }
}
