<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Resume::with(['experiences', 'education', 'skills', 'certifications'])->first();
        return view('resume', compact('resume'));
    }
}