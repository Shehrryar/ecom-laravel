
@php
    use App\Http\Controllers\proiductcontroller;
    $total = 0;
    if (Session::has('user')){
    $total = proiductcontroller::cartitem();
    }
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Ecom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorder">Orders</a>
        </li>

  <li class="nav-item">
      <form action="/search">
        <input name="query" class="mr-sm-2 search-box" type="search" placeholder="Search">
        <button class="btn btn-sucess">Search</button>
      </form>
    </li>
      <li class="nav-item" id="movelast">
        <a class="nav-link" href="cartlist">Cart {{$total}}</a>
      </li>
      @if (Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{SESSION::get('user')['name']}}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="\logout">Logout</a></li>
          </ul>
        </li>
      @else
        <li class="my-2 mx-4">
          <a href="login">Login</a>
        </li>
      @endif
    </ul>
    </div>
  </nav>