<?php

namespace App\Http\Controllers;

use App\Filament;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth'); IMPORTANT
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home() {
        $products = Product::all();
        $filaments = Filament::all();

        return view('user.home')
        ->withProducts($products)
        ->withFilaments($filaments)
        ;
    }

    public function acp() {
        return view('acp.home');
    }
}
