{{-- resources/views/products/edit.blade.php --}}
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="header">
        <nav class="navbar navbar-light bg-info">
            <div class="container position-relative">
                <div class="navbar-brand mb-2 h1">D Barking Zoo</div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="/products" role="button">Back</a>
            </div>
            </div>
        </nav>
    </div>
</div>

<div class="w-50 ms-auto me-auto">

    <form action={{url('product', ['id' => $product->id])}} method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label label for="exampleInputEmail1" class="form-label">Description:</label>
            <input type="text" class="form-control" name="desc" value="{{$product->description}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex gap-3">
                <div class="flex-grow-1">
                    <label for="exampleInputEmail1" class="form-label">Quantity:</label>
                    <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex-grow-1">
                    <label for="exampleInputEmail1" class="form-label">Price:</label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category:</label>
            <input type="text" class="form-control" name="category" value="{{$product->category}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Images:</label>
            <input type="file" name="image" value="{{ old('image')}}" class="form-control" id="exampleCheck1">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> --}}
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
    @if(session('success'))
        <h3 class="alert alert-success">
            {{ session('success') }}
        </h3>
    @endif


    </div>
@endsection
