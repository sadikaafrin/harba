@extends('backend.app')
@section('content')
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/create_banner" method="POST" enctype="multipart/form-data">
            @csrf



            <div class="mb-3 mt-3">
                <label for="image">Image</label>
                <input type="file" class="form-control dropify" id="image" name="image">
            </div>
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3 mt-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3 mt-3">
                <label for="sub_title">Sub Title</label>
                <input type="text" class="form-control" id="sub_title" placeholder="Enter sub title"
                    name="sub_title">
            </div>
            @error('sub_title')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3 mt-3">
                <label for="description">Write Description</label>
                <textarea class="form-control" id="description" placeholder="Description..."
                    name="description"></textarea>
            </div>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3 mt-3">
                <label for="button">Button text</label>
                <input type="text" class="form-control" id="button" placeholder="Button text" name="button">
            </div>
            @error('button')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary btn-clr">SAVE</button>
        </form>
    </div>

    <script>
        $('.dropify').dropify();
    </script>
@endsection
