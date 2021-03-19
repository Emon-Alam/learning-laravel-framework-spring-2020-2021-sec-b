@extends('home.index')

@section('title')
Admin 
@endSection

@section('page_details')

<h1>Welcome Admin {{session('username')}}</h1>


<a href="{{route('sales')}}"><h4>Sales Details</h4></a>
<a href="{{route('product')}}"><h4>Product Information</h4></a>
<a href="{{route('sales')}}"><h4>Sales Details</h4></a>
<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection


