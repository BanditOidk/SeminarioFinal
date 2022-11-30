<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
</head>
<body>
	<div class="contenedor">
		

		<div class="carousel">
			<div class="carousel__contenedor">
				<button aria-label="Anterior" class="carousel__anterior">
					<i class="fas fa-chevron-left"></i>
				</button>

				<div class="carousel__lista">
					
					<?php 
        include("conexion.php");
        $query = "SELECT * FROM programas";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()){
            ?>
			<div class="carousel__elemento">
						<a  target="blank" href="<?php echo $row['link']; ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"></a>
						</div>
						<?php
        }
        ?>
					
				</div>

				<button aria-label="Siguiente" class="carousel__siguiente">
					<i class="fas fa-chevron-right"></i>
				</button>
			</div>

			<div role="tablist" class="carousel__indicadores"></div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</body>
</html>