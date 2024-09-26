@extends('backend.app')
@section('content2')
<br>
     <h4>All the Banner</h4>
     <br>
     <table class="table">
         <tr>
             <th>
             image
             </th>
             <th>
            name
             </th>
             <th>
             sub_title
             </th>
             <th>
             description
             </th>
             <th>
             button
             </th>
             <th>
             Edit
             </th>
             <th>
             Delete
             </th>
         </tr>

         @foreach($infos as $info)

         <tr>
             <td><img src="{{asset('backend/img/'.$info['image'])}}"></td>
             <td>{{$info['name']}}</td>
             <td>{{$info['sub_title']}}</td>
             <td>{{$info['description']}}</td>
             <td>{{$info['button']}}</td>
             <td><a href="{{url('/update_banner/'.$info['id'])}}">Edit</a></td>
             <td><a href="{{url('/delete_banner/'.$info['id'])}}">Delete</a></td>

         </tr>
         @endforeach
     </table>

@endsection
