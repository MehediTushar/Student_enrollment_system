@extends('layouts.admin_layouts')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Single View</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Single Data User</li>
    </ol>

    <div class="container">

        @if(count($students)>0)
        @foreach ($students as $stu)
        <div class="row ">
            <div class="col-md-4">
                <div class="profile_img">
                    <img src="{{url($stu->profile_img)}}" style="height: 30vh" class="img-thumbnail" alt=""/>
                </div>
            </div>

            <div class="col-md-6">
                <div class="profile-head">
                    <label><span>Create Date:</span> {{$stu->created_at->diffForHumans()}}</label>
                    <div class="row">
                        <div class="btn-group" role="group">
                            <a href="{{route('student.edit',$stu->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('student.all_view')}}" class="btn btn-warning">Back</a>
                            <a href="{{url('/admin/student/softdelete/'.$stu->id)}}" class="btn btn-danger">Delete</a>
                          </div>

                    </div>
                </div>
            </div>



        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="id">
                    <label><span>Id:</span> {{$stu->id}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="name">
                    <label><span>Name:</span> {{$stu->name}}</label>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-8">
                <div class="uname">
                    <label><span>User Name:</span> {{$stu->uname}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="stu_id">
                    <label><span>Student Id:</span> {{$stu->stu_id}}</label>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8">
                <div class="stu_dept">
                    <label><span>Department:</span>
                        @if ($stu->stu_dept ==1)
                        <span class="label label-success">{{'CSE'}}</span>
                        @elseif ($stu->stu_dept==2)
                        <span class="label label-primary">{{'EEE'}}</span>
                        @elseif ($stu->stu_dept==3)
                        <span class="label label-info">{{'BBA'}}</span>
                        @elseif ($stu->stu_dept==4)
                        <span class="label label-info">{{'CEN'}}</span>
                        @else
                        <span class="label label-info">{{'Not Defined'}}</span>

                    @endif </label>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8">
                <div class="add_date">
                    <label><span>Admission Date:</span> {{$stu->add_date}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="email">
                    <label><span>Email:</span> {{$stu->email}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="password">
                    <label><span>Password:</span> {{$stu->password}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="phone_num">
                    <label><span>Mobile Number:</span> {{$stu->phone_num}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="gender">
                    <label><span>Gender:</span>@if ($stu->gender ==1)
                        <span class="label label-success">{{'Male'}}</span>
                        @elseif ($stu->gender==2)
                        <span class="label label-primary">{{'Female'}}</span>
                        @elseif ($stu->gender==3)
                        <span class="label label-info">{{'Other'}}</span>
                        @else
                        <span class="label label-info">{{'Not Defined'}}</span>

                    @endif </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="religon">
                    <label><span>Religon:</span>
                        @if ($stu->religon ==01)
                        <span class="label label-success">{{'Islam'}}</span>
                        @elseif ($stu->religon==02)
                        <span class="label label-primary">{{'Hindu'}}</span>
                        @elseif ($stu->religon==03)
                        <span class="label label-info">{{'Other'}}</span>
                        @else
                        <span class="label label-info">{{'Not Defined'}}</span>

                    @endif </label>
                </div>
            </div>
        </div>


        <div class="row ">
            <div class="col-md-8">
                <div class="dob">
                    <label><span>Date Of Birth:</span> {{$stu->dob}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="father_name">
                    <label><span>Father Name:</span> {{$stu->father_name}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="mother_name">
                    <label><span>Mother Name:</span> {{$stu->mother_name}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="curent_address">
                    <label><span>Current Address:</span> {{$stu->curent_address}}</label>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8">
                <div class="parmnt_address">
                    <label><span>Parmanent Address:</span> {{$stu->parmnt_address}}</label>
                </div>
            </div>
        </div>

            @endforeach
            @endif

    </div>










</div>

@endsection
