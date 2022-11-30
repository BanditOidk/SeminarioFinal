<?php
    session_start();

    require 'conex/conexion.php';

    if (isset($_SESSION['user_id'])) {
        $records= $conn->prepare('SELECT * FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results= $records->fetch(PDO::FETCH_ASSOC);

        $user= null;

        if(count($results) > 0){
            $user = $results;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="icon" type="image/x-icon" href="images/icon.png">

    <title>Inicio</title>
</head>


<body>
<?php if (!empty($user['id'])): ?>
<?php include "template/header.php"; ?>
 <br>
 <?php include "template/sliders.php"; ?>

    <section id="computadoras">
        <div class="container">
                 <?php 
        include("conexion.php");
        $query = "SELECT * FROM franquicias";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){
            ?>
            <a href="<?php echo $row['href']; ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" height="225" width="400"></a>
        

        <?php
        }
        ?>
            
        </div>
        </div>
        </section>
        <section id="masvendido">
        <h2><img src="images/masvistos.png" id="vendido"></h2>
            <div class="container">     
                <?php 
        include("conexion.php");
        $query = "SELECT * FROM peliculas WHERE rate='x'" ;
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){
            ?>
            <a href="modal.php?id=<?php echo $row['id_pelicula']; ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" height="225" width="400"></a>
        

        <?php
        }
        ?>
            
            </div>
        </section> 
        
    <br><br><br>
    <section id="marcas">
    <?php include "template/carrusel2.php"; ?>
        </section>

        <?php include "template/footer.php"; ?>
        
        <?php else: ?>
    
            <h1><img src="images/porfavor.png" alt=""></h1>
<center>
            <a href="login.php"><img src="images/inicia.png" alt=""></a>&nbsp&nbsp
            <img src="images/o.png" alt="">&nbsp
            <a href="register.php"><img src="images/registrate.png" alt=""></a>
</center>
        <?php endif; ?>
</body>
</html>
