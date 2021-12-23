<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showallstudents()
    {
        $students=Student::latest()->paginate(5);
        return view('admin.student.all_stu_view', compact('students'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create_stu');
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

            'name'=>'required|string|max:255',
            'uname'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8',
            'stu_id'=>'required|numeric',
            'gender'=>'required|string',
            'religon'=>'required|string',
             'dob'=>'required|date',
            'stu_dept'=>'required|string',
            'add_date'=>'required|date',
            'phone_num'=>'required|string|max:255',
            'curent_address'=>'required|string',
            'parmnt_address'=>'required|string',


        ]);

        $students=new Student;

        $students->name=$request->name;
        $students->uname=$request->uname;
        $students->email=$request->email;
        $students->password=Hash::make($request->password);
        $students->stu_id=$request->stu_id;
        $students->gender=$request->gender;
        $students->religon=$request->religon;
        $students->dob=$request->dob;
        $students->father_name=$request->father_name;
        $students->mother_name=$request->mother_name;
        $students->stu_dept=$request->stu_dept;
        $students->add_date=$request->add_date;
        $students->phone_num=$request->phone_num;
        $students->curent_address=$request->curent_address;
        $students->parmnt_address=$request->parmnt_address;

        $img_file=$request->file('profile_img');
        Storage::putFile('public/img/',$img_file);
        $students->profile_img="storage/img/".$img_file->hashName();

        $students->save();

        return redirect()->route('student.create')->with('success','new student create successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students=Student::where('id',$id)->get();
        return view('admin.student.view', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students=Student::find($id);
        return view('admin.student.edit',compact('students'));
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

            'name'=>'required|string|max:255',
            'uname'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8',
            'stu_id'=>'required|numeric',
            'gender'=>'required|string',
            'religon'=>'required|string',
             'dob'=>'required|date',
            'stu_dept'=>'required|string',
            'add_date'=>'required|date',
            'phone_num'=>'required|string|max:255',
            'curent_address'=>'required|string',
            'parmnt_address'=>'required|string',


        ]);

        $students=Student::find($id);

        $students->name=$request->name;
        $students->uname=$request->uname;
        $students->email=$request->email;
        $students->password=Hash::make($request->password);
        $students->stu_id=$request->stu_id;
        $students->gender=$request->gender;
        $students->religon=$request->religon;
        $students->dob=$request->dob;
        $students->father_name=$request->father_name;
        $students->mother_name=$request->mother_name;
        $students->stu_dept=$request->stu_dept;
        $students->add_date=$request->add_date;
        $students->phone_num=$request->phone_num;
        $students->curent_address=$request->curent_address;
        $students->parmnt_address=$request->parmnt_address;

        if($request->file('profile_img'))
        {
            $img_file=$request->file('profile_img');
            Storage::putFile('public/img/',$img_file);
            $students->profile_img="storage/img/".$img_file->hashName();

        }



        $students->save();

        return redirect()->route('student.all_view')->with('success','Student data Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function trashview()
    {
        $trashcat=Student::onlyTrashed()->latest()->paginate(3);
        return view('admin.student.stu_trash_list',compact('trashcat'));
    }

    public function softdelete($id)
    {
        $students=Student::find($id)->delete();
        return redirect()->back()->with('success','new data delete successfully');

    }

    public function restore($id)
    {
        $students=Student::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',' data restore successfully');

    }
    public function destroy($id)
    {
        $students=Student::onlyTrashed()->find($id);
        if(file_exists('public_path'))
        {
            @unlink('public_path',$students->profile_img);
        }
        $students->forceDelete();
        return redirect()->route('student.all_view')->with('success',' data delete successfully');
    }


}
