@extends('master');
@section('content')

<div class="container">

<div class="col-sm-6">

<img class="myImageTwo" src="{{$products['Gallery']}}">

</div>

<div class="col-sm-6">
    <div ><a href="/">Go back</a>
     <h2>{{$products['Title']}}</h2>
    <h3>Price : {{$products['Price']}}</h3>
    <h4>Description : {{$products['Description']}}</h4>
    <h4>Genre : {{$products['Genre']}}</h4>
   
    <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$products['id']}}">
    <button  class="btn btn-success">Add to cart</button>
    </form>
    <br><br>
    <button class="btn btn-danger">Borrow now</button>
    <br><br>
    <br></br>
</div>


</div>
</div>


@endsection