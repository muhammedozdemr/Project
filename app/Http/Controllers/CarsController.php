<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Client;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::with('client')->paginate(8);
        return view('cars.index',compact('cars'));
    }

    public function createView()
    {
        $clients=Client::all();
        return view('cars.new', compact('clients'));
    }
    public function create($id=0,Request $request)
    {
        $data = request()->only('client_id', 'licence_number', 'chassis_number', 'year', 'model', 'manufacturer', 'registration_date');
        if ($id > 0) {
            $entry = Car::where('car_id', $id)->firstOrFail();
            $entry->update($data);
        } else {
            $entry = Car::create($data);
        }

        return redirect()
            ->route('cars')
            ->with('mesaj', 'Registration Successful')
            ->with('mesaj_tur', 'success');
    }
    public function updateView($id)
    {
        $entry = Car::find($id);
        $clients=Client::all();
        return view('cars.update',compact('entry','clients'));
    }

    public function update($id = 0,Request $request)
    {
        $data = request()->only('client_id', 'licence_number', 'chassis_number', 'year', 'model', 'manufacturer', 'registration_date');
        if ($id > 0) {
            $entry = Car::where('car_id', $id)->firstOrFail();
            $entry->update($data);
        } else {
            $entry = Car::create($data);
        }

        return redirect()
            ->route('cars.update', $entry->car_id)
            ->with('mesaj', 'Updated')
            ->with('mesaj_tur', 'success');
    }

    public function delete($id)
    {
        $cars = Car::find($id);
        $cars->delete();

        return redirect()
            ->route('cars')
            ->with('mesaj', 'Data deleted')
            ->with('mesaj_tur', 'success');
    }
}
