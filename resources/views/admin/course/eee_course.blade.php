@extends('layouts.admin_layouts')

@section('content')

<div class="container-fluid px-4">
    <h3 class="mt-4"> EEE</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">EEE Course View</li>
    </ol>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"> Code</th>
            <th scope="col">Course Name</th>
            <th scope="col">Credit</th>
            <th scope="col">Department</th>
            <th scope="col">Course Perequisite</th>
            <th scope="col">Create Date</th>

            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @if(count($subjects)>0)
            @foreach ($subjects as $sub)
              <tr class="table-info">
                <th scope="row">{{$sub->id}}</th>
                <td>{{$sub->course_id}}</td>
                <td>{{$sub->course_name}}</td>
                <td>{{$sub->credit}}</td>
                <td>@if ($sub->course_dept ==1)
                    <span class="label label-success">{{'CSE'}}</span>
                    @elseif ($sub->course_dept==2)
                    <span class="label label-primary">{{'EEE'}}</span>
                    @elseif ($sub->course_dept==3)
                    <span class="label label-info">{{'BBA'}}</span>
                    @elseif ($sub->course_dept==4)
                    <span class="label label-info">{{'CEN'}}</span>
                    @else
                    <span class="label label-info">{{'Not Defined'}}</span>

                @endif

                <td>@if($sub->course_status ==1)
                    <span class="label label-success">{{'Yes'}}</span>
                @elseif ($sub->course_status ==2)
                <span class="label label-success">{{'No'}}</span>
                @else
                <span class="label label-info">{{'Not Defined'}}</span>
            @endif
            </td>
                <td>{{$sub->created_at->diffForHumans()}}</td>

                <td>

                    <div class="btn-group" role="group">
                        <a href="#" class="btn btn-info">Publish</a>
                        <a href="#" class="btn btn-primary">UnPublish</a>
                        <a href="{{route('course.edit',$sub->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('/admin/course/softdelete/'.$sub->id)}}" class="btn btn-danger">Delete</a>
                      </div>
                     </td>

              </tr>

              @endforeach
              @endif
        </tbody>

      </table>
      {{ $subjects->links()}}


</div>



@endsection
