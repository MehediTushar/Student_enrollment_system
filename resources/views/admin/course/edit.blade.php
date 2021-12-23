@extends('layouts.admin_layouts')

@section('content')
<div class="class container fluid">
    <h1 class="mt-4">Edit Course</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Course</li>
    </ol>

    <div class="container">
        <div class="form-group row">
            <form action="{{route('course.update',$subjects->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-row">

                        <div class="form-group col-md-4 mt-3">
                            <label for="course_name">Course Name</label>
                            <input name="course_name" class="form-control " type="text" value="{{$subjects->course_name}}" required autocomplete="course_name" autofocus>

                        </div>

                    </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="course_id">Course Code</label>
                                <input name="course_id" class="form-control" type="text" value="{{$subjects->course_id}}" required autocomplete="course_id" autofocus>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="credit">Course Credit</label>
                                <input name="credit" class="form-control" type="text" value="{{$subjects->credit}}" required autocomplete="credit" autofocus>
                            </div>

                        </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="course_dept">Course Department</label>
                            <select id="course_dept" name="course_dept" class="form-control " value="{{$subjects->course_dept}}"  required autocomplete="course_dept" autofocus>
                            <option selected>{{$subjects->course_dept}}</option>
                            <option value="1">CSE</option>
                            <option value="2">EEE</option>
                            <option value="3">BBA</option>
                            <option value="4">CEN</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="course_status">Course Perequisite</label>
                            <select id="course_status" name="course_status" class="form-control" value="{{$subjects->course_status}}"  required autocomplete="course_status" autofocus>
                            <option selected>{{$subjects->course_status}}</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                            </select>
                        </div>

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
