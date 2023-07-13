@extends('master')
@section('content')

    <div class="custom-product my-4">
        <div class="col-sm-10">
            <div class="trending-block">
                <h3>Cart List</h3>
                <a href="\ordernow" class="btn btn-success my-4"> Order Now</a>
                    @foreach ($products as $item)
                      <div class='row cartlist-item my-4 cart-list-devider'>
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                        </div>
                        <div class="col-sm-3 my-4">
                            <a href="/removecart/{{$item->cart_id}}">
                                <button class="btn btn-warning">Remove From Cart</button>
                            </a>
                        </div>
                      </div>
                    @endforeach
                <a href="ordernow" class="btn btn-success my-2"> Order Now</a>
            </div>
        </div>
    </div>

@endsection
