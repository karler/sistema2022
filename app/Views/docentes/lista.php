
    <h1><?= $titulo ?></h1>
    
    <a class="btn btn-primary" href='http://localhost/sistema2022/public/docentes/nuevo'>Nuevo Alumno</a>
    <a class="btn btn-danger" href='http://localhost/sistema2022/public/docentes/eliminados'>Ver Eliminados</a>
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
                        echo "<td>{$fila['iddocente']}</td>";
                        echo "<td>".$fila['nombre']."</td>";
                        echo "<td>{$fila['apellidos']}</td>";
                        echo "<td>".$fila['DNI']."</td>";
                        echo "<td>".$fila['celular']."</td>";
                        $ruta1 = "";

                        echo "<td><a class='btn btn-success'href='http://localhost/sistema2022/public/docentes/editar/".$fila['iddocente']."'>Editar</a></td>";
                        echo "<td><a class='btn btn-danger'href='http://localhost/sistema2022/public/docentes/eliminar/".$fila['iddocente']."'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
