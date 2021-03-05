@extends('home.index')


@section('title')
Existing Product Details
@endSection

@section('page_details')

<h1>Product Details (Existing)</h1>
<p>Product ID: {{$product_id}}, Vendor ID: {{$vendor_id}}</p>
<br>
<a  href="{{route('product.existing')}}">Existing Product</a>
<a  href="{{route('product.upcoming')}}">Upcoming Product</a>
<a  href="{{route('product.adding')}}">Add Product</a>
<br>

<a href="{{route('product')}}"><button > BACK</button></a><br>
<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection
