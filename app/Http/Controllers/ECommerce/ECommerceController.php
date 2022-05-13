<?php

namespace App\Http\Controllers\ECommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ECommerceController extends Controller
{
    public function index()
    {
        return view('pages.e-commerce.e-commerce');
    }
}
