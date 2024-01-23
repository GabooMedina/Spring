<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css" type="text/css">
    
</head>
<body>
    <header>
    <img class="uni" src="img/head.png" alt=""></img>
    </header>
    <nav>
        <ul>
            <li><a class="estilolista" href="index.php?action=inicio">Inicio</a></li>
            <li><a class="estilolista" href="index.php?action=nosotros">Nosostros</a></li>
            <li><a class="estilolista" href="index.php?action=servicios">Servicios</a></li>
            <li><a class="estilolista" href="index.php?action=contactanos">Contacto</a></li>
            <li><a class="estilolista" href="index.php?action=logout">Salir</a></li>
            
        </ul>
    </nav>
    <section> 
        <?php
        require_once'controller\controller.php';
        $mvc= new McvController();
        $mvc->enlacesPaginasController();
        ?>
    </section>
    <div class="footer">
            <footer>
                <div class="contenedorFooter">
                    <h3 class="universidad-titulo">Universidad Técnica de Ambato</h3>
                    
                </div>
            </footer>
        </div>
</body>
</html>