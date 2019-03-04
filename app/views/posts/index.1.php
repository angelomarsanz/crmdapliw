<div class="container">
    <?php if (isset($matrizBienes) && isset($datosBienes)): ?>
        <!-- div con frefijo 00 -->
        <div class="container noVer" id="00testFunction">
            <div class='form-group'> 
                <label for='fechaPlanificada00'>Fecha</label>  
                <input type='text' class='form-control fechaPlanificada00' id='fechaPlanificada00'> 
            </div>
        </div>

        <!-- div con prefijo 10 -->
        <div class="container" id="10menuCrm">
            <nav class="fixed-bottom navbar-dark" style="text-align: right; background-color:#085b9e;">
                
                <button title="Inicio CRM" class="btn btn-link" id="10inicioCrm" ><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> alt="Inicio CRM" class="icon"></button>
                <button title="Buscar" class="btn btn-link" id="10botonBuscar"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?> alt="Buscar" class="icon"></button>          
                <a href=<?= mvc_public_url(array("controller" => "submit-property")) ?> class="btn btn-link" id="10publicarPropiedad" title="Publicar propiedad"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/arrow-thick-top.svg" ?> alt="Publicar propiedad" class="icon"></a>
                <button title="Otras opciones" class="btn btn-link" id="10otrasOpciones"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/grid-two-up.svg" ?> alt="Otras opciones" class="icon"></button>

                <button title="Inicio CRM" class="btn btn-link noVer" id="10inicioCrmBusqueda" ><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> alt="Inicio CRM" class="icon"></button>
                <button title="Cancelar" class="btn btn-link noVer" id="10cancelarBusqueda"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> alt="cancelar búsqueda" class="icon"></button>          
                <button title="Ejecutar búsqueda" class="btn btn-link noVer" id="10ejecutarBusqueda"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?> alt="Ejecutar búsqueda" class="icon"></button>

                <button title="Inicio CRM" class="btn btn-link noVer" id="10inicioCrmAgenda" ><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> alt="Inicio CRM" class="icon"></button>
                <button title="Cancelar" class="btn btn-link noVer" id="10cancelarAgenda"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> alt="cancelar" class="icon"></button>          
                <button title="Guardar cambios" class="btn btn-link noVer" id="10ejecutarAgenda"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> alt="Guardar cambios" class="icon"></button>

                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/ban.svg" ?> class="icon">            
            </nav>
        </div>

        <!-- div con prefijo 20 -->
        <div class="container" id="20tituloCrm">
            <h1 class="letraAzul">CRM</h1>
        </div>
        
        <!-- div con prefijo 30 -->
        <div class="container" id="30mensajesAlUsuario">

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
                            <div class="col-md-3">
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
                            </div>
                            <div class="col-md-3">
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
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                        <a href=<?= $bien->guid ?> title="Ver propiedad"><img src=<?= $datosBienes[$bien->ID]["_thumbnail_id"][1]['valor'] ?> class="card-img-top img-fluid" alt="Foto de la propiedad"></a>
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
                                            endif;
                                        endif;                                    
                                    endforeach;
                                endif;
                                if ($ultimaActividadPlanificada != ""): ?> 
                                    <div class="card bg-light text-dark">
                                        <div class="card-body">
                                            <p style="color: #085b9e"><?= "<b>Actividad planificada: </b>" . $ultimaActividadPlanificada . " <b>Fecha: </b>" . $fechaUltimaActividad . "."?></p>
                                            <p><button class="btn btn-link fondoAzul 60ultimaActividad" id=<?= "60ultimaActividad" . $bien->ID ?>>Ver más...</button></p>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="card bg-light text-dark">
                                        <div class="card-body"><p style="color: #085b9e">Esta propiedad no tiene actividades planificadas en la agenda.</p></div>
                                    </div>        
                                <?php endif; 
                            ?>
                        </div>
                        <div class="card-footer">
                            <p>                                                            
                                <a href=<?= mvc_public_url(array("controller" => "submit-property")) . "?edit_property=" . $bien->ID ?> class="btn btn-light" id="60editarPropiedad" title="Editar propiedad"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/pencil.svg" ?> alt="Editar propiedad" class="icon"></a>
                                <button class="btn btn-light 60personas" id=<?= "60personas" . $bien->ID ?> title="Personas"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/people.svg" ?> alt="Personas" class="icon"></button>
                                <button class="btn btn-light 60documentos" id=<?= "60documentos" . $bien->ID ?> title="Documentos"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/document.svg" ?> alt="Documentos" class="icon"></button>
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
        </div>
    <?php else: ?>
        <!-- div con prefijo 70 -->
        <div class="container">
            <div class="row">
                <br />
                <br />
                <p><b>Estimado usuario para acceder al CRM debes </b><?php echo $this->html->link('iniciar sesión', array('controller' => 'ingresar-al-sistema'), array('style' => 'color: blue;')); ?></p>
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

    <div class="row noVer" id="agregarActividad">
        <div class='col-md-6'> 
            <p id="tituloAgregarActividad"><b></b></p> 
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'>
                                <label class='input-group-text' for='actividadAgenda'>Actividad</label> 
                            </div>
                            <select class='custom-select' id='actividadAgenda'> 
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
                            <label for="informacionAdicional">Información adicional</label> 
                            <input type="text" class="form-control" id="informacionAdicional"> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-md-3'>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'> 
                                <label class='input-group-text' for='diaActividad'>Día</label> 
                            </div>
                            <select class='custom-select' id='diaActividad'> 
                                <option selected></option> 
                                <option value="01">01</option> 
                                <option value="02">02</option> 
                                <option value="03">03</option> 
                                <option value="04">04</option> 
                                <option value="05">05</option> 
                                <option value="06">06</option> 
                                <option value="07">07</option> 
                                <option value="08">08</option> 
                                <option value="09">09</option> 
                                <option value="10">10</option> 
                                <option value="11">11</option> 
                                <option value="12">12</option> 
                                <option value="13">13</option> 
                                <option value="14">14</option> 
                                <option value="15">15</option> 
                                <option value="16">16</option> 
                                <option value="17">17</option> 
                                <option value="18">18</option> 
                                <option value="19">19</option> 
                                <option value="20">21</option>
                                <option value="20">22</option>
                                <option value="20">23</option>
                                <option value="20">24</option>
                                <option value="20">25</option>
                                <option value="20">26</option>
                                <option value="20">27</option>
                                <option value="20">28</option>
                                <option value="20">29</option>
                                <option value="20">30</option>
                                <option value="20">31</option>
                            </select> 
                        </div> 
                    </div>
                    <div class='col-md-5'>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'> 
                                <label class='input-group-text' for='mesActividad'>Mes</label> 
                            </div>
                            <select class='custom-select' id='mesActividad'> 
                                <option selected></option> 
                                <option value="01">Enero</option> 
                                <option value="02">Febrero</option> 
                                <option value="03">Marzo</option> 
                                <option value="04">Abril</option> 
                                <option value="05">Mayo</option> 
                                <option value="06">Junio</option> 
                                <option value="07">Julio</option> 
                                <option value="08">Agosto</option> 
                                <option value="09">Septiembre</option> 
                                <option value="10">Octubre</option> 
                                <option value="11">Noviembre</option> 
                                <option value="12">Diciembre</option> 
                            </select> 
                        </div> 
                    </div>
                    <div class='.col-md-3'>
                        <div class='input-group mb-3'>
                            <div class='input-group-prepend'> 
                                <label class='input-group-text' for='anoActividad'>Año</label> 
                            </div>
                            <select class='custom-select' id='anoActividad'> 
                                <option selected></option> 
                                <option value="2019">2019</option> 
                                <option value="2020">2020</option> 
                                <option value="2021">2021</option> 
                                <option value="2022">2022</option> 
                                <option value="2023">2023</option> 
                                <option value="2024">2024</option> 
                                <option value="2025">2025</option> 
                            </select> 
                        </div>
                    </div> 
                </div>   
                <br />
                <br />            
                <button id="descartarActividad" title="Descartar actividad " class="btn btn-light noVer"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> alt="Cancelar actividad" class="icon"></button>
                <button id="guardarActividad" title="Guardar actividad" class="btn btn-light noVer"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> alt="Guardar actividad" class="icon"></button>
            </form>
        </div> 
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
var idBienSeleccionado = 0;
var idPostActual = 0;

