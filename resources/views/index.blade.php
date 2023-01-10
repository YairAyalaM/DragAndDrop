<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>
<body>
    <h3>Drag and Drop</h3>
    <form action="{{ route('dropzone.store') }}" method="POST" enctype="multipart/form-data" id="image-upload" class="dropzone">
        @csrf
    </form>
</body>
<script type="text/javascript">
    new Dropzone("#image-upload",{
        thumbnailWidth:200,
        maxFilesize:1,
        acceptedFiles:".jpeg, .jpg, .png, .gif"
    })
</script>
</html>