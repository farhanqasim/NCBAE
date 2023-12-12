@extends('admin.layouts.app')
@section('title','Edit Student')
@section('content')
<div class="container-fluid">
  <div class="nk-content-inner">
    <div class="nk-content-body">
      <div class="components-preview">
        <div class="nk-block-head nk-block-head-lg wide-sm">
          <div class="nk-block-head-content">

            <h2 class="nk-block-title fw-normal">Student Information</h2>

          </div>
        </div>

        <div class="nk-block nk-block-lg">

          <div class="card">
            <div class="card-inner">
             <form method="POST" action="{{route('update-student', $user)}}" enctype="multipart/form-data">
                @csrf
                <div class="row g-gs">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-name">Full Name</label>
                      <div class="form-control-wrap">
                        <input type="text" class="form-control" id="fva-full-name" name="name" value="{{$user->name}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-Father">Father Name</label>
                      <div class="form-control-wrap">
                        <input type="text" class="form-control" id="fva-full-Father" name="father_name" value="{{$user->father_name}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-CNIC">CNIC</label>
                      <div class="form-control-wrap">
                        <input type="text" class="form-control" id="fva-full-CNIC" name="cnic" value="{{$user->cnic}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-qualification">Recent Qualification</label>
                      <div class="form-control-wrap">
                        <input type="text" class="form-control" id="fva-full-qualification" name="qualification" value="{{$user->qualification}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-total">Total marks</label>
                      <div class="form-control-wrap">
                        <input type="number" class="form-control" id="fva-full-total" name="total_marks" value="{{$user->total_marks}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-Obtain">Obtain marks</label>
                      <div class="form-control-wrap">
                        <input type="number" class="form-control" id="fva-full-Obtain" name="obtain_marks" value="{{$user->obtain_marks}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-Program">Put Program</label>
                      <div class="form-control-wrap">
                        <input type="text" class="form-control" id="fva-full-Program" name="program" value="{{$user->program}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-Duration">Duration</label>
                      <div class="form-control-wrap">
                        <select class="form-control form-select" id="fva-Duration" name="duration" data-placeholder="Select a Duration" required>
                          <option label="empty" value=""></option>
                          <option value="4 Year" {{ $user->duration === '4 Year' ? 'selected' : '' }}>4 Year</option>
                          <option value="2 Year" {{ $user->duration === '2 Year' ? 'selected' : '' }}>2 Year</option>
                        </select>
                      </div>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fv-phone">Phone</label>
                      <div class="form-control-wrap">
                        <div class="input-group">
                         
                          <input type="text" name="contact" class="form-control" value="{{$user->contact}}">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fv-Password">Profile Image</label>
                      <div class="form-control-wrap">
                        <div class="input-group">

                          <input type="file" name="profile" class="form-control"><br>
                          <img src="{{asset('storage/student_images')}}/{{$user->profile}}" alt="Student Profile Image" width="50px" height="auto">
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-email">Email address</label>
                      <div class="form-control-wrap">
                     
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="fva-email" name="email" value="{{$user->email}}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-Duration">Alumni Student</label>
                      <div class="form-control-wrap">
                        <select class="form-control form-select" id="fva-Duration" name="alumni" data-placeholder="" required>
                          <option label="Select Alumni" value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label" for="fva-full-Program">Company Name</label>
                      <div class="form-control-wrap">
                        <input type="text" class="form-control" id="fva-full-Program" name="company_name" value="" required>
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-md-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
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