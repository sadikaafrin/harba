<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--                            Bootstrap                        -->
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="/create_banner" method="POST" enctype="multipart/form-data">
        @csrf



        <div class="mb-3 mt-3">
            <label for="image">Photo</label>
            <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
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
            <input type="text" class="form-control" id="sub_title" placeholder="Enter sub title" name="sub_title">
          </div>
          @error('sub_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

          <div class="mb-3 mt-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" name="description">
          </div>
          @error('description')
          <div class="text-danger">{{ $message }}</div>
      @enderror
          <div class="mb-3 mt-3">
            <label for="button">Description</label>
            <input type="text" class="form-control" id="button" placeholder="Button text" name="button">
          </div>
          @error('button')
          <div class="text-danger">{{ $message }}</div>
      @enderror
        <button type="submit" class="btn btn-primary btn-clr">SAVE</button>
      </form>
    </div>
</body>
</html>
