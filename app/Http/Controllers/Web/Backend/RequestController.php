<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Send_request;


class RequestController extends Controller
{
    public function save(Request $request)
    {

       $request->validate(
           [

              'phone'=>'required',
              'name'=>'required',

              'request_date'=>'required',
              'request_time'=>'required'
           ],
           ['required'=>'You must fill the field with a proper information']
           );






       $data=new Send_request();

       $data->phone=$request->phone;
       $data->name=$request->name;
       $data->request_date=$request->request_date;
       $data->request_time=$request->request_time;
       $data->save();
       return redirect()->back();
    }


    public function get(){
        $data=Send_request::all();
        return view('backend.layout.request.show_request',['infos'=>$data]);
      }



      public function ssearch(Request $request){
        $search=$request->search;
        $data=Send_request::where('name', $search)
        ->orWhere('phone', $search)
        ->orWhere('request_date', $search)
        ->orWhere('request_time', $search)
        ->get();
        return view('backend.layout.request.show_request',['info'=>$data]);
      }
}
