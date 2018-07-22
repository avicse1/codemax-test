<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\Car;
use App\Image;
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
            'manufacturer' => 'required|not_in:0',
            'model_name' => 'required',
            'color' => 'required',
            'manufacturing_year' => 'required|numeric',
            'registration_number' => 'required',
            'quantity' => 'required',
            // 'photos' => 'image|mimes:jpeg,png,jpg|max:2048'
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
        $inventory->count = $request->quantity;

        $inventory->save();

        
        if ($request->hasFile('photos')) {
            foreach ($request->photos as $photo) {
                $image = new Image;            
                $imageName = str_random(10).time() . '.' . $photo->getClientOriginalExtension();
                $photo->move(public_path('images'), $imageName);
                $image->car_id = $car->id;
                $image->image = $imageName;
                $image->save();
            }
        }

        Session::flash('success', 'Model added successfully!');

        return redirect()->back();
    }
}
