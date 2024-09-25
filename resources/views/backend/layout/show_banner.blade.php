<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--                            Bootstrap                        -->
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">

     <h6>All the Banner</h6>
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
             <td>{{$info['image']}}</td>
             <td>{{$info['name']}}</td>
             <td>{{$info['sub_title']}}</td>
             <td>{{$info['description']}}</td>
             <td>{{$info['button']}}</td>
             <td><a href="{{url('/update_banner/'.$info['id'])}}">Edit</a></td>
             <td><a href="{{url('/delete_banner/'.$info['id'])}}">Delete</a></td>

         </tr>
         @endforeach
     </table>
     </div>
</body>
</html>
