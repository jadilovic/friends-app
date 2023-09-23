@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="/clients/{{$client->id}}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">First name</label>
                        <input class="form-control" name="first_name" value="{{$client->first_name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last name</label>
                        <input class="form-control" name="last_name" value="{{$client->last_name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{$client->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phones</label>
                        <input class="form-control" name="phone" value="{{$client->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity">City</label>
                        <input class="form-control" name="city" value="{{$client->city}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection