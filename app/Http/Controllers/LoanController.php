<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Car;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $cars = Car::all();
        
        return view('loans.create', compact('cars'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',

        ]);

        Loan::create($validatedData);

        return redirect('/loans')->with('success', 'loan added successfully!');
    }

    public function edit(Loan $loan)
    {
        $cars = Car::all();
       
        return view('loans.edit', compact('loan', 'cars'));
    }
    public function update(Request $request, Loan $loan)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',

        ]);

        $loan->update($validatedData);

        return redirect('/loans')->with('success', 'loan updated successfully!');
    }
    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect('/loans')->with('success', 'loan deleted successfully!');
    }

}
;



