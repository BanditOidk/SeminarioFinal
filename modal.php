<link rel="icon" type="image/x-icon" href="images/icon.png">
<?php 
include("conexion.php");
$idUser = $_REQUEST['id'];
$query = "SELECT * FROM peliculas WHERE id_pelicula = $idUser;";
$consulta = mysqli_query($conexion, $query);
$data = mysqli_fetch_assoc($consulta);
 ?>

 <!DOCTYPE html>
 
 <html>
 
 <head>
 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
 	<title>Trailer</title>
	 
 </head>
 <body>
 <?php include "template/header.php"; ?>
 <br> <br> <br> <br> <br>
 <div class="container">
   <section class="modal">
    <h1><?php echo $data['nombre'];?></h1>
    <center>
    <div class="embed-responsive embed-responsive-21by9">
    <iframe width="560" height="315" src="<?php echo $data['video']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </center> 
    <h2>Año: <?php echo $data['año'] ?></h2>
    <h2>Guion: <?php echo $data['directores'] ?></h2>
   </section>
</div>
<br><br>
 </body>
 <?php include "template/footer.php"; ?>
 </html>
 
