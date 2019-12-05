@extends('Backend.layout.app')

@section('content')
<div class="container-fluid container-fullw bg-white">
  <div class="row">
    <div class="col-md-12">
      <h5 class="over-title margin-bottom-15">Basic <span class="text-bold">Table</span></h5>
      <p>
        For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>. It may seem super redundant, but given the widespread use of tables for other plugins like calendars and date pickers, we've opted to isolate our custom table styles.
      </p>
      <table class="table table-hover" id="sample-table-1">
        <thead>
          <tr>

            <th>Browser</th>
                  <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>


 @foreach($status as $row)
            <td>{{ $row->name }}</td>
            <td class="center">
            <div class="visible-md visible-lg hidden-sm hidden-xs">
              <a href="{{route('status.edit',['id'=>$row->id])}}" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
              <form action="{{route('status.delete',['id'=>$row->id])}}" method="get">
              {{ csrf_field() }}

            </div>
            <div class="visible-xs visible-sm hidden-md hidden-lg">
              <div class="btn-group" dropdown is-open="status.isopen">
                <button type="submit" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
                  <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
                </button>
              </div>
                </form>
                <ul class="dropdown-menu pull-right dropdown-light" role="menu">
                  <li>
                    <a href="#">
                      Edit
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Share
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Remove
                    </a>
                  </li>
                </ul>
              </div>
            </div></td>
          </tr>
 @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
