<?php

namespace App\Http\Controllers;

use App\Medicines;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index() {
        $medicines = Medicines::inRandomOrder()->take(12)->get();

        return view("medicines")->with('medicines', $medicines);;
    }

    public function show($slug)
    {
        $product = Medicines::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Medicines::where('slug', '!=', $slug)->inRandomOrder()->take(4)->get();
        return view('product')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike
        ]);
    }
}
