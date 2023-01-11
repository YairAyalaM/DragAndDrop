<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<!-- estilos del dropzone -->

<style>
    .form-container {
        width: 70%;
        margin: 0 auto;
    }

    .form-container .dropzone {
        border: 2px dashed #c3c3c3;
        padding: 40px;
    }

    @media(hover: hover){
        .dropzone:hover{
            background-color: #e0ffcd;
            transition: 0.3s;
        }
    }

    .dropzone:active{
        background-color: #e0ffcd;
    }

    .form-container .icon i{
        font-size: 3em;
        text-align: center;
        color: #696767;
        background-color: #dfdddd;
        height: 100px;
        width: 100px;
        margin-bottom: 20px;
        border-radius: 50%;
        padding: 25px 20px;
    }

    .form-container h2, .note{
        color: #40405b;
    }
</style>

<body>
    <div class="container">
        <h3>Drag and Drop</h3>
        <div class="form-container">
            <h1>DropZone</h1>
            <form action="{{ route('dropzone.store') }}" method="POST" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
                <div class="dz-message">
                    <div class="icon">
                        <!-- aqui va el iconoco -->
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                    <h2>Suelta tus archivos</h2>
                    <span class="note">No hay archivos seleccionados</span>
                </div>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript">
    new Dropzone("#image-upload", {
        thumbnailWidth: 200,
        maxFilesize: 1,
        acceptedFiles: ".jpeg, .jpg, .png, .gif"
    })
</script>

</html>