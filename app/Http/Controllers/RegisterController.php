<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Register\onlyTrashed;

use App\Register;

class RegisterController extends Controller
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
       return view('admin.register.create_reg');
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
            'name'=>'required|string',
            'uname'=>'required|string',
            'reg_id'=>'required|numeric',
            'gender'=>'required|string',
            'religon'=>'required|string',
            'reg_dept'=>'required|string',
            'email'=>'required|string|email|max:255|unique:users',
           'phone_num'=>'required|numeric',
           'password'=>'required|string|min:8',

        ]);

        $registers=new Register;

        $registers->name=$request->name;
        $registers->uname=$request->uname;
        $registers->reg_id=$request->reg_id;
        $registers->gender=$request->gender;
        $registers->religon=$request->religon;
        $registers->reg_dept=$request->reg_dept;
        $registers->email=$request->email;
        $registers->phone_num=$request->phone_num;
        $registers->password=Hash::make($request->password);

        $img_file=$request->file('reg_img');
        Storage::putFile('public/img/', $img_file);
        $registers->reg_img="storage/img/".$img_file->hashName();

        $registers->save();

        return redirect()->route('register.create')->with('success','new Register create successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function view()
    {
        $registers=Register::latest()->paginate(5);
        return view('admin.register.reg_view',compact('registers'));
    }


   public function Softdelete($id)
    {
        $trashcat=Register::find($id)->delete();
        return redirect()->back()->with('success','new data delete successfully');


    }

    public function trashview()
    {
        //$trashcat=Register::onlyTrashed()->get();
        $trashcat=Register::onlyTrashed()->latest()->paginate(3);

        return view('admin.register.trash_list',compact('trashcat'));

    }

    public function show($id)
    {
       $registers=Register::where('id',$id)->get();
       return view('admin.register.single_view',compact('registers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registers=Register::find($id);
        return view('admin.register.edit',compact('registers'));
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
            'name'=>'required|string',
            'uname'=>'required|string',
            'reg_id'=>'required|numeric',
            'gender'=>'required|string',
            'religon'=>'required|string',
            'reg_dept'=>'required|string',
            'email'=>'required|string|email|max:255|unique:users',
           'phone_num'=>'required|numeric',
           'password'=>'required|string|min:8',

        ]);

        $registers=Register::find($id);

        $registers->name=$request->name;
        $registers->uname=$request->uname;
        $registers->reg_id=$request->reg_id;
        $registers->gender=$request->gender;
        $registers->religon=$request->religon;
        $registers->reg_dept=$request->reg_dept;
        $registers->email=$request->email;
        $registers->phone_num=$request->phone_num;
        $registers->password=Hash::make($request->password);

        if($request->file('reg_img'))
        {
            $img_file=$request->file('reg_img');
            Storage::putFile('public/img/', $img_file);
            $registers->reg_img="storage/img/".$img_file->hashName();

        }


        $registers->save();

        return redirect()->route('register.view')->with('success','new data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function restore($id)
    {
        $registers=Register::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success',' data restore successfully');
    }
    public function destroy($id)
    {
        $registers=Register::onlyTrashed()->find($id);
        if(file_exists('public_path'))
        {
            @unlink('public_path',$registers->reg_img);
        }
        $registers->forceDelete();
        return redirect()->route('register.view')->with('success',' data parmanently delete successfully');


    }
}
