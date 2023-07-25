<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;

class MainController extends Controller
{
    public function index() {
        $portfolios = Portfolio :: all();
        return view('welcome', compact('portfolios'));
    }

    public function show($id){
        $portfolio = Portfolio :: findOrFail($id);
        return view('dashboard', compact('portfolio'));
    }
}
