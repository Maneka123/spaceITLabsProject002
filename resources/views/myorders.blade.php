@extends('master')
@section("content")

<div class="mycart">
<h4>Result for Products</h4>
<a href="ordernow">Borrow Now</a><br><br>
@foreach($myorders as $itemtwo)
<div>

<div>
<h2>{{$itemtwo->book_id}}</h2>
<h5>{{$itemtwo->user_id}}</h5>
<h5>{{$itemtwo->borrowed_id}}</h5>
<h5>{{$itemtwo->status}}</h5>
</div>
</a>
</div>
<div>
    <a href="removemyborrowing/{{$itemtwo->id}}">Remove to borrowing</a>
  
</div>
@endforeach
</div>
</div>


@endsection()