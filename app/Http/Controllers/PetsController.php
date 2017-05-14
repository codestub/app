<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::active()->orderBy('created_at', 'desc')->paginate(12);

        return view('pets.index', compact('pets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return view('pets.index', compact('pet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form
        $this->validate(request(), [
            'breed' => 'required|string|min:10|max:50',
            'description' => 'required|string|min:10|max:300',
            'date-of-birth' => 'required|date|before:now',
            'price' => 'required|integer|between:0,999999',
            'males' => 'required|integer|between:0,101',
            'females' => 'required|integer|between:0,101'
        ]);
        // Create the pet
        Pet::create([
            'breed' => request('breed'),
            'description' => request('description'),
            'date_of_birth' => request('date-of-birth'),
            'price' => request('price'),
            'males' => request('males'),
            'females' => request('females'),
            'user_id' => auth()->id()
        ]);
        // Redirect to the index page
        return redirect('/pets');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        //
    }
}
