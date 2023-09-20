<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){

        $clients = Client::all();

        $data = [
            'clients' => $clients,
        ];

        return view('clients.index', $data);

    }

    public function create(){
        return view('clients.create');
    }

    public function store(Request $request){

        $client = new Client;
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();

        return redirect('clients');
    }
}