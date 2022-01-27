<ul class="nav navbar-nav navbar-right">
      <li> <a href="#">Cart({{$total}})</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


      <?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total= ProductController::cartItem();
}
?>

<nav class="navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img class="vava" src="https://thumbs.dreamstime.com/b/online-shop-store-logo-shopping-logotype-business-vector-illustration-191449157.jpg">Tech Store
    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <class="navbar-nav me-auto mb-2 mb-lg-0">
    
        <a class="nav-link" href="#">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link" href="a">Orders</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <form action="/search" class="navbar-form navbar-right">
       <div class="form-group">
        <input class="form-control search-box" type="text" placeholder="Search" aria-label="Search">
</div>
        <button class="btn btn-default" type="submit">Search</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right">
      
      
      @if(Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          <span class="Caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Logout</a></li>
          
          
           </li>
           @else
           
            <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
          <span class="Caret"></span></a>
          <ul class="dropdown-menu">
          <li> <a href="/login">Login</a></li>
            <li><a href="/logout">Logout</a></li>
          
            </ul>
           </li>

           
           @endif
</ul>
      </div>
</div> 
</nav>

DTEAL@PHP_ROUND_HALF_DOWN
@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
</div>
<div class="col-sm-6">
    <a href="/">Go Back</a>
    <h2> {{$product['name']}}</h2>
    <h3> Price: {{$product['price']}}</h3>
    <h4>Details: {{$product['description']}}</h4>
    <br><br>

    <form action="/add_to_cart" method="POST">
        @csrf
<input type="hidden" name="product_id" value={{$product['id']}} >

    <button class="btn btn-primary">Add to Cart</button>
</form>
    <br><br>
    <button class="btn btn-success">Buy Now</button>
</div>
</div>
</div>

@endsection


form cart

<form action="{{url('/add_to_cart')}}" method="post">
				{{csrf_field()}}
				<input type="hidden" name="pid" value="{{$product->pid}}" />
				<input type="hidden" name="title" value="{{$product->title}}" />
				 <input type="hidden" name="cost" value="{{$product->cost}}" />
 				<input type="hidden" name="quantity" value="1" />
				
				<input type="submit"  name="add_to_cart" value="Add to Cart" class="btn btn-primary"/a>
	 </form>