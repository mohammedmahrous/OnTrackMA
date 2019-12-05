<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\statu;
use App\task;
use App\User;
class TasksController extends Controller
{
  public function index()
  {
      $tasks=task::all();
        return view('BackEnd.task.index',compact('tasks'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
     $users=User::all();
     $statuss=statu::all();
     return view('BackEnd.task.create',compact('users','statuss'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {


      $task=new task();
      $task->name=$request->name;
      $task->description=$request->description;
      $task->asign_to=$request->asign_to;
      $task->colleprator=$request->colleprator;
      $task->start_at=$request->start_at;
     $task->end_at=$request->end_at;

       $task->status=$request->status;
       $task->starttime=$request->starttime;
       $task->endtime=$request->endtime;



    $task->save();

   return redirect()->route('task');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $task=task::find($id);

      $taskstart=date('d-m-Y', strtotime($task->start_at));


      $users=User::all();
      $statuss=statu::all();
       return view('BackEnd.task.edit',compact('task','users','statuss','taskstart'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $row=task::FindOrFail($id);
    $requestArray = $request->all();

    $row->update($requestArray);
    return redirect()->route('task.edit' , ['id' => $row->id]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    task::FindOrFail($id)->delete();
return redirect()->route('Tasks');
  }
}
