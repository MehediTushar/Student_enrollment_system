@extends('layouts.admin_layouts')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Single View</h1>

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Single Data User</li>
    </ol>

    <div class="container">

        @if(count($registers)>0)
        @foreach ($registers as $reg)
        <div class="row ">
            <div class="col-md-4">
                <div class="reg_img">
                    <img src="{{url($reg->reg_img)}}" style="height: 30vh" class="img-thumbnail" alt=""/>
                </div>
            </div>

            <div class="col-md-6">
                <div class="profile-head">
                    <label><span>Create Date:</span> {{$reg->created_at->diffForHumans()}}</label>
                    <div class="row">
                        <div class="btn-group" role="group">
                            <a href="{{route('register.edit',$reg->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{route('register.view')}}" class="btn btn-warning">Back</a>
                            <a href="{{url('/admin/register/softdelete/'.$reg->id)}}" class="btn btn-danger">Delete</a>
                          </div>

                    </div>
                </div>
            </div>



        </div>
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="id">
                    <label><span>Id:</span> {{$reg->id}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="name">
                    <label><span>Name:</span> {{$reg->name}}</label>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-8">
                <div class="uname">
                    <label><span>User Name:</span> {{$reg->uname}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="stu_id">
                    <label><span>Register Id:</span> {{$reg->reg_id}}</label>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-8">
                <div class="stu_dept">
                    <label><span>Department:</span>
                        @if ($reg->reg_dept ==1)
                        <span class="label label-success">{{'CSE'}}</span>
                        @elseif ($reg->reg_dept==2)
                        <span class="label label-primary">{{'EEE'}}</span>
                        @elseif ($reg->reg_dept==3)
                        <span class="label label-info">{{'BBA'}}</span>
                        @elseif ($reg->reg_dept==4)
                        <span class="label label-info">{{'CEN'}}</span>
                        @else
                        <span class="label label-info">{{'Not Defined'}}</span>

                    @endif </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="email">
                    <label><span>Email:</span> {{$reg->email}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="password">
                    <label><span>Password:</span> {{$reg->password}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="phone_num">
                    <label><span>Phone Number:</span> {{$reg->phone_num}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="gender">
                    <label><span>Gender:</span>@if ($reg->gender ==1)
                        <span class="label label-success">{{'Male'}}</span>
                        @elseif ($reg->gender==2)
                        <span class="label label-primary">{{'Female'}}</span>
                        @elseif ($reg->gender==3)
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
                        @if ($reg->religon ==01)
                        <span class="label label-success">{{'Islam'}}</span>
                        @elseif ($reg->religon==02)
                        <span class="label label-primary">{{'Hindu'}}</span>
                        @elseif ($reg->religon==03)
                        <span class="label label-info">{{'Other'}}</span>
                        @else
                        <span class="label label-info">{{'Not Defined'}}</span>

                    @endif </label>
                </div>
            </div>
        </div>


            @endforeach
            @endif

    </div>


</div>

@endsection
