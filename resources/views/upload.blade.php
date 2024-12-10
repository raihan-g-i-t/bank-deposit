<!DOCTYPE html>
<html>
<head>
    <title>Images</title>
</head>
<body>
    <h1>Uploaded Images</h1>
    @foreach ($images as $image)
        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image" style="width:200px;">
    @endforeach
</body>
</html>