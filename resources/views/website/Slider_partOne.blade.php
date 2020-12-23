@extends('layouts.app')

@section('slider_partOne')
<br>
<br>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/1.jpeg" alt="First slide" style="border-radius: 30px">
       <div class="carousel-caption d-none d-md-block" style="margin-top: 8%;margin-right: 30%;position: relative;">
    <h2 style="color: purple;">Over 20,000 satisfied users.</h2>
    <h2 style="color: green;">Trusted by multiple companies.</h2>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/2.jpeg" alt="Second slide" style="border-radius: 30px" > 
      <div class="carousel-caption d-none d-md-block" style="margin-top: 8%;margin-right: 30%; position: relative;">
    <h2 style="color: blue;">Over 20,000 satisfied users.</h2>
    <h2 style="color: green;">Trusted by multiple companies.</h2>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/3.jpeg" alt="Third slide" style="border-radius: 30px" > 
      <div class="carousel-caption d-none d-md-block " style="margin-top: 8%;margin-right: 30%;position: relative;">
    <h2 style="color: rgb(181, 176, 31);">Over 20,000 satisfied users.</h2>
    <h2 style="color: green;">Trusted by multiple companies.</h2>
  </div>
    </div>
    
    <div class="carousel-item">
      <img class="d-block w-100" src="image/4.jpeg" alt="fourth slide" style="border-radius: 30px" >
      <div class="carousel-caption d-none d-md-block" style="margin-top: 8%;margin-right: 30%;position: relative;">
    <h2 style="color: rgb(224, 90, 49);">Over 20,000 satisfied users.</h2>
    <h2 style="color: green;">Trusted by multiple companies.</h2>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/5.jpeg" alt="fifth slide"  style="border-radius: 30px"> 
      <div class="carousel-caption d-none d-md-block" style="margin-top: 8%;margin-right: 30%;position: relative;">
    <h2 style="color: blue;">Over 20,000 satisfied users.</h2>
    <h2 style="color: green;">Trusted by multiple companies.</h2>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/6.jpeg" alt="sixth slide" style="border-radius: 30px"> 
      <div class="carousel-caption d-none d-md-block" style="margin-top: 8%;margin-right: 30%;position: relative;">
    <h2 style="color: orange;">Over 20,000 satisfied users.</h2>
    <h2 style="color: green;">Trusted by multiple companies.</h2>
  </div>
    </div>
  </div>
<!--   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span  class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->


@yield('serv')
</div>
</div>
</div>
  

@endsection