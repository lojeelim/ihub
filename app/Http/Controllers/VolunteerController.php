<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware('volunteer');
    }

    public function index()
    {
        return view('volunteer.dashboard');
    }

}
