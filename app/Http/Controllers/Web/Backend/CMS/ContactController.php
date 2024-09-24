<?php

namespace App\Http\Controllers\Web\Backend\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Enums\Page;
use App\Enums\Section;
use App\Models\CMS;

class ContactController extends Controller
{
    public function index()
    {
        $data = CMS::where('page', Page::HomePage)->where('section', Section::Contact)->first();
        return view('backend.layout.cms.contact-section', compact('data'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',


        ]);


        // Update or create the CMS entry
        $data = CMS::updateOrCreate(
            [
                'page' => Page::HomePage,
                'section' => Section::Contact,
            ],
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
            ]
        );


        if ($data) {
            return redirect()->back()->with('t-success', 'Data Updated Successfully');
        } else {
            return redirect()->back()->with('t-error', 'Data update failed!');
        }
    }
}
