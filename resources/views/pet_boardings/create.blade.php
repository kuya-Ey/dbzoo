@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="header">
        <nav class="navbar navbar-light bg-info">
            <div class="container position-relative">
                <div class="navbar-brand mb-2 h1">D Barking Zoo</div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="/home" role="button">Back</a>
            </div>
            </div>
        </nav>
    </div>
</div>

<div class="w-50 ms-auto me-auto">

    <form action={{url('pet_boarding')}} method='POST' enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name:</label>
            <input type="text" class="form-control" name="fullname" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pet Name:</label>
            <input type="text" class="form-control" name="petname" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contact Number:</label>
            <input type="text" name="contactnumber" class="form-control" id="exampleCheck1">
        </div>
        <div class="mb-3">
            <div class="d-flex gap-3">
                <div class="flex-grow-1">
                    <label for="exampleInputEmail1" class="form-label">Start:</label>
                    <input type="date" class="form-control" name="start" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="flex-grow-1">
                    <label for="exampleInputEmail1" class="form-label">End:</label>
                    <input type="date" class="form-control" name="end" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

            </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Remarks:</label>
          {{-- <input type="textarea" class="form-control" name="remarks" id="exampleInputEmail1" aria-describedby="emailHelp" rows="3"> --}}
          <textarea class="form-control" name="remarks" id="exampleFormControlTextarea1" aria-describedby="emailHelp" rows="3"></textarea>
        </div>
        {{-- <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Images:</label>
          <input type="file" name="image" class="form-control" id="exampleCheck1">
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


    </div>
@endsection
