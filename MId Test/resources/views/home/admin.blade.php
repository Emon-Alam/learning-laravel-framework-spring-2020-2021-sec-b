@extends('home.index')

@section('title')
Admin 
@endSection

@section('page_title')

<h1>Welcome User {{session('username')}}</h1>

<a href="{{route('home.userlist')}}">View user list</a> |
<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection


