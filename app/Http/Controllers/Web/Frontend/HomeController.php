<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AppartmentType;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::with(['appartmentType', 'images'])
            ->where('feature', 'active')
            ->get();

            $appartmentTypes = AppartmentType::all();


        return view('frontend.layout.home', compact('properties', 'appartmentTypes'));
    }

      // Search functionality for properties
      public function typersearch(Request $request)
      {
          // Initialize the query
          $query = Property::with(['appartmentType', 'images'])
              ->where('feature', 'active');

          // Filter by created_at date
          if ($request->filled('created_at')) {
              $query->whereDate('created_at', '=', $request->created_at);
          }

          // Filter by updated_at date
          if ($request->filled('updated_at')) {
              $query->whereDate('updated_at', '=', $request->updated_at);
          }

          // Execute the query and get filtered properties
          $properties = $query->get();
          $appartmentTypes = AppartmentType::all();

          // Search term for display (optional)
          $searchTerm = "Filtered Properties"; // Customize based on your filters

          return view('frontend.layout.search-results', compact('properties', 'appartmentTypes', 'searchTerm'));
      }


}
