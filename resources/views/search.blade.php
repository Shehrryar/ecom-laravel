@extends('master')
@section('content')

    <div class="custom-product my-4">
        <div class="col-sm-4">
            <a href="">Filter</a>
        </div>
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="trending-block">
                <h3>Searched items</h3>
                    @foreach ($products as $item)
                      <div class='searched-item'>
                        <a href="detail/{{$item['id']}}">
                        <img class="trending-img" src="{{$item['gallery']}}">
                        <div class="">
                          <h2>{{$item['name']}}</h2>
                          <h5>{{$item['description']}}</h5>
                        </div>
                        </a>
                      </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection