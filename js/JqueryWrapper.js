$("#urlRegistro").live("click", function(){
    var url = 'src/controladores/controlRegistro.php' //$(this).attr("href");
    $.post(url, {tipo:"Voluntario"}, function(div){
        $("#divContent").html(div);
    });
    return false;
});

$("#selectEstado").live('click', function(){
    var url = "src/frm/cargarMunicipios.php"
    $.get(url, {estadoId: $(this).val()}, function(div){
        $("#divMunicipio").html(div);
    });
    return false;
});

$("#selectMunicipio").live('click', function(){
    var url = "src/frm/cargarParroquias.php"
    $.get(url, {municipioId: $(this).val()}, function(div){
        $("#divParroquia").html(div);
    });
    return false;
});

$("#selectParroquia").live('click', function(){
    var url = "src/frm/cargarInstituciones.php"
    $.get(url, {parroquiaId: $(this).val()}, function(div){
        $("#divInstitucion").html(div);
    });
    return false;
});

$("#selectTipoVoluntario").live('click', function(){
    var title = "<em>"+$("#selectTipoVoluntario option:selected").attr('title')+"<em>";
    $("#divTitle").html(title);
    //$("#divTitle").css("visibility", "visible");
    //$("#divTitle").show();
    //$("#divTitle").fadeIn('slow');
   return false;
});

$("#txtFechaNacimiento").live("click", function(){
    $("#txtFechaNacimiento").datepicker({
        minDate: '-100Y',
        maxDate: '+0Y',
        changeMonth: true,
        changeYear: true,
        isRTL: false
    });
});