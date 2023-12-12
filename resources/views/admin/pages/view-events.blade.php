@extends('admin.layouts.app')
@section('title','All Events')
@section('content')

<div class="container-fluid">
  <div class="nk-content-inner">
    <div class="nk-content-body">
      <div class="components-preview">
        <div class="nk-block-head nk-block-head-lg wide-sm">
          <div class="nk-block-head-content">

            <h2 class="nk-block-title fw-normal">All Events</h2>

          </div>
        </div>

        <div class="nk-block nk-block-lg">

          <div class="card card-bordered card-preview">
            <div class="card-inner">
              <table class="table table-bordered table-reponsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Describe</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($events as $event)
                  <tr>
                    <th scope="row">{{$event->id}}</th>
                    <td>{{$event->title}}</td>
                    <td>{{$event->describe}}</td>
                    <td>{{$event->date}}</td>

                    <td>{{$event->time}}</td>

                    <td>
                    	<img src="{{asset('storage/Events')}}/{{$event->profile}}" alt="" width="15%" height="auto">
                    </td>
                    
                    <td>
                     
                      <a href="{{route('edit-event', $event)}}" class="btn btn-warning btn-sm" title="Edit Student">
                        <span class="nk-menu-icon text-white">
                          <em class="icon ni ni-edit"></em>
                        </span>
                      </a>

                      <a href="{{route('event-delete', $event)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete Student">
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