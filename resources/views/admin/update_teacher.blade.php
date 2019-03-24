@extends('admin.admin_layout')
@section('admin_content')

<h6 class="bg-white d-inline p-2" style="box-shadow: 0 6px 15px 0 rgba(207, 211, 218, 0.35);">
  <a class="nav-link d-inline" href=" {{ URL::to('/dashboard') }} ">Home</a>
  <i class="fas fa-chevron-right"></i>
  <a class="nav-link d-inline" href=" {{ URL::to('/all-teacher') }} ">All Teacher</a>
  <i class="fas fa-chevron-right"></i>
  <span> Edit </span>
</h6>

<div class="col-md-8" style="margin: 0 auto; margin-top: 30px;">
<div class="col-12 col-lg-12 col-xl-12 grid-margin">
  <div class="card">
      <div class="card-body">
      	
          <h2 class="card-title text-center"> Teacher Registration Form </h2>
          <form class="forms-sample" action=" {{ URL::to('/update-terprocess/'. $all_data->teacher_id) }} " method="post" enctype="multipart/form-data">
          	{{ csrf_field() }}

              <div class="form-group">
                  <label for="exampleInputEmail1">Full Name </label>
                  <input type="text" name="teacher_name" value=" {{ $all_data->teacher_name }} " class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Department </label>
                  <select type="text" name="teacher_department" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Department Name" required="">
                  @if($all_data->teacher_department == 1)
                    <option value="1">CSE</option>
                  @elseif($all_data->teacher_department == 2)
                    <option value="2">EEE</option>
                  @else
                    <option value="3">BBA</option>
                  @endif 

                    <option value="1">CSE</option>
                    <option value="2">EEE</option>
                    <option value="3">BBA</option>
                  </select>    
              </div>


              <div class="form-group">
                  <label for="exampleInputEmail1"> Father's Name </label>
                  <input type="text" name="teacher_fathername" value=" {{ $all_data->teacher_fathername }} " class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Father's Name" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Mother's Name </label>
                  <input type="text" name="teacher_mothername" value=" {{ $all_data->teacher_mothername }} " class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mother's Name" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Email </label>
                  <input type="email" name="teacher_email" value=" {{ $all_data->teacher_email }} " class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required="">    
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> Mobile </label>
                  <input type="phone" name="teacher_mobile" value=" {{ $all_data->teacher_mobile }} " class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile" required="">    
              </div> 
              
              <div class="form-group">
                  <label for="exampleTextarea"> Address </label>
                  <textarea class="form-control p-input" name="teacher_address" id="exampleTextarea" rows="3" required=" fill up this field">
                    {{ $all_data->teacher_address }}
                  </textarea>
              </div>

              <button type="submit" name="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
  </div>
</div>
</div>

@endsection