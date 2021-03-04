@extends('home.index')


@section('title')
Upcoming Product 
@endSection

@section('page_details')

<h1>Upcoming Product List</h1>
<br>

<a href="{{route('product.existing')}}">Existing Product</a>
<a href="{{route('product.upcoming')}}">Upcoming Product</a>
<a href="{{route('product.adding')}}">Add Product</a>
<br>

<h3 >Upcoming Product Table</h3>

<table border="2px solid black" name="product_table"> 

    <thead>
        <th>Product Name</th>
        <th>Category</th>
        <th>Unit Price</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{$product->product_name}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->unit_price}}</td>
            <td><a href="{{route('product.upcoming.edit',['id'=> $product->id])}}"><button >Edit</button></a></td>
            
        </tr>
    @endforeach
    </tbody>


</table>



<a href="{{route('product')}}"><button > BACK</button></a><br>
<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection