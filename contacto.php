<?php 
$pg = "contacto";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.4.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="imagenes/favicon-32x32.png">
    <title>Contacto</title>
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 pb-5 py-5">
                    <h1>Contacto</h1>
                </div>
            </div> 
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me contactes enviandome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div> 
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escriba aqui su mensaje" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </main>
    <footer class="container mt-auto py-4">
         <div class="row">
           <div class="col-sm-3">
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