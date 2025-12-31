<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{URL::asset('webpage/images/fevicon/fevicon.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title></title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('webpage/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="{{URL::asset('webpage/https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap')}}" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{URL::asset('webpage/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{URL::asset('webpage/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{URL::asset('webpage/css/responsive.css')}}" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container col-md-1'">
          <a class="navbar-brand" href="index">
            <span>
              
        <a class="navbar-brand" href="index"><img src="dashboard/images/wristgem.png" class="mr-1 col-md-2" alt="logo"/><span><h3>Wrist Gem</h3></span></a>
        
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="{{URL::to('/index')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('about')}}"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('product')}}">Products</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('contact')}}">Contact Us</a>
              </li>
               @if(session()->has('user'))         
            
              <li class="nav-item">
                <a class="nav-link" href="{{URL::to('orderhistory')}}">My Order History</a>
              </li>
            </ul>
                @endif
            <div class="user_optio_box">
            @if(session()->has('user'))
               <a href="{{URL::to('logout')}}">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
              </a>
            @else
            

              <a href="{{URL::to('login')}}">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
            
            @endif
             @if(session()->has('user'))
               <a href="{{url('cart')}}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              </a>         
            @endif
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
