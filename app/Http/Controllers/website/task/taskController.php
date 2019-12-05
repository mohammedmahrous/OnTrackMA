<?php

namespace App\Http\Controllers\website\task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\task;
use App\User;
use Auth;
class taskController extends Controller
{


       public function index(){
        
       $tasks=task::where('asign_to',Auth::User()->id)->get();


          return view('website.task.home',compact('tasks'));
      }

}
