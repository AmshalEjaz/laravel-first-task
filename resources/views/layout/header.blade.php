<!DOCTYPE html>
<html lang="zxx">

<head>
    
    <title></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    
        
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
       
                
                
                    <!-- <nav class="header__menu mobile-menu">
                        <ul>
            <li><a href="{{URL::to('company')}}">Company</a></li>
            <li><a href="{{URL::to('employee')}}">Employee</a></li>
            <li><a href="{{URL::to('dashboard')}}">Dashboard</a></li>
    @auth
    <ul>
        @if(auth()->user()->hasRole('manager'))
            <li><a href="{{ URL::to('company') }}" class="text-blue-500 hover:text-blue-950">Company</a></li>
            <li><a href="{{ URL::to('employee') }}" class="text-blue-500 hover:text-blue-950">Employee</a></li>
        @endif

        @if(auth()->user()->hasRole('employee'))
            <li><a href="{{ URL::to('dashboard') }}" class="text-blue-500 hover:text-blue-950">Dashboard</a></li>
        @endif

        @if(auth()->user()->hasRole('manager') || auth()->user()->hasRole('employee'))
            <li><a href="{{ URL::to('dashboard') }}" class="text-blue-500 hover:text-blue-950">Dashboard</a></li>
        @endif
    </ul>
    @endauth -->
                            <!-- <li><a href="{{ route('student.index') }}">Student</a></li> -->
                            
                            
                       
        
    </header>
    <!-- Header Section End -->
