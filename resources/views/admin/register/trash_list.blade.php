@extends('layouts.admin_layouts')

@section('content')

<div class="container-fluid px-4">
    <h3 class="mt-4">Trash List</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">View All Trash Data</li>
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

            @foreach ($trashcat as $trash)
              <tr class="table-info">
                <th scope="row">{{$trash->id}}</th>
                <td>{{$trash->reg_id}}</td>
                <td>{{$trash->uname}}</td>
                <td>{{$trash->email}}</td>
                <td>@if ($trash->reg_dept ==1)
                    <span class="label label-success">{{'CSE'}}</span>
                    @elseif ($trash->reg_dept==2)
                    <span class="label label-primary">{{'EEE'}}</span>
                    @elseif ($trash->reg_dept==3)
                    <span class="label label-info">{{'BBA'}}</span>
                    @elseif ($trash->reg_dept==4)
                    <span class="label label-info">{{'CEN'}}</span>
                    @else
                    <span class="label label-info">{{'Not Defined'}}</span>

                @endif

                <td>{{$trash->phone_num}}</td>
                <td>{{$trash->created_at->diffForHumans()}}</td>
                <td><img style="height: 5vh" src="{{url($trash->reg_img)}}"></td>
                <td>

                    <div class="btn-group" role="group">
                        <a href="{{url('/admin/register/restore/'.$trash->id)}}" class="btn btn-success">Restore</a>
                        <form action="{{route('register.destroy',$trash->id)}}"  method="post">
                            @csrf
                            @method('DELETE')
                        <input type="submit" name="submit" value="Delete" onclick="return confirm('Are Your Sure Delete it?')" class="btn btn-danger">
                        </form>

                      </div>
                     </td>

              </tr>


              @endforeach

        </tbody>

      </table>
      {{$trashcat->links()}}






</div>

@endsection
