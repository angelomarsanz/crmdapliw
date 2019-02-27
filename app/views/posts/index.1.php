<div class="container">
    <?php if (isset($bienes) && isset($propiedadesBienes)):
        $contadorBienes = 0;
        $matrizBienes = [];
        foreach ($bienes as $bien)
        {
            $matrizBienes[$bien->ID]['post_title'] = $bien->post_title;
            $matrizBienes[$bien->ID]['post_author'] = $bien->post_author;
            $matrizBienes[$bien->ID]['guid'] = $bien->guid;
            $matrizBienes[$bien->ID]['post_status'] = $bien->post_status;
            $contadorBienes++;
        }

        $contadorDatosBienes = 0;
        $datosBienes = [];
        foreach ($propiedadesBienes as $propiedadesBien)
        {
            if ($propiedadesBien->meta_key == "REAL_HOMES_property_images")
            {
                $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = $propiedadesBien->meta_value; 
            }
            elseif ($propiedadesBien->meta_key == "CRMdapliw_actividad_agenda")
            {
                $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = $propiedadesBien->meta_value; 
            }
            elseif ($propiedadesBien->meta_key == "_thumbnail_id")
            {
                foreach ($posts as $post)
                {
                    if ($post->ID == $propiedadesBien->meta_value)
                    {
                        $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key] = $post->guid;
                    }
                }
            }
            else
            {
                $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key] = $propiedadesBien->meta_value;
            }
            $contadorDatosBienes++;
        }
    ?>
        <div class="row" id="encabezado">
            <div class="col-md-12">
            <div class="row">
                    <div class="col-md-12">
                        <br />
                        <p id="mensajesAlUusuario"><p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color: #085b9e">CRM&nbsp;<spam id="lineaBotonBuscar"><a href="#" id="botonBuscar" title="Buscar" class="btn btn-basic"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?> alt="Buscar" class="icon"></a></spam></h1>
                    </div>
                </div>
                <form id="formularioFiltros" style="display:none;">
                    <div class="row">
                        <div class="col-md-3">
                            <p>Agenda</p>
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
                            <p>Personas</p>
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
                            <p>Prestaciones</p>
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
                            <p>Otros</p>
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
                    <div class="row justify-content-center">
                        <p>
                            <button class="btn btn-light"><spam style="color: #085b9e">Búsqueda exacta</spam></button>
                            <button class="btn btn-light"><spam style="color: #085b9e">Búsqueda opcional</spam></button>
                            <a href="#" id="cancelarBusqueda" title="Cancelar búsqueda" class="btn btn-light"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> alt="Cancelar" class="icon"></a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <br />
        <div class="row" id="bienes">
            <div class="col-md-12">
                <?php foreach ($bienes as $bien): ?>
                    <div class="row">
                        <p id=<?= "nombreDelBien" . $bien->ID ?> style="color: #085b9e"><b><?= $bien->__name ?></b></p>
                    </div>
                    <div class="row">
                        <div class="col-md-1" id=<?= "imagenDelBien" . $bien->ID ?>>
                            <a href=<?= $bien->guid ?> title="Ver propiedad"><img src=<?= $datosBienes[$bien->ID]["_thumbnail_id"] ?> class="img-thumbnail" alt="Miniatura propiedad" class="icon"></a>
                        </div>
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <p id=<?php "agenda" . $bien->ID ?>>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p><a href="#" class="btn btn-light botonAgregarActividad" id=<?= "botonAgregarActividad" . $bien->ID ?> title="Agregar actividad"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> alt="Agregar actividad" class="icon"></a></p>
                                    <p><a href="#" class="btn btn-light botonCerrarActividad" id=<?= "botonCerrarActividad" . $bien->ID ?> title="Cerrar Actividad"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/account-logout.svg" ?> alt="Cerrar actividad" class="icon"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                <?php endforeach; ?>
            </div>
        </div>    
    <?php else: ?>
        <div class="row">
            <br />
            <br />
            <p><b>Estimado usuario para acceder al CRM debes </b><?php echo $this->html->link('iniciar sesión', array('controller' => 'ingresar-al-sistema'), array('style' => 'color: blue;')); ?></p>
            <br />
            <br />
        </div>
    <?php endif; ?>
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
                <a href="#" id="descartarActividad" title="Descartar actividad " class="btn btn-light noVer"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> alt="Cancelar actividad" class="icon"></a>
                <a href="#" id="guardarActividad" title="Guardar actividad" class="btn btn-light noVer"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> alt="Guardar actividad" class="icon"></a>
            </form>
        </div> 
    </div>
</div>
<br />
<script>
// Variables globales
var matrizBienes = <?php echo json_encode($matrizBienes); ?>;
var datosBienes = <?php echo json_encode($datosBienes); ?>;
var idBienSeleccionado = 0;

// Funciones de Javascript
function agregarActividadAgenda(jsonActividad)
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

function cerrarActividadAgenda(jsonCierreActividad)
{
    $("#mensajesAlUusuario").html("Por favor espere un momento...");

    $.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'cerrar_actividad')) ?>", 
        {"idPostmeta" : 5446, "informacionAdicional" : "OK"}, null, "json")          
    .done(function(response) 
    {
        if (response.success) 
        {
            $("#mensajesAlUusuario").html("La actividad se cerró correctamente... Id: " + response.id);
        } 
        else 
        {
            $("#mensajesAlUusuario").html("La actividad no se pudo cerrar. Por favor intente nuevamante");
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
    $('#botonBuscar').click(function()
    {
        $('#formularioFiltros').toggle('slow');
        $('#lineaBotonBuscar').addClass('noVer');
    });
    $('#cancelarBusqueda').click(function()
    {
        $('#formularioFiltros').toggle('slow');
        $('#lineaBotonBuscar').removeClass('noVer');
    });
    $('.botonAgregarActividad').click(function()
    {
        // alert('id ' + $(this).attr('id') + ' ' + $(this).attr('id').substring(21));
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
                    "estatus" : 1
                }
            };

        agregarActividadAgenda(jsonActividad);
    });
    $('.botonCerrarActividad').click(function()
    {
        jsonCierreActividad =
            {"idPostmeta" : 5446, 
            "informacionAdicional" : "Se ejecutó la actividad"};

        cerrarActividadAgenda(jsonCierreActividad);
    });
});
</script>