@extends('layouts.admin_layouts')

@section('content')
<div class="class container fluid">
    <div class="container">
        <div class="form-group row">
            <form action="{{route('register.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
                <div class="row">
                    <div class="form-row">

                        <div class="form-group col-md-4 mt-3">
                            <label for="name">Register  Name</label>
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
                                <label for="reg_id">Register Id</label>
                                <input name="reg_id" class="form-control  @error('reg_id') is-invalid @enderror" type="number" value="{{ old('reg_id') }}" required autocomplete="reg_id" autofocus>
                                @error('reg_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone_num">Register Phone</label>
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
                                <option value="02">Hindu</option>
                                <option value="03">Other</option>
                                </select>
                                @error('religon')
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
                            <label for="reg_dept">Register Department</label>
                            <select id="reg_dept" name="reg_dept" class="form-control @error('reg_dept') is-invalid @enderror"  required autocomplete="reg_dept" autofocus>
                            <option selected>Choose...</option>
                            <option value="1">CSE</option>
                            <option value="2">EEE</option>
                            <option value="3">BBA</option>
                            <option value="4">CEN</option>
                            </select>
                            @error('reg_dept')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="reg_img">image</label>
                    <img style="height: 30vh" src="{{ asset('assets/img/1.JPG') }}" class="img-thumbnail @error('reg_img') is-invalid @enderror">
                        <input class="mt-3" type="file" name="reg_img">
                        @error('reg_img')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                    </div>


                    <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Check me out
                        </label>
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
