<?php 
$pg ="inicio";


?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="imagenes/favicon-32x32.png">
    <title>Inicio</title>
    </head>
    
<body id="inicio">
    <header class="container">
    <?php  include_once("menu.php"); ?>
    </header>
    <main class="container">
<div class="row">
  <div class="col-12 mx-auto my-4 mb-3 text-center cohete">
    <a href="proyectos.html"><img src="imagenes/cohete.svg" alt=""></a>
  </div>
  <div class="col-12 col-sm-6 offset-sm-3 text-center my-4 mb-3">
    <div class="my-4">
    <p class="py-2 px-5">Bienvenido a mi sitio web para ver mis proyectos</p>
  </div>
  </div>
  <div class="col-12 text-center mb-4">
    <a href="proyectos.html" class="btn-button py-2">Conoce mis proyectos</a>
  </div>
</div>
    </main>
    <footer id="proyecto" class="container mt-auto pb-4">
      <div class="row">
        <div class="col-12 col-sm-3">
         <a href="https://github.com/"><i class="fa-brands fa-github"></i></a>
         <a href="https://ar.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
     </div>
        <div class="col-12 col-sm-3">
         Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePC Suite</a>  
     </div>
        <div class="col-3">
         <a href="mailto:torres_226@hotmail.com">torres_226@hotmail.com</a>
        </div>
        </div>
        <div class="btn-whatsapp">
         <a href="https://api.whatsapp.com/send?phone=+541162442898"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
     </div>
 </footer>
    
</body>
</html>