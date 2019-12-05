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
    <div class="form-group">
      <label class="control-label">
         Name <span class="symbol required"></span>
      </label>
      <input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="name" value="{{ isset($row) ? $row->name : '' }}">
    </div>
    <div class="form-group">
      <label class="control-label">
        email  <span class="symbol required"></span>
      </label>
      <input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="email" value="{{ isset($row) ? $row->email : '' }}">
    </div>
    <div class="form-group">
      <label class="control-label">
        password  <span class="symbol required"></span>
      </label>
      <input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="password">
    </div>

    <div class="form-group">
      <label class="bmd-label-floating">usertype
</label>
<select name="usertype" class="form-control">
           @foreach($usertype  as $caegory)
               <option value="{{ $caegory->id }}" {{ isset($row) && $row->usertype == $caegory->id ? 'selected'  :'' }}>{{ $caegory->name }}</option>
           @endforeach
       </select>
    </div>

  </div>

<div class="row">
  <div class="col-md-12">
    <div>
      <span class="symbol required"></span>Required Fields
      <hr>
    </div>
  </div>
</div>
