
    <header>
        <h1><?= $titulo ?></h1>    
        <a class="btn btn-primary" href='http://localhost/sistema2022/public/alumnos'>Regresar</a>  
    </header>    
    <div class="jumbotron">
        <form method="POST" action="http://localhost/sistema2022/public/alumnos/actualizar">
            <div class="form-group row">
                <label for="idalumno" class="col-4 col-form-label">Id Aumno</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="idalumno" name="idalumno" type="text" class="form-control" value="<?=$datos['idalumno']?>" readonly>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nombre" class="col-4 col-form-label">Nombre</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nombre" name="nombre" type="text" class="form-control" value="<?=$datos['nombre']?>">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="apellidos" class="col-4 col-form-label">Apellidos</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card-o"></i>
                    </div>
                    </div> 
                    <input id="apellidos" name="apellidos" type="text" class="form-control" value="<?=$datos['apellidos']?>">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="DNI" class="col-4 col-form-label">DNI</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-book-o"></i>
                    </div>
                    </div> 
                    <input id="DNI" name="DNI" type="text" class="form-control" value="<?=$datos['DNI']?>">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="celular" class="col-4 col-form-label">Celular</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-phone"></i>
                    </div>
                    </div> 
                    <input id="celular" name="celular" type="text" class="form-control" value="<?=$datos['celular']?>">
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
