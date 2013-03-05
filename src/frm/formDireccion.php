<fieldset>
    <legend>Direccion: </legend>
    <div>
        <label  class="description" for="txtUbicacion">Detalles de la dirección: </label>
        <textarea class="element textarea medium" id="txtUbicacion" name="txtUbicacion" rows="5" cols="50" />
    </div>

    <div>
        <label  class="description" for="txtTelfUbicacion">Teléfono Ubicación:</label>
        <input type="text" class="element text small" id="txtTelfUbicacion" name="txtTelfUbicacion" />
    </div>

    <div>
        <label  class="description" for="selectEstado">Estado:</label>
        <?php include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\cargarEstados.php'); ?>
    </div>    

    <div id="divMunicipio">
        <label  class="description" for="selectMunicipio">Municipio:</label>
        <select class="element select small" id="selectMunicipio" name="selectMunicipio" disabled>
            <option selected="selected" value="">Seleccionar</option>
        </select>
    </div>
    

    <div id="divParroquia">
        <label  class="description" for="selectParroquia">Parroquia:</label>
        <select class="element select small" id="selectParroquia" name="selectParroquia" disabled>
            <option selected="selected" value="">Seleccionar</option>
        </select>
    </div>
    
    <div id="divInstitucion">
        <label  class="description" for="selectInstitucion">Institución donde trabaja:</label>
        <select class="element select small" id="selectInstitucion" name="selectInstitucion" disabled>
            <option selected="selected" value="">Seleccionar</option>
        </select>
    </div>
</fieldset>
