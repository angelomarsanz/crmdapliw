<div class="container">
    <?php if (isset($matrizBienes) && isset($datosBienes)): ?>
        <!-- div con frefijo 00 -->
        <div class="container noVer" id="00testFunction">
        </div>

        <!-- div con prefijo 10 -->
        <div class="container" id="10menuCrm">
            <nav class="fixed-bottom navbar-dark" style="text-align: right; background-color:#085b9e;">
                <!-- <button title="Inicio CRM" class="btn btn-link" id="10inicioCrm" >
                        <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                        alt="Inicio CRM" class="icon">
                </button> -->

                <a href=<?= mvc_public_url(array("controller" => "posts")) ?> class="btn btn-link" id="10inicioCrm" title="Inicio CRM">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                    alt="Inicio CRM" class="icon">
                </a>

                <button title="Buscar" class="btn btn-link" id="10botonBuscar">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
                    alt="Buscar" class="icon">
                </button>
          
                <a href=<?= mvc_public_url(array("controller" => "submit-property")) ?> class="btn btn-link" id="10publicarPropiedad" title="Publicar propiedad">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?>
                    alt="Publicar propiedad" class="icon">
                </a>
                
                <button title="Otras opciones" class="btn btn-link" id="10otrasOpciones">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/grid-two-up.svg" ?>
                    alt="Otras opciones" class="icon">
                </button>

                <!-- <button title="Inicio CRM" class="btn btn-link noVer" id="10inicioCrmBusqueda" >
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                    alt="Inicio CRM" class="icon">
                </button> -->

                <button title="Cancelar" class="btn btn-link noVer" id="10cancelarBusqueda">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="cancelar búsqueda" class="icon">
                </button>
              
                <button title="Ejecutar búsqueda" class="btn btn-link noVer" id="10ejecutarBusqueda">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
                    alt="Ejecutar búsqueda" class="icon">
                </button>

                <!-- <button title="Inicio CRM" class="btn btn-link noVer" id="10inicioCrmAgenda" >
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                    alt="Inicio CRM" class="icon">
                </button> -->

                <button title="Agregar actividad" class="btn btn-link noVer" id="10agregarActividad">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                    alt="Agregar actividad" class="icon">
                </button>          

                <button title="Guardar actividad" class="btn btn-link noVer" id="10guardarActividad">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> 
                    alt="Agregar actividad" class="icon">
                </button>

                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/ban.svg" ?>
                    class="icon">            
            </nav>
        </div>

        <!-- div con prefijo 20 -->
        <div class="container" id="20tituloCrm">
            <h1 class="letraAzul">CRM</h1>
        </div>
        
        <!-- div con prefijo 30 -->
        <div class="container" id="30mensajesUsuario">
        </div>
        
        <!-- div con prefijo 40 -->
        <div class="container noVer" id="40busqueda">
            <div class="row">
                <div class="col-md-12">
                    <form id="formularioBusqueda">
                        <div class="row">
                            <div class="col-md-3">
                                <p class="letraAzul">Agenda</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="busquedaActividadesAgenda">Actividades planificadas</label>
                                    </div>
                                    <select class="custom-select" id="busquedadActividadesAgenda">
                                        <option selected></option>
                                        <option value="Actividades atrasadas">Actividades atrasadas</option>
                                        <option value="Actividades del mes">Actividades del mes</option>
                                        <option value="Actividades para hoy">Actividades para hoy</option>
                                        <option value="Actividades para mañana">Actividades para mañana</option>
                                        <option value="Sin actividad planificada">Sin actividad planificada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="letraAzul">Personas</p>
                                <div class="form-group">
                                    <label for="busquedaCaptador">Captador</label>
                                    <input type="text" class="form-control" id="busquedaCaptador">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaPromotor">Promotor</label>
                                    <input type="text" class="form-control" id="busquedaPromotor">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaPropietario">Propietario</label>
                                    <input type="text" class="form-control" id="busquedaPropietario">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaCompradorPotencial">Comprador potencial</label>
                                    <input type="text" class="form-control" id="busquedaCompradorPotencial">
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                <p class="letraAzul">Prestaciones</p>
                                <div class="form-group">
                                    <label for="busquedaHabitaciones">Habitaciones</label>
                                    <input type="number" class="form-control" id="busquedaHabitaciones">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaBanos">Baños</label>
                                    <input type="Number" class="form-control" id="busquedaBanos">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaGarajes">Garajes</label>
                                    <input type="Number" class="form-control" id="busquedaGarajes">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaArea">Área M2 (igual o mayor a)</label>
                                    <input type="Number" class="form-control" id="busquedaArea">
                                </div>
                            </div> -->
                            <!-- <div class="col-md-3">
                                <p class="letraAzul">Otros</p>
                                <div class="form-group">
                                    <label for="busquedaCodigo">Código</label>
                                    <input type="text" class="form-control" id="busquedaCodigo">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaNombre">Nombre</label>
                                    <input type="text" class="form-control" id="busquedaNombre">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaUbicacion">Ubicación</label>
                                    <input type="text" class="form-control" id="busquedaUbicacion">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaPrecioMaximo">Precio máximo</label>
                                    <input type="number" class="form-control" id="busquedaPrecioMaximo">
                                </div>
                                <div class="form-group">
                                    <label for="busquedaPrecioMinimo">Precio mínimo</label>
                                    <input type="number" class="form-control" id="busquedaPrecioMinimo">
                                </div>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
        <!-- div con prefijo 50 -->
        <!-- Reservado para crear index de la agenda sin imágenes -->

        <!-- div con prefijo 60 -->
        <div class="container" id="60bienes">
            <h2 class="letraAzul">Actividades planificadas de la agenda</h2>
            <br />
            <div class="row"> 
                <?php foreach ($bienes as $bien): ?> 
                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="card 60detalleBienes">
                        <a href=<?= $bien->guid ?> title="Ver propiedad">
                            <img src=<?= $datosBienes[$bien->ID]["_thumbnail_id"][1]['valor'] ?> class="card-img-top img-fluid" alt="Foto de la propiedad">
                        </a>
                        <div class="card-block">
                            <h4 class="card-title" id=<?= "nombreDelBien" . $bien->ID ?>><?= $bien->__name ?></h4>
                            <?php 
                                $ultimaActividadPlanificada = "";
                                $fechaUltimaActividad = "";
                                if (isset($datosBienes[$bien->ID]["CRMdapliw_actividad_agenda"][0])):                                    
                                    foreach ($datosBienes[$bien->ID]["CRMdapliw_actividad_agenda"] as $datosAgenda):
                                        if (isset($datosAgenda["valor"])):
                                            if($datosAgenda["valor"]->estatus == "false"):
                                                $ultimaActividadPlanificada = $datosAgenda['valor']->nombreActividad;
                                                $fechaUltimaActividad = 
                                                    $datosAgenda["valor"]->diaPlanificado . '/' . 
                                                    $datosAgenda["valor"]->mesPlanificado . '/' .
                                                    $datosAgenda["valor"]->anoPlanificado;
                                                $ultimaFechaInvertida = 
                                                    $datosAgenda["valor"]->anoPlanificado .
                                                    $datosAgenda["valor"]->mesPlanificado .
                                                    $datosAgenda["valor"]->diaPlanificado;
                                            endif;
                                        endif;                                    
                                    endforeach;
                                endif;
                                if ($ultimaActividadPlanificada != ""): 
                                    setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
                                    date_default_timezone_set('America/Caracas');
                
                                    $fechaHoy = new DateTime(); 
                                    $fechaFormato = $fechaHoy->format('d-m-Y');            
                                    $fechaVector = explode('-', $fechaFormato);
                
                                    $fechaHoyInvertida = 
                                        $fechaVector[2] .
                                        $fechaVector[1] .
                                        $fechaVector[0];
                            ?>                             
                                    <div class="card bg-light text-dark">
                                        <div class="card-body">
                                            <?php if ($ultimaFechaInvertida < $fechaHoyInvertida): ?> 
                                                <p class="letraAmarilla">
                                            <?php else: ?>
                                                <p class="letraVerde">
                                            <?php endif; ?>
                                                <?= "<b>Actividad planificada: </b>" . $ultimaActividadPlanificada . " 
                                                <b>Fecha: </b>" . $fechaUltimaActividad . "." ?>
                                            </p>
                                            <p>
                                                <button class="btn btn-link fondoAzul 60ultimaActividad" id=<?= "60ultimaActividad" . $bien->ID ?>>
                                                    Ver más...
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="card bg-light text-dark">
                                        <div class="card-body">
                                            <p class="letraRoja">
                                                Esta propiedad no tiene actividades planificadas en la agenda.
                                            </p>
                                            <p>
                                                <button class="btn btn-link fondoAzul 60ultimaActividad" id=<?= "60ultimaActividad" . $bien->ID ?>>
                                                    Ver más...
                                                </button>
                                            </p>
                                        </div>
                                    </div>        
                                <?php endif; ?>
                            <div class="form-group">
                                <label for="buscarPromotor">Promotor responsable: </label>
                                <input type="text" id=<?= "buscarPromotor" . $bien->ID ?> class="form-control buscarPromotor" 
                                    value="<?= $matrizBienes[$bien->ID]['nombre_autor'] ?>">
                            </div>
                            <div id=<?= "60mensajeUsuario" . $bien->ID ?>>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p>                                                            
                                <a href=<?= mvc_public_url(array("controller" => "submit-property")) . "?edit_property=" . $bien->ID ?> 
                                    class="btn btn-light" id="60editarPropiedad" title="Editar propiedad">
                                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 
                                    "crmdapliw/app/public/images/pencil.svg" ?> alt="Editar propiedad" class="icon">
                                </a>

                                <button class="btn btn-light 60personas" id=<?= "60personas" . $bien->ID ?> title="Personas">
                                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 
                                    "crmdapliw/app/public/images/people.svg" ?> alt="Personas" class="icon">
                                </button>

                                <button class="btn btn-light 60documentos" id=<?= "60documentos" . $bien->ID ?> title="Documentos">
                                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 
                                    "crmdapliw/app/public/images/document.svg" ?> alt="Documentos" class="icon">
                                </button>
                            </p>
                        </div>  
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
    <?php else: ?>
        <!-- div con prefijo 70 -->
        <div class="container">
            <div class="row">
                <br />
                <br />
                <p><b>Estimado usuario para acceder al CRM debes </b><?php echo $this->html->link('iniciar sesión', array('controller' => 'ingresar-al-sistema'), 
                    array('style' => 'color: blue;')); ?></p>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>
        </div> 
        <br />
        <br />                           
        <br />
        <br />                           
    <?php endif; ?>
    
    <!-- div con prefijo 80 -->
    <div class="container noVer" id="80agenda">
    </div> 

    <!-- div con prefijo 90 -->

    <div class="container noVer" id="90agregarActividad">
        <div class="row">
            <div class='col-md-6'> 
                <h2 class="letraAzul" id="90tituloAgregarActividad"></h2>
                <br />
                <br /> 
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class='input-group mb-3'>
                                <div class='input-group-prepend'>
                                    <label class='input-group-text' for='90actividadAgenda'>Actividad</label> 
                                </div>
                                <select class='custom-select' id='90actividadAgenda'> 
                                    <option selected></option> 
                                    <option value="Agregar datos del propietario">Agregar datos del propietario</option> 
                                    <option value="Coordinar elaboración de cartel de venta">Coordinar elaboración de cartel de venta</option>
                                    <option value="Coordinar elaboración de pendon">Coordinar elaboración de pendon</option>
                                    <option value="Coordinar elaboración de valla">Coordinar elaboración de valla</option>
                                    <option value="Coordinar labores de limpieza del inmueble">Coordinar labores de limpieza del inmueble</option>
                                    <option value="Coordinar pago de condominio">Coordinar pago de condominio</option>
                                    <option value="Coordinar pago de servicios público">Coordinar pago de servicios públicos</option>
                                    <option value="Coordinar publicidad en la prensa">Coordinar publicidad en la prensa</option>
                                    <option value="Coordinar publicidad en la radio">Coordinar publicidad en la radio</option>each
                                    <option value="Coordinar publicidad en la tv">Coordinar publicidad en la tv</option>
                                    <option value="Coordinar reparaciones del inmueble">Coordinar reparaciones del inmueble</option>
                                    <option value="Desinstalar cartel de venta">Desinstalar cartel de venta</option>
                                    <option value="El propietario desistió de la venta">El propietario desistió de la venta</option>
                                    <option value="El propietario vendió el inmueble">El propietario vendió el inmueble</option>
                                    <option value="Firma compromiso de negocio con el propietario">Firma compromiso de negocio con el propietario</option> 
                                    <option value="Firma documento de venta">Firma documento de venta</option> 
                                    <option value="Firma opción compra-venta">Firma opción compra-venta</option> 
                                    <option value="Instalación del cartel de venta">Instalación del cartel de venta</option>
                                    <option value="Llamar a cliente potencial">Llamar a cliente potencial</option>
                                    <option value="Llamar a propietario">Llamar a cliente potencial</option>
                                    <option value="Mostrar el inmueble a un cliente">Mostrar el inmueble a un cliente</option>
                                    <option value="Ofrecer inmueble a clientes potenciales">Ofrecer inmueble a clientes potenciales</option>
                                    <option value="Preparación del documento de venta">Preparación del documento de venta</option>
                                    <option value="Preparación de la opción compra-venta">Preparación de la opción compra-venta</option>
                                    <option value="Publicar en las redes sociales">Publicar en las redes sociales</option>
                                    <option value="Reunión con el propietario">Reunión con el propietario</option>
                                    <option value="Se firmó la opción compra-venta">Se firmó la opción compra-venta</option>
                                    <option value="Solicitar documentos al propietario">Solicitar documentos al propietario</option>                   
                                    <option value="Subir documentos escaneados al servidor">Subir documentos escaneados al servidor</option>                   
                                    <option value="Visitar a cliente potencial">Visitar a cliente potencial</option>
                                </select> 
                            </div>
                        </div>
                    </div> 
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> 
                                <label for="90informacionAdicional">Información adicional</label> 
                                <input type="text" class="form-control" id="90informacionAdicional"> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="90fechaPlanificada">Fecha</label>  
                                <input type="text" class="form-control" id="90fechaPlanificada"> 
                            </div>
                        </div>
                    </div>

                </form>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            </div> 
        </div>
        <br />
        <br />
        <br />
        <br />
    </div>
