<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\userstype;
class UsertypeController extends Controller
{
  public function create(){
       return view('BackEnd.usertype.create');

    }

     public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',


        ]);

        $typ=new userstype();
        $typ->name=$request->name;


        $typ->save();
       return redirect()->route('type');

    }



  public function edit($id)
    {
      $row=userstype::FindOrFail($id);
       return view('BackEnd.usertype.edit',compact('row'));
    }





    public function update($id, Request $request){
        $row=userstype::FindOrFail($id);
        $requestArray = $request->all();

        $row->update($requestArray);



        return redirect()->route('typs.edit' , ['id' => $row->id]);
    }





    public function destroy($id){
         userstype::FindOrFail($id)->delete();
   return redirect()->route('userstype');

    }



     public function index(){
     $userstype=userstype::paginate(3);


        return view('BackEnd.usertype.index',compact('userstype'));
    }


}
