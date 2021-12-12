<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="./img/user.jpg">
    <title>Buscar Usuario por ID</title>
</head>

<body>
    <h1 class="display-5 text-center">Buscar Usuario por ID</h1>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <form method="POST">
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Ingrese el ID" name="id">
                        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
            <?php
            if (isset($_POST['id'])) {
            ?>
                <!-- Si existe el elemento POST -->
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
                        $tablaID = $usuarioDao->buscarPorID($_POST['id']);
                        while($registro = mysqli_fetch_array($tablaID)){
                        ?>
                        <tr>
                            <td> <?php echo $registro[0] ?> </td>
                            <td> <?php echo $registro[1] ?> </td>
                            <td> <?php echo $registro[2] ?> </td>
                            <td> <?php echo $registro[3] ?> </td>
                            <td> <?php echo $registro[4] ?> </td>
                            <td> <?php echo $registro[5] ?> </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <!-- De lo contrario -->
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
            <?php } ?>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <a href="../index.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</body>

</html>