@extends('home.index')


@section('title')
Existing Product Edit
@endSection

@section('page_details')

<h1>Product Edit (Existing)</h1>






<br>
<a  href="{{route('product.existing')}}">Existing Product</a>
<a  href="{{route('product.upcoming')}}">Upcoming Product</a>
<a  href="{{route('product.adding')}}">Add Product</a>
<br>

<p >Editing Product with Product ID: {{$id}} </p>
@foreach ($errors->all() as $err)
        <p >{{$err}}</p>
        @endforeach
<!--Form TABLE -->


@if(session('productUpdateMsgFail'))
    <p >{{session('productUpdateMsgFail')}}</p>
@endif

<form action="" method="post">
@csrf
    <table>
        <tr>
            <td>Product Name</td>
            <td><input type="text" name="product_name" id="" value="{{$product->product_name}}"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <select name="category" id="">
                    <option value="" selected>Select A Category</option>
                    <option value="fruits" @if ($product->category=='fruits') selected @endif>Fruits</option>
                    <option value="Liquid" @if ($product->category=='Liquid') selected @endif>Liquid</option>
                    <option value="Vegatable" @if ($product->category=='Vegetable') selected @endif>Vegetable</option>
                    <option value="Meat" @if ($product->category=='Meat') selected @endif>Meat</option>
                    <option value="Grocery" @if ($product->category=='Grocery') selected @endif>Grocery</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Unit Price</td>
            <td><input type="number" name="unit_price" id="" value="{{$product->unit_price}}"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="status" id="">
                    <option value="" selected>Select Status</option>
                    <option value="existing" @if ($product->status=='existing') selected @endif>Existing</option>
                    <option value="upcoming" @if ($product->status=='upcoming') selected @endif>Upcoming</option>
                </select>
            </td>
        </tr>

    </table>

    <button type="submit">Update Product Info</button>

</form>



<a href="{{route('product.existing')}}"><button>BACK</button></a><br>

<a href="{{route('logout')}}"><button >Logout</button></a>


@endSection
