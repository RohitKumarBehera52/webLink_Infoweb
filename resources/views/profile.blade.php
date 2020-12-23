@extends('admin.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <button style="float: right ; border-radius: 20px ;">
            <a  href="{{ url('/home') }}"><h7 style="color: black;">Home</h7></a>
        </button>
        <div class="col-sm-2">
            <img src="/upload/avatar/{{$user->avatar}}" >
            <label for="">User id:-</label><h3>{{$user->email}}</h3><br>
        </div>
        <div class="col-sm-10">
            <form enctype="multipart/form-data" method="post" action="/profile">
                <label><h3>update profile image :-</h3></label>
                <input type="file" name="avatar" >
                <input type="hidden" name="_token" value={{csrf_token()}}>
                <input type="submit" name="">
            </form>
        </div>
    
        
       
    </div>
</div>
@endsection