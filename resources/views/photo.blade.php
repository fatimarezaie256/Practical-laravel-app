<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ URL('photos/insert') }}" enctype="multipart/form-data" class="p-10" method="POST">
       
         @csrf
        <input type="file" name="photo" id="" class="p-10">
        <input type="submit" value="save">
    </form>
</body>
</html>