<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .input{
        padding:2px;
        border:1px solid black;
      }
      .btn{
        padding: 10px 10px;
        border-radius:5px;
        background-color:blue;
        color:white;
        border:none;
      }
      .form{
        border:1px solid black;
        padding: 10px;
        width: 30%;
        margin:10% auto;
        border-radius:5px;
        padding-bottom:40px;
      }
      .h1{
        text-align:center;
        color:blue;

      }
    </style>
</head>
<body>
    <form class="form" action="{{ URL('photos/insert') }}" enctype="multipart/form-data" class="p-10" method="POST">
          <h1 class="h1">Add a photo</h1>
         @csrf
        <input class="input" type="file" name="photo" id="" class="p-10">
        <input class="btn" type="submit" value="save">
    </form>
</body>
</html>