<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('adminpages/login');
    }


    public function actionLogin(Request $request): RedirectResponse
    {




        // Step 1: Validate the request
        $loginData = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Step 2: Attempt authentication
        if (Auth::attempt($loginData)) {
            // Step 3: Regenerate session to prevent session fixation attacks
            $request->session()->regenerate();

            // Redirect to intended page or dashboard
            return redirect('admin/dashboard');
        }
        $user = \App\Models\User::where('name', $request->name)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            dd('Password matches but Auth::attempt() failed. Check configuration.');
        } else {
            $r = Hash::check($request->password, $user->password);
            dd('Invalid credentials.', $user, $loginData);
        }
        dd($loginData);
        // Step 4: Handle failed authentication
        return redirect()->back()
            ->withInput() // Keep the old input (except password)
            ->withErrors([
                'name' => 'The provided credentials do not match our records.',
            ]);
    }
}
