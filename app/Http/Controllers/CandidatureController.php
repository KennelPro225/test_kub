<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function index()
    {
        return view('candidature.index');
    }

    public function create()
    {
        return view('candidature.create');
    }

    public function store(Request $request) {
        Resume::create($request->all());
        return redirect()->route('dashboard');
    }
}
