
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A good day !</title>
    <link rel="stylesheet" href="css/style.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    



    <div class="footer">
        <div class="contain">
            <div class="col">
                <h1>Politicas y condiciones</h1>
                <ul>
                    <li>Política de Cookies</li>
                    
                    <li>Política de Envío</li>
                    <li>Politica De Garantias</li>
                    <li>Términos y Condiciones</li>
                </ul>
            </div>
            <div class="col">
                <h1>Creacion</h1>
                <ul>
                    <li>Github</li>
                    <li>Desarrollador</li>
                    <li>Herramientas</li>
                    <li>Hosting</li>
                    <li>Librerias</li>
                </ul>
            </div>
            <div class="col">
                <h1>Mundo Senati+</h1>
                <ul>
                    <li>Historia</li>
                    <li>Mision</li>
                    <li>Vision</li>
                    <li>Filosofia</li>
                    <li>Valores</li>
                </ul>
            </div>
            <div class="col">
                <h1>Sobre Senati+</h1>
                <ul>
                    <li>Servicio</li>
                    <li>Garantia</li>
                    <li>Devoluciones</li>
                    <li>Reclamos</li>
                    <li>Google Maps</li>
        
                </ul>
            </div>
            <div class="col">
                <h1>Soporte</h1>
                <ul>
                    <li>Contactanos</li>
                    <a href="email.php" target=""><li>Enviar Email</li></a>
                    <li>Llamanos</li>
                    <li>Comunicanos</li>
                </ul>
            </div>
            <div class="col social">
                <h1>Social</h1>
                <ul>
                    <li><a href="https://www.facebook.com/" target="blank"><img src="images/facebook.png" width="32" style="width: 32px;"></a></li>
                    <li><a><img src="images/instagram.png" width="32" style="width: 32px;"></a></li>
                    <li><a><img src="images/twitter.png" width="32" style="width: 32px;"></a></li>
                    <li><a><img src="images/github.png" width="32" style="width: 32px;"></a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
            <footer class="foot" id="contacto">
                <p> Copyright &copy;2022 Senati Plus. Todos los derechos reservados </p>
            </footer>
        </div>


    </div>



    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function () {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function () { div.style.display = "none"; }, 600);
            }
        }
    </script>
</body>

</html>