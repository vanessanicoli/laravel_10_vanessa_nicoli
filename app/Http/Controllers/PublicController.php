<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{

    public function homepage() {
        return view('welcome');
    }

    public function profile() {
        return view('auth.profile');
    }
}
