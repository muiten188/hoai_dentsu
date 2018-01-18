<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
    *
    *
    */
    public function index()
    {
        $clients = DB::table('clients')->where('status', '<>', 9)->get();
        return view('client.index')->with(['clients' => $clients]);
    }

    public function create()
    {
        return view('client.create_edit');
    }

    public function edit($client_id)
    {
        $client = Client::find($client_id);
        return view('client.create_edit')-> with(['client' => $client]);
    }

    public function save(Request $request)
    {
        dd($request);
        return back();
    }
}
