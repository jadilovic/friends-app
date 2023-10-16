@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Create appointment for {{ $client->first_name }} {{ $client->last_name }}</h3>
                <form method="POST" action="/appointments">
                    @csrf
                    <input type="hidden" name="client_id" value="{{$client->id}}">
                    <div class="form-group">
                        <label for="client_id">Car</label>
                        <select class="form-control" name="car_id">
                            @foreach($cars as $car)
                                <option value="{{ $car->id  }}" selected>{{$car->manufacturer}} {{$car->model}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mechanic</label>
                        <select class="form-control" name="user_id">
                            @foreach($users as $user)
                                <option value="{{ $user->id  }}" selected>{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input type="datetime-local" class="form-control" name="time">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection