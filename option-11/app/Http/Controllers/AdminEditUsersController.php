<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\User;
class AdminEditUsersController extends Controller
{
    public function show(Request $request)
    {
        $users = User::all();
        return Inertia::render('AdminEditUsers', ['users' => $users]);
    }
}
