<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Contactenos</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <meta name="theme-color" content="#fafafa">
  <link rel="stylesheet" href="css/generalh.css">
  <link rel="stylesheet" href="css/Mapa.css">
</head>

<!--  cabecera -->
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
include "headerdos.php";
?>

<div>
  <div style="display: flex; justify-content: center; align-items: center; height: 30vh;">
    <div class="container text-center my-auto">
      <h2>Sedes Disponibles</h2>
    </div>
  </div>
</div>

<body class="bodyprincipal">
  <main class="containermapa">
    <div class="cardbasemapa">
    <div class="personal-row">
    <div class="col-md-4">
    
    <div class="imagensedemapa clickable" data-target="mapa1">
      <div class="imagen-container">
      
      <img src="img/Sede.png" class="imgmapa" alt="...">
      <div class="horario">
      <h3 class="titulossedes">Sede Quepos</h3>
      <h3 class="titulossedesecu">Horario de atencion:</h3>
      <p class="titulossedes">Lunes a Viener: 8:00am a 6:00pm.</p>
      <p class="titulossedes">Sabados: 9:00am a 12:00pm.</p>
      <p class="titulossedes">Domingo: Cerrado.</p>

      <h3 class="titulossedesecu">Horario de Farmacia:</h3>
      <p class="titulossedes">Lunes a Viener: 8:00am a 6:00pm.</p>
      <p class="titulossedes">Sabados: 9:00am a 12:00pm.</p>

      <h3 class="titulossedesecu">Telefonos:</h3>
      <p class="titulossedesphone">+506 4070 4040</p>
      <p class="titulossedesphone">Medicina General: ext. 9850</p>
      <p class="titulossedesphone">Especialiades Medicas: ext. 9854</p>
    </div>
    </div>
    <div id="mapa1" class="mapa-oculto">
      
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62880.267555375074!2d-84.046966!3d9.932565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e38f342558c3%3A0x1a16a98811103a23!2sDr.%20Vape!5e0!3m2!1sen!2scr!4v1685941308477!5m2!1sen!2scr"
        width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> <!--Este mapa no es! cambiarlo por uno de hospital-->
    </div>
    </div>
    </div>
  </div>
  
  <div class="cardbasemapa">
    <div class="personal-row">
    <div class="col-md-4">
    
    <div class="imagensedemapa clickable" data-target="mapa2">
      <div class="imagen-containermapados">
      
      <img src="img/Sede.png" class="imgmapa" alt="...">
      <div class="horariomapa2">
      <h3 class="titulossedes">Sede San Jose</h3>
      <h3 class="titulossedesecu">Horario de atencion:</h3>
      <p class="titulossedes">Lunes a Viener: 25/7</p>

      <h3 class="titulossedesecu">Horario de atencion:</h3>
      <p class="titulossedes">Medicina general: Lunes a Sabado:8:00am a 6:00pm</p>

      <h3 class="titulossedesecu">Telefonos:</h3>
      <p class="titulossedesphone">+506 2521-9595</p>
    </div>
    </div>
    <div id="mapa2" class="mapa-oculto">
      
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62880.267555375074!2d-84.046966!3d9.932565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e38f342558c3%3A0x1a16a98811103a23!2sDr.%20Vape!5e0!3m2!1sen!2scr!4v1685941308477!5m2!1sen!2scr"
        width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> <!--Este mapa no es! cambiarlo por uno de hospital-->
    </div>
    </div>
    </div>
  </div>

  <div class="cardbasemapa">
    <div class="personal-row">
    <div class="col-md-4">
    
    <div class="imagensedemapa clickable" data-target="mapa3">
      <div class="imagen-container">
      
      <img src="img/Sede.png" class="imgmapa" alt="...">
      <div class="horario">
      <h3 class="titulossedes">Sede Liberia</h3>
      <h3 class="titulossedes">Horario de atencion:</h3>
      <p class="titulossedes">Lunes a Domingo: 7:00am a 10:00pm</p>

      <h3 class="titulossedesecu">Telefono</h3>
      <p class="titulossedes">+506 7064-7854</p>

    </div>
    </div>
    <div id="mapa3" class="mapa-oculto">
      
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62880.267555375074!2d-84.046966!3d9.932565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e38f342558c3%3A0x1a16a98811103a23!2sDr.%20Vape!5e0!3m2!1sen!2scr!4v1685941308477!5m2!1sen!2scr"
        width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> <!--Este mapa no es! cambiarlo por uno de hospital-->
    </div>
    </div>
    </div>
  </div>
    

  </main>
</body>

</div>

</section>
</div>



<!--pie-->
<?php include "footer.php" ?>
<!--pie-->




<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<!-- archivos extra de js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"
  integrity="integrity=" sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"></script>
</script>

<script src="js/principal.js"></script>

</html>