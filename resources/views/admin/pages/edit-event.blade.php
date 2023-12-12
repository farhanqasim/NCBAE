@extends('admin.layouts.app')
@section('title','Edit Event')
@section('content')
<div class="container-fluid">
  <div class="nk-content-inner">
    <div class="nk-content-body">
      <div class="components-preview">
        <div class="nk-block-head nk-block-head-lg wide-sm">
          <div class="nk-block-head-content">

            <h2 class="nk-block-title fw-normal">Edit Event</h2>

          </div>
        </div>

        <div class="nk-block nk-block-lg">

          <div class="card">
            <div class="card-inner">
             <form method="POST" action="{{route('update-event', $event)}}" enctype="multipart/form-data">
                @csrf
               
                <div class="row g-gs">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-name">Event Title</label>
                      <div class="form-control-wrap">
                        <input type="text" class="form-control" id="fva-full-name" name="title" value="{{$event->title}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-Father">Describe</label>
                      <div class="form-control-wrap">
                        <input type="text" class="form-control" id="fva-full-Father" name="describe" value="{{$event->describe}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-CNIC">Date</label>
                      <div class="form-control-wrap">
                        <input type="date" class="form-control" id="fva-full-CNIC" name="date" value="{{$event->date}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-qualification">Time</label>
                      <div class="form-control-wrap">
                        <input type="time" class="form-control" id="fva-full-qualification" name="time" value="{{$event->time}}">
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fv-Password">Event Picture</label>
                      <div class="form-control-wrap">
                        <div class="input-group">
                          <input type="file" name="profile" class="form-control">
                        </div><br>
                        <img src="{{asset('storage/Events')}}/{{$event->profile}}" alt="Student Profile Image" width="80px" height="auto">
                      </div>
                    </div>
                  </div>
                   
                  <div class="col-md-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection