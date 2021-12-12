<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="./img/user.jpg">
    <title>Modificar Usuario</title>
</head>

<body>
    <h1 class="display-5 text-center">Modificar Usuario</h1>
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
            <div class="col">
                <form action="../Controlador/modificarUsuario.php" method="POST">
                    <h5 class="text-center">Ingreso de Usuario a Modificar</h5>
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
                        <label> ID de usuario a modificar</label>
                    </div>
                    <br>
                    <h5 class=" text-center">Modificación de Registros</h5>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nombres">
                                <label>Nombres</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="apellidos">
                                <label>Apellidos</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="correo">
                        <label>Correo electrónico</label>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="calle">
                                <label>Calle</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="numero">
                                <label>Número de Casa</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="colonia">
                                <label>Colonia</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="dia">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <?php for ($i = 10; $i < 32; $i++) { ?>
                                        <option> <?php echo $i; ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Día</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="mes">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <?php for ($i = 10; $i < 13; $i++) { ?>
                                        <option> <?php echo $i; ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Mes</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select name="anio" class="form-select">
                                    <?php for($i=1990; $i<2051; $i++){?>
                                        <option> <?php echo $i; ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Año</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-secondary" value="Modificar Registro">
                    <a href="../index.php" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>