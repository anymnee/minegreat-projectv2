<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->withSuccess('Signed in');
        // }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function adduser(Request $request)
    {
       $user = new Users;
       $user->number_customers = $request->input('number_customers');
       $user->first_name = $request->input('first_name');
       $user->last_name = $request->input('last_name');
       $user->age = $request->input('age');
       $user->tel = $request->input('tel');
       $user->cid = $request->input('cid');
       $user->username = $request->input('username');
       $user->password = $request->input('password');
       $user->save();
       return response()->json(
        [
            'success' => true,
            'message' => 'success',
        ]
        );

    }
}
