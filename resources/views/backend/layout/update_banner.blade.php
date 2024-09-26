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
    <form action="/update_banner" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 mt-3">

            <input type="text" class="form-control" id="id" value="{{$datas['id']}}" name="id">
          </div>

        <div class="mb-3 mt-3">
            <label for="image">Photo</label>
            <input type="file" class="form-control dropify" id="image" value="{{$datas['image']}}" name="image">
          </div>

          <div class="mb-3 mt-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" value="{{$datas['name']}}" name="name">
          </div>
          <div class="mb-3 mt-3">
            <label for="sub_title">Sub Title</label>
            <input type="text" class="form-control" id="sub_title" value="{{$datas['sub_title']}}" name="sub_title">
          </div>

          <div class="mb-3 mt-3">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" value="{{$datas['description']}}" name="description">
          </div>
          <div class="mb-3 mt-3">
            <label for="button">Description</label>
            <input type="text" class="form-control" id="button" value="{{$datas['button']}}" name="button">
          </div>
        <button type="submit" class="btn btn-primary btn-clr">SAVE</button>
      </form>

      <script>
        $('.dropify').dropify();
    </script>
</body>
</html>
