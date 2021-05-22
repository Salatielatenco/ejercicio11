<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <link rel="stylesheet" href="./librerias/css/bootstrap.css">
    <title>Salatiel</title>
</head>

<body>

<div class="container mt-2">
    <div class="row justify-content-around py-4">
        <div class="col-sm-4 text-center">
        
        <div  class="form-group">
                <label for="nombre" class="lead">Nombres(s):</label>
                <input
                type="text"
                class="form-control form_control-sm"
                id="registro_nombre"
                name="nombre">
            </div>

            <div  class="form-group">
                <span class="btn btn-danger btn-block " id="btn_registro_usuario">
                    <span class="lead"> Registrarse</span>
                </span>
            </div>

        </div>
    
    </div>
</div>

</body>

</html>

<script src="./librerias/js/jquery/jquery.js"></script>
<script src="./librerias/js/b4/bootstrap.js"></script>
<script src="./manager/manager_registro.js"></script>