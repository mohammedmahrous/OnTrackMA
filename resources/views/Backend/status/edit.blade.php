@extends('Backend.layout.app')

@section('content')


                  <form action="{{route('status.update', ['id' => $row->id])}}" method="POST">
                    @csrf

                 @include('Backend.status.form')

                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                    <div class="clearfix"></div>
                  </form>



@endsection
