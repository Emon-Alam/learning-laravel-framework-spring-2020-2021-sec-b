@extends('home.index')


@section('title')
Product Information
@endSection

@section('page_details')

<h1>Product Information</h1>
<br>


<a href="{{route('product.existing')}}">Existing Product</a>
<a href="{{route('product.upcoming')}}">Upcoming Product</a>
<a href="{{route('product.adding')}}">Add Product</a>
<br>
<a href="{{route('index')}}"><button>BACK</button></a><br>
<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection
