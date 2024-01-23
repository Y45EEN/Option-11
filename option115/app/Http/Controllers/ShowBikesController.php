<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bikes;

use App\Models\Basket;



class ShowBikesController extends Controller
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



   


    $bikes = Bikes::all();


    return view('/welcome')->with('bikes', $bikes);


  
}

public function addBasket(Request $request) {



   
    $validateInput = $request->validate([
        'quantity'=>'required',





    ]);

        $basket = new Basket();
        $basket->userid =  auth()->user()->userid;
        $basket->bikeid = request('bikeaddbasket');
        $basket->quantity =request('quantity');
        $basket->totalprice = $basket->quantity * request('price');
        $basket->status = 'open';
        $basket->save();
<<<<<<<< HEAD:option115/app/Http/Controllers/ShowBikesController.php
        return redirect()->back();
========
        $bike->save();
        
   
        return Redirect::route('products',['success' => 'Item successfully added to basket!']);


    }
  
>>>>>>>> upstream/main:option-11/app/Http/Controllers/ShowBikesController.php

   


  
}



















}
