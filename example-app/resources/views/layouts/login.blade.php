<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>MPRSHEL - @yield('title')</title>
</head>
<body style="background-color:rgb(207, 207, 207)">
    <div>
        
    </div>
    <div class="m-3 col-auto me-auto align-self-center" >
            <div class="container d-flex justify-content-end text-center">
                <div class="col-auto me-auto align-self-center">
                    MPRSHEL
                </div>
                <a href="/" class="btn btn-primary me-md-2"><i class="bi bi-house-fill me-2"></i></i>Inicio</a>
                <a href="/register" class="btn btn-primary me-md-2"><i class="bi-pencil-square me-2"></i>Sube algo</a>
                <a href="/admin" class="btn btn-primary me-md-2"> <i class="bi-gear-fill me-2"></i>Administración</a>
            </div>
        <div class="align-self-center">
            @yield('content')
        </div>
    </div>
</body>
</html>