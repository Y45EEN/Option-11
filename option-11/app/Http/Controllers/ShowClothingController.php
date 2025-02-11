<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Clothes;
use App\Models\Basket;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ShowClothingController extends Controller
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

    public function showAll()
    {
        $clothes = Clothes::all();
        return Inertia::render('Clothing', ['clothes' => $clothes]);
    }
    public function addBasket(Request $request) {

        $validateInput = $request->validate([
            'quantity' => 'numeric|required|not_in:0|max:10',
            
            
    
        ]);
     
        if ($validateInput) {

    
            $finditem =  Basket::where('userid', auth()->user()->userid)->first();
            $basket = new Basket();

            if ($finditem  ==  null) {

   
                $basket->userid =  auth()->user()->userid;
                $basket->clothingid = request('clothingid_hidden');
                $basket->quantity =request('quantity');
                
                $bike = Clothes::where('clothingid',$basket->clothingid)->first();
                $basket->totalprice = $basket->quantity * $bike->price;
               
                $basket->status = 'open';
                $basket->save();

        
                return redirect()->back()->with('success', "Item successfully added to basket!");

            }

            $record = Basket::where('userid', auth()->user()->userid)->where('clothingid',  request('clothingid_hidden'))->first();


            if ($record) {

                $record->quantity = request('quantity') + $record->quantity;

                $record->save();

                return redirect()->back()->with('success', "Item successfully added to basket!");

               




            } else {

             
                $basket->userid =  auth()->user()->userid;
                $basket->clothingid = request('clothingid_hidden');
                $basket->quantity =request('quantity');
                
                $bike = Clothes::where('clothingid',$basket->clothingid)->first();
                $basket->totalprice = $basket->quantity * $bike->price;
                $bike->stockquantity = $bike->stockquantity -  $basket->quantity;
            
                $basket->status = 'open';
                $basket->save();
        
                return redirect()->back()->with('success', "Item successfully added to basket!");
            }
 

       

        }

}
   
}
