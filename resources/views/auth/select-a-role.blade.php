@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 pt-3 ">
            <div class="card4">
                <div class="card-body4">
                <h5 class="card-title4">Admin</h5>
                <p class="card-text4">Register as an Admin</p>
                <a href="/register/1" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-5 pt-3 ">
            <div class="card4">
                <div class="card-body4">
                <h5 class="card-title4">Guest</h5>
                <p class="card-text4">Register as a Guest</p>
                <a href="/register/2" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-center">
            <img src="{{ asset('/images/welcome-bg.png')}}" alt="">
        </div>


    </div>
</div>
@endsection
