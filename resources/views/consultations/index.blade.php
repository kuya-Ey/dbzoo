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
                <img src="{{ asset('/images/welconsult.png')}}" alt="">
            </div>
        </div>
            <div class=" col-9 pt-4 rightbar">
                <h2>CONSULTATIONS</h2>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Pet Name</th>
                            <th>Contact Number</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultations as $consultation)
                        <tr>
                            <td>{{$consultation->full_name}}</td>
                            <td>{{$consultation->pet_name}}</td>
                            <td>{{$consultation->contact_number}}</td>
                            <td>{{$consultation->date}}</td>
                            <td>{{$consultation->time}}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

@endsection
