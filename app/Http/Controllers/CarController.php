<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('car.index', compact('cars'));
    }
    

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'rental_fee' => 'required|numeric',
        ]);

        $car = new Car([
            'brand' => $validatedData['brand'],
            'model' => $validatedData['model'],
            'year' => $validatedData['year'],
            'rental_fee' => $validatedData['rental_fee'],
        ]);
                
        if ($car->save()) {
            return redirect()->route('car.index')->with('success', 'Car added successfully!');
        } else {
            return redirect()->route('car.create')->withInput()->withErrors(['Failed to save the car.']);
        }
    }        

    public function show(Car $car)
    {
        return view('car.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('car.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'rental_fee' => 'required|numeric',
        ]);
        $car->update([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'year' => $request->input('year'),
            'rental_fee' => $request->input('rental_fee'),
        ]);
        

        return redirect()->route('car.index')->with('success', 'Car updated successfully.');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('car.index')->with('success', 'Car deleted successfully.');
    }
}
