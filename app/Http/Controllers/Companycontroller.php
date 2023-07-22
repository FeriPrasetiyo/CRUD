<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\companie;
use Illuminate\View\View;


class Companycontroller extends Controller
{
    public function index()
    {
        $companies = companie::orderBy('id', 'DESC')->paginate(5);
        return view('company.index')->with('companies', $companies);
    }
    public function create()
    {
        return view('company.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        companie::create($input);
        return redirect('/');
    }

    public function edit(string $id): View
    {
        $companies = companie::where('company_id', $id)->first();
        return view('company.edit')->with('companies', $companies);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'company_id' => 'required',
            'company_name' => 'required',
            'company_email' => 'required',
            'company_address' => 'required',
            'company_phone' => 'required'
        ]);

        $companies = companie::where('company_id', $id)->first();
        $companies->company_id = $request->company_id;
        $companies->company_name = $request->company_name;
        $companies->company_email = $request->company_email;
        $companies->company_address = $request->company_address;
        $companies->company_phone = $request->company_phone;

        $companies->save();

        return redirect('/');   
    }

    public function delete(string $id)
    {
        $companies = companie::where('company_id', $id)->first();
        $companies->delete();
        return redirect('/');
    }
}
