<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\statu;

class StatusController extends Controller
{
  public function create(){
       return view('BackEnd.status.create');

    }

     public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',


        ]);

        $typ=new statu();
        $typ->name=$request->name;


        $typ->save();
       return redirect()->route('status');

    }



  public function edit($id)
    {
      $row=statu::FindOrFail($id);
       return view('BackEnd.usertype.edit',compact('row'));
    }





    public function update($id, Request $request){
        $row=statu::FindOrFail($id);
        $requestArray = $request->all();

        $row->update($requestArray);



        return redirect()->route('status.edit' , ['id' => $row->id]);
    }





    public function destroy($id){
         statu::FindOrFail($id)->delete();
   return redirect()->route('status');

    }



     public function index(){
     $status=statu::paginate(3);


        return view('BackEnd.usertype.index',compact('status'));
    }

}
