<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Candidate;
use Illuminate\Support\Facades\Hash;

class CandidateAuthController extends Controller
{
    //
    public function showRegForm(){
        return view('out.candidates.candidate-register');
    }
    public function register(Request $request){
        $request->validate([
            'email' => 'required|string|email|unique:candidates|max:50',
            'fname' => 'required|alpha|string|min:2|max:20',
            'surname' => 'required|alpha|string|min:2|max:20',
            'password' => 'required|string|min:6|max:15|confirmed',
            'password_confirmation' => 'required|string|min:6|max:15'
        ],
        [
            'email.required' => 'Required',
            'email.string' => 'Invalid Format',
            'email.email' => 'Must be valid email',
            'email.unique' => 'Email Unavailable. Try another one',
            'email.max' => 'Exceeds 50 characters',
            'fname.required' => 'Required',
            'fname.alpha' => 'Alphabets Only',
            'fname.string' => 'Invalid Format',
            'fname.min' => 'Must Exceed 2 Characters',
            'fname.max' => 'Exceeds 20 characters',
            'surname.required' => 'Required',
            'surname.alpha' => 'Alphabets Only',
            'surname.string' => 'Invalid Format',
            'surname.min' => 'Must Exceed 2 Characters',
            'surname.max' => 'Exceeds 20 characters',
            'password.required' => 'Required',
            'password.string' => 'Invalid Format',
            'password.min' => 'Must exceed 5 characters',
            'password.max' => 'Exceeds 15 characters',
            'password.confirmed' => "Passwords Don't Match",
            'password_confirmation.required' => 'Required',
            'password_confirmation.string' => 'Invalid Format',
            'password_confirmation.min' => 'Must exceed 5 characters',
            'password_confirmation.max' => 'Exceeds 15 characters'
        ]);

        // $candidate = new Candidate();
        // $candidate->email = $request->email;
        // $candidate->fname = $request->fname;
        // $candidate->surname = $request->surname;
        // $candidate->password = Hash::make($request->password);
        // $candidate->save();

        //some new way of adding to DB shown to me by chatGPT
        $candidate = Candidate::create([
            'email' => $request->email,
            'fname' => $request->fname,
            'surname' => $request->surname,
            'password' => Hash::make($request->password)
        ]);
        $creds = [
            'email' => $request->email,
            'password' => $request->password
        ];

        //login the user

        Auth::guard('candidate')->attempt($creds);

        return redirect()->route('candidate.dashboard');
    }

    public function showLoginForm(){
        return view('out.candidates.candidate-login');
    }
    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|string|email|max:50',
            'password' => 'required|string|min:6|max:15'
        ]);

        if (Auth::guard('candidate')->attempt($validated)) {
            return redirect()->route('candidates.search');
            // return "we are getting here";
        } else {
            return redirect()->route('/candidate/login')->withErrors(['email'=>'Invalid Email or password']);
        }
    }
}
