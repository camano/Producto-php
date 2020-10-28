
<form action="" id="formEditarUsuario" method="POST" class="" data-form="">
    <input type="hidden" name="usuarioId" id="usuarioId">
    <input type="hidden" name="metodo" value="editarusuario">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Usuario</label>

            <div class="formulario__grupo-input">
                <input type="text" name="usuarioNombre" id="usuarioNombre" class="form-control" >
                
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Telefono</label>
            <input type="text" name="usuarioTelefono" id="usuarioTelefono" class="form-control" id="inputPassword4">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Correo</label>
            <input type="text" name="usuarioCorreo" class="form-control" id="usuarioCorreo" id="inputEmail4">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Rol</label>
            <select name="rolId" class="form-control" id="usuarioRol">
                <option value="1">Administrador</option>
                <option value="2">Usuario</option>
            </select>
            
        </div>
       


    </div>
    
    </div>
</form>
<input type="submit"  onclick="EditarUsuario();" class="btn btn-primary">



