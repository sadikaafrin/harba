@extends('backend.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="d-flex justify-content-between align-items-center mt-3 p-3">
                    <h5 class="mb-0">Service Type</h5>
                    <a href="{{ route('CreateBanner.index') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>

                @endsection

                @section('content2')
                <br>
                     <h4></h4>
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




