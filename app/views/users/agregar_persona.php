<div class="container">
    <?php if (isset($matrizBienes) && isset($datosBienes)): ?>
        <!-- div con sufijo 00 -->
        <div class="container noVer" id="testFunction00">
        </div>

        <!-- div con sufijo 10 -->
        <div class="container" id="menuCrm10">
            <nav class="fixed-bottom navbar-dark" style="text-align: center; background-color:#085b9e; opacity: 0.5;" id="opcionesMenu10">
                <button title="Inicio CRM" class="btn btn-link" id="inicioCrm10" >
                        <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?> 
                        alt="Inicio CRM" class="iconMenu">
                </button>

                <button title="Buscar" class="btn btn-link" id="botonBuscar10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
                    alt="Buscar" class="iconMenu">
                </button>
          
                <a href=<?= mvc_public_url(array("controller" => "submit-property")) ?> class="btn btn-link" id="publicarPropiedad10" title="Publicar propiedad">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?>
                    alt="Publicar propiedad" class="iconMenu">
                </a>
                
                <button title="Otras opciones" class="btn btn-link" id="otrasOpciones10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/grid-two-up.svg" ?>
                    alt="Otras opciones" class="iconMenu">
                </button>

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarBusqueda10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar búsqueda" class="iconMenu">
                </button>
              
                <button title="Ejecutar búsqueda" class="btn btn-link noVer" id="ejecutarBusqueda10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
                    alt="Ejecutar búsqueda" class="iconMenu">
                </button>

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgenda10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar agenda" class="iconMenu">
                </button>

                <button title="Agregar actividad" class="btn btn-link noVer" id="agregarActividad10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                    alt="Agregar actividad" class="iconMenu">
                </button>          

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgregarActividad10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar agregar actividad" class="iconMenu">
                </button>

                <button title="Guardar actividad" class="btn btn-link noVer" id="guardarActividad10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> 
                    alt="Agregar actividad" class="iconMenu">
                </button>

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarPersonas10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar personas" class="iconMenu">
                </button>

                <button title="Agregar persona" class="btn btn-link noVer" id="agregarPersona10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                    alt="Agregar persona" class="iconMenu">
                </button>          

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgregarPersona10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar agregar persona" class="iconMenu">
                </button>

                <button title="Guardar persona" class="btn btn-link noVer" id="guardarPersona10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> 
                    alt="Guardar persona" class="iconMenu">
                </button>

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
        <div class="container formulario noVer" id="busqueda40">
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
                                        <option value="Actividades atrasadas">Actividades atrasadas</option>
                                        <option value="Actividades del mes">Actividades del mes</option>
                                        <option value="Actividades para hoy">Actividades para hoy</option>
                                        <option value="Actividades para mañana">Actividades para mañana</option>
                                        <option value="Sin actividad planificada">Sin actividad planificada</option>
                                        <option selected value="Todas">Todas</option>
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
            <?php
                for ($i = 1; $i <= 100; $i++) 
                {
                    echo "<br />";
                }
            ?>
        </div>
        <!-- div con sufijo 50 -->
        <!-- Reservado para crear index de la agenda sin imágenes -->

        <!-- div con sufijo 60 -->
        <div class="container formulario" id="bienes60">
            <h2 class="letraAzul">Actividades planificadas de la agenda</h2>
            <br />
            <div class="row" id="cicloBienes60">
            </div>
            <?php
                for ($i = 1; $i <= 100; $i++) 
                {
                    echo "<br />";
                }
            ?>
        </div> 
    <?php else: ?>
        <!-- div con sufijo 70 -->
        <div class="container">
            <div class="row">
                <br />
                <br />
                <p><b>Estimado usuario para acceder al CRM debes </b><?php echo $this->html->link('iniciar sesión', array('controller' => 'ingresar-al-sistema'), 
                    array('style' => 'color: blue;')); ?></p>
            </div>
            <br />
            <br />
            <br />
        </div> 
    <?php endif; ?>
    
    <!-- div con sufijo 80 -->
    <div class="container formulario noVer" id="agenda80">
    </div> 

    <!-- div con sufijo 90 -->
    <div class="container formulario noVer" id="agregarActividad90">
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
                                    <option value="Coordinar elaboración de pendón">Coordinar elaboración de pendón</option>
                                    <option value="Coordinar elaboración de valla">Coordinar elaboración de valla</option>
                                    <option value="Coordinar labores de limpieza del inmueble">Coordinar labores de limpieza del inmueble</option>
                                    <option value="Coordinar pago de condominio">Coordinar pago de condominio</option>
                                    <option value="Coordinar pago de servicios público">Coordinar pago de servicios públicos</option>
                                    <option value="Coordinar publicidad en la prensa">Coordinar publicidad en la prensa</option>
                                    <option value="Coordinar publicidad en la radio">Coordinar publicidad en la radio</option>
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
                                    <option value="Llamar a propietario">Llamar a propietario</option>
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
            </div> 
        </div>
        <?php
            for ($i = 1; $i <= 100; $i++) 
            {
                echo "<br />";
            }
        ?>
    </div>

    <!-- div con sufijo 100 -->
    <div class="container formulario noVer" id="personas100">
        <h2 class="letraAzul" id="tituloPersonas100"></h2>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card" id="imagen100">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-8 mb-3">
                <form>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> 
                                <label for="nombrePropietario100">Propietario</label> 
                                <input type="text" class="form-control" id="nombrePropietario100"> 
                            </div>
                            <div id="mensajesPropietario100"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> 
                                <label for="nombreCaptador100">Captador</label> 
                                <input type="text" class="form-control" id="nombreCaptador100"> 
                            </div>
                            <div id="mensajesCaptador100"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> 
                                <label for="nombreCliente100">Asignar de mi cartera de clientes un comprador potencial para esta propiedad</label> 
                                <input type="text" class="form-control" id="nombreCliente100"> 
                            </div>
                            <div id="mensajesCliente100"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> 
                                <label for="nombrePromotor100">Promotor</label> 
                                <input type="text" class="form-control" id="nombrePromotor100" disabled> 
                            </div>
                            <div id="mensajePromotor100"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-10">
                            <h3 class="letraAzul">Compradores potenciales</h3>    
                            <div id="compradoresPotenciales100"></div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
        <?php
            for ($i = 1; $i <= 100; $i++) 
            {
                echo "<br />";
            }
        ?>
    </div>

    <!-- div con sufijo 110 -->
    <div class="container formulario noVer" id="agregarPersonas110">
        <h2 class="letraAzul" id="tituloAgregarPersonas110"></h2>
        <br />
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 mb-3">
                <form>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="tipoIdentificacion110">Tipo de identificación*</label> 
                        </div>
                        <select class="custom-select" id="tipoIdentificacion110"> 
                            <option selected></option> 
                            <option value="E">E - Extranjero</option>
                            <option value="G">G - Gobierno</option>
                            <option value="J">J - Jurídico</option> 
                            <option value="P">P - Pasaporte</option>
                            <option value="V">V - Venezolano</option>
                        </select> 
                    </div>
                    <div id="mensajesTipo110" class="mensajes110"></div>    

                    <div class="form-group"> 
                        <label for="numeroIdentificacion110">Nro. de identificación*</label> 
                        <input type="number" class="form-control" id="numeroIdentificacion110"> 
                    </div>
                    <div id="mensajesIdentificacion110" class="mensajes110"></div>    

                    <div class="form-group"> 
                        <label for="primerNombre110">Primer nombre*</label> 
                        <input type="text" class="form-control" id="primerNombre110"> 
                    </div>
                    <div id="mensajesPrimerNombre110" class="mensajes110"></div>    

                    <div class="form-group"> 
                        <label for="segundoNombre110">Segundo nombre</label> 
                        <input type="text" class="form-control" id="segundoNombre110"> 
                    </div>
                    <div id="mensajesSegundoNombre110" class="mensajes110"></div>    

                    <div class="form-group"> 
                        <label for="primerApellido110">Primer apellido*</label> 
                        <input type="text" class="form-control" id="primerApellido110"> 
                    </div>
                    <div id="mensajesPrimerApellido110" class="mensajes110"></div>    

                    <div class="form-group"> 
                        <label for="segundoApellido110">Segundo apellido</label> 
                        <input type="text" class="form-control" id="segundoApellido110"> 
                    </div>
                    <div id="mensajesSegundoApellido110" class="mensajes110"></div>    

                    <div id="rolesCheckbox110">

                        <p>Roles*</p>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="administrador110"> 
                            <label class='form-check-label' for="administrador110">&nbsp;&nbsp;Administrador</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="gestorNegocios110"> 
                            <label class='form-check-label' for="gestorNegocios110">&nbsp;&nbsp;Gestor de negocios</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="captador110"> 
                            <label class='form-check-label' for="captador110">&nbsp;&nbsp;Captador</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="promotor110"> 
                            <label class='form-check-label' for="promotor110">&nbsp;&nbsp;Asesor de inversión inmobiliaria</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="propietario110"> 
                            <label class='form-check-label' for="propietario110">&nbsp;&nbsp;Propietario</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="cliente110"> 
                            <label class='form-check-label' for="cliente110">&nbsp;&nbsp;Comprador potencial</label>
                        </div>
                        <div id="mensajesRoles110" class="mensajes110"></div> 

                        <br />

                    </div>

                    <div class="form-group"> 
                        <label for="rol110">Rol*</label> 
                        <input type="text" class="form-control" id="rol110" value="Cliente" disabled> 
                    </div>
                    <div id="mensajesRol110" class="mensajes110"></div> 

                    <div class="form-group"> 
                        <label for="celular110">Teléfono celular</label> 
                        <input type="text" class="form-control" id="celular110"> 
                    </div>
                    <div id="mensajesCelular110" class="mensajes110"></div> 

                    <div class="form-group"> 
                        <label for="telefonoFijo110">Teléfono fijo</label> 
                        <input type="text" class="form-control" id="telefonoFijo110"> 
                    </div>
                    <div id="mensajesTelefono110" class="mensajes110"></div> 

                    <div class="form-group"> 
                        <label for="email110">Correo electrónico*</label> 
                        <input type="email" class="form-control" id="email110"> 
                    </div>
                    <div id="mensajesEmail110" class="mensajes110"></div> 

                    <div class="form-group"> 
                        <label for="direccion110">Dirección</label> 
                        <input type="text" class="form-control" id="direccion110"> 
                    </div>
                    <div id="mensajesDireccion110" class="mensajes110"></div> 

                </form>
            </div>

        </div>
        <?php
            for ($i = 1; $i <= 100; $i++) 
            {
                echo "<br />";
            }
        ?>
    </div>

