<!DOCTYPE html>
<html lang="zxx" class="js">

<head>

  <meta charset="utf-8">
  <meta name="author" content="Softnio">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="./images/favicon.png">
  <!-- Page Title  -->
  <title>Applying Post</title>
  <!-- StyleSheets  -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/dashlite.css')}}">
  <link id="skin-default" rel="stylesheet" href="{{asset('admin/assets/css/theme.css')}}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
  <div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
      <!-- sidebar @s -->

      <!-- sidebar @e -->
      <!-- wrap @s -->
      <div class="nk-wrap ">

        <div class="nk-content ">
          <div class="container-fluid">
            <div class="nk-content-inner">
              <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                  <div class="nk-block-head nk-block-head-lg wide-sm">
                    <div class="nk-block-head-content">

                      <h2 class="nk-block-title fw-normal">Apply Post</h2>
                    </div>
                  </div><!-- .nk-block -->

                  <div class="nk-block nk-block-lg">

                    <div class="card">
                      <div class="card-inner">
                        <div class="card-head">
                          <h5 class="card-title">Put Your Information</h5>
                        </div>
                        <form action="{{route('apply-submitpost')}}" method="post">
                          @csrf
                          <div class="row g-4">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-label" for="full-name-1">Full Name</label>
                                <div class="form-control-wrap">
                                  <input type="text" class="form-control" name="full_nmae" id="full-name-1">
                                  <input type="text" class="form-control" name="post_id" id="full-name-1" value="{{$post->id}}" hidden>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-label" for="email-address-1">Email address</label>
                                <div class="form-control-wrap">
                                  <input type="text" class="form-control" name="email" id="email-address-1" value="{{ old('email') }}">
                                  @error('email')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-label" for="phone-no-1">Phone No</label>
                                <div class="form-control-wrap">
                                  <input type="text" class="form-control" name="contact" id="phone-no-1">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-label" for="pay-amount-1">Qualification</label>
                                <div class="form-control-wrap">
                                  <input type="text" class="form-control" name="qualification" id="pay-amount-1">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="form-label" for="pay-amount-1">Experience</label>
                                <div class="form-control-wrap">
                                  <input type="text" class="form-control" name="experience" id="pay-amount-1">
                                </div>
                              </div>
                            </div>

                            <div class="col-12">
                              <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div><!-- .nk-block -->

                </div><!-- .components-preview -->
              </div>
            </div>
          </div>
        </div>
        <!-- content @e -->
        <!-- footer @s -->

      </div>
      <!-- wrap @e -->
    </div>
    <!-- main @e -->
  </div>
  <!-- app-root @e -->
  <!-- select region modal -->

  <!-- JavaScript -->
  <script src="{{asset('admin/assets/js/bundle.js')}}"></script>
  <script src="{{asset('adminassets/js/scripts.js')}}"></script>
  @include('admin.includes.messages')

</body>

</html>