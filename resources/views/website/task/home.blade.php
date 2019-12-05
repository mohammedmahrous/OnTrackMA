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

            <th>task name</th>
            <th>description</th>
            <th>start_at</th>
            <th>end_at</th>
            <th>starttime</th>
            <th>endtime</th>


          </tr>
        </thead>
        <tbody>
          <tr>


   @foreach($tasks as $row)
            <td>{{ $row->name }}</td>
            <td>
          {{ $row->description }}
        </td>
        <td>
      {{ $row->start_at }}
    </td>
    <td>
  {{ $row->end_at }}
</td>
<td>
{{ $row->starttime }}
</td>
<td>
{{ $row->endtime }}
</td>
          </tr>
@endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
