<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CheckoutController extends Controller{

    public function showAll()
    {
        return Inertia::render('Checkout');
    }
}

?>
