<div class="container">
    <?php if (isset($matrizBienes) && isset($datosBienes)): ?>
        <!-- div con sufijo 00 -->
        <div class="container noVer" id="testFunction00">
        </div>

        <!-- div con sufijo 10 -->
        <div class="container" id="menuCrm10">
            <nav class="fixed-bottom navbar-dark" style="text-align: right; background-color:#085b9e;">
                <!-- <button title="Inicio CRM" class="btn btn-link" id="10inicioCrm" >
                        <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                        alt="Inicio CRM" class="icon">
                </button> -->

                <a href=<?= mvc_public_url(array("controller" => "posts")) ?> class="btn btn-link" id="inicioCrm10" title="Inicio CRM">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                    alt="Inicio CRM" class="icon">
                </a>

                <button title="Buscar" class="btn btn-link" id="botonBuscar10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
                    alt="Buscar" class="icon">
                </button>
          
                <a href=<?= mvc_public_url(array("controller" => "submit-property")) ?> class="btn btn-link" id="publicarPropiedad10" title="Publicar propiedad">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?>
                    alt="Publicar propiedad" class="icon">
                </a>
                
                <button title="Otras opciones" class="btn btn-link" id="otrasOpciones10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/grid-two-up.svg" ?>
                    alt="Otras opciones" class="icon">
                </button>

                <!-- <button title="Inicio CRM" class="btn btn-link noVer" id="inicioCrmBusqueda10" >
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                    alt="Inicio CRM" class="icon">
                </button> -->

                <button title="Cancelar" class="btn btn-link noVer" id="cancelarBusqueda10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="cancelar búsqueda" class="icon">
                </button>
              
                <button title="Ejecutar búsqueda" class="btn btn-link noVer" id="ejecutarBusqueda10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
                    alt="Ejecutar búsqueda" class="icon">
                </button>

                <!-- <button title="Inicio CRM" class="btn btn-link noVer" id="inicioCrmAgenda10" >
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                    alt="Inicio CRM" class="icon">
                </button> -->

                <button title="Agregar actividad" class="btn btn-link noVer" id="agregarActividad10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                    alt="Agregar actividad" class="icon">
                </button>          

                <button title="Guardar actividad" class="btn btn-link noVer" id="guardarActividad10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> 
                    alt="Agregar actividad" class="icon">
                </button>

                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/ban.svg" ?>
                    class="icon">            
            </nav>
        </div>

        <!-- div con sufijo 20 -->
        <div class="container" id="tituloCrm20">
            <h1 class="letraAzul">CRM</h1>
        </div>
        
        <!-- div con sufijo 30 -->
        <div class="container" id="mensajesUsuario30">
        </div>
        
        <!-- div con sufijo 40 -->
        <div class="container noVer" id="busqueda40">
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
        <!-- div con sufijo 50 -->
        <!-- Reservado para crear index de la agenda sin imágenes -->

        <!-- div con sufijo 60 -->
        <div class="container" id="bienes60">
            <h2 class="letraAzul">Actividades planificadas de la agenda</h2>
            <br />
            <div class="row"> 
                <?php foreach ($bienes as $bien): ?> 
                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="card detalleBienes60">
                        <a href=<?= $bien->guid ?> title="Ver propiedad">
                            <img src=<?= $datosBienes[$bien->ID]["_thumbnail_id"][0]['valor'] ?> class="card-img-top img-fluid" alt="Foto de la propiedad">
                        </a>
                        <div class="card-block">
                            <h4 class="card-title" id=<?= "nombreDelBien" . $bien->ID ?>><?= $bien->__name ?></h4>
                            <?php 
                                $ultimaActividadPlanificada = "";
                                $fechaUltimaActividad = "";
                                if (isset($datosBienes[$bien->ID]["CRMdapliw_actividad_agenda"][0])):
                                    foreach ($datosBienes[$bien->ID]["CRMdapliw_actividad_agenda"] as $datosAgenda):
                                        if($datosAgenda["estatus"] == "false"):
                                            $ultimaActividadPlanificada = $datosAgenda["nombreActividad"];
                                            $fechaUltimaActividad = 
                                                $datosAgenda["diaPlanificado"] . '/' . 
                                                $datosAgenda["mesPlanificado"] . '/' .
                                                $datosAgenda["anoPlanificado"];
                                            $ultimaFechaInvertida = $datosAgenda["fechaInvertida"];
                                            break;
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
                                                <button class="btn btn-link fondoAzul ultimaActividad60" id=<?= "ultimaActividad60" . $bien->ID ?>>
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
                                                <button class="btn btn-link fondoAzul ultimaActividad60" id=<?= "ultimaActividad60" . $bien->ID ?>>
                                                    Ver más...
                                                </button>
                                            </p>
                                        </div>
                                    </div>        
                                <?php endif; ?>
                            <div class="form-group">
                                <label for="buscarPromotor60">Promotor responsable: </label>
                                <input type="text" id=<?= "buscarPromotor60" . $bien->ID ?> class="form-control buscarPromotor60" 
                                    value="<?= $matrizBienes[$bien->ID]['nombre_autor'] ?>">
                            </div>
                            <div id=<?= "mensajesUsuario60" . $bien->ID ?>>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p>                                                            
                                <a href=<?= mvc_public_url(array("controller" => "submit-property")) . "?edit_property=" . $bien->ID ?> 
                                    class="btn btn-light" id="60editarPropiedad" title="Editar propiedad">
                                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 
                                    "crmdapliw/app/public/images/pencil.svg" ?> alt="Editar propiedad" class="icon">
                                </a>

                                <button class="btn btn-light 60personas" id=<?= "personas60" . $bien->ID ?> title="Personas">
                                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 
                                    "crmdapliw/app/public/images/people.svg" ?> alt="Personas" class="icon">
                                </button>

                                <button class="btn btn-light documentos60" id=<?= "documentos60" . $bien->ID ?> title="Documentos">
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
        <!-- div con sufijo 70 -->
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
    
    <!-- div con sufijo 80 -->
    <div class="container noVer" id="agenda80">
    </div> 

    <!-- div con sufijo 90 -->

    <div class="container noVer" id="agregarActividad90">
        <div class="row">
            <div class='col-md-6'> 
                <h2 class="letraAzul" id="tituloAgregarActividad90"></h2>
                <br />
                <br /> 
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class='input-group mb-3'>
                                <div class='input-group-prepend'>
                                    <label class='input-group-text' for='actividadAgenda90'>Actividad</label> 
                                </div>
                                <select class='custom-select' id='actividadAgenda90'> 
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
                                <label for="informacionAdicional90">Información adicional</label> 
                                <input type="text" class="form-control" id="informacionAdicional90"> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fechaPlanificada90">Fecha</label>  
                                <input type="text" class="form-control" id="fechaPlanificada90"> 
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
var gMatrizBienes = <?= json_encode($matrizBienes) ?>;
var gDatosBienes = <?= json_encode($datosBienes) ?>;
var gIdPostActual = 0;
var gPosicionAnterior = "";

