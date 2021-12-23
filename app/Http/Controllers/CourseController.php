<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create_course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[


            'course_id'=>'required|string',
             'course_name'=>'required|string',
             'credit'=>'required|string',
             'course_dept'=>'required|string',
             'course_status'=>'required|string',

        ]);

        $subjects=new Subject;
        $subjects->course_id=$request->course_id;
        $subjects->course_name=$request->course_name;
        $subjects->credit=$request->credit;
        $subjects->course_dept=$request->course_dept;
        $subjects->course_status=$request->course_status;

        $subjects->save();

        return redirect()->route('course.create')->with('success','new course create successfully');
    }

    public function view()
    {
        $subjects=Subject::latest()->paginate(10);
        return view('admin.course.course_view',compact('subjects'));

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
        $subjects=Subject::find($id);
        return view('admin.course.edit',compact('subjects'));
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
        $this->validate($request,[
            'course_id'=>'required|string',
            'course_name'=>'required|string',
            'credit'=>'required',
            'course_dept'=>'required|string',
            'course_status'=>'required|string',

        ]);

        $subjects=Subject::find($id);
        $subjects->course_id=$request->course_id;
        $subjects->course_name=$request->course_name;
        $subjects->credit=$request->credit;
        $subjects->course_dept=$request->course_dept;
        $subjects->course_status=$request->course_status;

        $subjects->save();

        return redirect()->route('course.view')->with('success','new course update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softdelete($id)
    {
        $trashcat=Subject::find($id)->delete();
        return redirect()->back()->with('success','new data delete successfully');
    }

    public function restore($id)
    {
        $subjects=Subject::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',' data restore successfully');

    }

    public function trashview()
    {
        $trashcat=Subject::onlyTrashed()->latest()->paginate(3);
        return view('admin.course.trash_list',compact('trashcat'));

    }

    public function destroy($id)
    {
        $subjects=Subject::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('course.view')->with('success',' data delete successfully');
    }


}
