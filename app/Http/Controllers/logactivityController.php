<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class logactivityController extends Controller
{
    public function index()
    {
        // $lastActivity = Activity::all();
        // $lastActivity = activity()->disableLogging();
        $lastActivity = Activity::all()->last();
        // dd($lastLoggedActivity->all());
        // $lastActivity=$lastActivity->subject;
        // dd($lastActivity->toArray());
        return view('logactivity', compact('lastActivity'));
    }
}
