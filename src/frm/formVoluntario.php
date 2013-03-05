<fieldset>
    <legend>Voluntario: </legend>
    <div>
        <label  class="description" for="selectVehiculo">Vehículo:</label>
        <select class="element select small" id="selectVehiculo" name="selectVehiculo">
            <option selected="selected" value="Ninguno">Ninguno</option>
            <option value="Automovil">Automovil</option>
            <option value="Moto">Moto</option>
        </select>
    </div>
    
    <div id="divEstudia">
        <label  class="description" for="txtEstudia">¿Estudia actualmente?</label>
            <input type="radio" id="txtEstudia" name="txtEstudia" value="Si"/>Si
            <input type="radio" id="txtEstudia" name="txtEstudia" value="No"/>No     
    </div>

    <div>
        <label  class="description" for="txtQueEstudia">¿Qué estudia actualmente?</label>
        <textarea class="element textarea medium" id="txtQueEstudia" name="txtQueEstudia" rows="2" cols="50"></textarea>
    </div>
    
    <div>
        <label  class="description" for="txtSitioEstudio">Sitio donde estudia:</label>
        <textarea class="element textarea medium" id="txtSitioEstudio" name="txtSitioEstudio" rows="2" cols="50"></textarea>
    </div>
    
    <div>
        <label  class="description" for="txtEstudiosCulminados">Estudios culminados:</label>
        <textarea class="element textarea medium" id="txtEstudiosCulminados" name="txtEstudiosCulminados" rows="3" cols="50"></textarea>
    </div>
    
    <div>
        <label  class="description" for="txtCursos">Cursos que posee:</label>
        <textarea class="element textarea medium" id="txtCursos" name="txtCursos" id="comments" rows="3" cols="50"></textarea>
    </div>
    
    <div>
        <label  class="description largo" for="txtTiempoLibre">De que tiempo dispone (Dias y horas):</label>
        <textarea class="element textarea medium" id="txtTiempoLibre" name="txtTiempoLibre" rows="3" cols="50"></textarea>
    </div>
    
    <div>
        <label  class="description largo" for="txtOrgComunitaria">Si pertenece a una organización comunicatia, indique por favor:</label>
        <textarea class="element textarea medium" id="txtOrgComunitaria" name="txtOrgComunitaria" rows="2" cols="50"></textarea>
    </div>
    
    <div>
        <label  class="description" for="selectTipoVoluntario">Tipo de Voluntario:</label>
        <?php include_once str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__).'\cargarTipoVoluntario.php'); ?>
    </div>   
</fieldset>