// Funciones de Javascript
function testFunction()
{

}
function agenda(idPost)
{
    alert("Entré a agenda, idPost: " + idPost);
    var agenda =
        "<h2 class='letraAzul' id='cabecera80'>Actividades planificadas para " + gMatrizBienes[idPost].post_title + "</h2>" +
        "<h3 class='letraAzul'>Promotor responsable: " + gMatrizBienes[idPost].nombre_autor + "</h3>" +
        "<br />" +
        "<br />" +
        "<div class='row'>";

    if (gDatosBienes[idPost]._thumbnail_id)
    {
        agenda +=
            "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                "<div class='card'>" +
                "<img src=" + gDatosBienes[idPost]["_thumbnail_id"][0].valor + " alt='Foto de la propiedad' class='card-img-top img-fluid'>" +
                "</div>" +
            "</div>" +
            "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
    }
    else
    {
        agenda += "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
    }

    arregloActividades = gDatosBienes[idPost]["CRMdapliw_actividad_agenda"];

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

                fechaPlanificada = 
                    datos['valor'].diaPlanificado +
                    "/" +
                    datos['valor'].mesPlanificado + 
                    "/" +
                    datos['valor'].anoPlanificado;

                agenda += 
                    "<div class='card' id='actividad80-" + clave + "-" + idActividad + "-" + idPost + "'>" +
                        "<div class='card-block'>" + 
                            "<h4 class='card-title'>" + datos['valor'].nombreActividad + "</h4>" +
                            "<div class='card bg-light text-dark'>" +
                                "<div class='card-body'>" +

                                    "<div class='row'>" +
                                        "<div class='col-md-12'>" +
                                            "<div class='form-group'>" + 
                                                "<label for='informacionAdicional80'>Notas</label>" +  
                                                "<input type='text' class='form-control informacionAdicional10' id='informacionAdicional80-" + clave + "-" +
                                                    idActividad + "-" + idPost + "' value='" + datos['valor'].informacionAdicional + "'>" + 
                                            "</div>" +
                                        "</div>" + 
                                    "</div>" +

                                    "<div class='row'>" +
                                        "<div class='col-md-6'>" +
                                            "<div class='form-group'>" + 
                                                "<label for='fechaPlanificada80'>Fecha</label>" +  
                                                "<input type='text' class='form-control fechaPlanificada80' id='fechaPlanificada80-" + clave + "-" + idActividad + 
                                                    "-" + idPost + "' value=" + fechaPlanificada + ">" + 
                                            "</div>" +
                                        "</div>" +
                                        
                                        "<div class='col-md-3'>" +
                                            "<div class='form-check'>" +
                                                "<input type='checkbox' class='form-check-input cerrarActividad80' id='cerrarActividad80-" + clave + "-" + 
                                                idActividad + "-" + idPost + "'>" +
                                                "<label class='form-check-label' for='cerrarActividad80'>&nbsp;&nbsp;Cerrar</label>" +
                                            "</div>" +
                                        "</div>"+

                                        "<div class='col-md-3'>" +
                                            "<button class='guardarCambios80 btn btn-link' title='Guardar cambios' id='guardarCambios80-" + clave + "-" + 
                                                idActividad + "-" + idPost + "'>" + 
                                                "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/pencil.svg' ?> alt='Guardar cambios' class='icon'></button>" +
                                        "</div>"+

                                    "</div>" +

                                "</div>" +
                            "</div>" +
                        "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                        "<div class='col-md-12'>" +
                            "<div id='mensajesUsuario80-" + clave + "-" + idActividad + "-" + idPost + "'>" +
                            "</div>" +
                        "</div>" +
                    "</div>" + 
                    "<br />" +
                    "<br />";
            }
        }
    }); 

    agenda +=
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

    $j("#agenda80").html(agenda).contents().find(".fechaPlanificada").datepicker(
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
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos</strong>" +
        "</div>";

    var idMensaje = "#mensajesUsuario60" + idBien; 

  	$j(idMensaje).html(mensajesUsuario);

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
            gMatrizBienes[idBien].post_author = idNuevoPromotor;
            gMatrizBienes[idBien].nombre_autor = nombreNuevoPromotor;

            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>¡ Los datos se guardaron exitosamente ! " + response.mensaje + "</strong>" +
                "</div>";
            $j(idMensaje).html(mensajesUsuario);
        } 
        else 
        {
            mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>¡ Los datos no se pudieron guardar ! " + response.mensaje + "</strong>" +
            "</div>"; 

        	$j(idMensaje).html(mensajesUsuario);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>¡ Ocurrió un error en el servidor. Los datos no se pudieron guardar !</strong>" +
            "</div>"; 

    	$j(idMensaje).html(mensajesUsuario);
    });
}

