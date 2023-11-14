{{-- resources/views/products/index.blade.php  --}}
@extends('layouts.app')
@section('content')
<div class="container-fluid">
        <div class="header">
            <nav class="navbar navbar-light bg-info">
                <div class="container position-relative">
                    <div class="navbar-brand mb-3 h1">D Barking Zoo</div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="/home" role="button">
                        Return <i class="bi bi-arrow-return-left"></i>
                    </a>
                    <a class="btn btn-primary" href="/product/" role="button">Update</a>
                </div>
                </div>
            </nav>
        </div>

        <div class="card-body justify-content-center">
            @if(session('success'))
                <h3 class="alert alert-success">
                    {{ session('success') }}
                </h3>
            @endif
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="input" name="text" placeholder="Search..." type="search">
        </div>
    <div class="container d-flex gap-4 mt-2 flex-wrap">

        @foreach ($products as $product)
        <div class="card1">
            <img src= {{asset("storage/". $product->images)}} width="100px" height="100px" class="card-img-top" alt="...">
                <div class="card-details">
                    <p class="text-title">{{$product->name}}</p>
                </div>
            <a class="card-button" href="/product/{{ $product->id }}">More info</a>
        </div>

        @endforeach

    </div>
</div>
@endsection

