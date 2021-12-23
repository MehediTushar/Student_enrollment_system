@extends('layouts.admin_layouts')

@section('content')
<div class="class container fluid">
    <h1 class="mt-4">Create Student</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Create Student</li>
    </ol>

    <div class="container">
        <div class="form-group row">
            <form action="{{route('student.update',$students->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-row">

                        <div class="form-group col-md-4 mt-3">
                            <label for="name">Student Name</label>
                            <input name="name" class="form-control  type="text" value="{{$students->name}}" required autocomplete="name" autofocus>

                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <label for="uname">User Name</label>
                            <input name="uname" class="form-control"  type="text" value=" {{$students->uname}}" required autocomplete="uname" autofocus>

                        </div>

                    </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="stu_id">Student Id</label>
                                <input name="stu_id" class="form-control"  type="number" value="{{ $students->stu_id }}" required autocomplete="stu_id" autofocus>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone_num">Student Phone</label>
                                <input name="phone_num" class="form-control"  type="number" value="{{ $students->phone_num }}" required autocomplete="phone_num" autofocus>
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-control" value="{{$students->gender}}" required autocomplete="gender" autofocus>
                                <option selected>Choose...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                                </select>

                            </div>

                            <div class="form-group col-md-4">
                                <label for="religon">Religon</label>
                                <select id="religon"  name="religon" class="form-control" value="{{$students->religon}}" required autocomplete="religon" autofocus>
                                <option selected>Choose...</option>
                                <option value="01">Islam</option>
                                <option value=="02">Hindu</option>
                                <option value="03">Other</option>
                                </select>

                            </div>
                            <div class="form-group col-md-4 wow fadeInLeft" data-wow-delay="300ms"">
                                <label for="dob">Date Of Birth</label>
                                <input name="dob" class="form-control" type="date" value="{{ $students->dob }}" required autocomplete="dob" autofocus>
                            </div>


                        </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="father_name">Father Name</label>
                            <input name="father_name" class="form-control" type="text" value="{{ $students->father_name }}" required autocomplete="father_name" autofocus>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mother_name">Mother Name</label>
                            <input name="mother_name" class="form-control" type="text" value="{{ $students->mother_name }}" required autocomplete="mother_name" autofocus>

                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input name="email" class="form-control" type="email" value="{{ $students->email }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input name="password" class="form-control" type="password" value="{{ $students->password}}" required autocomplete="password" autofocus>

                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="stu_dept">Student Department</label>
                            <select id="stu_dept" name="stu_dept" class="form-control " value="{{$students->stu_dept}}"  required autocomplete="stu_dept" autofocus>
                            <option selected>Choose...</option>
                            <option value="1">CSE</option>
                            <option value="2">EEE</option>
                            <option value="3">BBA</option>
                            <option value="4">CEN</option>
                            </select>

                        </div>

                        <div class="form-group col-md-4 wow fadeInLeft" data-wow-delay="300ms">
                            <label for="add_date">Admission Date</label>
                            <input name="add_date" class="form-control" type="date" value="{{$students->add_date}}"  required autocomplete="add_date" autofocus>

                        </div>

                    </div>

                    <div class="form-group col-md-4">
                        <label for="profile_img">image</label>
                    <img style="height: 30vh" src="{{url($students->profile_img)}}" class="img-thumbnail @error('profile_img') is-invalid @enderror">
                        <input class="mt-3" type="file" name="profile_img">

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="curent_address">Curent Address</label>
                            <textarea class="form-control" name="curent_address" rows="5">{{($students->curent_address)}}</textarea>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="parmnt_address">Parmanent Address</label>
                            <textarea class="form-control" name="parmnt_address" rows="5">{{($students->parmnt_address)}}</textarea>
                        </div>
                    </div>
            </div>
            <div class="form-group col-md-12 justify-content-center" >
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-lg btn-success">Submit</button>
                </div>
            </div>
              </form>

        </div>



    </div>


</div>

@endsection
