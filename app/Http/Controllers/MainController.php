<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
