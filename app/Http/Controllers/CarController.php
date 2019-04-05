<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;

class CarController extends Controller
{
    public function index()
    { 
        return DB::table('cars')->skip(5)->take(10)->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'brand' => 'required|min:2',
            'model' => 'required|min:2',
            'year' => 'required',
            'maxSpeed' => 'integer|between:20,300',
            'isAutomatic' => 'required',
            'engine' => 'required',
            'numberOfDoor' => 'required|integer|between:2,5'
        ]);

        \Log::info(print_r($request->all(),true));
        return Car::create($request->all());
    }

    public function show($id)
    {
        return Car::findOrFail($id);
    }

    public function update(Request $request, Car $car)
    {    
        $this->validate($request,
        [
            'brand' => 'required|min:2',
            'model' => 'required|min:2',
            'year' => 'required',
            'maxSpeed' => 'integer|between:20,300',
            'isAutomatic' => 'required',
            'engine' => 'required',
            'numberOfDoor' => 'required|integer|between:2,5'
        ]);
        $car->update($request->all());
        return $car;
    }

    public function destroy($id)
    {
        return Car::destroy($id);
    }
}
