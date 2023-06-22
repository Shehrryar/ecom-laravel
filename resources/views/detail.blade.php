@extends('master')
@section('content')
    
<div class="container my-4">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}"  >
        </div>
        <div class="col-sm-6">
            <a href="/"><button class="btn"> Go back </button></a>
            <h2>Name : {{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Category : {{$product['category']}}</h4>
            <h5>Description : {{$product['description']}}</h5>
            <br>
             <button class="btn btn-success">Add to Cart</button>
            <span></span>
            <button class="btn btn-primary">Buy Now</button>
            <span></span>
        </div>
    </div>
</div>

@endsection