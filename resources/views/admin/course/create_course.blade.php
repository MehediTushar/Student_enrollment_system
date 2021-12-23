@extends('layouts.admin_layouts')

@section('content')
<div class="class container fluid">
    <div class="container">
        <div class="form-group row">
            <form action="{{route('course.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-row">

                        <div class="form-group col-md-4 mt-3">
                            <label for="course_name">Course Name</label>
                            <input name="course_name" class="form-control  @error('course_name') is-invalid @enderror" type="text" value="{{ old('course_name') }}" required autocomplete="course_name" autofocus>
                            @error('course_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="course_id">Course Code</label>
                                <input name="course_id" class="form-control  @error('course_id') is-invalid @enderror" type="text" value="{{ old('course_id') }}" required autocomplete="course_id" autofocus>
                                @error('course_id')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="credit">Course Credit</label>
                                <input name="credit" class="form-control @error('credit') is-invalid @enderror" type="text" value="{{ old('credit') }}" required autocomplete="phone_num" autofocus>
                                @error('credit')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="course_dept">Course Department</label>
                            <select id="course_dept" name="course_dept" class="form-control @error('course_dept') is-invalid @enderror"  required autocomplete="course_dept" autofocus>
                            <option selected>Choose...</option>
                            <option value="1">CSE</option>
                            <option value="2">EEE</option>
                            <option value="3">BBA</option>
                            <option value="4">CEN</option>
                            </select>
                            @error('course_dept')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="course_status">Course Perequisite</label>
                            <select id="course_status" name="course_status" class="form-control @error('course_status') is-invalid @enderror"  required autocomplete="course_status" autofocus>
                            <option selected>Choose...</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                            </select>
                            @error('course_status')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
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