</div>
<br />
<br />
<br />
<br />
<br />
<script>
// Variables globales
var matrizBienes = <?= json_encode($matrizBienes) ?>;
var datosBienes = <?= json_encode($datosBienes) ?>;
var idPostActual = 0;
var PosicionAnterior = "";

// Funciones de Javascript
// Sufijo 00 para variables
function testFunction()
{

}
// Sufijo 10 para variables
function agenda(idPost10)
{
    var agenda10 =
        "<h2 class='letraAzul' id='cabecera10'>Actividades planificadas para " + matrizBienes[idPost10].post_title + "</h2>" +
        "<h3 class='letraAzul'>Promotor responsable: " + matrizBienes[idPost10].nombre_autor + "</h3>" +
        "<br />" +
        "<br />" +
        "<div class='row'>";

    if (datosBienes[idPost10]._thumbnail_id)
    {
        agenda10 +=
            "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                "<div class='card'>" +
                "<img src=" + datosBienes[idPost10]["_thumbnail_id"][1].valor + " alt='Foto de la propiedad' class='card-img-top img-fluid'>" +
                "</div>" +
            "</div>" +
            "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
    }
    else
    {
        agenda10 += "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
    }
    arregloActividades = datosBienes[idPost10]["CRMdapliw_actividad_agenda"];

    console.log(arregloActividades);

    arregloActividades.sort(function(a, b){return b-a});

    console.log(arregloActividades);

    $j.each(arregloActividades, function(clave, datos)  
    {
        if (datos['valor'])
        {
            if (datos['valor'].estatus == "false")
            {
                posicionId = clave + 1;

                idActividad = arregloActividades[posicionId].id;

                console.log("idActividad: " + idActividad);

                fechaPlanificada10 = 
                    datos['valor'].diaPlanificado +
                    "/" +
                    datos['valor'].mesPlanificado + 
                    "/" +
                    datos['valor'].anoPlanificado;

                agenda10 += 
                    "<div class='card' id='actividad10-" + clave + "-" + idActividad + "-" + idPost10 + "'>" +
                        "<div class='card-block'>" + 
                            "<h4 class='card-title'>" + datos['valor'].nombreActividad + "</h4>" +
                            "<div class='card bg-light text-dark'>" +
                                "<div class='card-body'>" +

                                    "<div class='row'>" +
                                        "<div class='col-md-12'>" +
                                            "<div class='form-group'>" + 
                                                "<label for='informacionAdicional10'>Notas</label>" +  
                                                "<input type='text' class='form-control informacionAdicional10' id='informacionAdicional10-" + clave + "-" +
                                                    idActividad + "-" + idPost10 + "' value='" + datos['valor'].informacionAdicional + "'>" + 
                                            "</div>" +
                                        "</div>" + 
                                    "</div>" +

                                    "<div class='row'>" +
                                        "<div class='col-md-6'>" +
                                            "<div class='form-group'>" + 
                                                "<label for='fechaPlanificada10'>Fecha</label>" +  
                                                "<input type='text' class='form-control fechaPlanificada10' id='fechaPlanificada10-" + clave + "-" + idActividad + 
                                                    "-" + idPost10 + "' value=" + fechaPlanificada10 + ">" + 
                                            "</div>" +
                                        "</div>" +
                                        
                                        "<div class='col-md-3'>" +
                                            "<div class='form-check'>" +
                                                "<input type='checkbox' class='form-check-input cerrarActividad10' id='cerrarActividad10-" + clave + "-" + 
                                                idActividad + "-" + idPost10 + "'>" +
                                                "<label class='form-check-label' for='cerrarActividad10'>&nbsp;&nbsp;Cerrar</label>" +
                                            "</div>" +
                                        "</div>"+

                                        "<div class='col-md-3'>" +
                                            "<button class='guardarCambios10 btn btn-link' title='Guardar cambios' id='guardarCambios10-" + clave + "-" + 
                                                idActividad + "-" + idPost10 + "'>" + 
                                                "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/pencil.svg' ?> alt='Guardar cambios' class='icon'></button>" +
                                        "</div>"+

                                    "</div>" +

                                "</div>" +
                            "</div>" +
                        "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                        "<div class='col-md-12'>" +
                            "<div id='mensajesUsuario10-" + clave + "-" + idActividad + "-" + idPost10 + "'>" +
                            "</div>" +
                        "</div>" +
                    "</div>" + 
                    "<br />" +
                    "<br />";
            }
        }
    }); 

    agenda10 +=
            "</div>" +
        "</div>" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />" +
        "<br />";

    $j("#80agenda").html(agenda10).contents().find(".fechaPlanificada10").datepicker(
        {
            dateFormat: "dd/mm/yy", 
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ], 
            changeMonth: true,
            changeYear: true
        });
}

