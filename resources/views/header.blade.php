
<?php
use App\Http\Controllers\ProductController;
$total=0;

if(Session::has('user'))
{
    $total=ProductController::cartItem();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js','resources/css/app.css'])


    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
<!--<ul>
<auth-details :auth-name="{{Session::get('user')['name']}}">
<li><a href=#>Library Name</a></li>
<li><a href="/myorders">Borrowed Books</a></li>
<li><a href="/cartlist">Cart ({{$total}})</a></li>-->


<div id="appthree"></div>

@if(Session::has('user'))
<li>
    <a>{{Session::get('user')['name']}}
    <span></span></a>
<ul>
<li><a href="/logout">Logout</a></li>

</ul>
</li>
@else
<li><a href="/login">Login</a></li>
@endif

</ul>
<!--
<form action ="/search">

<input type="text" name="query" placeholder="search" class="mysearch">
<button type="submit">Search</button>
</form>-->


<div id="apptwo"></div>

</body>
</html>