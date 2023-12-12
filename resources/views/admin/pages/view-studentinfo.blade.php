@extends('admin.layouts.app')
@section('title','Student Detail')
@section('content')

<div class="container-fluid">
  <div class="nk-content-inner">
    <div class="nk-content-body">
      <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
          <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Student Detail</h3>

          </div>

        </div>
      </div><!-- .nk-block-head -->
      <div class="nk-block">
        <div class="row g-gs">
          <div class="col-sm-6 col-lg-1 col-xxl-3"></div>
          <div class="gallery card">
            <div class="col-sm-6 col-lg-10 col-xxl-3">

              <a class="gallery-image popup-image">
                <img class="w-100 rounded-top" src="{{asset('storage/student_images')}}/{{$user->profile}}" alt="" height="300px">
              </a>

            </div>
            <div class="row">
    <div class="col-md-12">
        <table class="table">
            <tr>
                <th scope="row">Name</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th scope="row">Father's Name</th>
                <td>{{$user->father_name}}</td>
            </tr>
            <tr>
                <th scope="row">CNIC</th>
                <td>{{$user->cnic}}</td>
            </tr>
            <tr>
                <th scope="row">Qualification</th>
                <td>{{$user->qualification}}</td>
            </tr>
            <tr>
                <th scope="row">Total Marks</th>
                <td>{{$user->total_marks}}</td>
            </tr>
            <tr>
                <th scope="row">Obtain Marks</th>
                <td>{{$user->obtain_marks}}</td>
            </tr>
            <tr>
                <th scope="row">Program</th>
                <td>{{$user->program}}</td>
            </tr>
            <tr>
                <th scope="row">Durations</th>
                <td>{{$user->duration}}</td>
            </tr>
            <tr>
                <th scope="row">Contact</th>
                <td>{{$user->contact}}</td>
            </tr>
            <tr>
                <th scope="row">Gender</th>
                <td>{{$user->gender}}</td>
            </tr>
            <tr>
                <th scope="row">Email </th>
                <td>{{$user->email }}</td>
            </tr>
        </table>
    </div>
</div>


            

           
          </div>

        </div>
      </div><!-- .nk-block -->
    </div>
  </div>
</div>

@endsection