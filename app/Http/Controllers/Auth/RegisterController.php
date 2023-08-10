<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{






    public function index(Request $request)
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'phone_number' => 'required|unique:users',
            'email' => 'required|unique:users',
        ];

        $customMessages = [
            'name.required' =>  "name is required",
            'phone_number.required' =>  "Phone number is required",
            'phone_number.unique' => "Phone number already registered. Please log back in",
            'email.required' => "email is required",
            'email.unique' => "email already registered. Please log back in",
        ];

        $this->validate($request, $rules, $customMessages);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), //password
            'email_verified_token' => Str::random(100),
            'phone_number' => $request->phone_number
        ]);

        Auth::loginUsingId($user->id);

        return redirect()->route('table');
    }

    // public function userVerify($token)
    // {
    //     $user = User::where('email_verified_token', $token)->first();
    //     $notify = NotificationText::first();
    //     if ($user) {
    //         $user->email_verified_token = null;
    //         $user->status = 1;
    //         $user->email_verified = 1;
    //         $user->save();
    //         $notification = array(
    //             'messege' => $this->notify->where('id', 4)->first()->custom_text,
    //             'alert-type' => 'success'
    //         );
    //         return  redirect()->route('home')->with($notification);
    //     } else {

    //         $notification = array(
    //             'messege' => $this->notify->where('id', 5)->first()->custom_text,
    //             'alert-type' => 'error'
    //         );
    //         return redirect()->route('register')->with($notification);
    //     }
    // }
}
