<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title><?=$titulo ?></title>
  </head>
  <body>
    <h1><?= $titulo ?></h1>
    <a class="btn btn-primary" href='http://localhost/sistema2022/public/alumnos'>Regresar</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Alumno</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
                    <th>Restaurar</th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                    foreach ($datos as $fila){
                        echo "<tr>";
                        echo "<td>{$fila['idalumno']}</td>";
                        echo "<td>".$fila['nombre']."</td>";
                        echo "<td>{$fila['apellidos']}</td>";
                        echo "<td>".$fila['DNI']."</td>";
                        echo "<td>".$fila['celular']."</td>";
                        $ruta1 = "";
                        echo "<td><a class='btn btn-primary'href='http://localhost/sistema2022/public/alumnos/restaurar/".$fila['idalumno']."'>Restaurar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>