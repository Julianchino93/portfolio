<?php 
$pg ="proyectos";


?>



<!DOCTYPE php>
<php lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="imagenes/favicon-32x32.png">
    <title>Proyectos</title>
    
</head>
<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
    <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12 py-5">
          <h1>Proyectos</h1>
        </div>
      </div>
      <div class="row">
      <div class="col-12">
            <p>Los siguientes son algunos trabajos que he realizado:</p>
      </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-4 p-4">
             <div class="row border proyecto pb-4">
              <div class="col-12 p-0 pb-3">
                <img src="imagenes/abmclientes.png" alt= "AMB CLIENTES" class="img-fluid">
                <h2>AMB CLIENTES</h2>
                <p class="py-1 px-4">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
              </div>
              <div class="col-6">
                  <a href="" class="btn-rojo">Ver Online</a>  
              </div>
              <div class="col-6 text-center">
                  <a href="" class="link-rojo">Codigo fuente</a>
              </div>
             </div>
        </div>
        <div class="col-12 col-sm-4  p-4">
          <div class="row border proyecto pb-4">
           <div class="col-12 p-0 pb-3">
             <img src="imagenes/abmventas.png" alt= "AMB VENTAS" class="img-fluid">
             <h2>AMB VENTAS</h2>
             <p class="py-1 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
           </div>
           <div class="col-6">
              <a href="" class="btn-rojo">Ver Online</a>
           </div>
           <div class="col-6 text-center">
              <a href="" class="link-rojo">Codigo fuente</a>
           </div>
          </div>
     </div>
     <div class="col-12 col-sm-4  p-4">
      <div class="row border proyecto pb-4">
       <div class="col-12 p-0 pb-3">
         <img src="imagenes/proyecto-integrador.png" alt= "AMB PINTEGRADOR" class="img-fluid">
         <h2>PROYECTO INTEGRADOR</h2>
         <p class="py-1 px-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
       </div>
       <div class="col-6">
          <a href="" class="btn-rojo">Ver Online</a>
       </div>
       <div class="col-6 text-center">
          <a href="" class="link-rojo">Codigo fuente</a>
       </div>
      </div>
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