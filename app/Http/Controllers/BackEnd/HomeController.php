<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\task;
class HomeController extends Controller
{



     public function index(){
     $task=task::paginate(3);


        return view('BackEnd.index.index',compact('task'));
    }


}
