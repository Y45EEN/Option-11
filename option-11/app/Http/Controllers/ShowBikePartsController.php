<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BikePart;
use Illuminate\Support\Facades\Redirect;

use App\Models\Basket;
use Inertia\Inertia;

class ShowBikePartsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showAll() {
        $bikeparts = BikePart::all();
        return Inertia::render('BikeParts', ['bikePart' => $bikeparts]); // Corrected the key to 'bikeParts'
    }


public function addBasket(Request $request) {

    $validateInput = $request->validate([
       'quantity' => 'numeric|required|not_in:0|max:10',

      

    ]);
 
    if ($validateInput) {

        $basket = new Basket();
        $basket->userid =  auth()->user()->userid;
        $basket->bikepartsid = request('bikepartid_hidden');
        $basket->quantity =request('quantity');
        
        $bike = BikePart::where('bikepartsid',$basket->bikepartsid)->first();
        $basket->totalprice = $basket->quantity * $bike->price;
        $bike->stockquantity = $bike->stockquantity -  $basket->quantity;
    
        $basket->status = 'open';
        $basket->save();
        Inertia::share('success', $bike->price);

        return redirect()->back()->with('success', "Item successfully added to basket!");

    }

}
}
