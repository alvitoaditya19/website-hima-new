<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Use App\Models\User;
Use App\Transaction;


class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();

        return view('pages.admin.dashboard',[
            'user' => $user,
        ]);
    }
}
