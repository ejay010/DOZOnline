<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

use App\Http\Requests;

class CandidateController extends Controller
{
    //
    public function index(){
        return view('create');
    }

    public function save(Request $request){
        Candidate::create($request->all());
        flash()->success('Candidate Saved', 'Candidate Info saved to database');
        return redirect()->back();
    }
}
