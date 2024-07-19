<?php

namespace App\Http\Controllers;

use App\Models\Obituary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ObituaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $obituaries = Obituary::all();
    return view('obituaries.index', compact('obituaries'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obituaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obituary = new Obituary();
        $obituary->name = $request->input('name');
        $obituary->date_of_birth = $request->input('date_of_birth');
        $obituary->date_of_death = $request->input('date_of_death');
        $obituary->content = $request->input('content');
        $obituary->author = $request->input('author');
        $obituary->slug = \Str::slug($request->input('name') . '-' . $request->input('date_of_death'));
        $obituary->save();

        return redirect()->route('obituaries.index')->with('success', 'Obituary submitted successfully.');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $obituary = Obituary::findOrFail($id);
        return view('Obituaries.show', compact('Obituary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $obituary = Obituary::findOrFail($id);
        return view('obituaries.edit', compact('obituary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obituary = Obituary::findOrFail($id);
        $obituary->name = $request->input('name');
        $obituary->date_of_birth = $request->input('date_of_birth');
        $obituary->date_of_death = $request->input('date_of_death');
        $obituary->content = $request->input('content');
        $obituary->author = $request->input('author');
        $obituary->slug = \Str::slug($request->input('name') . '-' . $request->input('date_of_death'));
        $obituary->save();

        return redirect()->route('obituaries.index')->with('success', 'Obituary updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obituary = Obituary::findOrFail($id);
        $obituary->delete();

        return redirect()->route('obituaries.index')->with('success', 'Obituary deleted successfully.');
    
    }
}
