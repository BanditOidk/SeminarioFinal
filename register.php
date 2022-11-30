<?php
    require 'conex/conexion.php';
    $message='';
    if (!empty($_POST['usuario']) && !empty(['clave'])) {
        $query="INSERT INTO users(usuario, clave) 
            VALUES(:usuario, :clave)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':usuario', $_POST['usuario']);
        $password=password_hash($_POST['clave'], PASSWORD_BCRYPT);
        $stmt->bindParam(':clave', $password);
        if ($stmt->execute()) {
            $message='¡Usuario creado correctamente!';
        }else{
            $message='Ha ocurrido un error al crear el usuario';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Registro de Uusarios</title>
        <link href="assets/css/styles.css?<?=date('Y-m-d H:i:s')?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h6 class="text-center font-weight-light">
                                            <?php if (!empty($message)):?>
                                            <p><?= $message ?></p>
                                            <?php endif; ?></h6>
                                        <h3 class="text-center font-weight-light my-4">Registrarse</h3></div>
                                    <div class="card-body">
                                        <form name="formregistro" action="register.php" method="post">
                                            <div class="row mb-3">
                                                
                                                <div class="col-md-12 mb-2">
                                                    <label class="form-label">Usuario</label>
                                                    <input type="text" class="form-control" name="usuario" id="usuario" required>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label class="form-label">Contraseña</label>
                                                    <input type="password" class="form-control" name="clave" id="clave" required>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <input type="submit" id="Guardar" class="btn btn-primary mb-3" value="Enviar">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">¿Tiene una cuenta? Inicie sesion</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
