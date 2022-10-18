
    <header>
        <h1><?= $titulo ?></h1>      
        <a class="btn btn-primary" href='http://localhost/sistema2022/public/cursos'>Regresar</a>
    </header>    
    <div class="jumbotron">
        <form method="POST" action="http://localhost/sistema2022/public/cursos/guardar">
            <div class="form-group row">
                <label for="idalumno" class="col-4 col-form-label">Id Alumno</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="idalumno" name="idalumno" placeholder="Ingresa tu idalumno" type="text" class="form-control">
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
                    <input id="iddocente" name="iddocente" placeholder="Ingresa tus iddocente" type="text" class="form-control">
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
                    <input id="curso" name="curso" placeholder="Ingresa tu curso - 8 caracteres" type="text" class="form-control">
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
                    <input id="creditos" name="creditos" placeholder="Ingresa los créditos - 9 dígitos" type="text" class="form-control">
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
                    <input id="notafinal" name="notafinal" placeholder="Ingresa la nota final - 9 dígitos" type="text" class="form-control">
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Guardar datos</button>
                </div>
            </div>
        </form>
    </div>
