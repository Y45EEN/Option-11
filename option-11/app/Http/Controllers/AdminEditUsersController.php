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

    public function update(Request $request) {



    }

    public function delete(Request $request) {

        $userid =$request->input('userid');

        $user = User::where('userid', $userid);
    
        $user->delete();
        
    }
}
