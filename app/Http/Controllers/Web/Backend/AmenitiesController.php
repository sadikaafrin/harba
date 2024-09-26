<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Exception;

class AmenitiesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Amenity::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('title', function ($data) {
                    return $data->title;
                })
                ->addColumn('status', function ($data) {
                    $status = ' <div class="form-check form-switch">';
                    $status .= ' <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" title="status"';
                    if ($data->status == "active") {
                        $status .= "checked";
                    }
                    $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label" for="customSwitch"></label></div>';

                    return $status;
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="' . route('amenities.edit', $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                        <i class="bi bi-pencil"></i>
                        </a>
                        <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                        <i class="bi bi-trash"></i>
                        </a>
                    </div>';
                })
                ->filterColumn('title', function ($query, $keyword) {
                    $query->where('title', 'like', "%{$keyword}%");
                })
                ->filterColumn('status', function ($query, $keyword) {
                    $query->where('status', 'like', "%{$keyword}%");
                })
                ->rawColumns(['action', 'status']) // No need for 'title' to be raw
                ->make(true);
        }

        return view('backend.layout.amenities.index');
    }
    public function create()
    {
        return view('backend.layout.amenities.create');
    }
    // store CourseCategory
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Generate a unique slug if not provided
        $slug = $request->input('slug') ?: generateUniqueSlug($request->input('title'), 'amenities');

        // Create and save the new course card
      $amenities = new Amenity();
      $amenities->title = $request->input('title');
      $amenities->slug = $slug;
      $amenities->save();
        return redirect()->route('amenities.index')->with('t-success', 'Data Updated Successfully');
    }

    public function edit($id)
    {
        $data = Amenity::find($id);
        return view('backend.layout.amenities.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Find the existing course category
      $amenities = Amenity::findOrFail($id);

        // Generate a unique slug if not provided
        $slug = $request->input('slug') ?: generateUniqueSlug($request->input('title'), 'amenities', $id);

        // Update the course category with the new data
      $amenities->title = $request->input('title');
      $amenities->slug = $slug;
      $amenities->save();

        return redirect()->route('amenities.index')->with('t-success', 'Data Updated Successfully');
    }

    /**
     * Change the status of the specified dynamic page.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function status(int $id): JsonResponse
    {
        $data = Amenity::findOrFail($id);
        if ($data->status == 'active') {
            $data->status = 'inactive';
            $data->save();

            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data'    => $data,
            ]);
        } else {
            $data->status = 'active';
            $data->save();

            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data'    => $data,
            ]);
        }
    }

    /**
     * Remove the specified dynamic page from the database.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $data = Amenity::findOrFail($id);
            $data->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete this.',
            ]);
        }
    }
}
