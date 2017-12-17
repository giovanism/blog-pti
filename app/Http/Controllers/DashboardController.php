<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('dashboard');
        return redirect('/')->with('success', 'You are logged in!');
    }

    public function profile() 
    {
        return view('dashboard/profile');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('dashboard/edit')->with('user', $user);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect('/profile')->with('success', 'Profile Updated');
    }

    public function editPassword()
    {
        return view('dashboard/passwordreset');
    }

    public function updatePassword()
    {
        $this->validate(request(), [
            'current_password' => 'required|current_password',
            'new_password' => 'required|string|min:6',
        ]);
    
        request()->user()->fill([
            'password' => Hash::make(request()->input('new_password'))
        ])->save();
        request()->session()->flash('success', 'Password changed!');
    
        return redirect('/profile');
    }
}
