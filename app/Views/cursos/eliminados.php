
    <h1><?= $titulo ?></h1>
    
    <a class="btn btn-primary" href='http://localhost/sistema2022/public/cursos'>Regresar</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Id Curso</th>
                    <th>Id Alumno</th>
                    <th>Id Docente</th>
                    <th>Curso</th>
                    <th>Créditos</th>
                    <th>notafinal</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                    foreach ($datos as $fila){
                        echo "<tr>";
                        echo "<td>{$fila['idcurso']}</td>";
                        echo "<td>".$fila['idalumno']."</td>";
                        echo "<td>{$fila['iddocente']}</td>";
                        echo "<td>".$fila['curso']."</td>";
                        echo "<td>".$fila['creditos']."</td>";
                        echo "<td>".$fila['notafinal']."</td>";
                        $ruta1 = "";
                        echo "<td><a class='btn btn-primary'href='http://localhost/sistema2022/public/cursos/restaurar/".$fila['idcurso']."'>Restaurar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
