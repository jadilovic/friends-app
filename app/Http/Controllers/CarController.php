<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Client;
use Validator;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        $data = [
            'cars' => $cars,
        ];

        return view('cars.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $data = [
            'clients' => $clients,
        ];
        return view('cars.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $user = Auth::user();

        if($user->role != 'Admin') {
           return view(view: "not-allowed");
        }

        $validatedData = $request->validate([
            'manufacturer' => ['required', 'string', 'max:50'],
            'year' => ['required', 'string', 'max:10'],
            'model' => ['required', 'string', 'max:100'],
            'warranty' => ['integer', 'min:0', 'max:1'],
        ]);

        $car = new Car;
        $car->manufacturer = $request->manufacturer;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->warranty = $request->warranty;
        $car->client_id = $request->client_id;
        $car->save();

        return redirect('cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function indexClient($id)
    {
        $client = Client::find($id);
        $cars = $client->cars;

        $data = [
            'client' => $client,
            'cars' => $cars,
        ];

        return view('cars.index', $data);
    }
}
