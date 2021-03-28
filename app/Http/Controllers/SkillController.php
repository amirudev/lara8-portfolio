<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
    	return redirect()->route('dashboard');
    }

    public function skill()
    {
    	return view('skill');
    }
}
