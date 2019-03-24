@extends('admin.admin_layout')
@section('admin_content')

<h6 class="bg-white d-inline p-2" style="box-shadow: 0 6px 15px 0 rgba(207, 211, 218, 0.35);">
	<a class="nav-link d-inline" href=" {{ URL::to('/dashboard') }} ">Home</a>
	<i class="fas fa-chevron-right"></i>
	<a class="nav-link d-inline" href=" {{ URL::to('/all-teacher') }} ">All Teacher</a>
	<i class="fas fa-chevron-right"></i>
	<span>Teacher Profile</span>
</h6>

  <div class="card col-7" style="margin: 0 auto; margin-top: 30px;">
    <div class="card-body">
     
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                 <td colspan="3" class="text-center border-0">
                 	<img src=" {{ url($data->teacher_image) }} " class="rounded-circle border-primary border" height="250px" width="250px" alt="">
                 	<br>
                 	<h3 class="bold">
                 		{{ $data->teacher_name }} <br>
                 		Department of
                 		@if($data->teacher_department == 1)
	                   		CSE 
	                    @elseif($data->teacher_department == 2)
        					EEE 
        				@else
        					MBA
        				@endif
        				Teacher	
                 	</h3>
                 </td>
                 
              </tr>
            </thead>
            <tbody>
            	
              <tr>
                  <td class="bold"> Teacher Id </td class="bold">
                  <td colspan="2"> {{ $data->teacher_id }} </td>
              </tr>

              <tr>
                  <td class="bold"> Teacher Name </td class="bold">
                  <td colspan="2"> {{ $data->teacher_name }} </td>
              </tr>

              <tr>
                  <td class="bold"> Teacher Department </td class="bold">
                  <td colspan="2"> 
                  	@if($data->teacher_department == 1)
	                   		CSE 
	                    @elseif($data->teacher_department == 2)
        					EEE 
        				@else
        					MBA
        				@endif 
        			</td>
              </tr>

              <tr>
                  <td class="bold"h> Joning Date </td class="bold">
                  <td colspan="2"> {{ $data->joning_date }} </td>
              </tr>

              <tr>
                  <td class="bold"> Father's Name </td class="bold">
                  <td colspan="2"> {{ $data->teacher_fathername }} </td>
              </tr>

              <tr>
                  <td class="bold"> Mother's Name </td class="bold">
                  <td colspan="2"> {{ $data->teacher_mothername }} </td>
              </tr>

              <tr>
                  <td class="bold"> Email </td class="bold">
                  <td colspan="2"> {{ $data->teacher_email }} </td>
              </tr>

              <tr>
                  <td class="bold"> Mobile </td class="bold">
                  <td colspan="2"> {{ $data->teacher_mobile }} </td>
              </tr><tr>
                  <td class="bold"> Address </td class="bold">
                  <td colspan="2"> {{ $data->teacher_address }} </td>
              </tr>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
        
 @endsection