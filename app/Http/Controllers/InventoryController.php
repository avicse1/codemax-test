<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use Session;

class InventoryController extends Controller
{
    public function index() {
        $inventories = Inventory::all();  
        return view('inventory', compact('inventories'));
    }

    public function sold() {
        $id = request()->id;
        
        $inventory = Inventory::find($id);
        
        if($inventory->count == 1) {
            Inventory::destroy($id);
        }
        
        $inventory->count -= 1;

        $inventory->save();
        

        Session::flash('success', 'Inventory updated successfully!');
        return redirect()->route('inventory');
    }
}
