<?=$header;?>
<?php print_r($user);?>
<div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de usuario:</h5>
            <p class="card-text">

                <form action="<?=site_url('/update')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <!--<label for="id">ID:</label>-->
                        <input value="<?=$user['id']?>" id="id" class="form-control" type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <label for="grado">Grado:</label>
                        <input value="<?=$user['grado']?>" id="grado" class="form-control" type="text" name="grado">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input value="<?=$user['nombre']?>" id="nombre" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido_paterno">Apellido Paterno:</label>
                        <input value="<?=$user['apellido_paterno']?>" id="apellido_paterno" class="form-control" type="text" name="apellido_paterno">
                    </div>
                    <div class="form-group">
                        <label for="apellido_materno">Apellido Materno:</label>
                        <input value="<?=$user['apellido_materno']?>" id="apellido_materno" class="form-control" type="text" name="apellido_materno">
                    </div>
                    <div class="form-group">
                        <label for="cumpleanos">Cumpleaños:</label>
                        <input value="<?=$user['cumpleanos']?>" id="cumpleanos" class="form-control" type="date" name="cumpleanos">
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo:</label>
                        <input value="<?=$user['cargo']?>" id="cargo" class="form-control" type="number" name="cargo">
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <input value="<?=$user['tipo']?>" id="tipo" class="form-control" type="number" name="tipo">
                    </div>
                    <div class="form-group">
                        <label for="daua">Daua:</label>
                        <input value="<?=$user['daua']?>" id="daua" class="form-control" type="text" name="daua">
                    </div>
                    <div class="form-group">
                        <label for="tel_cel_1">Telefono Celular 1:</label>
                        <input value="<?=$user['tel_cel_1']?>" id="tel_cel_1" class="form-control" type="text" name="tel_cel_1">
                    </div>
                    <div class="form-group">
                        <label for="tel_cel_1_whats">Telefono Celular Whatsapp 1:</label>
                        <input value="<?=$user['tel_cel_1_whats']?>" id="tel_cel_1_whats" class="form-control" type="text" name="tel_cel_1_whats">
                    </div>
                    <div class="form-group">
                        <label for="tel_cel_2">Telefono Celular 2:</label>
                        <input value="<?=$user['tel_cel_2']?>" id="tel_cel_2" class="form-control" type="text" name="tel_cel_2">
                    </div>
                    <div class="form-group">
                        <label for="tel_cel_2_whats">Telefono Celular 2 Whatsapp:</label>
                        <input value="<?=$user['tel_cel_2_whats']?>" id="tel_cel_2_whats" class="form-control" type="text" name="tel_cel_2_whats">
                    </div>
                    <div class="form-group">
                        <label for="tel_casa">Telefono Casa:</label>
                        <input value="<?=$user['tel_casa']?>" id="tel_casa" class="form-control" type="text" name="tel_casa">
                    </div>
                    <div class="form-group">
                        <label for="tel_oficina">Telefono Oficina:</label>
                        <input value="<?=$user['tel_oficina']?>" id="tel_oficina" class="form-control" type="text" name="tel_oficina">
                    </div>
                    <div class="form-group">
                        <label for="extension">Extension:</label>
                        <input value="<?=$user['extension']?>" id="extension" class="form-control" type="text" name="extension">
                    </div>
                    <div class="form-group">
                        <label for="correo_institucional">Correo Institucional:</label>
                        <input value="<?=$user['correo_institucional']?>" id="correo_institucional" class="form-control" type="text" name="correo_institucional">
                    </div>
                    <div class="form-group">
                        <label for="correo_personal">Correo Personal:</label>
                        <input value="<?=$user['correo_personal']?>" id="correo_personal" class="form-control" type="text" name="correo_personal">
                    </div>
                    <div class="form-group">
                        <label for="comision">Comision:</label>
                        <input value="<?=$user['comision']?>" id="comision" class="form-control" type="number" name="comision">
                    </div>
                    <div class="form-group">
                        <label for="protesta">Protesta:</label>
                        <input value="<?=$user['protesta']?>" id="protesta" class="form-control" type="date" name="protesta">
                    </div>
                    <div class="form-group">
                        <label for="consejero_asociado">Consejero Asociado:</label>
                        <input value="<?=$user['consejero_asociado']?>" id="consejero_asociado" class="form-control" type="number" name="consejero_asociado">
                    </div>
                    <div class="form-group">
                        <label for="activo">Activo:</label>
                        <input value="<?=$user['activo']?>" id="activo" class="form-control" type="number" name="activo">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input value="<?=$user['foto']?>" id="foto" class="form-control" type="text" name="foto">
                    </div>
                    <button class="btn btn-success" type="submit">Editar</button>
                </form>
            </p>
        </div>
    </div>
<?=$footer;?>