@extends('master')
@section('content')

    <div class="custom-product my-4">
        <div class="col-sm-10">
            <div class="trending-block">
                <h3>Orders List</h3>
                    @foreach ($orders as $item)
                      <div class='row cartlist-item my-4 cart-list-devider'>
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                                <h2>{{$item->name}}</h2>
                                <h5>Delivery Status : {{$item->status}}</h5>
                                <h5>Payment Status : {{$item->payment_status}}</h5>
                                <h5>Payment Method : {{$item->payment_method}}</h5>
                                <h5>Delivery Address : {{$item->address}}</h5>
                                <h5>Price : {{$item->price}}</h5>
                        </div>
                      </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection
