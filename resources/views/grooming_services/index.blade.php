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
                <img src="{{ asset('/images/welgroom.png')}}" alt="">
            </div>
        </div>
            <div class=" col-9 pt-4 rightbar">
                <h2>GROOMING SERVICES</h2>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($grooming_services as $grooming_service)
                        <tr>
                            <td>{{$grooming_service->full_name}}</td>
                            <td>{{$grooming_service->address}}</td>
                            <td>{{$grooming_service->contact_number}}</td>
                            <td>{{$grooming_service->date}}</td>
                            <td>{{$grooming_service->time}}</td>
                            <td>{{$grooming_service->remarks}}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

@endsection