function actualizarPromotor(idBien, idPromotorAnterior, idNuevoPromotor, nombreNuevoPromotor)
{
    var mensajeUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos</strong>" +
        "</div>";

    var idMensaje = "#60mensajeUsuario" + idBien; 

  	$j(idMensaje).html(mensajeUsuario);

    var jsonActualizarPromotor = 
    {
        "idBien" : idBien,
        "idPromotorAnterior" : idPromotorAnterior,
        "idNuevoPromotor" : idNuevoPromotor
    }

    $j.post("<?= mvc_public_url(array('controller' => 'posts', 'action' => 'actualizar_promotor')) ?>", 
        jsonActualizarPromotor, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {
            matrizBienes[idBien].post_author = idNuevoPromotor;
            matrizBienes[idBien].nombre_autor = nombreNuevoPromotor;

            mensajeUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close' id='mensajeUsuario00'>&times;</a>" +
                    "<strong>¡ Los datos se guardaron exitosamente ! " + response.mensaje + "</strong>" +
                "</div>";
            $j(idMensaje).html(mensajeUsuario);
        } 
        else 
        {
            mensajeUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>¡ Los datos no se pudieron guardar ! " + response.mensaje + "</strong>" +
            "</div>"; 

        	$j(idMensaje).html(mensajeUsuario);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        mensajeUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>¡ Ocurrió un error en el servidor. Los datos no se pudieron guardar !</strong>" +
            "</div>"; 

    	$j(idMensaje).html(mensajeUsuario);
    });
}

