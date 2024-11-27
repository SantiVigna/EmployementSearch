<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employment;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employments = Employment::all();
        return response()->json($employments, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employment = Employment::create([
            'employment' => $request->employment,
            'state' => $request->state,
            'company'=> $request->company,
            'country'=> $request->country,
            'contact' => $request->contact,
            'image' => $request->image
        ]);
        $employment->save();
        return response()->json($employment, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employment = Employment::find($id);
        return response()->json($employment, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employment = Employment::find($id);
        $employment->update([
            'employment' => $request->employment,
            'state' => $request->state,
            'company'=> $request->company,
            'country'=> $request->country,
            'contact' => $request->contact,
            'image' => $request->image
        ]);
        $employment->save();
        return response()->json($employment, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employment = Employment::find($id);
        $employment->delete();
    }
}
