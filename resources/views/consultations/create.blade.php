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

    <form action={{url('consultation')}} method='POST' enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date:</label>
            <input type="date" class="form-control" name="date" value="{{ old('date') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Time:</label>
            <input type="time" class="form-control" name="time" value="{{ old('time') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex gap-3">
                <div class="flex-grow-1">
                    <label for="exampleInputEmail1" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('fullname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex-grow-1">
                    <label for="exampleInputEmail1" class="form-label">Pet Name:</label>
                    <input type="text" class="form-control" name="petname" value="{{ old('petname') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('petname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contact Number:</label>
            <input type="text" class="form-control" name="contactnumber" value="{{ old('contactnumber') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('contactnumber')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    @if(session('success'))
        <h3 class="alert alert-success">
            {{ session('success') }}
        </h3>
    @endif


    </div>
@endsection