// Funciones de Javascript
// Sufijo 00 para variables
function testFunction(idPost00)
{
    /* 
    alert("Actividad: " + datosBienes[idPost00]["CRMdapliw_actividad_agenda"][0].nombreActividad);
    datosBienes[idPost10]["CRMdapliw_actividad_agenda"][0].nombreActividad = "Prueba cambio de valores";
    alert("Actividad modificada: " + datosBienes[idPost10]["CRMdapliw_actividad_agenda"][0].nombreActividad);

    var agenda00 = 
        "<h2 class='letraAzul'>Actividades correspondientes a la propiedad: <b>" + matrizBienes[idPost00].post_title + "</b></h2>" +
        "<h3 class='letraAzul'>Agente responsable: </h3>" +
        "<br />" +
        "<br />" +
        "<div class='row'>" +
            "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                "<div class='card'>" +
                    "<img src=" + datosBienes[idPost00]._thumbnail_id + " alt='Foto de la propiedad' class='card-img-top img-fluid'>" +
                "</div>" +
            "</div>" +
            "<div class='col-12 col-sm-6 col-md-4 mb-3'>";

    $.each(datosBienes[idPost00]['CRMdapliw_actividad_agenda'], function(clave, valor)  
    {
        agenda00 += 
            "<div class='card'>" +
                "<div class='card-block'>" + 
                    "<h4 class='card-title'>" + valor.nombreActividad + "</h4>" +
                    "<div class='card bg-light text-dark'>" +
                        "<div class='card-body'>" +
                        "</div>" +
                    "</div>" +
                "</div>" +
            "</div>" +
            "<br />" +
            "<br />";
    }); 

    agenda00 +=
                "</div>" + 
            "</div>" +
        "</div>";

    alert("Todo ok !");
    $("#00testFunction").removeClass("noVer");
    $("#00testFunction").html(agenda00);
    */
}

