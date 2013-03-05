<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
    <!--<link rel="stylesheet" type="text/css" href="css/text.css" media="all" />-->
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/ie.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/form.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jqueryUI/jquery-ui-1.7.3.custom.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/estiloPopUp.css" media="all" />
    <style type="text/css">
        pre {
            font-family: arial, Helvetica, sans-serif,  "courier new",  'Comic Sans MS', cursive;
            width: 15%;
        }

        p{
		/*border: 1px solid #d0d0d0;*/
		padding: 5px;
		/*text-align: center;*/
	}

        ul {
            padding-left: 10px;
        }
        li {
            padding-left: 20px;
            list-style: circle;
            list-style-position: inside;
            background-repeat: no-repeat;
            background-position: 0 0;
        }

        a:link{
            text-decoration: none;
        }

        a:visited{
            text-decoration: none;
            color: blue;
        }

        a:hover{
            color: red;
            font-style: italic;
        }

        a:active{
            text-decoration: none;
        }

        #divContainer {
            border: 2px double black;
        }

        #divContent {
            border: 2px double black;
            padding: 8px 20px 15px 15px;
            -moz-border-radius:12px;
            -webkit-border-radius: 12px;
        }

        #divNoticias {
            border: 2px double black;
            padding: 30px 20px 15px 15px;
            -moz-border-radius:12px;
            -webkit-border-radius: 12px;
        }

        #divMenu {
            font-family: arial, Helvetica, sans-serif,  "courier new",  'Comic Sans MS', cursive;
        }

        .enlaceboton {
            font-size: 22px;
            font-weight: bold;
            padding: 4px;
            background-color:#CC0000;
            color: #FFFFFF;
            text-decoration: none;
            -moz-border-radius:12px;
            -webkit-border-radius: 12px;
        }
        .enlaceboton:link,
        .enlaceboton:visited {
           border-top: 1px solid #cccccc;
           border-bottom: 2px solid #666666;
           border-left: 1px solid #cccccc;
           border-right: 2px solid #666666;
        }
        .enlaceboton:hover {
           border-bottom: 1px solid #cccccc;
           border-top: 2px solid #666666;
           border-right: 1px solid #cccccc;
           border-left: 2px solid #666666;
        }

        #urlRegistro { color: #FFFFFF; }

    </style>


    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="js/datePicker/jquery-ui-1.7.3.custom.min.js"></script>
    <script type="text/javascript" src="js/JqueryWrapper.js"></script>
    <script type="text/javascript" src="js/popUp.js"></script>
    <script type="text/javascript" src="js/enviarForm.js"></script>
    <script type="text/javascript">
        $
    </script>
    <title>Inicio</title>
</head>
<body>
<div class="container_16" id="divContainer">

    <div class="grid_16" id="divHeader">
        <div class="grid_6 alpha" id="divImgMinisterio"><img src="img/header.png" alt="" /></div>
        <div class="grid_2 prefix_6 omega" id="divImgMoralyLuces"><img src="img/logo_moral.png" alt="" /></div>
        <div class="clear"></div>
    </div>
    <div class="grid_12"><br /></div>
    <div class="clear"></div>

    <div class="grid_3 alpha" id="divMenu">
        <h3><p>Menú</p></h3>
        <div class="enlaceboton">
            <a id="urlRegistro" href="#"><h1><p>Registrar Voluntario</p></h1></a>
        </div>
        <br />
        <h1>Aquí podrá descargar los formatos especiales de Voluntariado</h1>
        <hr />
        <ul>
            <li><a href="voluntario.doc"><b>Planilla de Voluntario</b></a></li><br />
            <li><a href="Presentacion.ppt"><b>Presentación sobre Voluntariado de Moral y Luces</b></a></li><br />
            <li><a href="Diagnostico.doc"><b>Diagnóstico: <em>Daños en la infraestructura de la Institución.</em> </b></a></li>
        </ul>
        <br />
        <h1>OBE:</h1>
        <hr />
        <ul>
            <li><a href="pelota_goma.doc"><b>Torneo pelota de goma: Planila e instructivo.</b></a></li><br />
        </ul>
    </div>

    <div class="grid_8" id="divContent">
        <h1>Noticia</h1>
        <hr />
        Por favor, primero que todo lea con atención la información presentada en las diapositivas de la
Presentación sobre Voluntariado. Luego llenar con sumo cuidado ambos documentos (Planilla
y Diagnóstico).
Deberá seleccionar un Docente y un Personal de Apoyo y llenar una planilla para cada uno.

Enviar esta información más tardar el viernes 17 a las 12:00 del Medio dia, al correo:
<em><b>ssmoralylucessancritobal@gmail.com</b></em>.

<br />
<hr />

<h3>P.D.: Recuerde que el Diagnóstico debe ser acompañado por imágenes.</h3>
<h3>P.D.: Identificar con el nombre de la institución el asunto del correo.</h3>
<h3>P.D.: Debe tener el material en físico, que luego será recibido o buscado por el coordinador.</h3>


    </div>

    <div class="grid_4 omega" id="divMenuDerecho">
        <div class="grid_4 alpha" id="divNoticias">
            <h1>Últimos acontecimientos</h1>
            <hr />
        </div>
        <div class="clear"></div>
        <div class="clear"></div>

        <div class="grid_4"><br /></div>
        <div class="clear"></div>

        <div class="grid_4 alpha" id="divNoticias2">
            <h1>Últimos acontecimientos</h1>
            <hr />
        </div>
    </div>

    <div id="divTrans"></div>
    <div id="divEstado"></div>
    <div class="clear"></div>
    <div class="grid_12"><br /></div>
    <div class="clear"></div>
    <div class="grid_12" id="divFooter">
        <div class="grid_6" id="divImgMinisterio"><img src="img/footer.png" alt="" /></div>
    </div>
</div>
</body>
</html>