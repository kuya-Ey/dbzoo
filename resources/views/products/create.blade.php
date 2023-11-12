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

    <form action={{url('product')}} method='post' enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name:</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Description:</label>
          <input type="text" class="form-control" name="desc" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <div class="d-flex gap-3">
                <div class="flex-grow-1">
                    <label for="exampleInputEmail1" class="form-label">Quantity:</label>
                    <input type="text" class="form-control" name="quantity" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="flex-grow-1">
                    <label for="exampleInputEmail1" class="form-label">Price:</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

            </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Category:</label>
          <input type="text" class="form-control" name="category" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Images:</label>
          <input type="file" name="image" class="form-control" id="exampleCheck1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


    </div>
@endsection
