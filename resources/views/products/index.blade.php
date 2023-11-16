@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="header">
            <nav class="navbar navbar-light bg-info">
                <div class="container position-relative">
                    <div class="navbar-brand mb-3 h1">D Barking Zoo</div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="/home" role="button">
                        Home <i class="bi bi-house-door"></i>
                    </a>
                    @if(Auth::user()->role_id==1)
                    <a class="btn btn-primary" href="/product/" role="button">Update</a>
                    @endif
                </div>
                </div>
            </nav>
        </div>
        <div class="alert-section">
            <div class="row">
                <div class="alert-col col-3"></div>
                <div class="alert-col col-6">
                    <div class="card-body justify-content-center">
                        @if(session('success'))
                            <h3 class="alert alert-success">
                                {{ session('success') }}
                            </h3>
                        @endif
                    </div>
                </div>
                <div class="alert-col col-3"></div>
            </div>
        </div>
        
        <div class="pagi-section">
            <div class="row">
                <div class="pagi-col col 3"></div>
                <div class="pagi-col col 6">
                        <div class="d-grid gap-2 d-md-flex start-100 justify-content-center">
                            {{ $products->links('pagination::bootstrap-4')}}
                        </div>
                </div>
                <div class="pagi-col col 3"></div>
            </div>
        </div>

    <div class="container d-flex gap-4 mt-4 flex-wrap">
        @foreach ($products as $product)
        <div class="card1 mb-5">
            <img src= {{asset("storage/". $product->images)}} class="card-img-top" alt="">
                <div class="card-details">
                    <p class="text-title">{{$product->name}}</p>
                </div>
            <a class="card-button" href="/product/{{ $product->id }}">More info</a>
        </div>
        @endforeach
    </div>
</div>
@endsection

