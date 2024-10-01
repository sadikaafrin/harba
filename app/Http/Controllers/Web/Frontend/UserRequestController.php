<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\QueryException;


class UserRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|string',
            'phone' => 'nullable|string',
            'date' => 'nullable|date',
            'time' => '|string',
        ]);

        $user = auth()->user();

        $dataExists = UserRequest::where('user_id', $user->id)->where('property_id', $request->property_id)->first();

        // dd($dataExists);
        if($dataExists){
            return redirect()->back()->with('error', 'This request has already been made');
        }


        // Check if the user_request already exists
        // if (UserRequest::where('user_id', $request->user_id)
        //     ->where('property_id', $request->property_id)
        //     ->exists()
        // ) {
        //     return response()->json(['error' => 'This request has already been made'], 409);
        // }

        try {
            // Insert the new request
            UserRequest::create($validated);

            return response()->json(['message' => 'Request created successfully'], 201);
        } catch (QueryException $e) {
            // Handle other potential query exceptions
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            // Handle any other exceptions
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
}
