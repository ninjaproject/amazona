@extends('master')
@section('content')
<div class="container custome-login">
    <div class="row justify-content-center mt-3">
        <div class="col-sm-4 col-sm-offset-4 ">
        <form action="login" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1"  class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
           <button type="submit" class="btn btn-primary">Login</button>
        </form>
            
        </div>
        
    </div>
<div>


@endsection