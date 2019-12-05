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
           task Name <span class="symbol required"></span>
         </label>
         <input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="name" value="{{ isset($task) ? $task->name : '' }}">
       </div>
       <div class="form-group">
         <label class="control-label">
           description  <span class="symbol required"></span>
         </label>
         <input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="description"  value="{{ isset($task) ? $task->description : '' }}">
       </div>
       <div class="form-group">
         <label class="bmd-label-floating">asign_to</label>
            <select name="asign_to" class="form-control">
 @foreach($users  as $asign_to)
        <option value="{{$asign_to->id}} ">{{$asign_to->name}}</option>

@endforeach
            </select>
       </div>
       <div class="form-group">
         <label class="bmd-label-floating">colleprator</label>
            <select name="colleprator" class="form-control">
@foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach
            </select>
       </div>
       <div class="form-group">
          <label class="bmd-label-floating">status</label>
         <select name="status" class="form-control">
@foreach($statuss as $status)
         <option value="{{$status->id}}">{{$status->name}}</option>
@endforeach
         </select>
       </div>
     </div>
     <div class="col-md-6">

       <div class="form-group">
									<label for="timesheetinput3">start_at</label>
									<div class="position-relative has-icon-left">

										<input type="date" id="timesheetinputd3" class="form-control" name="start_at">
										<div class="form-control-position">
											<i class="ft-message-square"></i>
										</div>
									</div>
								</div>

                <div class="form-group">
                           <label for="timesheetinput3">Date</label>
                           <div class="position-relative has-icon-left">
                             <input type="date" id="timesheetinputd3" class="form-control" name="end_at>
                             <div class="form-control-position">
                               <i class="ft-message-square"></i>
                             </div>
                           </div>
                         </div>

       <div class="col-md-6">
										<div class="form-group">
											<label for="timesheetinput6">Start Time</label>
											<div class="position-relative has-icon-left">
												<input type="time" id="timesheetinput6" class="form-control" name="starttime" value="{{ isset($task) ? $task->starttime : '' }}">
												<div class="form-control-position">
													<i class="ft-clock"></i>
												</div>
											</div>
										</div>
									</div>
       <div class="col-md-6">
 										<div class="form-group">
 											<label for="timesheetinput6">End Time</label>
 											<div class="position-relative has-icon-left">
 												<input type="time" id="timesheetinput6" class="form-control" name="endtime" value="{{ isset($task) ? $task->endtime : '' }}">
 												<div class="form-control-position">
 													<i class="ft-clock"></i>
 												</div>
 											</div>
 										</div>
 									</div>


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
