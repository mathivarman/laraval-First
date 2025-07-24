<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SthudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        return 'first name'. ' ' . $request->input('fname') . ' last name ' . $request->input('lname');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('student.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('student.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request->all());
        return "updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'delete';
    }
}
