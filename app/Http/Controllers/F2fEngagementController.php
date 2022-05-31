<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class F2fEngagementController extends Controller
{
    public function index()
    {
        return view('form.f2f_engagement');
    }
}
