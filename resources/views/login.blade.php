@extends('master')
@section('content')
    
<div class="container ">
    <div class="row">
        <div class="col-sm-6 text-center mx-auto">
            <form>
                <div class="form-group custom-login">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary my-4">Submit</button>
              </form>
        </div>
    </div>
</div>


@endsection