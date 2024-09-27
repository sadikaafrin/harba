<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service_type;

class ServiceTypeController extends Controller
{
    public function index()
    {
        return view('backend.layout.service-type.create_service_type');
    }


    public function save(Request $request)
         {

            $request->validate(
                [

                   'name'=>'required'
                ],
                ['required'=>'fill the field with a valid Service Type']
                );






            $data=new Service_type();
            $data->name=$request->name;
            $data->save();

            return redirect()->back();
         }



public function get(){
    $data=Service_type::all();
    return view('backend.layout.service-type.show_service_type',['infos'=>$data]);
  }


  public function delete($id)
  {
     $data=Service_type::find($id);
     $data->delete();
     return redirect()->back();
  }


  public function edit($id)
  {
     $data=Service_type::find($id);
     return view('backend.layout.service-type.update_service_type',['datas'=>$data]);
  }


  public function update(Request $request)
         {


            $request->validate(
                [

                   'name'=>'required'
                ],
                ['required'=>'fill the field with a valid Service Type']
                );


            $data=Service_type::find($request->id);
            $data->id=$request->id;
            $data->name=$request->name;
            $data->save();
            return redirect()->back();
         }


}
