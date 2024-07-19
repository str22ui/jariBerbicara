<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AbjadCard;
use  App\Models\WordCard;
use  App\Models\Testimonial;
use  App\Models\ContactUs;
use  App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function dashAlphabet()
    {
        // Fetch all AbjadCards from the database
        $abjadCards = AbjadCard::orderBy('abjad','asc')->get();

        // Pass the data to the view
        return view('admin.alphabet.index', compact('abjadCards'));
    }
    

    // public function alphabet()
    // {
    //     return view('admin.alphabet.add_alphabet', [
    //         'users' => Auth::user(),
    //     ]);
    // }

    public function storeAlphabet(Request $request)
    {
        $validatedData = $request->validate([
            'abjad' => 'nullable|string|max:255',
            'description_video' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'video_url' => 'nullable|file|max:51200|mimes:mp4,mov,ogg,qt',
        ]);
    
        if ($request->hasFile('image_url')) {
            $validatedData['image_url'] = $request->file('image_url')->storeAs('foto_abjad', uniqid() . '.' . $request->file('image_url')->extension());
        }
        if ($request->hasFile('video_url')) {
            $validatedData['video_url'] = $request->file('video_url')->storeAs('video_abjad', uniqid() . '.' . $request->file('video_url')->extension());
        }
    
        AbjadCard::create($validatedData);
        return redirect('/dashAlphabet');
    }
    
    public function editAlphabet($id)
    {
        $abjadCards = AbjadCard::find($id);

        return view('admin.alphabet.edit_alphabet', [
            'abjadCards' => $abjadCards,
        ]);
    }

    public function updateAlphabet(Request $request, $id)
    {
        // Find the unit by id
        $abjadCards = AbjadCard::find($id);

        // Check if the unit exists
        if (!$abjadCards) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Validate the request data
        $validatedData = $request->validate([
            'image_url' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'video_url' => 'nullable|file|max:51200|mimes:mp4,mov,ogg,qt',
            'abjad' => 'nullable|string|max:255',
            'description_video' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Update the unit's data
        $abjadCards->abjad = $request->input('abjad');
        $abjadCards->description_video = $request->input('description_video');
        $abjadCards->description = $request->input('description');

        if ($request->hasFile('image_url')) {
            // Menghapus foto lama jika ada
            if ($abjadCards->image_url) {
                Storage::delete($abjadCards->image_url);
            }
            // Simpan foto yang baru diunggah
            $abjadCards->image_url = $request->file('image_url')->storeAs('image_url', uniqid() . '.' . $request->file('image_url')->extension());
        }

        if ($request->hasFile('video_url')) {
            // Menghapus video lama jika ada
            if ($abjadCards->video_url) {
                Storage::delete($abjadCards->video_url);
            }
            // Simpan video yang baru diunggah
            $abjadCards->video_url = $request->file('video_url')->storeAs('video_url', uniqid() . '.' . $request->file('video_url')->extension());
        }

        // Save the changes to the database
        $abjadCards->save();

        // Redirect back or to any other page
        return redirect('/dashAlphabet')->with('success', 'Alphabet updated successfully.');
    }

    public function deleteAlphabet($id)
    {
        // Find the unit by id
        $abjadCards = AbjadCard::find($id);

        // Check if the unit exists
        if (!$abjadCards) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Delete the unit
        $abjadCards->delete();

        // Redirect back or to any other page
        return redirect('/dashAlphabet')->with('success', 'Unit deleted successfully.');
    }


    // ====================== Word Card ============================
    public function dashWord()
    {
        // Fetch all WordCards from the database
        $wordCards = WordCard::all();
    
        // Pass the data to the view
        return view('admin.word.index', compact('wordCards'));
    }
    
    public function storeWord(Request $request)
    {
        $validatedData = $request->validate([
            'word' => 'nullable|string|max:255',
            'description_video' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'video_url' => 'nullable|file|max:51200|mimes:mp4,mov,ogg,qt',
        ]);
    
        if ($request->hasFile('image_url')) {
            $validatedData['image_url'] = $request->file('image_url')->storeAs('foto_word', uniqid() . '.' . $request->file('image_url')->extension());
        }
        if ($request->hasFile('video_url')) {
            $validatedData['video_url'] = $request->file('video_url')->storeAs('video_word', uniqid() . '.' . $request->file('video_url')->extension());
        }
    
        WordCard::create($validatedData);
        return redirect('/dashWord');
    }

    public function editWord($id)
    {
        $wordCards = WordCard::find($id);

        return view('admin.word.edit_word', [
            'wordCards' => $wordCards,
        ]);
    }

    public function updateWord(Request $request, $id)
    {
        // Find the unit by id
        $wordCards = WordCard::find($id);

        // Check if the unit exists
        if (!$wordCards) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Validate the request data
        $validatedData = $request->validate([
            'image_url' => 'nullable|image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'video_url' => 'nullable|file|max:51200|mimes:mp4,mov,ogg,qt',
            'word' => 'nullable|string|max:255',
            'description_video' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Update the unit's data
        $wordCards->word = $request->input('word');
        $wordCards->description_video = $request->input('description_video');
        $wordCards->description = $request->input('description');

        if ($request->hasFile('image_url')) {
            // Menghapus foto lama jika ada
            if ($wordCards->image_url) {
                Storage::delete($wordCards->image_url);
            }
            // Simpan foto yang baru diunggah
            $wordCards->image_url = $request->file('image_url')->storeAs('image_url', uniqid() . '.' . $request->file('image_url')->extension());
        }

        if ($request->hasFile('video_url')) {
            // Menghapus video lama jika ada
            if ($wordCards->video_url) {
                Storage::delete($wordCards->video_url);
            }
            // Simpan video yang baru diunggah
            $wordCards->video_url = $request->file('video_url')->storeAs('video_url', uniqid() . '.' . $request->file('video_url')->extension());
        }

        // Save the changes to the database
        $wordCards->save();

        // Redirect back or to any other page
        return redirect('/dashWord')->with('success', 'Words updated successfully.');
    }
   

    public function deleteWord($id)
    {
        // Find the unit by id
        $wordCards = WordCard::find($id);

        // Check if the unit exists
        if (!$wordCards) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Delete the unit
        $wordCards->delete();

        // Redirect back or to any other page
        return redirect('/dashWord')->with('success', 'Unit deleted successfully.');
    }

    public function dashTestimonials()
    {
        // Fetch all WordCards from the database
        $testimonials = Testimonial::all();
    
        // Pass the data to the view
        return view('admin.testimoni.index', compact('testimonials'));
    }


    public function updateTestimonialStatus(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->status = $request->status;
        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial status updated successfully.');
    }


    public function dashContact()
    {
        // Fetch all WordCards from the database
        $contactUs = ContactUs::all();
    
        // Pass the data to the view
        return view('admin.contactUs.index', compact('contactUs'));
    }

    
    public function getContact($id)
    {
        $contactUs = ContactUs::find($id);

        return view('admin.contactUs.get_contact', [
            'contactUs' => $contactUs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function dashUser()
    {
        // Fetch all AbjadCards from the database
        $users = User::where('role','user')->get();

        // Pass the data to the view
        return view('admin.user.index', compact('users'));
    }

    public function deleteUser($id)
    {
        // Find the unit by id
        $users = User::find($id);

        // Check if the unit exists
        if (!$users) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Delete the unit
        $users->delete();

        // Redirect back or to any other page
        return redirect('/dashUser')->with('success', 'User deleted successfully.');
    }
    
}
