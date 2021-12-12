<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="./img/user.jpg">
    <title>Eliminar Usuario</title>
</head>

<body>
    <h1 class="display-5 text-center">Eliminar Usuario</h1>
    <h3 class="text-center">
        Usuarios Disponibles
    </h3>
    <div class="container">
        <div class="row-6">
            <table class="table table-striped">
                <thead>
                    <th scope="col">ID de Usuario</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Fecha de Nacimiento</th>
                </thead>
                <tbody>
                    <?php
                    include("../Persistencia/usuarioDAO.php");

                    $usuarioDao = new UsuarioDAO();
                    $tabla = $usuarioDao->leerUsuarios();
                    while ($registro = mysqli_fetch_array($tabla)) {
                    ?>
                        <tr>
                            <td> <?php echo $registro[0] ?> </td>
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
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <form action="../Controlador/eliminarUsuario.php" method="POST">
                    <h4 class="text-center">Eliminación de Usuario</h4>
                    <div class="form-floating">
                        <select class="form-select" name="id">
                            <?php
                            $ids = $usuarioDao->verIDs();
                            while ($fila = mysqli_fetch_array($ids)) {
                            ?>
                                <option> <?php echo $fila[0]; ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                        <label> ID de usuario a eliminar</label>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-danger" value="Eliminar Usuario">
                    <a href="../index.php" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>