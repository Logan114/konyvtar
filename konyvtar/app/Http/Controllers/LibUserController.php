<?php

namespace App\Http\Controllers;

use App\Models\LibUser;
use Illuminate\Http\Request;

class LibUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LibUser::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new LibUser();
        $record-> fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return LibUser::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the user by id
        $record = LibUser::find($id);
    
        // Check if the user exists
        if (!$record) {
            return response()->json(['message' => 'User not found'], 404);
        }
    
        // Update the specific fields (you can allow all fields or specific ones)
        $record->update($request->all());
    
        // Save the updated user
        $record->save();
    
        // Return a response
        return response()->json(['message' => 'User updated successfully', 'user' => $record], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
