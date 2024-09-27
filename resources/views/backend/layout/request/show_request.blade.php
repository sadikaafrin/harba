@extends('backend.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <!-- Basic Bootstrap Table -->


                @endsection

                @section('content2')
                <br>
                     <h4>Requests sent by Visitors</h4>
                     <br>
                     <table class="table">
                         <tr>

                             <th>
                            name
                             </th>
                             <th>
                                phone
                                 </th>
                                 <th>
                                    request_date
                                 </th>
                                 <th>
                                    request_time

                                 </th>


                            </tr>

                         @foreach($infos as $info)

                         <tr>

                             <td>{{$info['name']}}</td>
                             <td>{{$info['phone']}}</td>
                             <td>{{$info['request_date']}}</td>
                             <td>{{$info['request_time']}}</td>

                         </tr>
                         @endforeach
                     </table>



                @endsection
