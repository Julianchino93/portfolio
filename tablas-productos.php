<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ejemplo de tabla</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
              <h1>Lista de Precios</h1>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-12">
    <table class="table border table hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>    
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>01</td>
            <td>Impresora</td>
            <td>20</td>
        </tr>
       <tr>
            <td>02</td>
            <td>Pizarra Digital</td>
            <td>25</td>
        </tr>
        <tr>
            <td>03</td>
            <td>Notebook Hp</td>
            <td>15</td>
        </tr>
        <tr>
            <td class="text-end" colspan="2">Total</td>
            <td>60</td>
        </tr>
    </tbody>
    </table>
         </div>
        </div>
       </div>
</main>
</body>
</html>