</div>
<script>
// Variables globales
var gBienes = <?= json_encode($bienes) ?>;
var gMatrizBienes = <?= json_encode($matrizBienes) ?>;
var gDatosBienes = <?= json_encode($datosBienes) ?>;
var gIdPostActual = "";
var gPosicionAnterior = "";

// Funciones  
function testFunction()
{

}

function refrescarMenu()
{
    $j(".formulario").each(function()
    {   
        if ($j(this).hasClass('noVer') === false)
        {
            $j(this).addClass('noVer');
        }           
    });

    $j("#opcionesMenu10 button").each(function()
    {   
        if ($j(this).hasClass('noVer') === false)
        {
            $j(this).addClass('noVer');
        }           
    });

    $j("#opcionesMenu10 a").each(function()
    {   
        if ($j(this).hasClass('noVer') === false)
        {
            $j(this).addClass('noVer');
        }           
    });
    
    if (gIdPostActual != "")
    {
        primeraActividadPendiente(gIdPostActual);
    }    

    $j("#mensajesUsuario30").html(""); 
  
    $j("#bienes60").removeClass('noVer');

    if (gPosicionAnterior != "")
    {
        $j("#" + gPosicionAnterior).focus();    
    }
    else
    {
        window.scrollTo(0, 0);
    }
}

