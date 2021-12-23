@extends('layouts.admin_layouts')

@section('content')
<div class="container fluid">
    <h1 class="mt-4">Create Student</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Create Student</li>
    </ol>

    <div class="container">
        <div class="form-group row">
            <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
                <div class="row">
                    <div class="form-row">

                        <div class="form-group col-md-4 mt-3">
                            <label for="name">Student Name</label>
                            <input name="name" class="form-control  @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <label for="uname">User Name</label>
                            <input name="uname" class="form-control @error('uname') is-invalid @enderror" type="text" value="{{ old('uname') }}" required autocomplete="uname" autofocus>
                            @error('uname')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="stu_id">Student Id</label>
                                <input name="stu_id" class="form-control  @error('stu_id') is-invalid @enderror" type="number" value="{{ old('stu_id') }}" required autocomplete="stu_id" autofocus>
                                @error('stu_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone_num">Student Phone</label>
                                <input name="phone_num" class="form-control @error('phone_num') is-invalid @enderror" type="number" value="{{ old('phone_num') }}" required autocomplete="phone_num" autofocus>
                                @error('phone_num')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" required autocomplete="gender" autofocus>
                                <option selected>Choose...</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                                </select>
                                @error('gender')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="religon">Religon</label>
                                <select id="religon"  name="religon" class="form-control @error('religon') is-invalid @enderror" required autocomplete="religon" autofocus>
                                <option selected>Choose...</option>
                                <option value="01">Islam</option>
                                <option value=="02">Hindu</option>
                                <option value="03">Other</option>
                                </select>
                                @error('religon')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                            </div>
                            <div class="form-group col-md-4 wow fadeInLeft" data-wow-delay="300ms"">
                                <label for="dob">Date Of Birth</label>
                                <input name="dob" class="form-control  @error('dob') is-invalid @enderror" type="date" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                                @error('dob')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="father_name">Father Name</label>
                            <input name="father_name" class="form-control  @error('father_name') is-invalid @enderror " type="text" value="{{ old('father_name') }}" required autocomplete="father_name" autofocus>
                            @error('father_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="mother_name">Mother Name</label>
                            <input name="mother_name" class="form-control @error('mother_name') is-invalid @enderror " type="text" value="{{ old('mother_name') }}" required autocomplete="mother_name" autofocus>
                            @error('mother_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password">Password</label>
                            <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                            @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="password-confirm">Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="stu_dept">Student Department</label>
                            <select id="stu_dept" name="stu_dept" class="form-control @error('stu_dept') is-invalid @enderror"  required autocomplete="stu_dept" autofocus>
                            <option selected>Choose...</option>
                            <option value="1">CSE</option>
                            <option value="2">EEE</option>
                            <option value="3">BBA</option>
                            <option value="4">CEN</option>
                            </select>
                            @error('stu_dept')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="form-group col-md-4 wow fadeInLeft" data-wow-delay="300ms"">
                            <label for="add_date">Admission Date</label>
                            <input name="add_date" class="form-control @error('add_date') is-invalid @enderror" type="date" value="{{ old('add_date') }}" required autocomplete="add_date" autofocus>
                            @error('add_date')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group col-md-4">
                        <label for="profile_img">image</label>
                    <img style="height: 30vh" src="{{ asset('assets/img/1.JPG') }}" class="img-thumbnail @error('profile_img') is-invalid @enderror">
                        <input class="mt-3" type="file" name="profile_img">
                        @error('profile_img')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="curent_address">Curent Address</label>
                            <textarea class="form-control" name="curent_address" rows="5"></textarea>

                        </div>

                        <div class="form-group col-md-4">
                            <label for="parmnt_address">Parmanent Address</label>
                            <textarea class="form-control" name="parmnt_address" rows="5"></textarea>

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
