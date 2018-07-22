<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Manufacturer;

class HomeController extends Controller
{
    public function show() {
        return view('home');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'manufacturer' => 'required',
        ]);

        $manufacturer = new Manufacturer;
        $manufacturer->name = $request->manufacturer;

        $manufacturer->save();

        Session::flash('success', 'Manufacturer added successfully!');
        return redirect()->back();

    }
}
