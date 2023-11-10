@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="header">
            <nav class="navbar navbar-light bg-info">
                <div class="container position-relative">
                    <div class="navbar-brand mb-3 h1">D Barking Zoo</div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                    <button class="btn btn-outline-primary" type="button" onclick="location.href='/home'">Back</button>
                    {{-- <a class="btn btn-primary" href="/home" role="button">Back</a> --}}
                    <a class="btn btn-primary" href="/product/" role="button">Update</a>
                </div>
                </div>
            </nav>
        </div>

    <div class="container d-flex gap-2 flex-wrap">
        @foreach ($products as $product)
        <div class="card" style="width: 18rem;">
            <img src= {{asset("storage/". $product->images)}} width="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <p class="card-text">{{$product->quantity}}</p>
            <p class="card-text">{{ number_format($product->price, 2)}}</p>
            <p class="card-text">{{$product->category}}</p>
            <a class="btn btn-primary" href="/product/{{ $product->id }}" role="button">VIEW</a>

            </div>
        </div>


        @endforeach

    </div>
</div>
@endsection

