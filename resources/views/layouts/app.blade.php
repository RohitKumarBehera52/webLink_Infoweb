<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WebLink_Infoware') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/Weblink.js') }}" defer></script>

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md col-sm-12   bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand " style="color:rgb(45, 43, 148); margin-left: 150px" href="{{ url('/') }}">
                    <img  src="image/logo.png" alt="Weblink" style="width: 10%;height: 10%;border-right: 1px solid blue;">
                   <strong> {{ __('Weblink') }}</strong> {{__('Infoweb')}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 150px;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                                <li class="nav-item">
                                    <a class="nav-link" type="button" style="color: purple;padding-right: 20px ;" ><b>{{ __('Pricing') }}</b></a>
                                </li>
                            
                            
                            
                                <li class="nav-item">
                                    <a class="nav-link" type="button" style="color: purple;padding-right: 20px ;" ><b>{{ __('Cover Area') }}</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="faqBtn" type="button"  style="color: purple;padding-right: 20px ;" ><b>{{ __('FAQ') }}</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" type="button" style="color: purple;padding-right: 20px ;" ><b>{{ __('Support') }}</b></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="btn btn-outline-primary nav-link btn-sm" id="myBtn" style="border-radius: 50px;width: 100px ;color: blue;"  >
                                        <strong>Call Now    </strong>   <i class="fa fa-phone">    </i> </span>
                                    </a>
                                    <!-- <a class="nav-link" role="button" >{{ __('Call Now') }}</a> -->
                                </li>
                           
                           
                            
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
             <div class="modal" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
      
                    <!-- Modal Header -->
                        
                          <div class="modal-header ">
                            <h4 class="modal-title text-primary">Call Us Now</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>

                          </div>
                                                 
        
                            <!-- Modal body -->
                            <div class="modal-body">
                              <div class="container-fluid">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <img src="image/call.JPG" >
                                        </div>
                                
                                      <div class="col-md-6"> 
                                        <div class="form-group">
                                            <img src="image/logo.png" style="width: 20%;height: 30%">
                                          <span style="color:rgb(45, 43, 148);font-size: 30px"><strong> {{ __('Weblink') }}</strong> {{__('Infoweb')}}</span><br>
                                        
                                          
                                          
                                          <label style="color:rgb(179, 50, 11);font-size: 25px"><b> Let us answer your quries.<br> Call us.</b><label>
                                          </div>
                                           
                                            <div class="form-group">
                                            <label  style="color:rgb(179, 50, 11);">Office contact 1:</label><br>
                                            <label  style="color:rgb(45, 43, 148);"><b>+91 9769217768</b></label>
                                            <span style="padding-left: 50px;"><button  style="border-radius: 50px;width: 150px ;background-color:rgb(45, 43, 148);color: white;  " >Copy this no . <i class="fa fa-copy">    </i></button>
                                            </span>

                                            <hr>
                                              <label  style="color:rgb(179, 50, 11);">Office contact 1:</label><br>
                                            <label style="color:rgb(45, 43, 148);"><b>+91 9769217760</b></label>
                                            <span style="padding-left: 50px;"><button id="copyButton" style="border-radius: 50px;width: 150px ;background-color:rgb(45, 43, 148);color: white; " onclick="myCopy('secondNo')">Copy this no . <i class="fa fa-copy">    </i></button>
                                            </span>

                                                <input type="text" value="9769217768" name="firstNo" id="firstNo" style="display: none;">
                                                <input type="text" value="9769217760" name="secondNo" id="secondNo" style="display: none;">

                                               </div>
                                               
                                           
                                      </div>
                                  </div>
                              </div>
                            </div>
        
                         <!-- Modal footer -->
                            
                    </div>
                </div>
            </div>
  
            @yield('slider_partOne')
        </main>
    </div>
</body>
</html>
