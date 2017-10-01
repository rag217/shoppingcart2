<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Totem Jeans</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

@yield('styles')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
<div class="container-fluid">
<div class="row">
<div class="col-md">


        <div class="flex-center position-ref full-height">
	
        

            @if (Route::has('login'))
                <div class="top-right links">
			<a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif


            <div class="content pull-right">
                <div class="title m-b-md">
                    Totem Jeans
                </div>

 </div>
 </div>
 </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


<div class="container">
<div class="row">
<div class="col-md">
@foreach($products->chunk(3) as $productChunk)
<div class="card-group">
 @foreach($productChunk as $product)
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{$product->imagePath}}" alt="Card image cap" class="img-responsive">
  <div class="card-body">
    <h4 class="card-title">{{$product->title}}</h4>
    <p class="card-text">Awesome jeans that youl will want to wear all the time.</p>
    <div class="pull-left price">${{$product->price}}</div>
    <a href="{{route('product.AddToCart',['id' => $product->id])}}" class="btn btn-success pull-right">Add to Cart</a>
  </div>

</div>
@endforeach

</div>

@endforeach
 </div>
 </div>
   </div>
            </div>
        </div>


    </body>
</html>
