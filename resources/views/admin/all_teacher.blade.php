@extends('admin.admin_layout')
@section('admin_content')

<h6 class="bg-white d-inline p-2" style="box-shadow: 0 6px 15px 0 rgba(207, 211, 218, 0.35);">
  <a class="nav-link d-inline" href=" {{ URL::to('/dashboard') }} ">Home</a>
  <i class="fas fa-chevron-right"></i>
  <span>All Teacher</span>
</h6>

  <div class="card" style="margin-top: 30px;">
    <div class="card-body">
      <h2 class="card-title">Data table</h2>
      @if($termsg=Session::get('termsg'))
          @if($termsg)
            {{ $termsg }}
          @else
            {{ Session::put('termsg', null) }}
          @endif
        @endif
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th> Teacher Id </th>
                  <th> Name </th>
                  <th> Department </th>
                  <th> Email </th>
                  <th> Mobile </th>
                  <th> Image </th>
                  <th> Action </th>
                  
              </tr>
            </thead>
            <tbody>
            @foreach($all_data as $data)	
              <tr>
                  <td> {{ $data->teacher_id }} </td>
                  <td> {{ $data->teacher_name }} </td>

                   @if($data->teacher_department == 1)
                   	<td> CSE </td>
                   @elseif($data->teacher_department == 2)
        					<td> EEE </td>
        				   @else
        					<td> MBA </td>
        				   @endif	

                  <td> {{ $data->teacher_email }} </td>
                  <td> {{ $data->teacher_mobile }} </td>
                  <td> <img src="{{ url($data->teacher_image)}}" height="60px" width="60px" alt="" class="rounded-circle"> </td>
                  
                  <td>
                      
                      <a href=" {{ URL::to('/teacher-profile/'. $data->teacher_id) }} " class="btn btn-outline-primary"><i class="fas fa-user"> Profile</i></a>

                      <a href=" {{ URL::to('/update-teacher/'. $data->teacher_id) }} " class="btn btn-outline-primary"><i class="fas fa-edit"> Edit</i></a>

                      <a href=" {{ URL::to('/delete-teacher/'. $data->teacher_id) }} " class="btn btn-outline-primary" id="delete"><i class="fas fa-trash-alt"> Delete</i></a>
                    
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
        
 @endsection