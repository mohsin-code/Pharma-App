<?php

namespace App\Http\Controllers;
use App\Medicines;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */

    public function index() {
        $medicines = Medicines::inRandomOrder()->take(6)->get();

        return view("welcome")->with('medicines', $medicines);
    }
}
