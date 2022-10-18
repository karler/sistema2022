
    <h1><?= $titulo ?></h1>
    
    <a class="btn btn-primary" href='http://localhost/sistema2022/public/alumnos/nuevo'>Nuevo Alumno</a>
    <a class="btn btn-danger" href='http://localhost/sistema2022/public/alumnos/eliminados'>Ver Eliminados</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Alumno</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
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

                        echo "<td><a class='btn btn-success'href='http://localhost/sistema2022/public/alumnos/editar/".$fila['idalumno']."'>Editar</a></td>";
                        echo "<td><a class='btn btn-danger'href='http://localhost/sistema2022/public/alumnos/eliminar/".$fila['idalumno']."'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
