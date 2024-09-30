<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;

class PropertyListController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Get the authenticated user
            $authPropertyUser = auth()->user();

            // If the authenticated user is an admin, fetch all Propertys from users with the 'user' role
            $Propertys = $authPropertyUser->role === 'admin'
                ? Property::whereHas('user', function ($query) {
                    $query->where('role', 'user');
                })->latest()
                : Property::where('user_id', $authPropertyUser->id)->latest();

            return DataTables::of($Propertys)
                ->addIndexColumn() // Adds index column
                ->addColumn('property_title', function ($Property) {
                    // Return the Property creator's name (fname)
                    return $Property->property_title;
                })


                ->addColumn('action', function ($Property) use ($authPropertyUser) {
                    // Only show delete button if the authenticated user is an admin
                    return $authPropertyUser->role === 'admin' ?
                        '<a href="#" onclick="showDeleteConfirm(' . $Property->id . ')" class="btn btn-danger text-white" title="Delete">
                            <i class="bi bi-x-circle"></i>
                        </a>' : '';
                })


                ->addColumn('feature', function ($Property) {
                    $status = '<div class="form-check form-switch">';
                    $status .= '<input onclick="PropertyFeaturedHandler(' . $Property->id . ', this)" type="checkbox" class="form-check-input" id="customSwitch' . $Property->id . '" name="status"';
                    if ($Property->feature === 'active') {
                        $status .= ' checked';
                    }
                    $status .= '><label for="customSwitch' . $Property->id . '" class="form-check-label"></label></div>';
                    return $status;
                })
                ->addColumn('status', function ($data) {
                    // Define the base class and an array of status-to-class mappings
                    $baseClass = 'btn btn-sm dropdown-toggle';

                    $statusClassMap = [
                        'pending' => 'btn-warning',
                        'approve' => 'btn-success',
                        'disapprove' => 'btn-secondary',
                        'close' => 'btn-danger'
                    ];

                    // Get the class for the current status, defaulting to 'btn-warning' if not found
                    $statusClass = $statusClassMap[$data->status] ?? 'btn-warning';

                    $select = '<select class="' . $baseClass . ' ' . $statusClass . '" onchange="PropertyStatusHandler(' . $data->id . ', this)">';
                    $select .= '<option ' . ($data->status === 'pending' ? 'selected' : '') . ' value="pending">Pending</option>';
                    $select .= '<option ' . ($data->status === 'approve' ? 'selected' : '') . ' value="approve">Approve</option>';
                    $select .= '<option ' . ($data->status === 'disapprove' ? 'selected' : '') . ' value="disapprove">Disapprove</option>';
                    $select .= '<option ' . ($data->status === 'close' ? 'selected' : '') . ' value="close">close</option>';

                    $select .= '</select>';

                    return $select;
                })


                ->rawColumns(['status', 'feature', 'action']) // Allows rendering of HTML in these columns
                ->make(true);
        }
        return view('backend.layout.Property-list.index');
    }

    /**
     * Change the status of the specified dynamic page.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function updateFeature(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:properties,id',
            'featured' => 'required|in:active,inactive',
        ]);

        $property = Property::findOrFail($validated['id']);
        $property->feature = $validated['featured'];
        $property->save();

        return response()->json([
            'success' => true,
            'message' => 'Feature status has been updated',
            'data' => $property
        ]);
    }

    /**
     * Change the property status.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function status(Request $request, int $id): JsonResponse
    {
        $authPropertyUser = auth()->user();

        // Ensure that only admin users can change the status
        if ($authPropertyUser->role !== 'admin') {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized action.',
            ], 403); // Return 403 forbidden if unauthorized
        }

        // Find the property by ID
        $property = Property::find($id);

        if (!$property) {
            return response()->json([
                'success' => false,
                'message' => 'Property not found.',
            ], 404); // Return 404 if not found
        }

        // Validate the status
        $status = $request->input('status');
        $validStatuses = ['pending', 'approve', 'disapprove', 'close'];
        if (!in_array($status, $validStatuses)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid status.',
            ], 400); // Return 400 for invalid status
        }

        // Update the status
        $property->status = $status;
        $property->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
            'data'    => $property,
        ]);
    }
}
