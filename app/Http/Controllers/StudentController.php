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
    public function index()
    {
        $studentAll=Student::orderBy('id','DESC')->get();
    
        return view('student.student-info',compact('studentAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
    	$student->delete();

    	$notification=array('messege' => 'Category Deleted!', 'alert-type' => 'success');
    	return redirect()->back()->with($notification);
    }
}
