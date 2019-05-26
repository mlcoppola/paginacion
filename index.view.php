<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Paginación</title>
</head>
<body>

    <h1>Articulos</h1>
    <div class="contenedor">
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo): ?>
                    <li> <?php echo $articulo['id'] . '.- ' . $articulo['articulo']; ?> </li>
                <?php endforeach; ?>
            </ul>
        </section>
   
        <section class="paginacion">
            <ul>
                <!-- Botón avance  -->
                <?php if ($pagina == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina-1; ?>">&laquo;</a></li>
                <?php endif; ?>

                <!-- Ciclo para mostrar las páginas -->
                <?php 
                for ($i=1; $i <= $numeroPaginas ; $i++) { 
                    if ($pagina == $i) {
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>

                <!-- Botón avanzar  -->
                <?php if ($pagina == $numeroPaginas): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina+1; ?>">&raquo;</a></li>
                <?php endif; ?>

            </ul>
        </section>
    </div> 

</body>
</html>