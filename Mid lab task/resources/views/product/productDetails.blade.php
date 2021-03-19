@extends('home.index')


@section('title')
Product Details
@endSection

@section('page_details')

<script>
function backBtn() {
  window.history.back();
}
</script>

<h1>Product Details</h1>



<p>{!! nl2br($msg) !!}</p>

@if($msg) @else

<br>
<a  href="{{route('product.existing')}}">Existing Product</a>
<a  href="{{route('product.upcoming')}}">Upcoming Product</a>
<a  href="{{route('product.adding')}}">Add Product</a>
<br>

<h4>Details of Product ID: {{$product_id}} and <br> Vendor ID: {{$vendor_id}} </h4>
<h1>Information Table</h1>
<table class="detailsTable">
    <tr>
        <td >Product Name:</td>
        <td ><b>{{$product->product_name}}<b></td>
    </tr>
    <tr>
        <td>Category:</td>
        <td><b>{{$product->category}}<b></td>
    </tr>
    <tr>
        <td >Price:</td>
        <td ><b>${{$product->unit_price}}<b></td>
    </tr>
    <tr>
        <td >Status:</td>
        <td ><b>{{$product->status}}<b></td>
    </tr>
    <tr>
        <td >Vendor Name</td>
        <td ><b>{{$vendor->full_name}}<b></td>
    </tr>
    <tr>
        <td >Vendor Country:</td>
        <td ><b>{{$vendor->country}}<b></td>
    </tr>
    <tr>
        <td >Vendor Company:</td>
        <td ><b>{{$vendor->company_name}}<b></td>
    </tr>
<!--     <tr>
        <td >Vendor Status:</td>
        <td ><b>{{$vendor->usertype}}<b></td>
    </tr> -->
    <tr>
        <td >Date Added:</td>
        <td ><b>{{date('j F, Y', strtotime($product->date_added)) }}<b></td>
    </tr>
    

</table>

@endif

<button onclick="backBtn()"  >Go BACK</button><br>

<a href="{{route('logout')}}"><button >Logout</button></a>



@endSection