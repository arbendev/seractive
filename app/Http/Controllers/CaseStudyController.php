<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudies = \App\Models\CaseStudy::latest('published_at')->get();
        return view('case-studies.index', compact('caseStudies'));
    }

    public function show(\App\Models\CaseStudy $caseStudy)
    {
        return view('case-studies.show', compact('caseStudy'));
    }
}
