<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="./Vista/img/user.jpg">
    <title>USUARIOS CRUD</title>
</head>

<body>
    <h1 class="display-5 text-center">
        Tabla de Empleados
    </h1>
    <div class="container">
        <div class="row-6">
            <table class="table table-striped">
                <thead>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Fecha de Nacimiento</th>
                </thead>
                <tbody>
                    <?php
                    include("./Persistencia/usuarioDAO.php");

                    $usuarioDao = new UsuarioDAO();
                    $tabla = $usuarioDao->leerUsuarios();
                    while ($registro = mysqli_fetch_array($tabla)) {
                    ?>
                        <tr>
                            <td> <?php echo $registro[1] ?> </td>
                            <td> <?php echo $registro[2] ?> </td>
                            <td> <?php echo $registro[3] ?> </td>
                            <td> <?php echo $registro[4] ?> </td>
                            <td> <?php echo $registro[5] ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-3">
                        <a href="./Vista/agregarUsuario.php" class="btn btn-success">Agregar Usuario</a>
                    </div>
                    <div class="col-3">
                        <a href="./Vista/modificarUsuario.php" class="btn btn-primary">Modificar Usuario</a>
                    </div>
                    <div class="col-3">
                        <a href="./Vista/eliminarUsuario.php" class="btn btn-danger">Eliminar Usuario</a>
                    </div>
                    <div class="col-3">
                        <a href="./Vista/buscarUsuario.php" class="btn btn-info">Buscar Usuario por ID</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>