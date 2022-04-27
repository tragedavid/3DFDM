<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function apropos() {

        return view('user.apropos');
    }

    public function contact() {

        return view('user.contact');
    }

    public function panier() {

        return view('user.panier');
    }
} 
