<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index()
    {
        return view('pages.departemen');
    }

    public function exoff()
    {
        return view('pages.departemen.exoff');
    }
}
