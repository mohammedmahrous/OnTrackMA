<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\userstype;
class UserController extends Controller
{
  public function create(){
     $usertype=userstype::get();
       return view('BackEnd.user.create',compact('usertype'));

    }

     public function store(Request $request){
        //
        // $request->validate([
        //   'name' => 'required|max:255',
        //     'email' => 'required|email',
        //     'password' => 'required|numeric',
        //     'usertype' => 'required',
        //
        //
        //
        // ]);

        $user=new User();
          $user->name=$request->name;
          $user->email=$request->email;
          $user->usertype=$request->usertype;

          $user->password=bcrypt($request->password);


        $user->save();
       return redirect()->route('user');

    }



  public function edit($id)
    {
       $usertype=userstype::get();
      $row=User::FindOrFail($id);
       return view('BackEnd.user.edit',compact('row','usertype'));
    }


    public function update($id, Request $request){
        $row=User::FindOrFail($id);
        $requestArray = $request->all();

        $row->update($requestArray);



        return redirect()->route('user.edit' , ['id' => $row->id]);
    }





    public function destroy($id){
         User::FindOrFail($id)->delete();
   return redirect()->route('users');

    }



     public function index(){
     $user=User::paginate(3);


        return view('BackEnd.user.index',compact('user'));
    }

}
