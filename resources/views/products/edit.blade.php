@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="header">
        <nav class="navbar navbar-light bg-info">
            <div class="container position-relative">
                <div class="navbar-brand mb-2 h1">D Barking Zoo</div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="/products" role="button">
                        Return <i class="bi bi-arrow-return-left"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class=" col-7 pt-4 g-4 leftbar">
            <div class="w-50 ms-auto me-auto">

                <form action='/product/{{ $product->id }}/edit' method='post' enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name:</label>
                        <input type="text" readonly class="form-control-plaintext" class="form-control" name="name" value="{{ old('name', $product->name) }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label label for="exampleInputEmail1" class="form-label">Description:</label>
                        <textarea class="form-control" readonly class="form-control-plaintext" name="desc" id="exampleFormControlTextarea1" aria-describedby="emailHelp" rows="3" >{{ old('desc', $product->description) }}</textarea>
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <label for="exampleInputEmail1" class="form-label">Quantity:</label>
                                <input type="text" class="form-control" name="quantity" value="{{ old('quantity', $product->quantity) }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex-grow-1">
                                <label for="exampleInputEmail1" class="form-label">Price:</label>
                                <input type="text" class="form-control" name="price" value="{{ old('price', $product->price) }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Category:</label>
                        <input type="text" readonly class="form-control-plaintext" class="form-control" name="category" value="{{ old('category', $product->category) }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Images:</label>
                        <input type="file" readonly class="form-control-plaintext" name="image" value="{{ old('image', $product->image)}}" class="form-control" id="exampleCheck1">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Update</button>
                </form>
                @if(session('success'))
                    <h3 class="alert alert-success">
                        {{ session('success') }}
                    </h3>
                @endif
            </div>
        </div>
        <div class=" col-5 pt-4 rightbar">
            <div class="d-grid gap-2 d-md-flex justify-content-start side-img">
                <img src="{{ asset('/images/welsupplies.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
