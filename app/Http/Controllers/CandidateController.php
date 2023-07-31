<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Language;
use App\Models\PostedJob;
use App\Models\Skill;
use App\Models\SoftSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
// use Image;

class CandidateController extends Controller
{

    public function search(){
        // $candidate = Auth::guard('candidate')->user();
        return view('in.candidates.search');
    }
}
