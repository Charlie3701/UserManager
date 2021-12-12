<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="./img/user.jpg">
    <title>Agregar Usuario</title>
</head>

<body>
    <h1 class="display-5 text-center">Agregar Nuevo Usuario</h1>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h6 class="text-center">Datos Personales</h6>
                <form action="../Controlador/agregarUsuario.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nombres">
                        <label>Nombres</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="apellidos">
                        <label>Apellidos</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="correo">
                        <label>Correo electrónico</label>
                    </div>
                    <h6 class="text-center">Fecha de Nacimiento</h6>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="anio">
                                    <?php for ($i = 1998; $i < 2050; $i++) { ?>
                                        <option> <?php echo $i ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Año</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="mes">
                                    <option> 01 </option>
                                    <option> 02 </option>
                                    <option> 03 </option>
                                    <option> 04 </option>
                                    <option> 05 </option>
                                    <option> 06 </option>
                                    <option> 07 </option>
                                    <option> 08 </option>
                                    <option> 09 </option>
                                    <?php for ($i = 10; $i < 13; $i++) { ?>
                                        <option> <?php echo $i ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Mes</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="dia">
                                    <option> 01 </option>
                                    <option> 02 </option>
                                    <option> 03 </option>
                                    <option> 04 </option>
                                    <option> 05 </option>
                                    <option> 06 </option>
                                    <option> 07 </option>
                                    <option> 08 </option>
                                    <option> 09 </option>
                                    <?php for ($i = 10; $i < 32; $i++) { ?>
                                        <option> <?php echo $i ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Día</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h6 class="text-center">Domicilio</h6>
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
                                <label>Número</label>
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
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>
                        <div class="col-6">
                            <a href="../index.php" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>