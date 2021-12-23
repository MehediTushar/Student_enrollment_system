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
            <th scope="col">Register Id</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Department</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Create Date</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @if(count($registers)>0)
            @foreach ($registers as $reg)
              <tr class="table-info">
                <th scope="row">{{$reg->id}}</th>
                <td>{{$reg->reg_id}}</td>
                <td>{{$reg->uname}}</td>
                <td>{{$reg->email}}</td>
                <td>@if ($reg->reg_dept ==1)
                    <span class="label label-success">{{'CSE'}}</span>
                    @elseif ($reg->reg_dept==2)
                    <span class="label label-primary">{{'EEE'}}</span>
                    @elseif ($reg->reg_dept==3)
                    <span class="label label-info">{{'BBA'}}</span>
                    @elseif ($reg->reg_dept==4)
                    <span class="label label-info">{{'CEN'}}</span>
                    @else
                    <span class="label label-info">{{'Not Defined'}}</span>

                @endif

                <td>{{$reg->phone_num}}</td>
                <td>{{$reg->created_at->diffForHumans()}}</td>
                <td><img style="height: 5vh" src="{{url($reg->reg_img)}}"></td>
                <td>

                    <div class="btn-group" role="group">
                        <a href="{{route('register.edit',$reg->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('register.show',$reg->id)}}" class="btn btn-warning">View</a>
                        <a href="{{url('/admin/register/softdelete/'.$reg->id)}}" class="btn btn-danger">Delete</a>
                      </div>
                     </td>

              </tr>

              @endforeach
              @endif
        </tbody>

      </table>
      {{ $registers->links()}}


</div>



@endsection
