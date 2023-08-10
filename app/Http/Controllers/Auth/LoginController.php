<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\NotificationText;
use App\ValidationText;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{



    public function index(Request $request)
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];

        $customMessages = [
            'email.required' =>  "Email is Required",
            'email.email' =>  "Email should be formatted as email",
            'password.required' =>  "Password is required",
        ];

        $this->validate($request, $rules, $customMessages);
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if (Auth::guard('web')->attempt($credential, $request->remember)) {
                    $notification = "You have been successfully logged in";
                    return redirect()->route('table');
                }
            } else {
                $notification = "Some error occured. Can you please try again";

                return response()->json(['error' => $notification]);
            }
        } else {
            $notification = "There is no user present";
            return response()->json(['error' => $notification]);
        }
    }


    public function profile(Request $request)
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');

        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();
        session()->flash('Your profile has been updated successfully.');
        return redirect()->route('profile');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
