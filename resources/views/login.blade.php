@extends('master')
@section('content')
    
<div class="container ">
    <div class="row">
        <div class="col-sm-6 text-center mx-auto">
            <form action="login" method="POST">
              @csrf
                <div class="form-group custom-login">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="passward" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary my-4">Login</button>
              </form>
        </div>
    </div>
</div>


@endsection