function guardarCambiosAgenda(idActividad)
{
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos</strong>" +
        "</div>";
    var arregloId = idActividad.split("-");
    var idMensaje = "#mensajesUsuario80-" + idActividad;
    var tarjeta = "#actividad80-" + idActividad;
    var tarjetaInput = "#actividad80-" + idActividad + " input";
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
            gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[arregloId[0]].informacionAdicional = $j(this).val();
            informacionAdicionalObj = $j(this).val();
        }
        if ($j(this).attr('id').substring(0, 18) == "fechaPlanificada80")
        {
            gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[arregloId[0]].diaPlanificado = $j(this).val().substring(0, 2);
            gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[arregloId[0]].mesPlanificado = $j(this).val().substring(3, 5);
            gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[arregloId[0]].anoPlanificado = $j(this).val().substring(6, 10);

            gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[arregloId[0]].fechaInvertida = 
                $j(this).val().substring(6, 10) + $j(this).val().substring(3, 5) + $j(this).val().substring(0, 2);
                                
            diaPlanificadoObj = $j(this).val().substring(0, 2);
            mesPlanificadoObj = $j(this).val().substring(3, 5);
            anoPlanificadoObj = $j(this).val().substring(6, 10);

        }
        if ($j(this).attr('id').substring(0, 17) == "cerrarActividad80")
        {
            if ($j(this).prop("checked") == true)
            {
                gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[arregloId[0]].estatus = "true";
                estatusObj = "true";
            }
            else
            {
                gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[arregloId[0]].estatus = "false";
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
                    "<strong>¡ Los datos se guardaron exitosamente ! " + response.mensaje + "</strong>" +
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

function guardarActividad()
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
            fechaInvertida = 
                $j("#fechaPlanificada90").val().substring(6, 10) +
                $j("#fechaPlanificada90").val().substring(3, 5) +
                $j("#fechaPlanificada90").val().substring(0, 2);

            jsonActividad.actividad.id = response.id;
            jsonActividad.actividad.fechaInvertida = fechaInvertida;

            if (gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda)
            {
                ultimaPosicion = 0;

                $j.each(gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda, function(clave, datos)  
                {
                    ultimaPosicion = clave;
                });

                ultimaPosicion++;
                jsonActividad.actividad.posicionOriginal = ultimaPosicion;
            
                gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda.push(jsonActividad.actividad);
            }
            else
            {
                jsonActividad.actividad.posicionOriginal = 0;

                gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda = [jsonActividad.actividad];
            }

            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>¡ Los datos se guardaron exitosamente ! </strong>" +
                "</div>";

            $j("#mensajesUsuario30").html(mensajesUsuario);

            agenda(gIdPostActual); 
            $j("#cerrarAgregarActividad10").addClass("noVer");
            $j("#guardarActividad10").addClass("noVer");
            $j("#agenda80").removeClass("noVer");
            $j("#cerrarAgenda10").removeClass("noVer");
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
}

function primeraActividadPendiente(idBien)
{
    actividadMasAntigua = "";
    FechaMasAntigua = "";
    fechaInvertidaAntigua = "";
    datosActividadPendiente = "";

    if (gDatosBienes[idBien].CRMdapliw_actividad_agenda)
    {
        arregloActividades = gDatosBienes[idBien].CRMdapliw_actividad_agenda.sort(function(a,b)
        {
            return (a.fechaInvertida - b.fechaInvertida);
        });

        $j.each(arregloActividades, function(clave, datos)  
        {
            if (datos.estatus == "false")
            {
                actividadMasAntigua = datos.nombreActividad;
                fechaMasAntigua = 
                    datos.diaPlanificado + "/" + 
                    datos.mesPlanificado + "/" +
                    datos.anoPlanificado;
                fechaInvertidaAntigua = datos.fechaInvertida;
                return false;
            }
        });        
    }

    if (actividadMasAntigua != "")
    {
        var fechaActual = new Date();

        var mes = fechaActual.getMonth()+1;
        var dia = fechaActual.getDate();

        var fechaActualInvertida = fechaActual.getFullYear() + 
            (mes<10 ? '0' : '') + mes + 
        (dia<10 ? '0' : '') + dia;

        if (fechaInvertidaAntigua < fechaActualInvertida)
        {
            datosActividadPendiente = 
                "<p class='letraAmarilla'>" +
                    "<b>Actividad planificada: </b>" + actividadMasAntigua + 
                    " <b>Fecha: </b>" + fechaMasAntigua +
                "</p>" +
                "<p>" +
                    "<button class='btn btn-link fondoAzul ultimaActividad60' id='ultimaActividad60" + idBien + "'>" +
                        "Ver más..." +
                    "</button>" +
                "</p>";
        }
        else
        {
            datosActividadPendiente = 
                "<p class='letraVerde'>" + 
                    "<b>Actividad planificada: </b>" + actividadMasAntigua + 
                    " <b>Fecha: </b>" + fechaMasAntigua +
                "</p>" +
                "<p>" +
                    "<button class='btn btn-link fondoAzul ultimaActividad60' id='ultimaActividad60" + idBien + "'>" +
                        "Ver más..." +
                    "</button>" +
                "</p>";
        }
    }
    else
    {
        datosActividadPendiente =

            "<p class='letraRoja'>" +
                "Esta propiedad no tiene actividades planificadas en la agenda." +
            "</p>" +
            "<p>" +
                "<button class='btn btn-link fondoAzul ultimaActividad60' id='ultimaActividad60" + idBien + "'>" +
                    "Ver más..." +
                "</button>" +
            "</p>";
    }

    $j("#primeraActividadPendiente" + idBien).html(datosActividadPendiente);
}

function mostrarAgenda()
{
    var agendaPrincipal = "";

    $j.each(gBienes, function(clave, bien)  
    {
        agendaPrincipal += 
            "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                "<div class='card detalleBienes60'>" +
                    "<a href=" + bien.guid + "title='Ver propiedad'>";
                                            
                    if (gDatosBienes[bien.ID]._thumbnail_id)
                    {
                        agendaPrincipal += 
                            "<img src=" + gDatosBienes[bien.ID]._thumbnail_id[0].valor + " class='card-img-top img-fluid' alt='Foto de la propiedad'>";
                    }
                    else
                    {
                        agendaPrincipal += "Foto de la propiedad";
                    }
            
                    agendaPrincipal +=                         
                    "</a>" +    
                    "<div class='card-block'>" +
                        "<h4 class='card-title' id='nombreDelBien" + bien.ID + "'>" + bien.__name + "</h4>" +

                        "<div class='card bg-light text-dark'>" +
                            "<div class='card-body' id='primeraActividadPendiente" + bien.ID + "'>" + 
                            "</div>" +
                        "</div>" + 

                        "<div class='form-group'>" +
                            "<label for='buscarCaptador60" + bien.ID + "'>Captador responsable: </label>" +
                            "<input type='text' id='buscarCaptador60-" + bien.ID + "' class='form-control buscarCaptador60'" + 
                                "value='" + gMatrizBienes[bien.ID].nombre_autor + "'>" +
                        "</div>" +
                        "<div id='mensajesUsuario60" + bien.ID + "'>" +
                        "</div>" +

                        "<div class='card-footer'>" +
                            "<p>" +                                                            
                                "<a href=<?= mvc_public_url(array('controller' => 'submit-property')) . '?edit_property=" + bien.ID + "' ?>" + 
                                    " class='btn btn-light' id='editarPropiedad60' title='Editar propiedad'>" +
                                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                                    "crmdapliw/app/public/images/pencil.svg alt='Editar propiedad' class='icon'>" +
                                "</a>" +

                                "<button class='btn btn-light personas60' id='personas60-" + bien.ID + "' title='Personas'>" +
                                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                                    "crmdapliw/app/public/images/people.svg alt='Personas' class='icon'>" +
                                "</button>" +

                                "<button class='btn btn-light documentos60' id='documentos60-" + bien.ID + "' title='Documentos'>" +
                                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                                    "crmdapliw/app/public/images/document.svg alt='Documentos' class='icon'>" +
                                "</button>" +

                            "</p>" +
                        "</div>" +  

                    "</div>" +
                "</div>" +
            "</div>";
    });

    $j("#cicloBienes60").html(agendaPrincipal);

    $j.each(gBienes, function(clave, bien)  
    {
        primeraActividadPendiente(bien.ID);
    });    
}

function agenda(idPost)
{
    var agenda =
        "<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas para " + gMatrizBienes[idPost].post_title + "</h2>" +
        "<h3 class='letraAzul'>Captador responsable: " + gMatrizBienes[idPost].nombre_autor + "</h3>" +
        "<br />" +
        "<br />" +
        "<div class='row'>";

    if (gDatosBienes[idPost]._thumbnail_id)
    {
        agenda +=
            "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                "<div class='card'>" +
                    "<img src=" + gDatosBienes[idPost]._thumbnail_id[0].valor + " class='card-img-top img-fluid' alt='Foto de la propiedad'>" +
                "</div>" +
            "</div>" +
            "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
    }
    else
    {
        agenda +=
            "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                "<div class='card'>" +
                    "Foto de la propiedad" +
                "</div>" +
            "</div>" +
            "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
    }

    if (gDatosBienes[idPost].CRMdapliw_actividad_agenda)
    {
        arregloActividades = gDatosBienes[idPost].CRMdapliw_actividad_agenda.sort(function(a,b)
        {
            return (a.fechaInvertida - b.fechaInvertida);
        });

        $j.each(arregloActividades, function(clave, datos)  
        {
            if (datos.estatus == "false")
            {
                idActividad = datos.id;

                fechaPlanificada = 
                    datos.diaPlanificado +
                    "/" +
                    datos.mesPlanificado + 
                    "/" +
                    datos.anoPlanificado;

                agenda += 
                    "<div class='card' id='actividad80-" + clave + "-" + idActividad + "-" + idPost + "'>" +
                        "<div class='card-block'>" + 
                            "<h4 class='card-title'>" + datos.nombreActividad + "</h4>" +
                            "<div class='card bg-light text-dark'>" +
                                "<div class='card-body'>" +

                                    "<div class='row'>" +
                                        "<div class='col-md-12'>" +
                                            "<div class='form-group'>" + 
                                                "<label for='informacionAdicional80'>Notas</label>" +  
                                                "<input type='text' class='form-control informacionAdicional10' id='informacionAdicional80-" + 
                                                    clave + "-" + idActividad + "-" + idPost + "' value='" + datos.informacionAdicional + "'>" + 
                                            "</div>" +
                                        "</div>" + 
                                    "</div>" +

                                    "<div class='row'>" +
                                        "<div class='col-md-6'>" +
                                            "<div class='form-group'>" + 
                                                "<label for='fechaPlanificada80'>Fecha</label>" +  
                                                "<input type='text' class='form-control fechaPlanificada80' id='fechaPlanificada80-" + 
                                                    clave + "-" + idActividad + "-" + idPost + "' value=" + fechaPlanificada + ">" + 
                                            "</div>" +
                                        "</div>" +
                                        
                                        "<div class='col-md-3'>" +
                                            "<div class='form-check'>" +
                                                "<input type='checkbox' class='form-check-input cerrarActividad80' id='cerrarActividad80-" + 
                                                    clave + "-" + idActividad + "-" + idPost + "'>" +
                                                "<label class='form-check-label' for='cerrarActividad80'>&nbsp;&nbsp;Cerrar</label>" +
                                            "</div>" +
                                        "</div>"+

                                        "<div class='col-md-3'>" +
                                            "<button class='guardarCambios80 btn btn-link' title='Guardar cambios' id='guardarCambios80-" + 
                                                clave + "-" + idActividad + "-" + idPost + "'>" + 
                                                "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" +
                                                "crmdapliw/app/public/images/pencil.svg alt='Guardar cambios' class='icon'>" +
                                            "</button>" +
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
        });
    } 

    agenda += "</div></div>";

    for (i = 1; i <= 200; i++) 
    {
        agenda += "<br />";
    }

    $j("#agenda80").html(agenda).contents().find(".fechaPlanificada80").datepicker(
        {
            dateFormat: "dd/mm/yy", 
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
            changeMonth: true,
            changeYear: true
        });
}

function actualizarCaptador(idBien, idCaptadorAnterior, idNuevoCaptador, nombreNuevoCaptador, indicadorCaptador, idMensaje)
{
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos</strong>" +
        "</div>";

  	$j(idMensaje).html(mensajesUsuario);

    var jsonActualizarCaptador = 
    {
        "idBien" : idBien,
        "idCaptadorAnterior" : idCaptadorAnterior,
        "idNuevoCaptador" : idNuevoCaptador
    }

    $j.post("<?= mvc_public_url(array('controller' => 'posts', 'action' => 'actualizar_captador')) ?>", 
        jsonActualizarCaptador, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {
            gMatrizBienes[idBien].post_author = idNuevoCaptador;
            gMatrizBienes[idBien].nombre_autor = nombreNuevoCaptador;

            if (indicadorCaptador == 1)
            {
                $j("#buscarCaptador60-" + idBien).val(gMatrizBienes[idBien].nombre_autor);
            }

            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";
            $j(idMensaje).html(mensajesUsuario);
        } 
        else 
        {
            mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" + response.mensaje + "</strong>" +
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

function compradoresPotenciales(idBien)
{
    var compradoresPotenciales =
            "<div class='col-12 col-sm-6 col-md-12 mb-3'>";

    if (gDatosBienes[idBien].CRMdapliw_cliente)
    {
        arregloCompradores = gDatosBienes[idBien].CRMdapliw_cliente.sort(function(a,b)
        {
            return (b.posicionOriginal - a.posicionOriginal);
        });

        $j.each(arregloCompradores, function(clave, datos)  
        {
            if (datos.activo == "true")
            {
                compradoresPotenciales += 
                    "<div class='card' id='comprador100-" + clave + "-" + datos.idUser + "-" + idBien + "'>" +
                        "<div class='card-block'>" + 
                            "<h4 class='card-title'>" + datos.valor + "</h4>" +
                            "<div class='card bg-light text-dark'>" +
                                "<div class='card-body'>" +
                                    "<div class='col-md-3'>" +
                                        "<div class='form-check'>" +
                                            "<input type='checkbox' class='form-check-input eliminarComprador100' id='eliminarComprador100-" + 
                                                clave + "-" + datos.idUser + "-" + idBien + "'>" +
                                            "<label class='form-check-label' for='eliminarComprador100-" + 
                                                clave + "-" + datos.idUser + "-" + idBien + "'>&nbsp;&nbsp;Eliminar</label>" +
                                        "</div>" +
                                    "</div>"+

                                "</div>" +
                            "</div>" +
                        "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                        "<div class='col-md-12'>" +
                            "<div id='mensajesComprador100-" + clave + "-" + datos.idUser + "-" + idBien + "'>" +
                            "</div>" +
                        "</div>" +
                    "</div>" + 
                    "<br />";
            }
        });
    } 

    compradoresPotenciales += "</div>";

    for (i = 1; i <= 200; i++) 
    {
        compradoresPotenciales += "<br />";
    }

    $j("#compradoresPotenciales100").html(compradoresPotenciales);
}

function personasBien(idBien)
{

    $j("#tituloPersonas100").html("Personas relacionadas con la propiedad " + gMatrizBienes[idBien].post_title);

    if (gDatosBienes[idBien]._thumbnail_id)
    {
        $j("#imagen100").html("<img src=" + gDatosBienes[idBien]._thumbnail_id[0].valor + " class='card-img-top img-fluid' alt='Foto de la propiedad'>");
    }
    else
    {
        $j("#imagen100").html("Foto de la propiedad");
    }

    $j("#nombrePropietario100").val(gMatrizBienes[idBien].propietario);
    $j("#mensajePropietario100").html("");

    $j("#nombreCaptador100").val(gMatrizBienes[idBien].nombre_autor);
    $j("#mensajeCaptador100").html("");

    $j("#mensajePromotor100").html("");

    $j("#mensajeCliente100").html("");

    compradoresPotenciales(idBien);
}

function guardarPersona(indicadorCheckbox)
{
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos</strong>" +
        "</div>";

    $j("#mensajesUsuario30").html(mensajesUsuario);
    window.scrollTo(0, 0);

    $j("#primerNombre110").val($j.trim($j("#primerNombre110").val().toUpperCase()));
    $j("#segundoNombre110").val($j.trim($j("#segundoNombre110").val().toUpperCase()));
    $j("#primerApellido110").val($j.trim($j("#primerApellido110").val().toUpperCase()));
    $j("#segundoApellido110").val($j.trim($j("#segundoApellido110").val().toUpperCase()));
    $j("#celular110").val($j.trim($j("#celular110").val().toUpperCase()));
    $j("#telefonoFijo110").val($j.trim($j("#telefonoFijo110").val().toUpperCase()));
    $j("#email110").val($j.trim($j("#email110").val().toLowerCase()));
    $j("#direccion110").val($j.trim($j("#direccion110").val().toUpperCase())); 

    primerNombre = $j("#primerNombre110").val(); 

    if ($j("#segundoNombre110").val().length > 0)
    {
        segundoNombre = $j("#segundoNombre110").val();  
    }    
    else
    {
        segundoNombre = "";
    }

    primerApellido = $j("#primerApellido110").val();

    if ($j("#segundoApellido110").val().length > 0)
    {
        segundoApellido = $j("#segundoApellido110").val();  
    }    
    else
    {
        segundoApellido = "";
    }

    if (indicadorCheckbox == 0)
    {
        roles = ["Cliente"];
    }
    else
    {
        roles = [];
        $j("#rolesCheckbox110").each(function (index) 
        {
            if ($j(this).prop("checked") == true)
            {
                if ($j(this).attr("id") == "administrador110")
                {
                    roles.push("Administrador");
                }
                if ($j(this).attr("id") == "gestorNegocios110")
                {
                    roles.push("Gestor de negocios");
                }
                if ($j(this).attr("id") == "captador110")
                {
                    roles.push("Captador");
                }
                if ($j(this).attr("id") == "promotor110")
                {
                    roles.push("Promotor");
                }
                if ($j(this).attr("id") == "propietario110")
                {
                    roles.push("Propietario");
                }
                if ($j(this).attr("id") == "Cliente110")
                {
                    roles.push("Cliente");
                }
            }
        });
    } 

    if ($j("#celular110").val().length > 0)
    {
        celular = $j("#celular110").val(); 
    }    
    else
    {
        celular = "";
    }

    if ($j("#telefonoFijo110").val().length > 0)
    {
        telefonoFijo = $j("#telefonoFijo110").val();
    }    
    else
    {
        telefonoFijo = "";
    }

    email = $j("#email110").val();

    if ($j("#direccion110").val().length > 0)
    {
        direccion = $j("#direccion110").val();  
    }    
    else
    {
        direccion = "";
    }

    jsonPersona = 
        {"idPost" : gIdPostActual,
        "persona" :  
            {
                "tipoIdentificacion" : $j("#tipoIdentificacion110").val(),
                "numeroIdentificacion" : $j("#numeroIdentificacion110").val(),
                "primerNombre" : primerNombre,
                "segundoNombre" : segundoNombre,
                "primerApellido" : primerApellido,
                "segundoApellido" : segundoApellido,
                "roles" : roles,
                "celular" : celular,
                "telefonoFijo" : telefonoFijo,
                "email" : email,
                "direccion" : direccion
            }
        };

    console.log(jsonPersona);

    $j.post("<?= mvc_public_url(array('controller' => 'users', 'action' => 'agregar_persona')) ?>", 
        jsonPersona, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {   
            ultimaPosicion = 0;

            $j.each(gDatosBienes[gIdPostActual].CRMdapliw_cliente, function(clave, datos)  
            {
                ultimaPosicion = clave;
            });
            ultimaPosicion++;

            compradorPotencial = 
                {
                    "valor" : primerNombre + " " + segundoNombre + " " + primerApellido + " " + segundoApellido,
                    "id" : response.idPostmeta,
                    "posicionOriginal" : ultimaPosicion,
                    "idUser" : response.idUser,
                    "activo" : "true"
                }                 

            gDatosBienes[gIdPostActual].CRMdapliw_cliente.push(compradorPotencial);

            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

            $j("#mensajesUsuario30").html(mensajesUsuario);

            $j("#agregarPersonas110").addClass("noVer");
            $j("#cerrarAgregarPersona10").addClass("noVer");
            $j("#guardarPersona10").addClass("noVer");
            personasBien(gIdPostActual);
            $j("#personas100").removeClass("noVer");
            $j("#cerrarPersonas10").removeClass('noVer');
            $j("#agregarPersona10").removeClass("noVer");
            window.scrollTo(0, 0);           
        } 
        else 
        {
            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>"; 

        	$j("#mensajesUsuario30").html(mensajesUsuario);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong> Estimado usuario ocurrió una falla en el servidor y los datos no se pudieron guardar !</strong>" +
            "</div>"; 

        $j("#mensajesUsuario30").html(mensajesUsuario);
    });  
}

function validarPersona(indicadorCheckbox)
{
    var indicadorError = 0; 
    var anterior =
        "<div class='alert alert-danger alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>";

    var posterior = "</strong></div>"; 
    var indicadorTildado = 0; 
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    $j("#mensajesUsuario30").html("");
    
    $j(".mensajes110").each(function()
    {   
        $j(this).html("");
    });
    
    if ($j("#tipoIdentificacion110").val() == "")  
    {   
        indicadorError = 1;
        mensajeError = anterior + "Seleccione el tipo de identificación" + posterior;
        $j("#mensajesTipo110").html(mensajeError);
    }

    if ($j("#numeroIdentificacion110").val() == 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "Escriba el número de identificacion" + posterior;
        $j("#mensajesIdentificacion110").html(mensajeError);
    }

    if ($j("#primerNombre110").val().length <= 0) 
    {   
        indicadorError = 1;
        mensajeError = anterior + "Escriba el primer nombre de la persona" + posterior;
        $j("#mensajesPrimerNombre110").html(mensajeError);
    }

    if ($j("#primerApellido110").val().length <= 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "Por favor escriba el primer apellido de la persona" + posterior;
        $j("#mensajesPrimerApellido110").html(mensajeError);
    }

    if ($j("#celular110").val().length <= 0 && $j("#telefonoFijo110").val().length <= 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "Por favor escriba al menos un número de teléfono de la persona" + posterior;
        $j("#mensajesCelular110").html(mensajeError);
        $j("#mensajesTelefono110").html(mensajeError);
    }

    if ($j("#email110").val().length <= 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "Por favor escriba el correo electrónico de la persona" + posterior;
        $j("#mensajesEmail110").html(mensajeError);
    }
    else
    {
        if (regex.test($j('#email110').val().trim()) == false) 
        {
            indicadorError = 1;
            mensajeError = anterior + "La dirección de correo no es válida" + posterior;
            $j("#mensajesEmail110").html(mensajeError);
        }
    }

    if (indicadorCheckbox == 1)
    {
        $j("#rolesCheckbox110").each(function (index) 
        {
            if ($j(this).prop("checked") == true)
            {
                indicadorTildado = 1;
                return false;
            }
        });
        if (indicadorTildado == 0)
        {
            indicadorError = 1;
            mensajeError = anterior + "Por favor marque al menos un rol para la persona" + posterior;
            $j("#mensajesRoles110").html(mensajeError);
        }
    }

    if (indicadorError == 0)
    {
        guardarPersona(indicadorCheckbox);
    }
    else
    {
        mensajeError = anterior + "Estimado usuario uno o más datos contienen errores, por favor verifique" + posterior;
        $j("#mensajesUsuario30").html(mensajeError);
        window.scrollTo(0, 0);           
    }
}

// Eventos
$j(document).ready(function()
{
    mostrarAgenda();

    $j('#inicioCrm10').click(function()
    {
        refrescarMenu();
        $j("#inicioCrm10").removeClass('noVer');           
        $j("#botonBuscar10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        $j("#otrasOpciones10").removeClass('noVer');

    });

    $j("#botonBuscar10").click(function()
    {
        $j("#bienes60").addClass('noVer');
        $j("#botonBuscar10").addClass('noVer');
        $j("#publicarPropiedad10").addClass('noVer');
        $j("#otrasOpciones10").addClass('noVer');
        $j("#busqueda40").removeClass('noVer');
        $j("#cerrarBusqueda10").removeClass('noVer');
        $j("#ejecutarBusqueda10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#cerrarBusqueda10').click(function()
    {
        $j("#busqueda40").addClass('noVer');
        $j("#cerrarBusqueda10").addClass('noVer');
        $j("#ejecutarBusqueda10").addClass('noVer');
        $j("#bienes60").removeClass('noVer');
        $j("#botonBuscar10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        $j("#otrasOpciones10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j("#cicloBienes60").on("click", ".ultimaActividad60", function()
    {       
        gPosicionAnterior = $j(this).attr('id');
        gIdPostActual = $j(this).attr('id').substring(17);
        $j('#bienes60').addClass('noVer');
        $j("#botonBuscar10").addClass('noVer');
        $j("#publicarPropiedad10").addClass('noVer');
        $j("#otrasOpciones10").addClass('noVer');
        agenda(gIdPostActual);
        $j("#agenda80").removeClass("noVer");
        $j("#cerrarAgenda10").removeClass('noVer');
        $j("#agregarActividad10").removeClass("noVer");
        window.scrollTo(0, 0);
        
    });
  
    $j('#cerrarAgenda10').click(function()
    {
        $j("#agenda80").addClass("noVer");
        $j("#cerrarAgenda10").addClass('noVer');
        $j("#agregarActividad10").addClass("noVer");
        $j("#mensajesUsuario30").html("");
        $j('#bienes60').removeClass('noVer');
        primeraActividadPendiente(gIdPostActual);
        $j("#botonBuscar10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        $j("#otrasOpciones10").removeClass('noVer');
        $j("#" + gPosicionAnterior).focus();
    });

    $j("#agenda80").on("click", ".guardarCambios80", function()
    {
        var idActividad = $j(this).attr('id').substring(17); 
        guardarCambiosAgenda(idActividad);       
    });

    $j('#agregarActividad10').click(function()
    {
        $j('#agenda80').addClass('noVer');
        $j('#agregarActividad90').removeClass('noVer');
        $j('#actividadAgenda90').val("");
        $j('#informacionAdicional90').val("");
        $j('#fechaPlanificada90').val("");
        $j('#cerrarAgenda10').addClass('noVer');
        $j('#agregarActividad10').addClass('noVer');
        $j('#cerrarAgregarActividad10').removeClass('noVer');
        $j('#guardarActividad10').removeClass('noVer');
        $j('#tituloAgregarActividad90').html("Planificar actividades para " + gMatrizBienes[gIdPostActual].post_title); 
        window.scrollTo(0, 0);
    });

    $j("#fechaPlanificada90").datepicker(
        {
            dateFormat: "dd/mm/yy", 
            monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
            dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ], 
            changeMonth: true,
            changeYear: true
        });

    $j('#cerrarAgregarActividad10').click(function()
    {
        $j("#agregarActividad90").addClass("noVer");
        $j("#cerrarAgregarActividad10").addClass('noVer');
        $j("#guardarActividad10").addClass("noVer");
        $j('#agenda80').removeClass('noVer');
        $j("#cerrarAgenda10").removeClass('noVer');
        $j("#agregarActividad10").removeClass('noVer');
    });

    $j('#guardarActividad10').click(function()
    {
        guardarActividad();
    });

    $j('.buscarCaptador60').autocomplete(
    {
        source: <?= json_encode($captadoresAsc) ?>,
        select: function( event, ui ) 
        {   
            idBien = $j(this).attr("id").substring(17);
            idCaptadorAnterior = gMatrizBienes[idBien].post_author;
            idNuevoCaptador = ui.item.id;
            nombreNuevoCaptador = ui.item.value;
            indicadorCaptador = 0;
            idMensaje = "#mensajesUsuario60" + idBien; 
            actualizarCaptador(idBien, idCaptadorAnterior, idNuevoCaptador, nombreNuevoCaptador, indicadorCaptador, idMensaje);
        }
    });

    $j("#cicloBienes60").on("click", ".personas60", function()
    {       
        gPosicionAnterior = $j(this).attr('id');
        gIdPostActual = $j(this).attr('id').substring(11);
        $j('#bienes60').addClass('noVer');
        $j("#botonBuscar10").addClass('noVer');
        $j("#publicarPropiedad10").addClass('noVer');
        $j("#otrasOpciones10").addClass('noVer');
        personasBien(gIdPostActual);
        $j("#personas100").removeClass("noVer");
        $j("#cerrarPersonas10").removeClass('noVer');
        $j("#agregarPersona10").removeClass("noVer");
        window.scrollTo(0, 0);
    });

    $j('#cerrarPersonas10').click(function()
    {
        $j("#personas100").addClass("noVer");
        $j("#cerrarPersonas10").addClass('noVer');
        $j("#agregarPersona10").addClass("noVer");
        $j('#bienes60').removeClass('noVer');
        $j("#botonBuscar10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        $j("#otrasOpciones10").removeClass('noVer');
        $j("#" + gPosicionAnterior).focus();
    });

    $j('#nombreCaptador100').autocomplete(
    {
        source: <?= json_encode($captadoresAsc) ?>,
        select: function( event, ui ) 
        {   
            idBien = gIdPostActual;
            idCaptadorAnterior = gMatrizBienes[idBien].post_author;
            idNuevoCaptador = ui.item.id;
            nombreNuevoCaptador = ui.item.value;
            indicadorCaptador = 1;
            idMensaje = "#mensajeCaptador100"; 
            actualizarCaptador(idBien, idCaptadorAnterior, idNuevoCaptador, nombreNuevoCaptador, indicadorCaptador, idMensaje);
        }
    });

    $j('#nombreCliente100').autocomplete(
    {
        source: <?= json_encode($clientesAsc) ?>,
        select: function( event, ui ) 
        {   
        }
    });

    $j("#agregarPersona10").click(function()
    {       
        $j("#personas100").addClass("noVer");
        $j("#cerrarPersonas10").addClass('noVer');
        $j("#agregarPersona10").addClass('noVer');
        $j("#tituloAgregarPersonas110").html("Agregar personas a la propiedad " + gMatrizBienes[gIdPostActual].post_title);
        $j("#agregarPersonas110").removeClass("noVer");
        $j("#rolesCheckbox110").addClass('noVer');
        $j("#cerrarAgregarPersona10").removeClass('noVer');
        $j("#guardarPersona10").removeClass("noVer");
        window.scrollTo(0, 0);
    });

    $j("#guardarPersona10").click(function()
    {
        indicadorCheckbox = 0;
        validarPersona(indicadorCheckbox);
    });       

});
</script>