// Funciones Jquery
$j(document).ready(function()
{
    $j("#90fechaPlanificada").datepicker(
        {
            dateFormat: "dd/mm/yy", 
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ], 
            changeMonth: true,
            changeYear: true
        });

    $j("#10botonBuscar").click(function()
    {
        $j("#60bienes").addClass('noVer');
        $j("#10botonBuscar").addClass('noVer');
        $j("#10publicarPropiedad").addClass('noVer');
        $j("#10otrasOpciones").addClass('noVer');
        $j("#40busqueda").removeClass('noVer');
        $j("#10cancelarBusqueda").removeClass('noVer');
        $j("#10ejecutarBusqueda").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#10cancelarBusqueda').click(function()
    {
        $j("#40busqueda").addClass('noVer');
        $j("#10cancelarBusqueda").addClass('noVer');
        $j("#10ejecutarBusqueda").addClass('noVer');
        $j("#60bienes").removeClass('noVer');
        $j("#10botonBuscar").removeClass('noVer');
        $j("#10publicarPropiedad").removeClass('noVer');
        $j("#10otrasOpciones").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('.60ultimaActividad').click(function()
    {
        
        posicionAnterior = $j(this).attr('id');
        idPostActual = $j(this).attr('id').substring(17);
        $j('#60bienes').addClass('noVer');
        $j("#10botonBuscar").addClass('noVer');
        $j("#10publicarPropiedad").addClass('noVer');
        $j("#10otrasOpciones").addClass('noVer');
        agenda(idPostActual);
        $j("#80agenda").removeClass("noVer");
        $j("#10agregarActividad").removeClass("noVer");
        window.scrollTo(0, 0);
        
    });

    $j('#10inicioCrmAgenda').click(function()
    {
        $j("#80agenda").addClass("noVer");
        $j("#10inicioCrmAgenda").addClass('noVer');
        $j("#30mensajesUsuario").html("");
        $j('#60bienes').removeClass('noVer');
        $j("#10inicioCrm").removeClass('noVer');
        $j("#10botonBuscar").removeClass('noVer');
        $j("#10publicarPropiedad").removeClass('noVer');
        $j("#10otrasOpciones").removeClass('noVer');
        window.scrollTo(0, 0);
    });
   
    $j("#80agenda").on("click", ".guardarCambios10", function()
    {       
        var mensajeUsuario = 
            "<div class='alert alert-info alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>Por favor espere mientras se guardan los datos</strong>" +
            "</div>";
        var idActividad = $j(this).attr('id').substring(17);        
        var arregloId = idActividad.split("-");
        var idMensaje = "#mensajesUsuario10-" + $j(this).attr('id').substring(17);
        var tarjeta = "#actividad10-" + $j(this).attr('id').substring(17);
        var tarjetaInput = "#actividad10-" + $j(this).attr('id').substring(17) + " input";
        var idActividadObj = arregloId[1];
        var informacionAdicionalObj = "";
        var diaPlanificadoObj = "";
        var mesPlanificadoObj = "";
        var anoPlanificadoObj = "";
        var estatusObj = "";

    	$j(idMensaje).html(mensajeUsuario);

        $j(tarjetaInput).each(function (index) 
        {
            if ($j(this).attr('id').substring(0, 22) == "informacionAdicional10")
            {
                $j(this).val($j.trim($j(this).val().toUpperCase()));
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].informacionAdicional = $j(this).val();
                informacionAdicionalObj = $j(this).val();
            }
            if ($j(this).attr('id').substring(0, 18) == "fechaPlanificada10")
            {
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].diaPlanificado = $j(this).val().substring(0, 2);
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].mesPlanificado = $j(this).val().substring(3, 5);
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].anoPlanificado = $j(this).val().substring(6, 10);                                    

                diaPlanificadoObj = $j(this).val().substring(0, 2);
                mesPlanificadoObj = $j(this).val().substring(3, 5);
                anoPlanificadoObj = $j(this).val().substring(6, 10);

            }
            if ($j(this).attr('id').substring(0, 17) == "cerrarActividad10")
            {
                if ($j(this).prop("checked") == true)
                {
                    datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].estatus = "true";
                    estatusObj = "true";
                }
                else
                {
                    datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].estatus = "false";
                    estatusObj = "false";
                }
            }
        });
        var jsonActividad = 
        {
            "idActividad" : idActividadObj,
            "informacionAdicional" : informacionAdicionalObj,
            "diaPlanificado" : diaPlanificadoObj,
            "mesPlanificado" : mesPlanificadoObj,
            "anoPlanificado" : anoPlanificadoObj,
            "estatus" : estatusObj
        }

        $j.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'editar_actividad')) ?>", 
            jsonActividad, null, "json")          
        .done(function(response) 
        {
            if (response.satisfactorio) 
            {
                mensajeUsuario =
                    "<div class='alert alert-success alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close' id='mensajeUsuario00'>&times;</a>" +
                        "<strong>¡ Los datos se guardaron exitosamente ! </strong>" +
                    "</div>";
                if (estatusObj == "true")
                {
                    $j(tarjeta).addClass("noVer");
                }
                $j(idMensaje).html(mensajeUsuario);
            } 
            else 
            {
                mensajeUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>¡ Los datos no se pudieron guardar !</strong>" +
                "</div>"; 

            	$j(idMensaje).html(mensajeUsuario);
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown) 
        {
            mensajeUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>¡ Ocurrió un error en el servidor. Los datos no se pudieron guardar !</strong>" +
                "</div>"; 

        	$j(idMensaje).html(mensajeUsuario);
        });

    });

    $j('#10agregarActividad').click(function()
    {
        $j('#80agenda').addClass('noVer');
        $j('#10agregarActividad').addClass('noVer');
        $j('#10guardarActividad').removeClass('noVer');
        $j('#90agregarActividad').removeClass('noVer');
        $j('#90tituloAgregarActividad').html("Planificar actividades para " + matrizBienes[idPostActual]['post_title']); 
        $j('#90actividadAgenda').val("");
        $j('#90informacionAdicional').val("");
        $j('#90fechaPlanificada').val("");
        window.scrollTo(0, 0);
    });

    $j('#10guardarActividad').click(function()
    {
        var mensajeUsuario = 
            "<div class='alert alert-info alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>Por favor espere mientras se guardan los datos</strong>" +
            "</div>";
        $j("#30mensajesUsuario").html(mensajeUsuario);

        $j("#90informacionAdicional").val($j.trim($j("#90informacionAdicional").val().toUpperCase()));

        jsonActividad = 
            {"idPost" : idPostActual,
            'actividad' :  
                {
                    "nombreActividad" : $j("#90actividadAgenda").val(),
                    "informacionAdicional" : $j("#90informacionAdicional").val(),
                    "diaPlanificadoOriginal" : $j("#90fechaPlanificada").val().substring(0, 2),
                    "mesPlanificadoOriginal" : $j("#90fechaPlanificada").val().substring(3, 5),
                    "anoPlanificadoOriginal" : $j("#90fechaPlanificada").val().substring(6, 10),
                    "diaPlanificado" : $j("#90fechaPlanificada").val().substring(0, 2),
                    "mesPlanificado" : $j("#90fechaPlanificada").val().substring(3, 5),
                    "anoPlanificado" : $j("#90fechaPlanificada").val().substring(6, 10),
                    "diaCierre" : $j("#90fechaPlanificada").val().substring(0, 2),
                    "mesCierre" : $j("#90fechaPlanificada").val().substring(3, 5),
                    "anoCierre" : $j("#90fechaPlanificada").val().substring(6, 10),
                    "estatus" : "false"
                }
            };

        $j.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'agregar_actividad')) ?>", 
            jsonActividad, null, "json")          
        .done(function(response) 
        {
            if (response.satisfactorio) 
            {               
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"].push({ "id" : response.id});
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"].push({ "valor" : jsonActividad.actividad});

                mensajeUsuario =
                    "<div class='alert alert-success alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close' id='mensajeUsuario00'>&times;</a>" +
                        "<strong>¡ Los datos se guardaron exitosamente ! </strong>" +
                    "</div>";

                $j("#30mensajesUsuario").html(mensajeUsuario);

                agenda(idPostActual); 
                $j("#80agenda").removeClass("noVer");
                $j("#10agregarActividad").removeClass("noVer");
                window.scrollTo(0, 0);           
            } 
            else 
            {
                mensajeUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>¡ Los datos no se pudieron guardar !</strong>" +
                "</div>"; 

            	$j("#30mensajesUsuario").html(mensajeUsuario);
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown) 
        {
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>¡ Los datos no se pudieron guardar !</strong>" +
            "</div>"; 

            $j("#30mensajesUsuario").html(mensajeUsuario);
        });  
    });
    $j('.buscarPromotor').autocomplete(
    {
        source: <?= json_encode($usuariosAsc) ?>,
        minLength: 3,
        select: function( event, ui ) 
        {   
            idBien = $j(this).attr("id").substring(14);
            idPromotorAnterior = matrizBienes[idBien].post_author;
            idNuevoPromotor = ui.item.id;
            nombreNuevoPromotor = ui.item.value;
            actualizarPromotor(idBien, idPromotorAnterior, idNuevoPromotor, nombreNuevoPromotor);
        }
    });
});
</script>
