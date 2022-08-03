<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MgtstratUController extends Controller
{
    public function index()
    {
        return view('form.mgtstratu_workshops');
    }
}
