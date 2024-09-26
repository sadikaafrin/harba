<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        return view('backend.layout.create_banner');
    }


    public function save(Request $request)
         {

            $request->validate(
                [
                   'image'=>'required|image|mimes:jpeg,png,jpg,gif',
                   'name'=>'required',
                   'sub_title'=>'required',
                   'description'=>'required',
                   'button'=>'required'
                ],
                ['required'=>'You must fill the field with a proper information'],
                ['image.required'=>'A valid image has be uploaded']
                );





            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/img'), $imageName);
            $data=new Banner();
            $data->image=$imageName;
            $data->name=$request->name;
            $data->sub_title=$request->sub_title;
            $data->description=$request->description;
            $data->button=$request->button;
            $data->save();
            return redirect()->back();
         }



public function get(){
    $data=Banner::all();
    return view('backend.layout.show_banner',['infos'=>$data]);
  }


  public function delete($id)
  {
     $data=Banner::find($id);
     $data->delete();
     return redirect()->back();
  }


  public function edit($id)
  {
     $data=Banner::find($id);
     return view('backend.layout.update_banner',['datas'=>$data]);
  }


  public function update(Request $request)
         {


            $request->validate(
                [
                   'image'=>'required|image|mimes:jpeg,png,jpg,gif',
                   'name'=>'required',
                   'sub_title'=>'required',
                   'description'=>'required',
                   'button'=>'required'
                ],
                ['required'=>'You must fill the field with a proper information'],
                ['image.required'=>'A valid image has be uploaded']
                );


            $data=Banner::find($request->id);
            $data->id=$request->id;
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('backend/img'), $imageName);
            $data->image=$imageName;
            $data->name=$request->name;
            $data->sub_title=$request->sub_title;
            $data->description=$request->description;
            $data->button=$request->button;
            $data->save();
            return redirect()->back();
         }

        }
