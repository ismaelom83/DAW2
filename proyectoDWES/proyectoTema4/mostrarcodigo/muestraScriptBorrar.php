
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos.css">
        <title>Muestra Scripts</title>
        <style>
             .volver{
                font-size: 40px;
                text-align: center;
                display: block;
            }
        </style>
        
    </head>
    <body>
<a class="volver" href="../index.php">Volver</a>
        <?php
        
         // muestra el codigo de la ruta especificada.
        highlight_file("../scriptDB/BorraDAW209-DBdepartamentos.sql");
        
          ?>      
        
        

    </body>
</html>