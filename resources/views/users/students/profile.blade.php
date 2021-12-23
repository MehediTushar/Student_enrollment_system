@extends('layouts.users_layouts')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th scope="ml-5">#</th>
                        <th >Student Id</th>
                        <th >User Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Admission Date</th>
                        <th>Create Date</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if(count($students)>0)
                        @foreach ($students as $stu)
                      <tr>
                        <td>{{$stu->id}}</td>
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
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>
                            </button>
                            <button type="button" class="btn btn-info btn-sm btn-icon-text mr-3">
                                View
                                <i class="typcn typcn-view btn-icon-append"></i>
                              </button>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                              Delete
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
     </div>


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021<a href="#" class="text-muted" target="_blank">Create My own</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="# class="text-muted" target="_blank"> dashboard</a></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- partial -->
  </div>

</div>

@endsection
