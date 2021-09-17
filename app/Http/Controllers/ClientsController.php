<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(8);
        return view('clients.index',compact('clients'));
    }

    public function createView()
    {
        return view('clients.new');
    }
    public function create($id=0,Request $request)
    {
        $data = request()->all();
        if ($id > 0) {
            $entry = Client::where('client_id', $id)->firstOrFail();
            $entry->update($data);
        } else {
            $entry = Client::create($data);
        }

        return redirect()
            ->route('clients')
            ->with('mesaj', 'Registration Successful')
            ->with('mesaj_tur', 'success');
    }
    public function updateView($id)
    {
        $entry = Client::find($id);
        return view('clients.update',compact('entry'));
    }

    public function update($id = 0,Request $request)
    {
        $data = request()->all();
        if ($id > 0) {
            $entry = Client::where('client_id', $id)->firstOrFail();
            $entry->update($data);
        } else {
            $entry = Client::create($data);
        }

        return redirect()
            ->route('clients.update', $entry->client_id)
            ->with('mesaj', 'Updated')
            ->with('mesaj_tur', 'success');
    }

    public function delete($id)
    {
        $clients = Client::find($id);
        $clients->delete();

        return redirect()
            ->route('clients')
            ->with('mesaj', 'Data deleted')
            ->with('mesaj_tur', 'success');
    }


}
