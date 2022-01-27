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
        <a class="nav-link" href="/">Orders</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link" href="register">Register</a>
        <form action="/search" class="navbar-form navbar-right">
       <div class="form-group">
        <input class="form-control search-box" type="text" placeholder="Search" aria-label="Search">
</div>
        <button class="btn btn-default" type="submit">Search</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right">
      
      <li><a href="#">Cart({{$total}})</a></li>
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
            <li><a href="/register">Register</a></li>
          
            </ul>
           </li>

           
           @endif
</ul>
      </div>
</div> 
</nav>

