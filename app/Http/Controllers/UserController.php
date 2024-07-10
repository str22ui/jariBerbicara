<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\ContactUs;
use  App\Models\AbjadCard;
use  App\Models\WordCard;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
  

    public function storeTestimonials(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'testimonials' => 'nullable|string',
        ]);

        // Tambahkan user_id ke data yang telah divalidasi
        $validatedData['user_id'] = Auth::id();

        // Tambahkan data testimonials ke dalam tabel Testimonials menggunakan model
        Testimonial::create($validatedData);

        return redirect('/testimonials');
    }

    
    // public function storeTestimonials(Request $request)
    // {

    //     $validatedData = $request->validate([
    //         'name' => 'nullable|string|max:255',
    //         'city' => 'nullable|string|max:255',
    //         'testimonials' => 'nullable|string',
    //     ]);

    //     // Tambahkan data testimonials ke dalam tabel Testimonials menggunakan model
    //     Testimonial::create($validatedData);

    //     return redirect('/testimonials');
    // }

    public function storeContactUs(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Tambahkan data testimonials ke dalam tabel Testimonials menggunakan model
        ContactUs::create($validatedData);

        return redirect('/aboutUs');
    }

    public function getAbjad()
        {
    $abjadCards = AbjadCard::all();
    $isLoggedIn = auth()->check(); // Check if the user is logged in

    if (!$isLoggedIn) {
        // Limit the number of cards to 6 if the user is not logged in
        $abjadCards = $abjadCards->take(6);
    }

    return view('landingPage.macro.alphabet', compact('abjadCards', 'isLoggedIn'));
    }


    public function getWord()
    {
        // Fetch all AbjadCards from the database
        $wordCards = WordCard::all();
        $isLoggedIn = auth()->check(); 

        if (!$isLoggedIn) {
            // Limit the number of cards to 6 if the user is not logged in
            $wordCards = $wordCards->take(6);
        }

        // Pass the data to the view
        return view('landingPage.macro.words', compact('wordCards','isLoggedIn'));
    }

    // public function getTestimonials()
    // {
    //     // Fetch all AbjadCards from the database
    //     $testimonials = Testimonial::all();

    //     // Pass the data to the view
    //     return view('landingPage.macro.home', compact('testimonials'));
    // }
    public function getTestimonials()
    {
        // Fetch testimonials along with user information
        $testimonials = Testimonial::select('testimonials.*', 'users.image', 'users.username', 'users.city')
            ->join('users', 'testimonials.user_id', '=', 'users.id')
            ->get();

        // Pass the data to the view
        return view('landingPage.macro.home', compact('testimonials'));
    }

    public function editProfile($id)
    {
        $user = User::find($id);
    
        return view('landingPage.macro.edit_profile', [
            'user' => $user,
        ]);
    }
    

}