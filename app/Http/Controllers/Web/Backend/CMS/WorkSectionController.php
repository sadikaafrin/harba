<?php

namespace App\Http\Controllers\Web\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\Page;
use App\Enums\Section;
use App\Models\CMS;


class WorkSectionController extends Controller
{
    public function index()
    {
        $data = CMS::where('page', Page::HomePage)->where('section', Section::WorkSection)->first();
        $worksection = CMS::where('page', Page::HomePage)->where('section', Section::WorkSection)->first();
        $worksectionOne = CMS::where('page', Page::HomePage)->where('section', Section::WorkSectionOne)->first();
        $worksectionTwo = CMS::where('page', Page::HomePage)->where('section', Section::WorkSectionTwo)->first();
        $worksectionThree = CMS::where('page', Page::HomePage)->where('section', Section::WorkSectionThree)->first();
        $worksectionImage = CMS::where('page', Page::HomePage)->where('section', Section::WorkImage)->first();
        return view('backend.layout.cms.how_platform_work', compact('data', 'worksection', 'worksectionOne', 'worksectionTwo', 'worksectionThree', 'worksectionImage'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'button_text' => 'nullable|string|max:255',
        ]);


        // Update or create the CMS entry
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::WorkSection,
            ],
            [
                'title' => $request->title,
                'button_text' => $request->button_text,
                'description'  => $request->description,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }
    public function workSectionOne(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',

        ]);


        // Update or create the CMS entry
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::WorkSectionOne,
            ],
            [
                'title' => $request->title,
                'description'  => $request->description,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    public function workSectionTwo(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',

        ]);


        // Update or create the CMS entry
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::WorkSectionTwo,
            ],
            [
                'title' => $request->title,
                'description'  => $request->description,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    public function workSectionThree(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',

        ]);


        // Update or create the CMS entry
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::WorkSectionThree,
            ],
            [
                'title' => $request->title,
                'description'  => $request->description,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    public function workSectionImage(Request $request)
    {

        // Validate the incoming request data
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png,svg,webp|max:2048',
        ]);

        // Find the existing CMS entry or create a new one
        $data = CMS::where('page', Page::HomePage)->where('section', Section::WorkImage)->first();
        $imagePath = $data ? $data->image : null;

        // Handling file upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($imagePath) {
                deleteImage($imagePath);
            }

            // Store the new imagetitle
            $imagePath = uploadImage($request->file('image'), 'work-cms-image', $request->image);
        }

        // Update or create the CMS entry
        $data =  CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::WorkImage,
            ],
            [
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
