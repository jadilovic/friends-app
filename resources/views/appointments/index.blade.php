@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Client</th>
                        <th scope="col">Car</th>
                        <th scope="col">Mechanic</th>
                        <th scope="col">Time</th>
                        <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->id }}</td>
                            <td>{{ $appointment->client->first_name }} {{ $appointment->client->last_name }}</td>
                            <td>{{ $appointment->car->manufacturer }} {{ $appointment->car->model }}</td>
                            <td>{{ $appointment->user->name }}</td>
                            <td>{{ $appointment->time }}</td>
                            <td>{{ $appointment->description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection