<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?= $titulo ?></title>
  </head>
  <body>
    <h1><?= $titulo ?></h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Docente</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                    foreach ($datos as $fila){
                        echo "<tr>";
                        echo "<td>{$fila['iddocente']}</td>";
                        echo "<td>".$fila['nombre']."</td>";
                        echo "<td>{$fila['apellidos']}</td>";
                        echo "<td>".$fila['DNI']."</td>";
                        echo "<td>".$fila['celular']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>