@extends('admin.admin_layout')
@section('admin_content')

<h6 class="bg-white d-inline p-2" style="box-shadow: 0 6px 15px 0 rgba(207, 211, 218, 0.35);">
  <a class="nav-link d-inline" href=" {{ URL::to('/dashboard') }} ">Home</a>
  <i class="fas fa-chevron-right"></i>
  <span>All Student</span>
</h6>

<div class="col-md-8" style="margin: 0 auto; margin-top: 30px;">
<div class="col-12 col-lg-12 col-xl-12 grid-margin">
  <div class="card">
      <div class="card-body">
      	@if($stumsg=Session::get('stumsg'))
      		@if($stumsg)
      			{{ $stumsg }}
          @else
            {{ Session::put('stumsg', null) }}
      		@endif
      	@endif
          <h2 class="card-title text-center"> Student Registration Form </h2>
          <form class="forms-sample" action=" {{ URL::to('save-student') }} " method="post" enctype="multipart/form-data">
          	{{ csrf_field() }}

              <div class="form-group">
                  <label for="exampleInputEmail1">Full Name </label>
                  <input type="text" name="student_name" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Roll </label>
                  <input type="text" name="student_roll" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Roll Number" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Department </label>
                  <select type="text" name="student_department" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Department Name" required="">
                    <option value="">Select Department</option>
                    <option value="1">CSE</option>
                    <option value="2">EEE</option>
                    <option value="3">BBA</option>
                  </select>    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Admission Year </label>
                  <input type="text" name="admission_year" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admission Year" required="">    
              </div>



              <div class="form-group">
                  <label for="exampleInputEmail1"> Father's Name </label>
                  <input type="text" name="student_fathername" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Father's Name" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Mother's Name </label>
                  <input type="text" name="student_mothername" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mother's Name" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Email </label>
                  <input type="email" name="student_email" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Mobile </label>
                  <input type="phone" name="student_mobile" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile" required="">    
              </div> 

              <div class="form-group">
                  <label for="exampleInputEmail1"> Password </label>
                  <input type="password" name="student_password" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="******" required="">    
              </div>

               <div class="form-group">
                  <label for="exampleInputEmail1"> Confirm Password </label>
                  <input type="password" name="confirm_password" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="******" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleTextarea"> Address </label>
                  <textarea class="form-control p-input" name="student_address" id="exampleTextarea" rows="3" required=" fill up this field"></textarea>
              </div>

              <div class="form-group">
                  <label>Upload file</label>
                  <div class="row">
                    <div class="col-12">
                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                      <input type="file" name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                  </div>
              </div>

              <button type="submit" name="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
  </div>
</div>
</div>

@endsection