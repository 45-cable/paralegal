<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;


class AdminController extends Controller
{
    //
    public function redirect()
    {
        if(Auth::user()->usertype=='0')
        {
            return view('dashboard');

        }
    }

    public function index()
    {
        return view('user.admin');
    }
}
