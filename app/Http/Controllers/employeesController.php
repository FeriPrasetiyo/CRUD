<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\employes;
use Illuminate\Http\Request;
use Illuminate\View\View;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = employes::orderBy('id', 'DESC')->paginate(5);
        return view('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        employes::create($input);
        return redirect('/employees');
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
        $employees = employes::where('id', $id)->first();
        return view('employees.edit')->with('employees', $employees);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'fullname' => 'required',
            'company' => 'required',
            'departement' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $employees = employes::where('id', $id)->first();
        $employees->fullname = $request->fullname;
        $employees->company= $request->company;
        $employees->departement = $request->departement;
        $employees->email = $request->email;
        $employees->phone = $request->phone;

        $employees->save();

        return redirect('/employees');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $employees = employes::where('id', $id)->first();
        $employees->delete();
        return redirect('/employees');
    }
}
