<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\Car;
use App\Inventory;
use Session;

class CarController extends Controller
{
    public function show() {
        $manufacturers = Manufacturer::all();
        return view('cars', compact('manufacturers'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'manufacturer' => 'required',
        ]);

        Session::flash('success', 'Model added successfully!');
        return redirect()->back();
    }
}
