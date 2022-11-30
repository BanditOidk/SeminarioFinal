<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: main.php');
    }
    require 'conex/conexion.php';
    if (!empty($_POST['usuario']) && !empty($_POST['clave'])) {
        $records = $conn->prepare('SELECT id, usuario, clave FROM users WHERE usuario = :usuario');
        $records->bindParam(':usuario', $_POST['usuario']);
        $records->execute();
        $results=$records->fetch(PDO::FETCH_ASSOC);

        $message = '';
        
        if (count($results) > 0 && password_verify($_POST['clave'], $results['clave'])) {
            $_SESSION['user_id'] = $results['id'];
            header('Location: main.php'); 
        }else{
            $message='Lo sentimos, las credenciales no coinciden'; 
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
        <title>Login - Usuarios</title>
        <link href="assets/css/styles.css?<?=date('Y-m-d H:i:s')?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main class="container">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h6><?php if (!empty($message)): ?>
                                            <p><?= $message ?></p>
                                        <?php endif; ?>
                                        </h6>
                                        <h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form name="form" action="login.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="usuario" id="usuario" type="text" placeholder="usuario" required/>
                                                <label for="inputEmail">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="clave" id="inputPassword" type="password" placeholder="Password" required/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Recuerdame</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">¿Olvido su contraseña?</a>
                                                <input type="submit" class="btn btn-primary" value="Enviar">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">¿No tienes una cuenta? Registrate aquí</a></div>
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
