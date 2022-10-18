
    <header>
        <h1><?= $titulo ?></h1>    
        <a class="btn btn-primary" href='http://localhost/sistema2022/public/cursos'>Regresar</a>
    </header>    
    <div class="jumbotron">
        <form method="POST" action="http://localhost/sistema2022/public/cursos/actualizar">
            <div class="form-group row">
                <label for="idcurso" class="col-4 col-form-label">Id Curso</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="idcurso" name="idcurso" type="text" class="form-control" value="<?=$datos['idcurso']?>" readonly>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="idalumno" class="col-4 col-form-label">Id Alumno</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="idalumno" name="idalumno" type="text" class="form-control" value="<?=$datos['idalumno']?>">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="iddocente" class="col-4 col-form-label">Id Docente</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card-o"></i>
                    </div>
                    </div> 
                    <input id="iddocente" name="iddocente" type="text" class="form-control" value="<?=$datos['iddocente']?>">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="curso" class="col-4 col-form-label">Curso</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book-o"></i>
                    </div>
                    </div> 
                    <input id="curso" name="curso" type="text" class="form-control" value="<?=$datos['curso']?>">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="creditos" class="col-4 col-form-label">Créditos</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-phone"></i>
                    </div>
                    </div> 
                    <input id="creditos" name="creditos" type="text" class="form-control" value="<?=$datos['creditos']?>">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="notafinal" class="col-4 col-form-label">Nota Final</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-phone"></i>
                    </div>
                    </div> 
                    <input id="notafinal" name="notafinal" type="text" class="form-control" value="<?=$datos['notafinal']?>">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
