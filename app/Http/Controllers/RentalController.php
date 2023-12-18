<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Customer;
use App\Models\Car;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();

        return view('rental.index', ['rentals' => $rentals]);
    }

    public function create()
    {
        $customers = Customer::all();
        $cars = Car::all();

        return view('rental.create', compact('customers', 'cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'rental_fee'    => 'required|numeric'
        ]);

        Rental::create($request->all());

        return redirect()->route('rental.index')->with('success', 'Rental created successfully.');
    }

    // public function show($id)
    // {
    //     $rental = Rental::findOrFail($id);

    //     return view('rental.show', compact('rental'));
    // }

    public function edit($id)
    {
        $rental = Rental::findOrFail($id);
        $customers = Customer::all();
    
        return view('rental.edit', compact('rental', 'customers'));
    }
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'customer_id' => 'required',
        'rental_date' => 'required|date',
        'return_date' => 'required|date',
        'rental_fee' => 'required|numeric',
    ]);

    $rental = Rental::findOrFail($id);
    $rental->update($validatedData);

    return redirect()->route('rental.index')->with('success', 'Rental updated successfully');
}
    public function destroy($id)
    {
        try {
            $rental = Rental::findOrFail($id);
            $rental->delete();

            return redirect()->route('rental.index')->with('success', 'Rental deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('rental.index')->with('error', 'Failed to delete rental. Error: ' . $e->getMessage());
        }
    }
    
}