// Sufijo 10 para variables
function agenda(idPost10)
{
    idPostActual = idPost10;
    var agenda10 =
        "<h2 class='letraAzul' id='cabecera10'>Actividades planificadas para " + matrizBienes[idPost10].post_title + "</h2>" +
        "<h3 class='letraAzul'>Responsable: </h3>" +
        "<br />" +
        "<br />" +
        "<div class='row'>" +
            "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                "<div class='card'>" +
                "<img src=" + datosBienes[idPost10]["_thumbnail_id"][1].valor + " alt='Foto de la propiedad' class='card-img-top img-fluid'>" +
                "</div>" +
            "</div>" +
            "<div class='col-12 col-sm-6 col-md-8 mb-3'>";

    $.each(datosBienes[idPost10]['CRMdapliw_actividad_agenda'], function(clave, datos)  
    {
        if (datos['id'] != null)
        {
            idActividad = datos['id'];
        }
        else
        {
            if (datos['valor'].estatus == "false")
            {
                fechaPlanificada10 = 
                    datos['valor'].diaPlanificado +
                    "/" +
                    datos['valor'].mesPlanificado + 
                    "/" +
                    datos['valor'].anoPlanificado;

                agenda10 += 
                    "<div class='card' id='actividad10" + clave + idActividad + "'>" +
                        "<div class='card-block'>" + 
                            "<h4 class='card-title'>" + datos['valor'].nombreActividad + "</h4>" +
                            "<div class='card bg-light text-dark'>" +
                                "<div class='card-body'>" +

                                    "<div class='row'>" +
                                        "<div class='col-md-12'>" +
                                            "<div class='form-group'>" + 
                                                "<label for='informacionAdicional10'>Notas</label>" +  
                                                "<input type='text' class='form-control informacionAdicional10' id='informacionAdicional10-" + clave + "-" + idActividad + "' value=" + datos['valor'].informacionAdicional + ">" + 
                                            "</div>" +
                                        "</div>" + 
                                    "</div>" +

                                    "<div class='row'>" +
                                        "<div class='col-md-6'>" +
                                            "<div class='form-group'>" + 
                                                "<label for='fechaPlanificada10'>Fecha</label>" +  
                                                "<input type='text' class='form-control fechaPlanificada10' id='fechaPlanificada10-" + clave + "-" + idActividad + "' value=" + fechaPlanificada10 + ">" + 
                                            "</div>" +
                                        "</div>" +
                                        
                                        "<div class='col-md-3'>" +
                                            "<div class='form-check'>" +
                                                "<input type='checkbox' class='form-check-input cerrarActividad10' id='cerrarActividad10-" + clave + "-" + idActividad + "'>" +
                                                "<label class='form-check-label' for='cerrarActividad10'>&nbsp;&nbsp;Cerrar</label>" +
                                            "</div>" +
                                        "</div>"+
                                    "</div>" +

                                "</div>" +
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
        "<br />";

    $("#80agenda").removeClass("noVer");
    $("#80agenda").html(agenda10).contents().find(".fechaPlanificada10").datepicker(
        {
            dateFormat: "dd/mm/yy", 
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ], 
            changeMonth: true,
            changeYear: true
        });
}

// Sufijo 20 para variables
function agregarActividad(jsonActividad)
{
    $("#mensajesAlUusuario").html("Por favor espere un momento...");

    $.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'agregar_actividad')) ?>", 
        jsonActividad, null, "json")          
    .done(function(response) 
    {
        if (response.success) 
        {
            $("#mensajesAlUusuario").html("La actividad se agregó correctamente a la agenda con el id: " + response.id);
        } 
        else 
        {
            $("#mensajesAlUusuario").html("La actividad no se pudo agregar a la agenda. Intente nuevamente");
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $("#mensajesAlUusuario").html("Algo falló en el servidor. La actividad no se pudo agregar");
    });  
}

// Sufijo 30 para variables
function editarActividad(jsonCierreActividad)
{
    $("#mensajesAlUusuario").html("Por favor espere un momento...");

    $.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'cerrar_actividad')) ?>", 
        jsonCierreActividad, null, "json")          
    .done(function(response) 
    {
        if (response.success) 
        {
            $("#mensajesAlUusuario").html("La actividad se cerró correctamente");
        } 
        else 
        {
            $("#mensajesAlUusuario").html("La actividad no se pudo cerrar. Intente nuevamente");
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $("#mensajesAlUusuario").html("Algo falló en el servidor. La actividad no se pudo cerrar");
    });  
}

