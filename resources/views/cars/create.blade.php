@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="/cars">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Manufacturer</label>
                        <input class="form-control" name="manufacturer">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        <input class="form-control" name="model">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year</label>
                        <input class="form-control" name="year">
                    </div>
                    <div class="form-group">
                        <label for="warranty">Warranty</label>
                        <select class="form-control" name="warranty">
                            <option value="0" selected>Has warranty</option>
                            <option value="1">Warranty expired</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="client_id">Client</label>
                        <select class="form-control" name="client_id">
                            @foreach($clients as $client)
                                <option value="{{ $client->id  }}" selected>{{$client->first_name}} {{$client->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection