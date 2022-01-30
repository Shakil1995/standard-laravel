<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;
use Image;
use File;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



public function home(){
    return view('layouts.admin' );
}

    public function index()
    {
        $student=Student::orderBy('id','DESC')->get();
    
        return view('student.student-info',compact('student'));
    }

  
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
    //    dd($request);

    // return $request; 
    //    $validated = $request->validate([
    //     'student_roll' => 'required|unique:students',
    //     'student_name' => 'required',
    // ]);


        // $photo=$request->student_img;
        // $photoname= uniqid().'.'.$photo->getClientOriginalExtension();
        // Image::make($photo)->resize(32,32)->save('public/files/student/'.$photoname);  //image intervention
          Student::insert([
              'student_name'=> $request->student_name,
              'student_roll'=> $request->student_roll,
              'student_class'=> $request->student_class,
              'student_age'=> $request->student_age,
              'student_phone'=> $request->student_phone,
              'student_email'=> $request->student_email,
            //   'student_img'=> 'public/files/student/'.$photoname,
          ]);
          $notification=array('messege' => ' new student  Inserted!', 'alert-type' => 'success');
          return redirect()->back()->with($notification);


    }


 
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        $student=Student::find($id);
    	$student->delete();

    	$notification=array('messege' => 'Category Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }
}
