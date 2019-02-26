<div class="container">
    <?php if (isset($objects)): ?>
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
        <div class="row propiedades">
            <div class="col-md-12">
                <?php foreach ($objects as $object): ?>
                    <div class="row tituloDelPost">
                        <p><b><?= $object->__name ?></b></p>
                    </div>
                    <div class="row cuerpoDelPost">
                        <div class="col-md-1" id="imagenDelPost">
                        </div>
                        <div class="col-md-11">
                            <div class="row datosDelPost">
                                <div class="col-md-12">
                                    <p>
                                        <?=
                                            'ID: ' . $object->ID .
                                            ', autor: ' . $object->post_author . 
                                            ', estatus: ' . $object->post_status .
                                            ' Y URI: ' . $object->guid
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row botonesDelPost">
                                <div class="col-md-12">
                                    <p><a href="#" class="agregarPropietario btn btn-light" id=<?= 'post' . $object->ID ?> title="Agregar datos del propietario"><img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/person.svg" ?> alt="Buscar" class="icon"></a></p>
                                </div>
                            </div>
                            <div class="row formularioPost">
                                <div class="col-md-12 camposFormularioPost">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                <?php endforeach; ?>
                <br />
                <p class="paginacion"><?php echo $this->pagination(); ?></p>
                <br />
                <br />
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
    <div class='row noVer' id="formularioAgenda">
        <div class='col-md-12'> 
            <p id="tituloPropiedadAgenda"></p> 
            <div class='input-group mb-3'> 
                <div class='input-group-prepend'> 
                    <label class='input-group-text' for='tipoDeDocumento'>Tipo de documento</label> 
                </div>
                <select class='custom-select' id='tipoDeDucumento'> 
                    <option selected></option> 
                    <option value='E'>E - Extranjero</option> 
                    <option value='G'>G - Gobierno</option> 
                    <option value='J'>J - Jurídico</option> 
                    <option value='P'>P - Pasaporte</option> 
                    <option value='V'>V - Venezolano</option> 
                </select> 
            </div> 
            <div class='form-group'> 
                <label for='tipoDeDocumento'>Tipo de documento</label> 
                <input type='text' class='form-control' id='tipoDeDocumento'> 
            </div> 
            <div class='form-group'> 
                <label for='nroCedulaRif'>Nro. de cédula o RIF</label> 
                <input type='text' class='form-control' id='nroCedulaRif'> 
            </div> 
        </div> 
    </div>
</div>
<br />
<script>
// Variables globales

// Funciones de Javascript
function cerrarActividadAgenda(idPostmeta)
{
    alert('Pasé por cerrarActividadAgenda');

    $("#mensajesAlUusuario").html("Por favor espere un momento...");

    $.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'cerrar_actividad')) ?>", 
        {"idPostmeta" : idPostmeta}, null, "json")          
    .done(function(response) 
    {
        if (response.success) 
        {
            alert('Se actualizó');
            $("#mensajesAlUusuario").html("La actividad se cerró correctamente...");
        } 
        else 
        {
            alert('No se actualizó');
            $("#mensajesAlUusuario").html("La actividad no se pudo cerrar. Intente nuevamente");
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        alert('Falla en el servidor');
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
    $('.agregarPropietario').click(function()
    {
        /* $('#lineaBotonBuscar').addClass('noVer');
        $('.propiedades').addClass('noVer');
        $('.paginacion').addClass('noVer');
        $('#formularioAgenda').removeClass('noVer');      
        $('#tituloPropiedadAgenda').html('<b>' + $(this).attr('id').substring(4) + '</b>'); */
        alert("Pasé por agregarPropietario");
        // cerrarActividadAgenda($(this).attr('id').substring(4));
        cerrarActividadAgenda(1029);
    });
});
</script>