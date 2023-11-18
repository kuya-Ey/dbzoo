@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="header">
        <nav class="navbar navbar-light bg-info">
            <div class="container position-relative">
                <div class="navbar-brand mb-2 h1">D Barking Zoo</div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="/home" role="button">
                    Home <i class="bi bi-house-door"></i>
                </a>
            </div>
            </div>
        </nav>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class=" col-3 pt-4 g-4 leftbar">
            <div class="d-grid gap-2 d-md-flex justify-content-start side-img">
                <img src="{{ asset('/images/welboarding.png')}}" alt="">
            </div>
        </div>
            <div class=" col-9 pt-4 rightbar">
                <h2>GROOMING SERVICES</h2>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Pet Name</th>
                            <th>Contact Number</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($pet_boardings as $pet_boarding)
                        <tr>
                            <td>{{$pet_boarding->full_name}}</td>
                            <td>{{$pet_boarding->pet_name}}</td>
                            <td>{{$pet_boarding->contact_number}}</td>
                            <td>{{$pet_boarding->start}}</td>
                            <td>{{$pet_boarding->end}}</td>
                            <td>{{$pet_boarding->remarks}}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

@endsection
