<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
</head>
<body>
    <!-- alert 
    <script>
        $(document).ready(function()
       {
       $("button").click(function()
        {
           alert("vava")  
        }) 
        })
     </script>
        -->
        @include('header')

        @yield('content')<br><br><br>

        @include('footer')
</body>

<style>

.customer-login{
    height:130px;
    padding-top: 20px;   
}
img.slider-img{
    height: 300px!important

}
.customer-product{
   height: 350px; 
   
}
.navbar-light{
    height: 140px!important
}
.vava{
    height:90px;
    width:100px
}
.slider-text{
    background-color:#31708f!important
    
}
.trending-image{
    height:300px;
    width:400px;
    padding: 20px;
}
.trending-item{
    float: left;
    width: 25%
}
.trending-wrapper{
    margin: 40px;
}

.detail-img{
    height:240px;

}
</style>
</html>