@extends('website.Features')

@section('Login_page')
<hr>
<div id="registerDiv" style="display: none">
<div class="row h-100 justify-content-center align-items-center">
	<h1 style="color: purple;"><b>Join our happy family</b></h1>
	</div>
<div class="row h-100 justify-content-center align-items-center">
	<h1 style="color: green;"><b>Register Free.</b></h1>
	</div>
<br>
	<div class="row h-100 justify-content-center align-items-center">
	<button class="btn btn-outline-primary" style="border-radius: 20px; width: 350px"><h7> <i style='font-size:24px' class="fa fa-google">  </i><b> With Google</b></h7></button>
	</div>
	<br>
	<div class="row h-100 justify-content-center align-items-center">
	<p >Or sign up with </p>
	</div>

 <form method="POST" action="{{ route('register') }}">
 	@csrf
 	<div class="form-group row justify-content-center ">
 		<div class="col-md-4">
                        <input id="name" type="text" style="border-radius: 20px;" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name"  required  >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
 	</div>
 	 <div class="form-group row justify-content-center">
                            

                            <div class="col-md-4">
                                <input id="email" type="email" style="border-radius: 20px;" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail"  required >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                           

                            <div class="col-md-4">
                                <input id="password" type="password"  style="border-radius: 20px;" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" style="border-radius: 20px;" class="form-control" name="password_confirmation" placeholder="Confirm-password" required >
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-lg-6 offset-md-2">
                                <button type="submit" style="border-radius: 20px; width: 350px;" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        
 </form>
 <div class="row h-100 justify-content-center align-items-center">
	<p >Allready have an account ? <a style="color: blue;" type="button" id="loginDivBtn"><b>Log in</b></a></p>
	</div>
	</div>
	<div id="LoginDiv" >
		
<div class="row h-100 justify-content-center align-items-center">
	<h1 style="color: green;"><b>Login here.</b></h1>
	</div>
	<br>

	<form method="POST" action="{{ route('login') }}">
 	@csrf
<div class="form-group row justify-content-center ">
 		
                           
                            <div class="col-md-4">
                                <input id="email" type="email" placeholder="E-mail" style="border-radius: 20px;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
 	</div>
 	<div class="form-group row justify-content-center ">
 		
                           
                            <div class="col-md-4">
                                <input id="password" type="password" placeholder="password" style="border-radius: 20px;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
 	</div>

                        <div class="form-group row justify-content-center">
                            <div class="col-lg-6 offset-md-2">
                                <button type="submit" style="border-radius: 20px; width: 350px;"  class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
 </form>

 <div class="row h-100 justify-content-center align-items-center">
	<p >Don't have an account ? <a style="color: blue;" type="button" id="signUpDivBtn"><b>SignUp</b></a></p>
	</div>
	</div>

	<br>
	<br>
 <hr>	

@endsection