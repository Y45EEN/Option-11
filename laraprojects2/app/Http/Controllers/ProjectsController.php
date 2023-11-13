<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
class ProjectsController extends Controller
{



    public function search () {


        if (request('search')) {
            $projects = Projects::where('title', 'like', '%' . htmlspecialchars(request('search')) . '%')->get();
        } else if (request('searchEndDate'))  {
            $projects = Projects::where('end_date', 'like', '%' . htmlspecialchars(request('searchEndDate')) . '%')->get();
        } else if (request('searchStartDate')){

            $projects = Projects::where('start_date', 'like', '%' . htmlspecialchars(request('searchStartDate')) . '%')->get();


        } else {

            $projects = Projects::all();
        }

        return view('/welcome')->with('projects', $projects);
}





}

