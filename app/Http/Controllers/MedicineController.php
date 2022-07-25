<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index(){
        $medicines = medicines::all();
        return view('welcome',['medicines'=>$medicines])
    }

    public function show($medicineName)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
