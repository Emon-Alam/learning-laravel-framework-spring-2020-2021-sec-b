@extends('home.index')


@section('title')
Add Product
@endSection

@section('page_details')


<a href="{{route('product.existing')}}">Existing Product</a>
<a href="{{route('product.upcoming')}}">Upcoming Product</a>
<a href="{{route('product.adding')}}">Add Product</a>
<br>


<p >{{session('successMsg')}}</p>
<p >{{session('failMsg')}}</p>

<h1>Adding New Product</h1>

<form action="" method="post">
@csrf 
    <table style="text-align:right;">
        <tr>
            <td>Product Name:</td>
            <td ><input type="text" name="product_name" value="{{old('product_name')}}" id=""></td>
        </tr>
        <tr>
            <td>Category:</td>
            <td  align="left" >
                <select name="category" id="">
                    <option value="" selected>Select A Category</option>
                    <option value="fruits" @if (old('category')=='fruits') selected @endif>Fruits</option>
                    <option value="Vegetable" @if (old('category')=='Vegetable') selected @endif>Vegetable</option>
                    <option value="Meat" @if (old('category')=='Meat') selected @endif>Meat</option>
                    <option value="Grocery" @if (old('category')=='Grocery') selected @endif>Grocery</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Unit Price:</td>
            <td ><input type="number" name="unit_price" id=""></td>
        </tr>
        <tr>
            <td>Vendor Name:</td>
            <td   align="left">
                <select name="vendor_id" id="">
                    <option value="" selected>Select a vendor name</option>
                    @foreach($vendors as $vendor)
                    <option value="{{$vendor->id}}" @if($vendor->id == old('vendor_id')) selected @endif> {{$vendor->full_name}} </option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
        <td>Status:</td>
            <td  align="left">
                <select  name="status" id="">
                    <option value="" selected>Select Status</option>
                    <option value="existing" @if (old('status')=='existing') selected @endif>Existing</option>
                    <option value="upcoming" @if (old('status')=='upcoming') selected @endif>Upcoming</option>
                </select>
            </td>
        </tr>

        

    </table>
    @foreach ($errors->all() as $err)
    <p >{{$err}}</p>
    @endforeach


    <br>
    <button type="submit">Add Product</button><br>
</form>

<a href="{{route('product')}}"><button > BACK</button></a><br>
<a href="{{route('logout')}}"><button >Logout</button></a>

@endSection
