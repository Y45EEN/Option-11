<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Payment;
use App\Models\Basket;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
class OrdersController extends Controller
{

    public function makeOrder () {

        $basket = Basket::where('userid', auth()->user()->userid)->get(); 

        
        $totalPrice = Basket::where('userid', auth()->user()->userid)->sum('totalprice');

        foreach ($basket as $item) {
            $payment = Payment::where('userid',auth()->user()->userid)->first();

            $orders = new Orders();
            $orders->userid =  auth()->user()->userid;

            $orders->basketid = $item->basketid;
            $orders->paymentid = $payment->payment_id;
            $orders->totalprice = $totalPrice;

            $orders->status = 'paid';

            $orders->save();
            



        }

        return redirect('/');

       
     

        
                


    }

    
    
    
}
