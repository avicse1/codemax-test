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
            'model_name' => 'required',
            'color' => 'required',
            'manufacturing_year' => 'required|numeric',
            'registration_number' => 'required',
        ]);

        $car = new Car;
        $car->name = $request->model_name;
        $car->registration_number = $request->registration_number;
        $car->color = $request->color;
        $car->manufacturing_year = $request->manufacturing_year;
        $car->description = $request->description;
        $car->manufacturer_id = $request->manufacturer;

        $car->save();

        $inventory = new Inventory;

        $inventory->car_id = $car->id;
        $inventory->manufacturer_id = $request->manufacturer;
        $inventory->count += 1;

        $inventory->save();

        Session::flash('success', 'Model added successfully!');

        return redirect()->back();
    }
}
