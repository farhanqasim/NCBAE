@extends('student.layouts.app')
@section('title','All Applying')
@section('content')

<div class="container-fluid">
  <div class="nk-content-inner">
    <div class="nk-content-body">
      <div class="components-preview">
        <div class="nk-block-head nk-block-head-lg wide-sm">
          <div class="nk-block-head-content">

            <h2 class="nk-block-title fw-normal">All Applying</h2>

          </div>
        </div>

        <div class="nk-block nk-block-lg">

          <div class="card card-bordered card-preview">
            <div class="card-inner">
              <table class="table table-bordered table-reponsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Post Name</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cv as $posts)
                  <tr>
                    <th scope="row">{{$posts->id}}</th>
                    <td>{{$posts->postName->title??''}}</td>
                    <td>{{$posts->full_nmae}}</td>
                    <td>{{$posts->email}}</td>
                    <td>{{$posts->contact}}</td>
                    <td>{{$posts->qualification}}</td>
                    <td>{{$posts->experience}}</td>
                    <td>
                     
                      <a href="{{route('cv-delete', $posts)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete Student">
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