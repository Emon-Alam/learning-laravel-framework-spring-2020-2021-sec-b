@extends('home.index')

@section('title')
Accountant Dashboard
@endSection

@section('page_details')

<h1>Welcome User {{session('username')}}</h1>
<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection

