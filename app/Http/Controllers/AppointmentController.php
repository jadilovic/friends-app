<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $appointments = array();

        if($user->role == 'Admin') {
            $appointments = Appointment::all();
        }

        if($user->role == 'Mechanic') {
            $appointments = $user->appointments;
        }

        $data = [
            'appointments' => $appointments,
        ];

        return view('appointments.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($client_id)
    {
        $client = Client::find($client_id);
        $cars = $client->cars;
        $users = User::all();

        $data = [
            'client' => $client,
            'cars' => $cars,
            'users' => $users,
        ];

        return view('appointments.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->date;

        $time = Carbon::parse($request->time);

        $appointment = new Appointment;
        $appointment->client_id = $request->client_id;
        $appointment->car_id = $request->car_id;
        $appointment->user_id = $request->user_id;
        $appointment->time = $time->format("Y-m-d H:i:s");
        $appointment->description = $request->description;
        $appointment->save();

        return redirect('appointments');
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
}
