@extends('layouts.admin_layouts')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">View</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">View All Data</li>
    </ol>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Student Id</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Department</th>
            <th scope="col">Admission Date</th>
            <th scope="col">Create Date</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @if(count($students)>0)
            @foreach ($students as $stu)
              <tr class="table-info">
                <th scope="row">{{$stu->id}}</th>
                <td>{{$stu->stu_id}}</td>
                <td>{{$stu->uname}}</td>
                <td>{{$stu->email}}</td>
                <td>@if ($stu->stu_dept ==1)
                    <span class="label label-success">{{'CSE'}}</span>
                    @elseif ($stu->stu_dept==2)
                    <span class="label label-primary">{{'EEE'}}</span>
                    @elseif ($stu->stu_dept==3)
                    <span class="label label-info">{{'BBA'}}</span>
                    @elseif ($stu->stu_dept==4)
                    <span class="label label-info">{{'CEN'}}</span>
                    @else
                    <span class="label label-info">{{'Not Defined'}}</span>

                @endif

                <td>{{$stu->add_date}}</td>
                <td>{{$stu->created_at->diffForHumans()}}</td>
                <td><img style="height: 5vh" src="{{url($stu->profile_img)}}"></td>
                <td>

                    <div class="btn-group" role="group">
                        <a href="{{route('student.edit',$stu->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('student.show',$stu->id)}}" class="btn btn-warning">View</a>
                        <a href="{{url('/admin/student/softdelete/'.$stu->id)}}" class="btn btn-danger">Delete</a>
                      </div>
                     </td>

              </tr>


              @endforeach
              @endif
        </tbody>

      </table>

      {{$students->links()}}




</div>

@endsection
