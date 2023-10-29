<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Appointment;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($days)
    {
        //$currentDate = Carbon::now();
        $start = Carbon::now()->subDays($days);
        //$start = Carbon::now()->subYears(1);
        //$start = Carbon::now()->subMonths(1);
        $user = Auth::user();

        if($user->role == 'Admin') {
            $numberOfClients = Client::where('created_at','>', $start)->count();
            $numberOfMechanics = User::where([['role', 'Mechanic'],['created_at','>', $start]])->count();
            $numberOfAppointments = Appointment::where('created_at','>', $start)->count();
            $numberOfCars = Car::where('created_at','>', $start)->count();

            $data = [
                'numberOfClients' => $numberOfClients,
                'numberOfMechanics' => $numberOfMechanics,
                'numberOfAppointments' => $numberOfAppointments,
                'numberOfCars' => $numberOfCars,
            ];

            return view('home', $data);
        }

        if($user->role == 'Mechanic') {
            $numberOfAppointments = Appointment::where([['user_id', $user->id], ['created_at','>', $start]])->count();
            $data = [
                'mechanicName' => $user->name,
                'numberOfAppointments' => $numberOfAppointments
            ];

            return view('home-mechanic', $data);
        }
    }
}
