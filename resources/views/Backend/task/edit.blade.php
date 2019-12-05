@extends('Backend.layout.app')

@section('content')


                  <form action="{{route('task.update', ['id' => $task->id])}}" method="POST">
                  @csrf
                 @include('Backend.task.form')

                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                    <div class="clearfix"></div>
                  </form>



@endsection
