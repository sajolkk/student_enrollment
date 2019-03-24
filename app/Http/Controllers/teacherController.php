<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add_teacher');
    }


    public function save_teacher(Request $request)
    {
        $data=array();
        $data['teacher_name']=$request->teacher_name;
        $data['teacher_department']=$request->teacher_department;
        $data['joning_date']=$request->joning_date;
        $data['teacher_fathername']=$request->teacher_fathername;
        $data['teacher_mothername']=$request->teacher_mothername;
        $data['teacher_email']=$request->teacher_email;
        $data['teacher_mobile']=$request->teacher_mobile;
        $data['teacher_password']=md5($request->teacher_password);
        //$data['confirm_password']=md5($request->confirm_password);
        $data['teacher_address']=$request->teacher_address;
        $image=$request->file('teacher_image');
        if ($image) {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path="teacher-image/";
            $iamge_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['teacher_image']=$iamge_url;
                DB::table('teacher')->insert($data);
                Session::put('termsg', 'teacher Add Successfully');
                return Redirect::to('/add-teacher');
            }
        }

        $data['teacher_image']='';
            DB::table('teacher')->insert($data);
            Session::put('termsg', 'teacher Add Without Image...!!');
            return Redirect::to('/add-teacher');
    }

    public function all_teacher()
    {
        $data=DB::table('teacher')->get();
        $manage=view('admin.all_teacher')->with('all_data', $data);
        return view('admin.admin_layout')->with('admin.admin_layout', $manage);
    }
   
    public function teacher_profile($teacher_id)
    {
        $all_data=DB::table('teacher')->where('teacher_id', $teacher_id)->first();
        $manage=view('admin.teacher_profile')->with('data', $all_data);
        return view('admin.admin_layout')->with('admin.teacher_profile', $manage);
        Session::put('teacher_image', $all_data->teacher_image);
    }

    public function update_teacher($teacher_id)
    {
        $data=DB::table('teacher')->where('teacher_id', $teacher_id)->first();
        $manage=view('admin.update_teacher')->with('all_data', $data);
        return view('admin.admin_layout')->with('admin.update_teacher', $manage);
    }
    public function update_terprocess($teacher_id, Request $request)
    {
        $data=array();
        $data['teacher_name']=$request->teacher_name;
        $data['teacher_department']=$request->teacher_department;
        $data['teacher_fathername']=$request->teacher_fathername;
        $data['teacher_mothername']=$request->teacher_mothername;
        $data['teacher_email']=$request->teacher_email;
        $data['teacher_mobile']=$request->teacher_mobile;
        $data['teacher_address']=$request->teacher_address;
        $result=DB::table('teacher')->where('teacher_id', $teacher_id)->update($data);
        if ($result) {
            Session::put('termsg', $teacher_id.' No Teacher Information Update Susccessfully');
            return Redirect::to('all-teacher');
        }
        else{
            Session::put('termsg', $teacher_id.' No Teacher Information Update Fail');
            return Redirect::to('all-teacher');
        }
    }

    public function delete_teacher($teacher_id)
    {
        $result=DB::table('teacher')->where('teacher_id', $teacher_id)->delete();
        if ($result) {
            Session::put('termsg', $teacher_id.' No Teacher Information Delete Susccessfully');
            return Redirect::to('all-teacher');
        }
        else{
            Session::put('termsg', $teacher_id.' No Teacher Information Delete Fail');
            return Redirect::to('all-teacher');
        }
    }
}
