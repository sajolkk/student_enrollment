<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add_student');
    }

    public function save_student(Request $request)
    {
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_department']=$request->student_department;
        $data['admission_year']=$request->admission_year;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_email']=$request->student_email;
        $data['student_mobile']=$request->student_mobile;
        $data['student_password']=md5($request->student_password);
        //$data['confirm_password']=md5($request->confirm_password);
        $data['student_address']=$request->student_address;
        $data['student_address']=$request->student_address;
        $image=$request->file('student_image');
        if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path="student-image/";
            $iamge_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['student_image']=$iamge_url;
                DB::table('student')->insert($data);
                Session::put('stumsg', 'Student Add Successfully');
                return Redirect::to('/add-student');
            }
        }

        $data['student_image']='';
            DB::table('student')->insert($data);
            Session::put('stumsg', 'Student Add Without Image...!!');
            return Redirect::to('/add-student');
    }

    public function all_student()
    {
        $data=DB::table('student')->get();
        $manage=view('admin.all_student')->with('all_data', $data);
        return view('admin.admin_layout')->with('admin.admin_layout', $manage);
    }

    public function student_profile($student_id)
    {
        $all_data=DB::table('student')->where('student_id', $student_id)->first();
        $manage=view('admin.student_profile')->with('data', $all_data);
        return view('admin.admin_layout')->with('admin.student_profile', $manage);
        Session::put('student_image', $all_data->student_image);
    }

    public function update_student($student_id)
    {
        $all_data=DB::table('student')->where('student_id', $student_id)->first();
        $manage=view('admin.update_student')->with('data', $all_data);
        return view('admin.admin_layout')->with('admin.update_student', $manage);
    }
    public function update_stuprocess($student_id, Request $request)
    {
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_department']=$request->student_department;
        $data['admission_year']=$request->admission_year;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_email']=$request->student_email;
        $data['student_mobile']=$request->student_mobile;
        $data['student_address']=$request->student_address;
        $result=DB::table('student')->where('student_id', $student_id)->update($data);
        if ($result) {
            Session::put('stumsg', $student_id.' No student Information Update Susccessfully');
            return Redirect::to('all-student');
        }
        else{
            Session::put('stumsg', $student_id.' No student Information Update Fail');
            return Redirect::to('all-student');
        }
    }

    public function delete_student($student_id)
    {
        $result=DB::table('student')->where('student_id', $student_id)->delete();
        if ($result) {
            Session::put('stumsg', $student_id.' No student Information Delete Susccessfully');
            return Redirect::to('all-student');
        }
        else{
            Session::put('stumsg', $student_id.' No student Information Delete Fail');
            return Redirect::to('all-student');
        }
    
    }
}
