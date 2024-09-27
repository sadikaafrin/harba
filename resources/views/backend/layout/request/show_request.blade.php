@extends('backend.app')



        @section('contentS')
            <div class="content-wrapper">


                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card-body">

                        <form method="POST" action="/search_request" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="search">Search</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="search" name="search"
                                        value="{{ old('search') }}" />
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">GO</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection

        @section('content2')
        <div class="content-wrapper">


            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card-body">
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

                @foreach ($infos as $info)
                    <tr>

                        <td>{{ $info['name'] }}</td>
                        <td>{{ $info['phone'] }}</td>
                        <td>{{ $info['request_date'] }}</td>
                        <td>{{ $info['request_time'] }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
        @endsection
