<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use Carbon\Carbon;

class ActivitiesController extends Controller
{
   public function store(Request $request)
    {
        $activity = new Activity();
        $activity->name=$request->name;
        $activity->save();

        return redirect()->route('activities.index');
        //dd($request);
     
    }

    public function index(Request $request)
    {
    	$activities = Activity::all();
    	return view('activities', array('activities'=>$activities));
    }


}
