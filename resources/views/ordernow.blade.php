@extends('master')
@section('content')

    <div class="my-4">
        <div class="table-responsive col-sm-6" style="margin-left: 2% ">
            <table class="table">
            <thead>
              <tr>
                <th scope="col">Price</th>
                <th scope="col">{{$total}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Tax</th>
                <td>0 Rs</td>
              </tr>
              <tr>
                <th scope="row">Delivery Charges</th>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">Total Amount</th>
                <td>{{$total + 100}}</td>
              </tr>
            </tbody>
          </table>
          <form method="POST" action="orderplace">
            @csrf
            <div class="form-group">
              <textarea class="form-control" name="address" placeholder="Address"></textarea>
            </div>
            <div class="form-group my-2">
              <p><input type="radio" value="cash" name="payment">  <span>Online payment</span></p>
              <p><input type="radio" value="cash" name="payment">  <span>EMI payment</span></p>
              <p><input type="radio" value="cash" name="payment">  <span>Cradit Card</span></p>
            </div>
            <button class="btn btn-primary" type="submit">Order Now</button>
          </form>
        </div>
    </div>

@endsection
