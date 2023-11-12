@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="header">
        <nav class="navbar navbar-light bg-info">
            <div class="container position-relative">
                <div class="navbar-brand mb-3 h1">D Barking Zoo</div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                <button class="btn btn-outline-primary" type="button" onclick="location.href='/products'">Back</button>
                {{-- <a class="btn btn-primary" href="/home" role="button">Back</a> --}}
                {{-- <a class="btn btn-primary" href="/product/" role="button">Update</a> --}}
            </div>
            </div>
        </nav>
    </div>

<div class="d-grid mt-5 gap-2 d-md-flex justify-content-center">
    <div class="showcard ">
        <div class="card2">
        <div class="card-image2">
            <img src= {{asset("storage/". $product->images)}} width="200px" height="200px" class="card-img-top" alt="...">
        </div>
            <div class="card-description2">
                <p class="text-title2">{{$product->name}}</p>
                <p class="text-body2">{{$product->description}}</p>
                <p class="text-body2">{{$product->quantity}}</p>
                <p class="text-body2">{{ number_format($product->price, 2)}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
