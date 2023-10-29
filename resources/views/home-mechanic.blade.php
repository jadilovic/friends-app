@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mechanic Dashboard</div>

                    <div class="card-body">
                        {{ $mechanicName  }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Options</div>

                    <div class="card-body">
                        <a href="/home/365" class="btn btn-info">Last year</a>
                        <a href="/home/30" class="btn btn-info">Last month</a>
                        <a href="/home/7" class="btn btn-info">Last week</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Appointments</div>

                    <div class="card-body">
                        <p>{{ $numberOfAppointments  }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
