<fieldset>
    <legend>Información Básica: </legend>
    <div>
        <label  class="description" for="txtCedula">Cédula de Identidad: </label>
        <input type="text" class="element text small" id="txtCedula" name="txtCedula" />
    </div>

    <div>
        <label  class="description" for="txtNombres">Nombres: </label>
        <input type="text" class="element text small" id="txtNombres" name="txtNombres" />
    </div>

    <div>
        <label  class="description" for="txtApellidos">Apellidos: </label>
        <input type="text" class="element text small" id="txtApellidos" name="txtApellidos" />
    </div>

    <div>
        <label  class="description" for="selectNacionalidad">Nacionalidad: </label>
        <select class="element select small" id="selectNacionalidad" name="selectNacionalidad">
          <option selected="selected" value="Venezolano">Venezolano</option>
          <option value="Extranjero">Extranjero</option>
        </select>
    </div>

    <div><label  class="description" for="txtSexo">Sexo: </label>
        <input type="radio" id="txtSexo" name="txtSexo" value="Masculino"/>Masculino
        <input type="radio" id="txtSexo" name="txtSexo" value="Femenino"/>Femenino
    </div>

    <div>
        <label  class="description" for="selectEstadoCivil">Estado Civil: </label>
        <select class="element select small" id="selectEstadoCivil" name="selectEstadoCivil">
          <option selected="selected" value="Soltero">Soltero</option>
          <option value="Casado">Casado</option>
          <option value="Divorciado">Divorciado</option>
          <option value="Viudo">Viudo</option>
          <option value="Concubino">Concubino</option>
        </select>
    </div>

    <div>
        <label  class="description" for="txtFechaNacimiento">Fecha de Nacimiento: </label>
        <input type="text" class="element text small" id="txtFechaNacimiento" name="txtFechaNacimiento" autocomplete="off" readonly />
    </div>

    <div>
        <label  class="description" for="txtEmail">Correo Eléctronico: </label>
        <input type="text" class="element text small" id="txtEmail" name="txtEmail" />
    </div>

    <div>
        <label  class="description" for="txtMovil">Móvil: </label>
        <input type="text" class="element text small" id="txtMovil" name="txtMovil" />
    </div>

    <div>
        <label  class="description" for="selectTipoPersonal">Tipo de Personal:</label>
        <?php include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\cargarTipoPersonal.php'); ?>
    </div>

    <div>
        <label  class="description" for="selectNivelAcademico">Nivel Académico:</label>
        <?php include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\cargarNivelesAcademicos.php'); ?>
    </div>

    <div>
        <label  class="description" for="selectCargo">Cargo:</label>
        <?php include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\cargarCargos.php'); ?>
    </div>

    <div>
        <label  class="description" for="selectCondicionCargo">Condición del Cargo:</label>
        <?php include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\cargarCondicionesCargo.php'); ?>
    </div>
</fieldset>