<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Photo</title>
</head>
<body>
<form action="/" enctype="multipart/form-data" METHOD="POST">
    @csrf
    <input type="file" name="image">
    <button>Upload</button>
</form>
</body>
</html>