// Funciones Jquery
$(document).ready(function()
{
    $(".fechaPlanificada00").datepicker(
        {
            dateFormat: "dd/mm/yy", 
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ], 
            changeMonth: true,
            changeYear: true
        });

    $('#10botonBuscar').click(function()
    {
        $("#60bienes").addClass('noVer');
        $("#10botonBuscar").addClass('noVer');
        $("#10publicarPropiedad").addClass('noVer');
        $("#10otrasOpciones").addClass('noVer');
        $("#40busqueda").removeClass('noVer');
        $("#10cancelarBusqueda").removeClass('noVer');
        $("#10ejecutarBusqueda").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $('#10cancelarBusqueda').click(function()
    {
        $("#40busqueda").addClass('noVer');
        $("#10cancelarBusqueda").addClass('noVer');
        $("#10ejecutarBusqueda").addClass('noVer');
        $("#60bienes").removeClass('noVer');
        $("#10botonBuscar").removeClass('noVer');
        $("#10publicarPropiedad").removeClass('noVer');
        $("#10otrasOpciones").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $('.60ultimaActividad').click(function()
    {
        $('#60bienes').addClass('noVer');
        $("#10inicioCrm").addClass('noVer');
        $("#10botonBuscar").addClass('noVer');
        $("#10publicarPropiedad").addClass('noVer');
        $("#10otrasOpciones").addClass('noVer');
        $("#10inicioCrmAgenda").removeClass('noVer');
        $("#10cancelarAgenda").removeClass('noVer');
        $("#10ejecutarAgenda").removeClass('noVer');
        agenda($(this).attr('id').substring(17));
        window.scrollTo(0, 0);
    });

    $('#10inicioCrmAgenda').click(function()
    {
        $("#10inicioCrmAgenda").addClass('noVer');
        $("#10cancelarAgenda").addClass('noVer');
        $("#10ejecutarAgenda").addClass('noVer');
        $('#60bienes').removeClass('noVer');
        $("#10inicioCrm").removeClass('noVer');
        $("#10botonBuscar").removeClass('noVer');
        $("#10publicarPropiedad").removeClass('noVer');
        $("#10otrasOpciones").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $('#10cancelarAgenda').click(function()
    {
        $("#10inicioCrmAgenda").addClass('noVer');
        $("#10cancelarAgenda").addClass('noVer');
        $("#10ejecutarAgenda").addClass('noVer');
        $('#60bienes').removeClass('noVer');
        $("#10inicioCrm").removeClass('noVer');
        $("#10botonBuscar").removeClass('noVer');
        $("#10publicarPropiedad").removeClass('noVer');
        $("#10otrasOpciones").removeClass('noVer');
        window.scrollTo(0, 0);
    });
   
    $("#10ejecutarAgenda").click(function()
    {
        idActividad = "";
        $("#80agenda input").each(function (index) 
        {
            if (idActividad == "")
            {
                if ($(this).attr('id').substring(0, 22) == "informacionAdicional10")
                {
                    idActividad = $(this).attr('id').substring(23);
                }
            }
            if ($(this).attr('id').substring(0, 22) == "informacionAdicional10")
            {
                if ($(this).attr('id').substring(23) != idActividad)
                {
                    idActividad = $(this).attr('id').substring(23);
                }    
                $(this).val($.trim($(this).val().toUpperCase()));
                arregloId = idActividad.split("-");
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].informacionAdicional = $(this).val();                                    
            }
            if ($(this).attr('id').substring(0, 18) == "fechaPlanificada10")
            {
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].diaPlanificado = $(this).val().substring(0, 2);
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].mesPlanificado = $(this).val().substring(3, 5);
                datosBienes[idPostActual]["CRMdapliw_actividad_agenda"][arregloId[0]]['valor'].anoPlanificado = $(this).val().substring(6, 10);                                    
            }
        });
    });

    $('.botonAgregarActividad').click(function()
    {
        $('#lineaBotonBuscar').addClass('noVer');
        $('#bienes').addClass('noVer');
        $('#agregarActividad').removeClass('noVer');
        $('#descartarActividad').removeClass('noVer');
        $('#guardarActividad').removeClass('noVer');
        $('#tituloAgregarActividad').html(matrizBienes[$(this).attr('id').substring(21)]['post_title']); 
        idBienSeleccionado = $(this).attr('id').substring(21); 
    });
    $('#descartarActividad').click(function()
    {
        $('#lineaBotonBuscar').removeClass('noVer');
        $('#bienes').removeClass('noVer');
        $('#agregarActividad').addClass('noVer');
        $('#descartarActividad').addClass('noVer');
        $('#guardarActividad').addClass('noVer');
    });
    $('#guardarActividad').click(function()
    {
        $('#lineaBotonBuscar').removeClass('noVer');
        $('#bienes').removeClass('noVer');
        $('#agregarActividad').addClass('noVer');
        $('#descartarActividad').addClass('noVer');
        $('#guardarActividad').addClass('noVer');

        jsonActividad = 
            {"idPost" : idBienSeleccionado,
            'actividad' :  
                {
                    "nombreActividad" : $("#actividadAgenda").val(),
                    "informacionAdicional" : $("#informacionAdicional").val(), 
                    "diaPlanificado" : $("#diaActividad").val(),
                    "mesPlanificado" : $("#mesActividad").val(),
                    "anoPlanificado" : $("#anoActividad").val(),
                    "diaCierre" : $("#diaActividad").val(),
                    "mesCierre" : $("#mesActividad").val(),
                    "anoCierre" : $("#anoActividad").val(),
                    "estatus" : "false"
                }
            };

        agregarActividadAgenda(jsonActividad);
    });
    $('.botonCerrarActividad').click(function()
    {
        jsonCierreActividad = 
            {"idPostmeta" : 5446,
            "informacionAdicional" : "Ok" };
        cerrarActividadAgenda(jsonCierreActividad);
    });
});
</script>