{{csrf_field()}}
<div class="row">
  <div class="col-md-12">
    <div class="errorHandler alert alert-danger no-display">
      <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
    </div>
    <div class="successHandler alert alert-success no-display">
      <i class="fa fa-ok"></i> Your form validation is successful!
    </div>
  </div>
  <div class="col-md-6">
     @php $input = "name"; @endphp
    <div class="form-group">
      <label class="control-label">
         Name <span class="symbol required"></span>
      </label>
      <input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="name"
      value="{{ isset($row) ? $row->{$input} : '' }}">
    </div>

  </div>

</div>
