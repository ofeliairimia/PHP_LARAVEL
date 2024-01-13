<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('partners.index', compact('partners'));
    }

    public function create()
    {
        return view('partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // Add other validation rules as needed
        ]);

        Partner::create($request->all());

        return redirect()->route('partners.index')->with('success', 'Partner created successfully');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            // Add other validation rules as needed
        ]);

        $partner = Partner::findOrFail($id);
        $partner->update($request->all());

        return redirect()->route('partners.index')->with('success', 'Partner updated successfully');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully');
    }
}
