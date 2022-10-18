    <header>
        <h1><?= $titulo ?></h1>   
        <a class="btn btn-primary" href='http://localhost/sistema2022/public/alumnos'>Regresar</a>   
    </header>    
    <div class="jumbotron">
        <form method="POST" action="http://localhost/sistema2022/public/alumnos/guardar">
            <div class="form-group row">
                <label for="nombre" class="col-4 col-form-label">Nombre</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nombre" name="nombre" placeholder="Ingresa tu nombre" type="text" class="form-control">
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
                    <input id="apellidos" name="apellidos" placeholder="Ingresa tus apellidos" type="text" class="form-control">
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
                    <input id="DNI" name="DNI" placeholder="Ingresa tu DNI - 8 caracteres" type="text" class="form-control">
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
                    <input id="celular" name="celular" placeholder="Ingresa tu número de celular - 9 dígitos" type="text" class="form-control">
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