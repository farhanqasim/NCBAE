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
   <title>@yield('title')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('admin/assets/css/theme.css')}}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
             @include('student.include.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                 @include('student.include.header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    @yield('content')
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    
                </div>
               
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    
     <script src="{{asset('admin/assets/js/bundle.js')}}"></script>
    <script src="{{asset('adminassets/js/scripts.js')}}"></script>
    <script src="{{asset('adminassets/js/charts/chart-ecommerce.js')}}"></script>
       @include('admin.includes.messages')
</body>

</html>