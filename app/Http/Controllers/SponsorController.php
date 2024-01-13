<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::all();
        return view('sponsors.index', compact('sponsors'));
    }

    public function create()
    {
        return view('sponsors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'website' => 'nullable|url',
            // Add validation rules for other fields as needed
        ]);

        Sponsor::create($request->all());

        return redirect()->route('sponsors.index')->with('success', 'Sponsor created successfully');
    }

    public function show($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('sponsors.show', compact('sponsor'));
    }

    public function edit($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('sponsors.edit', compact('sponsor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'website' => 'nullable|url',
            // Add validation rules for other fields as needed
        ]);

        $sponsor = Sponsor::findOrFail($id);
        $sponsor->update($request->all());

        return redirect()->route('sponsors.index')->with('success', 'Sponsor updated successfully');
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->delete();

        return redirect()->route('sponsors.index')->with('success', 'Sponsor deleted successfully');
    }
}
