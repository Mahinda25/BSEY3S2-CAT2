<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObituaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $obituaries = Obituary::paginate(10);
    return view('obituaries.index', compact('obituaries'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
        'name' => 'required|string|max:100',
        'date_of_birth' => 'required|date',
        'date_of_death' => 'required|date',
        'content' => 'required',
        'author' => 'required|string|max:100',
    ]);

    $slug = Str::slug($request->name . '-' . $request->date_of_death, '-');

    Obituary::create([
        'name' => $validated['name'],
        'date_of_birth' => $validated['date_of_birth'],
        'date_of_death' => $validated['date_of_death'],
        'content' => $validated['content'],
        'author' => $validated['author'],
        'slug' => $slug,
    ]);

    return redirect()->route('obituaries.index')->with('success', 'Obituary submitted successfully.');


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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
