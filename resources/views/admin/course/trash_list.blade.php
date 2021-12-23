@extends('layouts.admin_layouts')

@section('content')

<div class="container-fluid px-4">
    <h3 class="mt-4"> Course Trash</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">All Course Trash</li>
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
            @if(count($trashcat)>0)
            @foreach ($trashcat as $trash)
              <tr class="table-info">
                <th scope="row">{{$trash->id}}</th>
                <td>{{$trash->course_id}}</td>
                <td>{{$trash->course_name}}</td>
                <td>{{$trash->credit}}</td>
                <td>@if ($trash->course_dept ==1)
                    <span class="label label-success">{{'CSE'}}</span>
                    @elseif ($trash->course_dept==2)
                    <span class="label label-primary">{{'EEE'}}</span>
                    @elseif ($trash->course_dept==3)
                    <span class="label label-info">{{'BBA'}}</span>
                    @elseif ($trash->course_dept==4)
                    <span class="label label-info">{{'CEN'}}</span>
                    @else
                    <span class="label label-info">{{'Not Defined'}}</span>

                @endif

                <td>@if($trash->course_status ==1)
                    <span class="label label-success">{{'Yes'}}</span>
                @elseif ($trash->course_status ==2)
                <span class="label label-success">{{'No'}}</span>
                @else
                <span class="label label-info">{{'Not Defined'}}</span>
            @endif
            </td>
                <td>{{$trash->created_at->diffForHumans()}}</td>

                <td>

                    <div class="btn-group" role="group">
                        <a href="{{url('/admin/course/restore/'.$trash->id)}}" class="btn btn-success">Restore</a>
                        <form action="{{route('course.destroy',$trash->id)}}"  method="post">
                            @csrf
                            @method('DELETE')
                        <input type="submit" name="submit" onclick="return confirm('Are Your Sure Delete it?')" value="Delete" class="btn btn-danger">
                        </form>
                      </div>
                     </td>

              </tr>

              @endforeach
              @endif
        </tbody>

      </table>
      {{ $trashcat->links()}}


</div>



@endsection