// Funciones Jquery
$j(document).ready(function()
{
    $j("#fechaPlanificada90").datepicker(
        {
            dateFormat: "dd/mm/yy", 
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ], 
            changeMonth: true,
            changeYear: true
        });

    $j("#botonBuscar10").click(function()
    {
        $j("#bienes60").addClass('noVer');
        $j("#botonBuscar10").addClass('noVer');
        $j("#publicarPropiedad10").addClass('noVer');
        $j("#otrasOpciones10").addClass('noVer');
        $j("#busqueda10").removeClass('noVer');
        $j("#cancelarBusqueda10").removeClass('noVer');
        $j("#ejecutarBusqueda10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#cancelarBusqueda10').click(function()
    {
        $j("#busqueda10").addClass('noVer');
        $j("#cancelarBusqueda10").addClass('noVer');
        $j("#ejecutarBusqueda10").addClass('noVer');
        $j("#bienes60").removeClass('noVer');
        $j("#botonBuscar10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        $j("#otrasOpciones10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('.ultimaActividad60').click(function()
    {        
        gPosicionAnterior = $j(this).attr('id');
        alert("gPosicionAnterior: " + gPosicionAnterior);
        gIdPostActual = $j(this).attr('id').substring(17);
        alert("gIdPostActual: " + gIdPostActual);
        $j('#bienes60').addClass('noVer');
        $j("#botonBuscar10").addClass('noVer');
        $j("#publicarPropiedad10").addClass('noVer');
        $j("#otrasOpciones10").addClass('noVer');
        agenda(gIdPostActual);
        $j("#agenda80").removeClass("noVer");
        $j("#agregarActividad10").removeClass("noVer");
        window.scrollTo(0, 0);
        
    });

    $j('#inicioCrmAgenda10').click(function()
    {
        $j("#agenda80").addClass("noVer");
        $j("#inicioCrmAgenda10").addClass('noVer');
        $j("#mensajesUsuario30").html("");
        $j('#bienes60').removeClass('noVer');
        $j("#inicioCrm10").removeClass('noVer');
        $j("#botonBuscar10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        $j("#otrasOpciones10").removeClass('noVer');
        window.scrollTo(0, 0);
    });
   
    $j("#agenda80").on("click", ".guardarCambios80", function()
    {       
        var mensajesUsuario = 
            "<div class='alert alert-info alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>Por favor espere mientras se guardan los datos</strong>" +
            "</div>";
        var idActividad = $j(this).attr('id').substring(17);        
        var arregloId = idActividad.split("-");
        var idMensaje = "#mensajesUsuario80-" + $j(this).attr('id').substring(17);
        var tarjeta = "#actividad80-" + $j(this).attr('id').substring(17);
        var tarjetaInput = "#actividad80-" + $j(this).attr('id').substring(17) + " input";
        var idActividadObj = arregloId[1];
        var informacionAdicionalObj = "";
        var diaPlanificadoObj = "";
        var mesPlanificadoObj = "";
        var anoPlanificadoObj = "";
        var estatusObj = "";

    	$j(idMensaje).html(mensajesUsuario);

        $j(tarjetaInput).each(function (index) 
        {
            if ($j(this).attr('id').substring(0, 22) == "informacionAdicional80")
            {
                $j(this).val($j.trim($j(this).val().toUpperCase()));
                gDatosBienes[gIdPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].informacionAdicional = $j(this).val();
                informacionAdicionalObj = $j(this).val();
            }
            if ($j(this).attr('id').substring(0, 18) == "fechaPlanificada80")
            {
                gDatosBienes[gIdPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].diaPlanificado = $j(this).val().substring(0, 2);
                gDatosBienes[gIdPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].mesPlanificado = $j(this).val().substring(3, 5);
                gDatosBienes[gIdPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].anoPlanificado = $j(this).val().substring(6, 10);
                                    
                diaPlanificadoObj = $j(this).val().substring(0, 2);
                mesPlanificadoObj = $j(this).val().substring(3, 5);
                anoPlanificadoObj = $j(this).val().substring(6, 10);

            }
            if ($j(this).attr('id').substring(0, 17) == "cerrarActividad80")
            {
                if ($j(this).prop("checked") == true)
                {
                    gDatosBienes[gIdPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].estatus = "true";
                    estatusObj = "true";
                }
                else
                {
                    gDatosBienes[gIdPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].estatus = "false";
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
                mensajesUsuario =
                    "<div class='alert alert-success alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                        "<strong>¡ Los datos se guardaron exitosamente ! </strong>" +
                    "</div>";
                if (estatusObj == "true")
                {
                    $j(tarjeta).addClass("noVer");
                }
                $j(idMensaje).html(mensajesUsuario);
            } 
            else 
            {
                mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>¡ Los datos no se pudieron guardar !</strong>" +
                "</div>"; 

            	$j(idMensaje).html(mensajesUsuario);
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown) 
        {
            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>¡ Ocurrió un error en el servidor. Los datos no se pudieron guardar !</strong>" +
                "</div>"; 

        	$j(idMensaje).html(mensajesUsuario);
        });

    });

    $j('#agregarActividad10').click(function()
    {
        $j('#agenda80').addClass('noVer');
        $j('#agregarActividad10').addClass('noVer');
        $j('#guardarActividad10').removeClass('noVer');
        $j('#agregarActividad90').removeClass('noVer');
        $j('#tituloAgregarActividad90').html("Planificar actividades para " + gMatrizBienes[gIdPostActual]['post_title']); 
        $j('#actividadAgenda90').val("");
        $j('#informacionAdicional90').val("");
        $j('#fechaPlanificada90').val("");
        window.scrollTo(0, 0);
    });

    $j('#guardarActividad10').click(function()
    {
        var mensajesUsuario = 
            "<div class='alert alert-info alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>Por favor espere mientras se guardan los datos</strong>" +
            "</div>";
        $j("#mensajesUsuario30").html(mensajesUsuario);

        $j("#informacionAdicional90").val($j.trim($j("#informacionAdicional90").val().toUpperCase()));

        jsonActividad = 
            {"idPost" : gIdPostActual,
            'actividad' :  
                {
                    "nombreActividad" : $j("#actividadAgenda90").val(),
                    "informacionAdicional" : $j("#informacionAdicional90").val(),
                    "diaPlanificadoOriginal" : $j("#fechaPlanificada90").val().substring(0, 2),
                    "mesPlanificadoOriginal" : $j("#fechaPlanificada90").val().substring(3, 5),
                    "anoPlanificadoOriginal" : $j("#fechaPlanificada90").val().substring(6, 10),
                    "diaPlanificado" : $j("#fechaPlanificada90").val().substring(0, 2),
                    "mesPlanificado" : $j("#fechaPlanificada90").val().substring(3, 5),
                    "anoPlanificado" : $j("#fechaPlanificada90").val().substring(6, 10),
                    "diaCierre" : $j("#fechaPlanificada90").val().substring(0, 2),
                    "mesCierre" : $j("#fechaPlanificada90").val().substring(3, 5),
                    "anoCierre" : $j("#fechaPlanificada90").val().substring(6, 10),
                    "estatus" : "false"
                }
            };

        $j.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'agregar_actividad')) ?>", 
            jsonActividad, null, "json")          
        .done(function(response) 
        {
            if (response.satisfactorio) 
            {               
                gDatosBienes[gIdPostActual]["CRMdapliw_actividad_agenda"].push({ "id" : response.id});
                gDatosBienes[gIdPostActual]["CRMdapliw_actividad_agenda"].push({ "valor" : jsonActividad.actividad});

                mensajesUsuario =
                    "<div class='alert alert-success alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                        "<strong>¡ Los datos se guardaron exitosamente ! </strong>" +
                    "</div>";

                $j("#mensajesUsuario30").html(mensajesUsuario);

                agenda(gIdPostActual); 
                $j("#agenda80").removeClass("noVer");
                $j("#agregarActividad10").removeClass("noVer");
                window.scrollTo(0, 0);           
            } 
            else 
            {
                mensajesUsuario =
                    "<div class='alert alert-danger alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                        "<strong>¡ Los datos no se pudieron guardar !</strong>" +
                    "</div>"; 

            	$j("#mensajesUsuario30").html(mensajesUsuario);
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown) 
        {
            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>¡ Los datos no se pudieron guardar !</strong>" +
                "</div>"; 

            $j("#mensajesUsuario30").html(mensajesUsuario);
        });  
    });
    $j('.buscarPromotor').autocomplete(
    {
        source: <?= json_encode($usuariosAsc) ?>,
        minLength: 3,
        select: function( event, ui ) 
        {   
            idBien = $j(this).attr("id").substring(14);
            idPromotorAnterior = gMatrizBienes[idBien].post_author;
            idNuevoPromotor = ui.item.id;
            nombreNuevoPromotor = ui.item.value;
            actualizarPromotor(idBien, idPromotorAnterior, idNuevoPromotor, nombreNuevoPromotor);
        }
    });
});
</script>
