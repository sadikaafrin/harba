@extends('backend.app')
@section('content')
@if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <form action="/update_banner" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 mt-3">

            <input type="hidden" class="form-control" id="id" value="{{$datas['id']}}" name="id">
          </div>

          <div class="mb-3 mt-3">
            <label for="image">Photo</label>
            <img src="{{ asset('backend/img/' . $datas['image']) }}" alt="Current Image" class="img-thumbnail mb-2" style="max-width: 100%; height: auto;">
            <input type="file" class="form-control dropify"  id="image" name="image" accept="image/*">
        </div>
        @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror


          <div class="mb-3 mt-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" value="{{$datas['name']}}" name="name">
          </div>
          @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          <div class="mb-3 mt-3">
            <label for="sub_title">Sub Title</label>
            <input type="text" class="form-control" id="sub_title" value="{{$datas['sub_title']}}" name="sub_title">
          </div>
          @error('sub_title')
                <div class="text-danger">{{ $message }}</div>
            @enderror

          <div class="mb-3 mt-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description"
                    name="description">{{$datas['description']}}</textarea>
          </div>
          @error('Description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          <div class="mb-3 mt-3">
            <label for="button">Button Text</label>
            <input type="text" class="form-control" id="button" value="{{$datas['button']}}" name="button">
          </div>
          @error('button')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        <button type="submit" class="btn btn-primary btn-clr">SAVE</button>
      </form>

      <script>
        $('.dropify').dropify();
    </script>
@endsection
