<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;


class DashboardController extends Controller
{
     public function index(){
      
      
        if  (Auth::user()->hasRole('user')){
            return view('dashboard');
        }
        elseif  (Auth::user()->hasRole('employee')) {
            return view('employee_dashboard');
        }
        
        elseif    (Auth::user()->hasRole('admin')){
            return view('admin_dashboard');
        }
    
     }

     public function Employee_profile(){
        return view('employee.employee_profile');
        // $UserData = DB::Table('users')->orderByDesc('id')->paginate(5);
        // return view('employee.employee_profile', compact('UserData'));
     }

     public function Admin_profile(){

        return view('admin.admin_profile');
     }

     public function user_profile(){
        return view('user.user_profile');
     }
}