<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="practica de formularios">
    <meta name="author" content="ismael heras">
    <meta name="keywords" content="practica, ismael">
    <meta name="refresh" content="2">
    <meta name="generator" content="notepad++">
    <meta name="robot" content="index, follow">
    <link rel="shortcut icon" type="imagen/png" href="favicon.ico/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" media="screen" href="css/style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ismael Heras Salvador</title>
</head>

<body>
 

<!-- particles.js container -->
<div id="particles-js"></div>

<!-- scripts -->


<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>
    <header>
        <h1>DESARROLLO DE APLICIONES W
        <?php
        
        date_default_timezone_set("Europe/Madrid");
        
                $fechaNacional = new DateTime();
                
                 echo $fechaNacional -> format("d-m-Y (H:i)"); 
        
        ?>
        </h1>
        <h2 class="h2">Ismael Heras Salvador</h2>
    </header>

    <div class="menu">
        <a href="proyectoDWES/DWES.php">
            <img src="images/HTMLicon.png"></a>
        <a href="proyectoDWEC/DWEC.html">
            <img src="images/CSSicon.png"></a>
        <a href="proyectoDAW/DAW.html">
            <img src="images/xmlicon.png"></a>
        <a href="proyectoDIW/DIW.html">
            <img src="images/XPATHcon.png"></a>
        
    </div>
 
    <footer>
        <div class="piedepagina">
            <hr>
            <p>&copy; 2019-2020, ISMAEL HERAS SALVADOR. TODOS LOS DERECHOS RESERVADOS</p>
        </div>
    </footer>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  
    <script src="js/particles.js"></script>
     <script src="js/app.js"></script>
</body>

</html>