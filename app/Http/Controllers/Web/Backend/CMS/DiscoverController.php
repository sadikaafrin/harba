<?php

namespace App\Http\Controllers\Web\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Enums\Page;
use App\Enums\Section;
use App\Models\CMS;


class DiscoverController extends Controller
{
    public function index()
    {
        $data = CMS::where('page', Page::HomePage)->where('section', Section::Discover)->first();
        return view('backend.layout.cms.discover-section', compact('data'));
    }

    public function store(Request $request)
    {

        // Validate the incoming request data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'button_text' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
        ]);

        // Find the existing CMS entry or create a new one
        $data = CMS::where('page', Page::HomePage)->where('section', Section::Discover)->first();
        $imagePath = $data ? $data->image : null;

        // Handling file upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($imagePath) {
                deleteImage($imagePath);
            }

            // Store the new image
            $imagePath = uploadImage($request->file('image'), 'discover-cms-image', $request->title);
        }

        // Update or create the CMS entry
        $data =  CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::Discover,
            ],
            [
                'title' => $request->title,
                'description' => $request->description,
                'button_text' => $request->button_text,
                'image' => $imagePath,
            ]

        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }
}
