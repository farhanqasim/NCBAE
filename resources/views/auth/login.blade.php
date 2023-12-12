<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <!-- <base href="../../../"> -->
    <meta charset="utf-8">
    <!-- <meta name="author" content="Softnio"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <!-- <link rel="shortcut icon" href=".images/favicon.png"> -->
    <!-- Page Title  -->
    <title>Login</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/dashlite.css?ver=3.0.3')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('admin/assets/css/theme.css?ver=3.0.3')}}">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{asset('admin/assets/images/logo.svg')}}" srcset="{{asset('admin/assets/images/logo.svg')}}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('assets/images/logo-dark.png')}}" srcset="{{asset('admin/assets/images/logo.svg')}}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                      
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email" >Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input id="email" type="email" class="form-control form-control-lg" id="default-01" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">
                                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                           
                                        </div>
                                        <div class="form-control-wrap">
                                            
                                            <input id="password" type="password" class="form-control form-control-lg" id="password"  name="password" required autocomplete="current-password" placeholder="Enter your password">
                                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                        
                                    </div>
                                     <div class="form-group">
                                       
                                        <a href="{{route('register')}}">Register here</a>
                                    </div>
                                </form>
                               
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
             
            </div>
          
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('admin/assets/js/bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/scripts.js')}}"></script>
    <!-- select region modal -->
   

</html>