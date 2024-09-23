<?php

namespace App\Http\Controllers\Web\Backend\CMS;

use App\Enums\Page;
use App\Enums\Section;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class WhyCohosePropertyController extends Controller
{
    public function index()
    {
        $data = CMS::where('page', Page::HomePage)->where('section', Section::HomeTitle)->first();
        $supportData = CMS::where('page', Page::HomePage)->where('section', Section::SupportSection)->first();
        $adminSection = CMS::where('page', Page::HomePage)->where('section', Section::AdminSection)->first();
        $mobileFriendly = CMS::where('page', Page::HomePage)->where('section', Section::MobileFriendly)->first();
        return view('backend.layout.cms.why_choose_property', compact('data', 'supportData', 'adminSection', 'mobileFriendly'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'nullable|string|max:255',

        ]);


        // Update or create the CMS entry
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::HomeTitle,
            ],
            [
                'title' => $request->title,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }



    public function supportSectionStore(Request $request)
    {

          // Validate the incoming request data
          $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
        ]);

        // Update or create the CMS entry
        $data =  CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::SupportSection,
            ],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    public function adminSection(Request $request)
    {

          // Validate the incoming request data
          $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
        ]);

        // Update or create the CMS entry
        $data =  CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::AdminSection,
            ],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }

    public function mobileFriendly(Request $request)
    {

          // Validate the incoming request data
          $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
        ]);

        // Update or create the CMS entry
        $data =  CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::MobileFriendly,
            ],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }


}
