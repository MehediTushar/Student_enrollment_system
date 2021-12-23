@extends('layouts.admin_layouts')

@section('content')
<div class="class container fluid">
    <h1 class="mt-4">Edit Register</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Register</li>
    </ol>

    <div class="container">
        <div class="form-group row">
            <form action="{{route('register.update',$registers->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-row">

                        <div class="form-group col-md-4 mt-3">
                            <label for="name">Register  Name</label>
                            <input name="name" class="form-control"  type="text" value="{{$registers->name}}" required autocomplete="name" autofocus>

                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <label for="uname">User Name</label>
                            <input name="uname" class="form-control"  type="text" value=" {{$registers->uname}}" required autocomplete="uname" autofocus>

                        </div>

                    </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="reg_id">Register Id</label>
                                <input name="reg_id" class="form-control"  type="number" value="{{ $registers->reg_id }}" required autocomplete="stu_id" autofocus>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone_num">Register Phone</label>
                                <input name="phone_num" class="form-control"  type="number" value="{{ $registers->phone_num }}" required autocomplete="phone_num" autofocus>
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-control" value="{{$registers->gender}}" required autocomplete="gender" autofocus>
                                <option selected>{{$registers->gender}}</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                                </select>

                            </div>

                            <div class="form-group col-md-4">
                                <label for="religon">Religon</label>
                                <select id="religon"  name="religon" class="form-control" value="{{$registers->religon}}" required autocomplete="religon" autofocus>
                                <option selected>{{$registers->religon}}</option>
                                <option value="01">Islam</option>
                                <option value="02">Hindu</option>
                                <option value="03">Other</option>
                                </select>

                            </div>

                        </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input name="email" class="form-control" type="email" value="{{ $registers->email }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input name="password" class="form-control" type="password" value="{{ $registers->password}}" required autocomplete="password" autofocus>

                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="reg_dept">Register Department</label>
                            <select id="reg_dept" name="reg_dept" class="form-control " value="{{$registers->reg_dept}}"  required autocomplete="reg_dept" autofocus>
                            <option selected>{{$registers->reg_dept}}</option>
                            <option value="1">CSE</option>
                            <option value="2">EEE</option>
                            <option value="3">BBA</option>
                            <option value="4">CEN</option>
                            </select>

                        </div>

                    </div>

                    <div class="form-group col-md-4">
                        <label for="reg_img">image</label>
                    <img style="height: 30vh" src="{{url($registers->reg_img)}}" class="img-thumbnail @error('reg_img') is-invalid @enderror">
                        <input class="mt-3" type="file" name="reg_img">

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
