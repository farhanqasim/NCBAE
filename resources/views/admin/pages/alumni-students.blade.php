@extends('admin.layouts.app')
@section('title','Alumni Student')
@section('content')

<div class="container-fluid">
  <div class="nk-content-inner">
    <div class="nk-content-body">
      <div class="components-preview">
        <div class="nk-block-head nk-block-head-lg wide-sm">
          <div class="nk-block-head-content">

            <h2 class="nk-block-title fw-normal">Alumni Students</h2>

          </div>
        </div>

        <div class="nk-block nk-block-lg">

          <div class="card card-bordered card-preview">
            <div class="card-inner">
              <table class="table table-bordered table-reponsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father</th>
                    <th scope="col">CNIC</th>

                    <th scope="col">Program</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($student as $students)
                  <tr>
                    <th scope="row">{{$students->id}}</th>
                    <td>{{$students->name}}</td>
                    <td>{{$students->father_name}}</td>
                    <td>{{$students->cnic}}</td>

                    <td>{{$students->program}}</td>

                    <td>{{$students->duration}}</td>
                    <td>{{$students->contact}}</td>
                    <td>{{$students->email}}</td>

                    <td>
                      <a href="{{route('view-studentinfo',$students)}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="View Detail">
                        <span class="nk-menu-icon text-white">
                          <em class="icon ni ni-eye" style="color:white !important;"></em>
                        </span>
                      </a>

                      <a href="{{route('edit-student',$students)}}" class="btn btn-warning btn-sm" title="Edit Student">
                        <span class="nk-menu-icon text-white">
                          <em class="icon ni ni-edit"></em>
                        </span>
                      </a>
                      <a href="{{route('student-delete', $students)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete Student">
                        <span class="nk-menu-icon text-white">
                          <em class="icon ni ni-trash-empty"></em>
                        </span>
                      </a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

@endsection