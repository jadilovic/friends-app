@extends('layouts.app')

@section('content')
    <div class="container">
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
                    <div class="card-header">Clients</div>

                    <div class="card-body">
                        <p>{{ $numberOfClients  }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Mechanics</div>

                    <div class="card-body">
                        <p>{{ $numberOfMechanics  }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Appointments</div>

                    <div class="card-body">
                        <p>{{ $numberOfAppointments  }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Cars</div>

                    <div class="card-body">
                        <p>{{ $numberOfCars  }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
