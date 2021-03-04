@extends('home.index')

@section('title')
Admin 
@endSection

@section('page_details')

<h1>Welcome User {{session('username')}}</h1>


<a href="{{route('product')}}"><h4>Product Information</h4></a>

<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection


