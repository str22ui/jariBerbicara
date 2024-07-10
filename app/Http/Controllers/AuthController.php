<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;




class AuthController extends Controller
{   
    public function register()
    {
        return view('landingPage.register');
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'username' => 'required|unique:users,username',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|min:8',
    //     ]);

    //     $data = [
    //         'username' => $validatedData['username'],
    //         'email' => $validatedData['email'],
    //         'password' => Hash::make($validatedData['password']),
    //         'role' => 'user'
    //     ];

    //     User::create($data);
    //     return redirect('/login')->with('success', 'Registration successful! Please login.');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
            'city' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
        } else {
            $imagePath = null;
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password, // Password akan dienkripsi otomatis
            'city' => $request->city,
            'image' => $imagePath,
        ]);
        return redirect('/loginUser')->with('success', 'Register successfully.');

        // return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }
    public function updateProfile(Request $request, $id)
    {
        // Find the user by id
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            // Handle the case where the user with the given ID does not exist
            return redirect()->back()->with('error', 'User not found.');
        }

        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username,'.$id,  // Exclude the current user from unique check
            'email' => 'required|unique:users,email,'.$id.'|email',  // Exclude the current user from unique check
            'password' => 'nullable|min:8',  // Validate password if provided
            'city' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the user's data
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        
        // Update password only if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        
        $user->city = $request->input('city');

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image) {
                Storage::delete($user->image);
            }
            // Save new image
            $user->image = $request->file('image')->storeAs('images', uniqid() . '.' . $request->file('image')->extension());
        }

        // Save the changes to the database
        $user->save();

        // Redirect back or to any other page
        return redirect('/profile')->with('success', 'Profile updated successfully.');
    }


    public function login()
    {
        return view('landingPage.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->intended('/dashAdmin');
            } elseif ($user->role == 'user') {
                return redirect()->intended('/');
            } 
        }
        return back()->with('loginError', 'Login Failed!');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->Session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showForgotPasswordForm()
    {
        return view('landingPage.forgotPassword');
    }
    
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(60);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        $resetLink = route('password.reset', ['token' => $token, 'email' => $request->email]);

        // Debugging
        \Log::info('Reset link generated', ['resetLink' => $resetLink, 'email' => $request->email]);

        // Kirim email dengan tautan reset
        Mail::send('emails.resetPassword', ['resetLink' => $resetLink], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        return back()->with('status', 'We have emailed your password reset link!');
    }
    
    
    public function showResetPasswordForm($token)
    {
        return view('landingPage.resetPassword', ['token' => $token]);
    }
    
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:8',
        ]);
    
        $passwordReset = \DB::table('password_resets')->where([
            ['token', $request->token],
            ['email', $request->email],
        ])->first();
    
        if (!$passwordReset) {
            return back()->withErrors(['email' => 'This password reset token is invalid.']);
        }
    
        $user = User::where('email', $request->email)->first();
        $user->password = \Hash::make($request->password);
        $user->save();
    
        \DB::table('password_resets')->where(['email' => $request->email])->delete();
    
        return redirect('/login')->with('success', 'Your password has been reset!');
    }
    
    

    
}
