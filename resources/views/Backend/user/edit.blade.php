@extends('Backend.layout.app')

@section('content')



                  <form action="{{route('user.update', ['id' => $row->id])}}" method="POST">
                    @csrf

                 @include('Backend.user.form')

                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                    <div class="clearfix"></div>
                  </form>



@endsection
