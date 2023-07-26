<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;
use App\Models\Type;
use App\Models\Technology;

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

    public function create() {

        $types = Type :: all();
        $technologies = Technology :: all();

        return view('create', compact('types', 'technologies'));
    }
    public function store(Request $request) {

        $data = $request -> all();

        $portfolio = Portfolio :: create($data);
        $technology -> portfolios() -> attach($portfolios);

        return redirect() -> route('welcome', $portfolio->id);
    }
}

