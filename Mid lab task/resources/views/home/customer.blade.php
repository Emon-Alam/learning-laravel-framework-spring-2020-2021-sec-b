@extends('home.index')

@section('title')
Customer Dashboard
@endSection

@section('page_title')

<h1>Welcome User {{session('username')}}</h1>
<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection

