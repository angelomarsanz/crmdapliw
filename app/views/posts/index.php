<div class="container">
    <?php if (isset($vectorGeneral["matrizBienes"]) && isset($vectorGeneral["datosBienes"])): ?>
        <!-- div con sufijo 00 -->
        <div class="container" id="testFunction00">
        </div>

        <!-- div con sufijo 10 -->
        <div class="menuPrincipal" id="menuCrm10">

            <a href=<?= mvc_public_url(array("controller" => "posts")) ?> class="btn btn-link" id="inicioCrm10" title="Inicio CRM">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?>
                alt="Inicio CRM" class="iconoMenu">
            </a>

            <a href=<?= mvc_public_url(array("controller" => "posts")) ?> class="btn btn-link" id="recargarPagina10" title="Recargar página">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/reload.svg" ?>
                alt="Recargar página" class="iconoMenu">
            </a>

			<button title="Cerrar" class="btn btn-link noVer" id="cerrarNotificaciones10">
				<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?>
				alt="Cerrar notificaciones" class="iconoMenu">
			</button>

			<button title="Cerrar" class="btn btn-link noVer" id="cerrarBusquedaPropiedades10">
				<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?>
				alt="Cerrar búsqueda propiedades" class="iconoMenu">
			</button>

			<button title="Ejecutar búsqueda" class="btn btn-link noVer" id="busquedaPropiedades10">
				<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
				alt="Ejecutar búsqueda propiedades" class="iconoMenu">
			</button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarPropiedadesFiltradas10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar propiedades filtradas" class="iconoMenu">
            </button>

			<a href=<?= mvc_public_url(array("controller" => "submit-property")) ?> class="btn btn-link noVer" id="publicarPropiedad10" title="Publicar propiedad" target="_blank">
				<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?>
				alt="Publicar propiedad" class="iconoMenu">
			</a>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgenda10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar agenda" class="iconoMenu">
            </button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgendaSinActividad10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar agenda sin actividad" class="iconoMenu">
            </button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarActividadIndividual10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar actividad individual" class="iconoMenu">
            </button>

			<button title="Cerrar" class="btn btn-link noVer" id="cerrarBusquedaAgenda10">
				<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?>
				alt="Cerrar búsqueda agenda" class="iconoMenu">
			</button>

			<button title="Ejecutar búsqueda" class="btn btn-link noVer" id="busquedaAgenda10">
				<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
				alt="Ejecutar búsqueda agenda" class="iconoMenu">
			</button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgendaFiltrada10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar agenda filtrada" class="iconoMenu">
            </button>

            <button title="Agregar actividad" class="btn btn-link noVer" id="agregarActividad10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                alt="Agregar actividad" class="iconoMenu">
            </button>          

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgregarActividad10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar agregar actividad" class="iconoMenu">
            </button>

            <button title="Guardar actividad" class="btn btn-link noVer" id="guardarActividad10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> 
                alt="Agregar actividad" class="iconoMenu" id="imagenGuardarActividad10">
            </button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarPersonas10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar personas" class="iconoMenu">
            </button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarPersonasSinActividad10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar personas sin actividad" class="iconoMenu">
            </button>

            <button title="Agregar persona" class="btn btn-link noVer" id="agregarPersona10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                alt="Agregar persona" class="iconoMenu">
            </button>          

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgregarPersona10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar agregar persona" class="iconoMenu">
            </button>

            <button title="Guardar persona" class="btn btn-link noVer" id="guardarPersona10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> 
                alt="Guardar persona" class="iconoMenu" id="imagenGuardarPersona10">
            </button>

        </div>

        <!-- div con sufijo 20 -->
        <div class="container" id="tituloCrm20">
			<div class="row">
				<div class="col-md-2">
					<h1 class="letraAzul">CRM</h1>
				</div>
				<div class="col-md-3" id="grupoVista20">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="vistas20">Vistas</label>
						</div>
						<select class="custom-select" id="vistas20">
							<option selected value=""></option>
							<option value="Lista con imágenes">Lista con imágenes</option>
							<option value="Lista sin imágenes">Lista sin imágenes</option>
							<option value="Mosaicos con imágenes">Mosaicos con imágenes</option>
							<option value="Mosaicos sin imágenes">Mosaicos sin imágenes</option>
						</select>
						<div id="mensajesVistas20" class="mensajesUsuario"></div>
					</div>
				</div>
                <div class="col-md-1 noVer" id="notificaciones20">
					<button title="Notificaciones" class="btn btn-link" id="verNotificaciones20">
					    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/bell.svg" ?>
					    alt="Ver notificaciones" class="icono">
				    </button>
                    <spam class="letraRoja" id="cantidadNotificaciones20"></spam>
				</div>
			</div>
        </div>
        
        <!-- div con sufijo 30 -->
        <div class="container mensajesUsuario" id="mensajesUsuario30">
        </div>
 
		<!-- div con sufijo 40 -->
        <div class="container formulario" id="principal40">
			<div class="row">
				<div class="col-4 col-md-4 text-center">
					<button title="Propiedades" class="btn btn-link" id="propiedades40">
						<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/tmbr-soloicon.svg" ?>
							alt="Propiedades" class="img-fluid iconoPrincipal">
					</button>
				</div>
				<div class="col-4 col-md-4 text-center">
					<button title="Agenda" class="btn btn-link" id="agenda40">
						<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/calendar.svg" ?>
							alt="Agenda" class="img-fluid mx-auto iconoPrincipal">
					</button>
				</div>
				<div class="col-4 col-md-4 text-center">
					<button title="Personas" class="btn btn-link" id="personas40">
						<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/people.svg" ?>
							alt="Personas" class="img-fluid iconoPrincipal">
					</button>
				</div>
			</div>
		</div>
 
        <!-- div con sufijo 50 -->
        <div class="container formulario noVer" id="busquedaPropiedades50">
			<h2>Filtros Propiedades</h2>
            <div class="row">
                <div class="col-md-4">
					<p class="letraAzul">Individual</p>
					<div class="form-group noVer">
						<label for="busquedaCodigo50">Código</label>
						<input type="text" class="form-control texto50" id="busquedaCodigo50">
					</div>
					<div class="form-group">
						<label for="busquedaNombre50">Nombre</label>
						<input type="text" class="form-control texto50" id="busquedaNombre50">
					</div>
                </div>
                <div class="col-md-4">
					<p class="letraAzul">Prestaciones</p>
					<div class="form-group">
						<label for="busquedaHabitaciones50">Habitaciones</label>
						<input type="number" class="form-control numero50" id="busquedaHabitaciones50">
					</div>
					<div class="form-group">
						<label for="busquedaBanos50">Baños</label>
						<input type="Number" class="form-control numero50" id="busquedaBanos50">
					</div>
					<div class="form-group">
						<label for="busquedaGarajes50">Garajes</label>
						<input type="Number" class="form-control numero50" id="busquedaGarajes50">
					</div>
					<div class="form-group">
						<label for="busquedaArea50">Área M2 (igual o mayor a)</label>
						<input type="Number" class="form-control numero50" id="busquedaArea50">
					</div>
				</div>
				<div class="col-md-4">
					<p class="letraAzul">Otros</p>
					<div class="form-group noVer">
						<label for="busquedaZona50">Zona</label>
						<input type="text" class="form-control texto50" id="busquedaZona50">
					</div>
					<p>Rango de precio</p>
					<div class="form-group">
						<label for="busquedaPrecioMinimo50">Desde</label>
						<input type="number" class="form-control numero50" id="busquedaPrecioMinimo50">
					</div>
					
					<div class="form-group">
						<label for="busquedaPrecioMaximo50">Hasta</label>
						<input type="number" class="form-control numero50" id="busquedaPrecioMaximo50">
					</div>
				</div> 
            </div>
        </div> 
 
        <!-- div con sufijo 51 -->
        <div class="container formulario noVer" id="busquedaAgenda51">
   			<h2 class="letraAzul">Filtro Agenda</h2>
            <div class="row">
                <div class="col-md-4">              
					<p>
                        <button title="Bienes sin actividades" class="btn btn-info" id="bienesSinActividad51">
						    Propiedades sin actividades planificadas
					    </button>
                    </p>
                    <p>
					    <button title="Solicitudes de cita" class="btn btn-info noVer" id="solicitudesDeCita51">
						    Solicitudes de cita
					    </button>
                    </p>
                    <p>
					    <div class="form-group noVer" id="grupoPersonaAgenda51">
						    <label for="personaAgenda51">Persona responsable</label>
						    <input type="text" class="form-control" id="personaAgenda51">
					    </div>
                    </p>
                    <p>
					    <div class="input-group mb-3">
						    <div class="input-group-prepend">
							    <label class="input-group-text" for="busquedaActividades51">Actividades planificadas</label>
						    </div>
						    <select class="custom-select" id="busquedaActividades51">
							    <option value="Actividades atrasadas">Actividades atrasadas</option>
							    <option value="Actividades del mes">Actividades del mes</option>
							    <option value="Actividades para hoy">Actividades para hoy</option>
							    <option selected value="Todas">Todas</option>
						    </select>
					    </div>
                    </p>
				</div>
            </div>
        </div>
				 
        <!-- div con sufijo 60 -->
        <div class="container formulario noVer" id="bienes60">
            <h2 class="letraAzul" id="titulo60"></h2>
            <div class="row" id="cicloBienes60">
            </div>
            <br />
            <br />
            <br />
        </div> 
		
		<!-- div con sufijo 80 -->
		<div class="container formulario noVer" id="agenda80">
		</div> 

		<!-- div con sufijo 90 -->
		<div class="container formulario noVer" id="agregarActividad90">
			<h2 class="letraAzul" id="tituloAgregarActividad90"></h2>
			<div class="row">
				<div class='col-md-12'> 
					<br />
					<br /> 
					<form>
						<div class="row">
							<div class="col-md-12">
					            <div class="form-group noVer" id="grupoBusqueda90">
						            <label for="busquedaPropiedad90">Propiedad</label>
						            <input type="text" class="form-control texto50" id="busquedaPropiedad90">
					            </div>                                
                                <div class="mensajesUsuario" id="mensajesBusqueda90"></div>
							</div>
						</div> 

						<div class="row">
							<div class="col-md-12">
								<div class='input-group mb-3' id='actividades90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='selectOpciones90'>Actividad</label> 
									</div>
									<select class='custom-select' id='selectOpciones90'> 
									</select> 
								</div>
                                <div class="mensajesUsuario" id="mensajesActividad90"></div>
							</div>
						</div> 
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group"> 
									<label for="notas90">Notas</label> 
									<input type="text" class="form-control" id="notas90"> 
								</div>
                                <div class="mensajesUsuario" id="mensajesNotas90"></div>
							</div>
						</div>

						<div class="row" id="fechaPlanificada90">
						</div>
					</form>
					<div class="mensajesUsuario" id="mensajesAgregarActividad90"></div>
				</div> 
			</div>
		</div>

		<!-- div con sufijo 100 -->
		<div class="container formulario noVer" id="personas100">
			<h2 class="letraAzul" id="tituloPersonas100"></h2>
			<div class="row">
				<div class="col-12 col-sm-6 col-md-4 mb-3">
					<div class="card text-center" id="imagen100">
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-8 mb-3">
						
					<div class="row">
						<div class="col-md-12">
							<div class="form-group" id="grupoPropietario100"> 
								<label for="nombrePropietario100">Propietario</label> 
								<input type="text" class="form-control" id="nombrePropietario100" disabled>  
								<div class="mensajesUsuario" id="mensajesPropietario100"></div> 
							</div>

							<div class="form-group" id="grupoCaptador100"> 
								<label for="nombreCaptador100">Captador</label> 
								<input type="text" class="form-control" id="nombreCaptador100"> 
								<div class="mensajesUsuario" id="mensajesCaptador100"></div>
							</div>

							<div class="form-group" id="grupoAsignarCliente100"> 
								<label for="nombreCliente100">Asignar de mi cartera de clientes un comprador potencial para esta propiedad</label> 
								<input type="text" class="form-control" id="nombreCliente100"> 
								<div class="mensajesUsuario" id="mensajesCliente100"></div>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-11">
							<h3 class="letraAzul">Compradores potenciales</h3>    
							<div id="compradoresPotenciales100"></div>
						</div>
					</div>

				</div>

			</div>
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
						<div id="mensajesTipo110" class="mensajesUsuario"></div>    

						<div class="form-group"> 
							<label for="numeroIdentificacion110">Nro. de identificación*</label> 
							<input type="number" class="form-control" id="numeroIdentificacion110"> 
						</div>
						<div id="mensajesIdentificacion110" class="mensajesUsuario"></div>    

						<div class="form-group"> 
							<label for="primerNombre110">Primer nombre*</label> 
							<input type="text" class="form-control" id="primerNombre110"> 
						</div>
						<div id="mensajesPrimerNombre110" class="mensajesUsuario"></div>    

						<div class="form-group"> 
							<label for="segundoNombre110">Segundo nombre</label> 
							<input type="text" class="form-control" id="segundoNombre110"> 
						</div>
						<div id="mensajesSegundoNombre110" class="mensajesUsuario"></div>    

						<div class="form-group"> 
							<label for="primerApellido110">Primer apellido*</label> 
							<input type="text" class="form-control" id="primerApellido110"> 
						</div>
						<div id="mensajesPrimerApellido110" class="mensajesUsuario"></div>    

						<div class="form-group"> 
							<label for="segundoApellido110">Segundo apellido</label> 
							<input type="text" class="form-control" id="segundoApellido110"> 
						</div>
						<div id="mensajesSegundoApellido110" class="mensajesUsuario"></div>    

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
							<div id="mensajesRoles110" class="mensajesUsuario"></div> 

							<br />

						</div>

						<div class="form-group"> 
							<label for="rol110">Rol*</label> 
							<input type="text" class="form-control" id="rol110" value="Cliente" disabled> 
						</div>
						<div id="mensajesRol110" class="mensajesUsuario"></div> 

						<div class="form-group"> 
							<label for="celular110">Teléfono celular</label> 
							<input type="number" class="form-control" id="celular110"> 
						</div>
						<div id="mensajesCelular110" class="mensajesUsuario"></div> 

						<div class="form-group"> 
							<label for="telefonoFijo110">Teléfono fijo</label> 
							<input type="number" class="form-control" id="telefonoFijo110"> 
						</div>
						<div id="mensajesTelefono110" class="mensajesUsuario"></div> 

						<div class="form-group"> 
							<label for="email110">Correo electrónico*</label> 
							<input type="email" class="form-control" id="email110"> 
						</div>
						<div id="mensajesEmail110" class="mensajesUsuario"></div> 

						<div class="form-group"> 
							<label for="direccion110">Dirección</label> 
							<input type="text" class="form-control" id="direccion110"> 
						</div>
						<div id="mensajesDireccion110" class="mensajesUsuario"></div> 

					</form>
				</div>

			</div>
		</div>
        <br />
        <br />
        <br />
    <?php else: ?>
        <!-- div con sufijo 10000 -->
        <div class="container">
            <div class="row">
                <br />
                <br />
                <p><b>Estimado usuario para acceder al CRM debes </b><?php echo $this->html->link('iniciar sesión', array('controller' => 'ingresar-al-sistema'), 
                    array('style' => 'color: blue;')); ?></p>
            </div>
        </div> 
        <br />
        <br />
        <br />
    <?php endif; ?>
    <?php
        for ($i = 1; $i <= 20; $i++) 
        {
            echo "<br />";
        }
    ?>
</div>

<script>
// Variables globales

var gVectorGeneral = <?= json_encode($vectorGeneral) ?>;
var gBienes = gVectorGeneral.bienes;
var gMatrizBienes = gVectorGeneral.matrizBienes;
var gBienesAutocomplete = gVectorGeneral.bienesAutocomplete;
var gDatosBienes = gVectorGeneral.datosBienes;
var gIdUsuario = gVectorGeneral.idUsuario;
var gNombreUsuario = gVectorGeneral.nombreUsuario;
var gRoles = gVectorGeneral.roles;
var gUsuarios = gVectorGeneral.usuarios;
var gPersonasAsc = gVectorGeneral.personasAsc;
var gNotificaciones = gVectorGeneral.notificaciones;
var gVistaPreferida = gVectorGeneral.vistaPreferida;
var gOpcionesSelectActividades = gVectorGeneral.opcionesSelectActividades;
gVectorGeneral = "";

var gIdPostActual = "";
var gPosicionAnterior = "";
var gFechaActual = new Date();
var gAnoActual = gFechaActual.getFullYear(); 
var gMes = gFechaActual.getMonth()+1;
var gMesActual = (gMes < 10 ? '0' : '') + gMes; 
var gDia = gFechaActual.getDate();
var gDiaActual = (gDia < 10 ? '0' : '') + gDia; 
var gFechaActualInvertida = 
	gAnoActual + 
	gMesActual + 
	gDiaActual;

var gAnoActualEntero = parseInt(gAnoActual);
var gMesActualEntero = parseInt(gMesActual);
var gMesActualEnteroMenosUno = gMesActualEntero - 1;
var gDiaActualEntero = gDiaActual;

var gBotonCerrarLlamador = "";
var gIndicadorAdicional = 0;

Date.prototype.getWeekNumber = function () {
    var d = new Date(+this);  //Creamos un nuevo Date con la fecha de "this".
    d.setHours(0, 0, 0, 0);   //Nos aseguramos de limpiar la hora.
    d.setDate(d.getDate() + 4 - (d.getDay() || 7)); // Recorremos los días para asegurarnos de estar "dentro de la semana"
    //Finalmente, calculamos redondeando y ajustando por la naturaleza de los números en JS:
    return Math.ceil((((d - new Date(d.getFullYear(), 0, 1)) / 8.64e7) + 1) / 7);
};

var gSemanaActual = new Date(gAnoActualEntero, gMesActualEnteroMenosUno, gDiaActualEntero).getWeekNumber(); 

var gMensajePendientePorMostrar = "";

var gFuncionLlamadora = "";

var gIdPersonaActual = "";

var gImagenAnterior = "";

var gImagenEspere = 
    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/apertureEspere.svg' ?>" +
    " alt='Por favor espere' class='iconoMenu imgr' id='imagenEspere'>";

// Funciones

function testFunction()
{

}

function mostrarNotificaciones()
{
    if (gNotificaciones > 0) 
    {
        $j("#notificaciones20").removeClass('noVer');
        $j("#cantidadNotificaciones20").html(gNotificaciones);
    }
}

function actualizarVistaPreferida()
{
    borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se actualiza la preferencia de vista </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
        "</div>";

    $j("#mensajesVistas20").html(mensajesUsuario);

    jsonVistaPreferida = 
        {
            "vistaPreferida" : $j("#vistas20").val(),
			"idUsuario" : gIdUsuario
        };

    $j.post("<?= mvc_public_url(array('controller' => 'usermetas', 'action' => 'actualizar_vista_preferida')) ?>", 
        jsonVistaPreferida, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {
			borrarMensajesAnteriores();
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

			vectorGeneralActualizado = response.vectorGeneral;
			actualizarVectores(vectorGeneralActualizado);
				
            $j("#mensajesVistas20").html(mensajesUsuario);
			window.scrollTo(0, 0);
        } 
        else 
        {
			borrarMensajesAnteriores();
            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>"; 

			vectorGeneralActualizado = response.vectorGeneral;
			actualizarVectores(vectorGeneralActualizado);

            $j("#mensajesVistas20").html(mensajesUsuario);
			window.scrollTo(0, 0);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
		borrarMensajesAnteriores();
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" +
                    "Estimado usuario el servidor tardó mucho en responder, " +
                    "por favor pulse el botón 'Recargar página' " + 
                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/reload.svg' ?>" +
                    " alt='Recargar página' class='icono'>" +
					" que se encuentra a su derecha y luego consulte si efectivamente se guardaron los cambios" +
                "</strong>" + 
            "</div>"; 
		$j("#mensajesVistas20").html(mensajesUsuario);
		window.scrollTo(0, 0);
    });      
}

function borrarMensajesAnteriores()
{
    $j(".mensajesUsuario").each(function()
    {   
        $j(this).html("");
    });
}

function mostrarAgenda(tipoContenido, valor)
{
	var agenda = "";

    gIndicadorAdicional = 0;
	
	borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se busca la información </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
        "</div>";
		
  	$j("#mensajesUsuario30").html(mensajesUsuario);
    window.scrollTo(0, 0);

	if (gVistaPreferida.substring(0, 5) == "Lista")
	{
		resultado = mostrarAgendaLista(tipoContenido, valor);
	}
	else
	{
		resultado = mostrarAgendaMosaicos(tipoContenido, valor);
	}

	if (resultado.notificaciones[0])
	{
		jsonNotificaciones = 
            {
                "notificaciones" : resultado.notificaciones,
            };

		$j.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'desmarcar_notificaciones')) ?>", 
			jsonNotificaciones, null, "json")          
		.done(function(response) 
		{
			if (response.satisfactorio)
			{
				borrarMensajesAnteriores();
				if (gMensajePendientePorMostrar != "")
				{
					$j("#mensajesUsuario30").html(gMensajePendientePorMostrar);
					gMensajePendientePorMostrar = "";
				}

				vectorGeneralActualizado = response.vectorGeneral;
				actualizarVectores(vectorGeneralActualizado);
					
                $j("#agenda80").html(resultado.agenda);
				$j("#agenda80").removeClass("noVer");
				$j(gBotonCerrarLlamador).removeClass("noVer");
				$j("#agregarActividad10").removeClass("noVer");
				window.scrollTo(0, 0);           
			} 
			else 
			{
				borrarMensajesAnteriores();
				mensajesUsuario =
				"<div class='alert alert-danger alert-dismissible'>" +
					"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
					"<strong>" + response.mensaje + "</strong>" +
				"</div>"; 

				vectorGeneralActualizado = response.vectorGeneral;
				actualizarVectores(vectorGeneralActualizado);

				$j("#mensajesUsuario30").html(mensajesUsuario);
				window.scrollTo(0, 0);        
            }
		})
		.fail(function(jqXHR, textStatus, errorThrown) 
		{
    		borrarMensajesAnteriores();
			mensajesUsuario =
				"<div class='alert alert-danger alert-dismissible'>" +
					"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
					"<strong>" +
						"Estimado usuario el servidor tardó mucho en responder, " +
						"por favor pulse el botón 'Recargar página' " + 
						"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/reload.svg' ?>" +
						" alt='Recargar página' class='icono'>" +
						" que se encuentra a su derecha y luego consulte si efectivamente se guardaron los cambios" +
					"</strong>" + 
				"</div>"; 

				$j("#mensajesUsuario30").html(mensajesUsuario);
				window.scrollTo(0, 0);    
		});
	}
	else
	{
		borrarMensajesAnteriores();
		if (gMensajePendientePorMostrar != "")
		{
			$j("#mensajesUsuario30").html(gMensajePendientePorMostrar);
			gMensajePendientePorMostrar = "";
		}

        $j("#agenda80").html(resultado.agenda);
		$j("#agenda80").removeClass("noVer");
		$j(gBotonCerrarLlamador).removeClass("noVer");
		$j("#agregarActividad10").removeClass("noVer");
		window.scrollTo(0, 0);  
	}	
}

function mostrarAgendaLista(tipoContenido, valor)
{
    var bienesNotificaciones = [];
    var notificaciones = [];
	var colorAlerta = "";
	var contador = 0;
	var encabezadoTabla = 
        "<div class='table-responsive'>" +
            "<table class='table table-hover table-striped'>" +
				"<thead>" +
					"<tr>" +
						"<th scope='col' class='text-center' style='width:10%;'>No</th>" +
						"<th scope='col' class='text-center' style='width:20%;'>Propiedad</th>" +
						"<th scope='col' class='text-center' style='width:20%;'>Actividad</th>" +
                        "<th scope='col' class='text-center' style='width:20%;'>Responsable</th>" +
						"<th scope='col' class='text-center' style='width:20%;'>Fecha</th>" +
						"<th scope='col' class='text-center' style='width:10%;'></th>" +
					"</tr>" +
				"</thead>" +
				"<tbody>";
				
	var pieTabla = 
				"</tbody>" +
			"</table>" +
    	"</div>";	

	if (tipoContenido == "Propiedad")
	{
		var agenda =
			"<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas para " + gMatrizBienes[valor].post_title + "</h2>" +
			"<h3 class='letraAzul'>Captador responsable: " + gMatrizBienes[valor].nombre_autor + "</h3>" +
			"<br />" +
			"<br />" +
			encabezadoTabla;
			
		contador = 1;
			
		if (gDatosBienes[valor].CRMdapliw_actividad_agenda)
		{											
			$j.each(gDatosBienes[valor].CRMdapliw_actividad_agenda, function(clave, datos)  
			{
				if (datos.estatus == "Abierta")
				{
					if (datos.notificacion == "No vista" && datos.idEjecutor == gIdUsuario)						
					{
                        bienesNotificaciones.push(datos.idPropiedad);
						notificaciones.push(datos.id);
					}

                    if (gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
                    {
         				lineaLista = generarLineaLista(clave, datos, contador);
					
					    agenda += "<tr>" + lineaLista + "</tr>";
					    contador++;
                    }
                    else
                    {
                        if (datos.idEjecutor == gIdUsuario)
                        {
             				lineaLista = generarLineaLista(clave, datos, contador);
					
					        agenda += "<tr>" + lineaLista + "</tr>";
					        contador++;  
                        }
                    }                             
				}
			});			
		}
	}
	else if (tipoContenido == "Notificaciones")
	{
		var agenda =
			"<h2 class='letraAzul' id='tituloAgenda80'>Notificaciones</h2>" +
			"<br />" +
			"<br />" +
			encabezadoTabla;
			
		contador = 1;

		$j.each(gBienes, function(clave1, datos1) 
		{		
			if (gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda)
			{				
				$j.each(gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda, function(clave2, datos2)  
				{
					if (datos2.estatus == "Abierta")						
					{
						if (datos2.notificacion == "No vista" && datos2.idEjecutor == gIdUsuario)						
						{
                            bienesNotificaciones.push(datos2.idPropiedad);
							notificaciones.push(datos2.id);
							
							lineaLista = generarLineaLista(clave2, datos2, contador);
							
							agenda += "<tr>" + lineaLista + "</tr>";
							contador++;
						}
					}
				});	
			}
		});
	}
	else 
	{
		if (tipoContenido == "Todas")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas</h2>" +
				"<br />" +
				"<br />" +
				encabezadoTabla;		
		}
		if (tipoContenido == "Citas")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Solicitudes de cita</h2>" +
				"<br />" +
				"<br />" +
				encabezadoTabla;		
		}
		else if (tipoContenido == "Persona")
		{
			nombrePersona = gUsuarios[gIdPersonaActual].first_name + " " + gUsuarios[gIdPersonaActual].last_name;
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas para " + nombrePersona + "</h2>" +
				"<br />" +
				"<br />" +
				encabezadoTabla;
		}
		else if (tipoContenido.substring(0, 11) == "Actividades")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>" + tipoContenido + "</h2>" +
				"<br />" +
				"<br />" +
				encabezadoTabla;
        }

		contador = 1;

		$j.each(gBienes, function(clave1, datos1) 
		{		
			if (gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda)
			{			
				$j.each(gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda, function(clave2, datos2)  
				{
					if (datos2.estatus == "Abierta" && datos2.ver == "true")						
					{
						if (datos2.notificacion == "No vista" && datos2.idEjecutor == gIdUsuario)						
						{
                            bienesNotificaciones.push(datos2.idPropiedad);
							notificaciones.push(datos2.id);
						}
						
						lineaLista = generarLineaLista(clave2, datos2, contador);
						
						agenda += "<tr>" + lineaLista + "</tr>";
						contador++;
					}
				});
			}
		});
	}
	agenda += pieTabla;
	
    resultado = 
        {
            "agenda" : agenda,
            "bienesNotificaciones" : bienesNotificaciones,
            "notificaciones" : notificaciones
        }

	return resultado;
}

function generarLineaLista(clave, datos, contador)
{
	idActividad = datos.id;
					
	fechaPlanificada = 
		datos.diaPlanificado +
		"/" +
		datos.mesPlanificado + 
		"/" +
		datos.anoPlanificado;

	fechaPlanificadaInvertida = 
		datos.anoPlanificado +
		datos.mesPlanificado + 
		datos.diaPlanificado;
		
	if (fechaPlanificadaInvertida < gFechaActualInvertida)
	{
		colorAlerta = "letraAmarilla";
	}
	else
	{
		colorAlerta = "letraVerde";
	}
	
	lineaLista = 		
		"<td class='text-center align-middle'>" + contador + "</td>" +
		"<td class='text-center align-middle'>" + gMatrizBienes[datos.idPropiedad].post_title + "</td>" +
		"<td class='text-center align-middle" + colorAlerta + "'>" + datos.nombreActividad + "</td>" +
        "<td class='text-center align-middle'>" + gUsuarios[datos.idEjecutor].first_name + " " + gUsuarios[datos.idEjecutor].last_name  + "</td>" +
		"<td class='text-center align-middle'>" + fechaPlanificada + "</td>" +
		"<td class='text-center align-middle'>" +
		    "<button class='btn btn-light actividad80' id='actividad80-" + clave + "-" + idActividad + "-" + datos.idPropiedad + "' title='Ver actividad'>" +
    		    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
    		    "crmdapliw/app/public/images/eye.svg alt='Agenda' class='icono'>" +
		    "</button>" +
		"</td>";
	
	return lineaLista;
}

function mostrarAgendaMosaicos(tipoContenido, valor)
{
    var bienesNotificaciones = [];   
    var notificaciones = [];

	if (tipoContenido == "Propiedad")
	{
        var agenda =
            "<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas para " + gMatrizBienes[valor].post_title + "</h2>" +
            "<h3 class='letraAzul'>Captador responsable: " + gMatrizBienes[valor].nombre_autor + "</h3>" +
            "<br />" +
            "<br />" +
            "<div class='row'>" +
				"<div class='col-12 col-sm-6 col-md-8 mb-3'>";

        if (valor != "")
        {
            imagenCabecera = mostrarImagenCabecera(valor);

            agenda += imagenCabecera;
        }

        if (gDatosBienes[valor].CRMdapliw_actividad_agenda)
        {
            $j.each(gDatosBienes[valor].CRMdapliw_actividad_agenda, function(clave, datos)  
            {
				if (datos.estatus == "Abierta")
				{
					if (datos.notificacion == "No vista" && datos.idEjecutor == gIdUsuario)						
					{
                        bienesNotificaciones.push(datos.idPropiedad);
						notificaciones.push(datos.id);
					}

                    if (gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
                    {
                        mosaico = crearMosaicos(clave, datos);
                        agenda += mosaico;
                        inhabilitarTecla(clave, datos);
                    }
                    else
                    {
                        if (datos.idEjecutor == gIdUsuario)
                        {
                            mosaico = crearMosaicos(clave, datos);
                            agenda += mosaico; 
                            inhabilitarTecla(clave, datos);                       
                        }
                    }                             
				}
            });		
        }
    }
	else if (tipoContenido == "Notificaciones")
	{
        var agenda =
            "<h2 class='letraAzul' id='tituloAgenda80'>Notificaciones</h2>" +
            "<br />" +
            "<br />" +
            "<div class='row'>" +
				"<div class='col-12 col-sm-6 col-md-8 mb-3'>";

        if (valor > 0)
        {
            imagenCabecera = mostrarImagenCabecera(valor);

            agenda += imagenCabecera;
        }

		$j.each(gBienes, function(clave1, datos1) 
		{				
			if (gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda)
			{			
				$j.each(gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda, function(clave2, datos2)  
				{
					if (datos2.estatus == "Abierta")						
					{
						if (datos2.notificacion == "No vista" && datos2.idEjecutor == gIdUsuario)						
						{
                            bienesNotificaciones.push(datos2.idPropiedad);
							notificaciones.push(datos2.id);
                            mosaico = crearMosaicos(clave2, datos2);
                            agenda += mosaico;
                            inhabilitarTecla(clave2, datos2);
                        }
                    }
                });
            }
        });    
    }
	else 
	{
		if (tipoContenido == "Todas")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas</h2>" +
				"<br />" +
				"<br />" +
                "<div class='row'>" +
				    "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
		}
		if (tipoContenido == "Citas")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Solicitudes de cita</h2>" +
				"<br />" +
				"<br />" +
                "<div class='row'>" +
				    "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
		}
		else if (tipoContenido == "Persona")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas para " + valor + "</h2>" +
				"<br />" +
				"<br />" +
                "<div class='row'>" +
				    "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
		}
		else if (tipoContenido.substring(0, 11) == "Actividades")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>" + tipoContenido + "</h2>" +
				"<br />" +
				"<br />" +
                "<div class='row'>" +
				    "<div class='col-12 col-sm-6 col-md-8 mb-3'>";
        }

        if (valor != "")
        {
            imagenCabecera = mostrarImagenCabecera(valor);

            agenda += imagenCabecera;
        }

		$j.each(gBienes, function(clave1, datos1) 
		{			
			if (gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda)
			{			
				$j.each(gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda, function(clave2, datos2)  
				{
					if (datos2.estatus == "Abierta" && datos2.ver == "true")						
					{
						if (datos2.notificacion == "No vista" && datos2.idEjecutor == gIdUsuario)						
						{
                            bienesNotificaciones.push(datos2.idPropiedad);
							notificaciones.push(datos2.id);
						}						
                        mosaico = crearMosaicos(clave2, datos2);
                        agenda += mosaico;
                        inhabilitarTecla(clave2, datos2);
					}
				});
			}
		});
    }

    agenda += "</div></div>";

    resultado = 
        {
            "agenda" : agenda,
            "bienesNotificaciones" : bienesNotificaciones,
            "notificaciones" : notificaciones
        }

	return resultado;
}

function mostrarImagenCabecera(valor)
{
    imagenCabecera = "";
	if (gVistaPreferida == "Mosaicos con imágenes")
	{
        if (gDatosBienes[valor]._thumbnail_id)
        {
            imagenCabecera +=
                "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                    "<div class='card'>" +
                        "<img src=" + gDatosBienes[valor]._thumbnail_id[0].valor + " class='card-img-top img-fluid' alt='Foto de la propiedad'>" +
                    "</div>" +
                "</div>";
        }
        else
        {
            imagenCabecera +=
                "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                    "<div class='card'>" +
                        "Foto de la propiedad" +
                    "</div>" +
                "</div>";
        }
    }
    else
    {
        if (gDatosBienes[valor]._thumbnail_id)
        {
            imagenCabecera +=
                "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                    "<div class='card'>" +
						"<a href=" + gDatosBienes[valor]._thumbnail_id[0].valor + " title='Ver foto' target='_blank' class='text-center'>" +
						"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/camera-slr.svg' ?>" +
						" alt='Ver foto' class='icono'>" +
						"</a>" + 
                    "</div>" +
                "</div>";
        }
        else
        {
            imagenCabecera +=
                "<div class='col-12 col-sm-6 col-md-4 mb-3'>" +
                    "<div class='card'>" +
                        "Sin foto" +
                    "</div>" +
                "</div>";
        }
    }
    return imagenCabecera;
}

function crearMosaicos(clave, datos)
{
    var mosaico = "";

    idActividad = datos.id;

    fechaPlanificada = 
        datos.diaPlanificado +
        "/" +
        datos.mesPlanificado + 
        "/" +
        datos.anoPlanificado;

    complementoId = clave + "-" + idActividad + "-" + datos.idPropiedad;   

    mosaico += 
            "<div class='card' id='actividad80-" + complementoId + "'>" +
                "<div class='card-block'>" + 
                    "<h3 class='card-title'>" + gMatrizBienes[datos.idPropiedad].post_title + "</h3>" +
                    "<div class='card bg-light text-dark'>" +
                        "<h4 class='card-title'>" + datos.nombreActividad + "</h4>" +
                        "<div class='card-body'>" +

                            "<div class='row'>" +
                                "<div class='col-md-12'>" +
                                    "<div class='form-group'>" + 
                                        "<label for='notas80'>Notas</label>" +  
                                        "<input type='text' class='form-control' id='notas80-" + 
                                            complementoId + "' value='" + datos.notas + "'>" + 
                                    "</div>" +
                                "</div>" + 
                            "</div>" +

                            "<div class='row' id='fechaPlanificada80" + complementoId + "'>";
             
	idFechas =
		{
			"idAno" : "actividadesAno80-" + complementoId,
			"idSelectAno" : "ano80-" + complementoId,
            "valorAno" : datos.anoPlanificado, 
            "idMensajesAno" : "mensajesAno80-" + complementoId,

			"idMes" : "actividadesMes80-" + complementoId,
			"idSelectMes" : "mes80-" + complementoId,
            "valorMes" : datos.mesPlanificado,
            "idMensajesMes" : "mensajesMes80-" + complementoId,

			"idDia" : "actividadesDia80-" + complementoId,
			"idSelectDia" : "dia80-" + complementoId,
            "valorDia" : datos.diaPlanificado, 
            "idMensajesDia" : "mensajesDia80-" + complementoId,

			"idHora" : "actividadesHora80-" + complementoId,
			"idSelectHora" : "hora80-" + complementoId,
            "valorHora" : datos.horaPlanificado,
            "idMensajesHora" : "mensajesHora80-" + complementoId,

			"idMinuto" : "actividadesMinuto80-" + complementoId,
			"idSelectMinuto" : "minuto80-" + complementoId,
            "valorMinuto" : datos.minutoPlanificado,
            "idMensajesMinuto" : "mensajesMinuto80-" + complementoId,

			"idMeridiano" : "actividadesMeridiano80-" + complementoId,
			"idSelectMeridiano" : "meridiano80-" + complementoId,
            "valorMeridiano" : datos.meridianoPlanificado,
            "idMensajesMeridiano" : "mensajesMeridiano80-" + complementoId
		};
			
    lineaFecha = inicializarFecha(idFechas);

    mosaico += 
        lineaFecha + 
                        "</div>" +
						
						"<div class='row'>" +
							"<div class='col-md-12'>" +
								"<div class='mensajesUsuario' id='mensajesAdicional80-" + complementoId + "'>" +
								"</div>" +
							"</div>" +
						"</div>" + 	

						"<div class='row noVer' id='adicionalTitulo80-" + complementoId + "'>" +
							"<h4>Datos para la confirmación de la cita</h4>" +
						"</div>" +

						"<div class='row noVer' id='adicionalGrupoNotas80-" + complementoId + "'>" +
							"<div class='col-md-12'>" +
								"<div class='form-group'>" + 
									"<label for='adicionalNotas80'>Notas</label>" +  
									"<input type='text' class='form-control' id='adicionalNotas80-" + 
										complementoId + "'>" + 
								"</div>" +
							"</div>" + 
						"</div>" +		

						"<div class='row noVer' id='adicionalFechaPlanificada80-" + complementoId + "'>";
                
	idFechas =
		{			
			"idAno" : "adicionalActividadesAno80-" + complementoId,
			"idSelectAno" : "adicionalAno80-" + complementoId,
            "valorAno" : gAnoActual, 
            "idMensajesAno" : "adicionalMensajesAno80-" + complementoId,

			"idMes" : "adicionalActividadesMes80-" + complementoId,
			"idSelectMes" : "adicionalMes80-" + complementoId,
            "valorMes" : gMesActual,
            "idMensajesMes" : "adicionalMensajesMes80-" + complementoId,

			"idDia" : "adicionalActividadesDia80-" + complementoId,
			"idSelectDia" : "adicionalDia80-" + complementoId,
            "valorDia" : gDiaActual, 
            "idMensajesDia" : "adicionalMensajesDia80-" + complementoId,

			"idHora" : "adicionalActividadesHora80-" + complementoId,
			"idSelectHora" : "adicionalHora80-" + complementoId,
            "valorHora" : "",
            "idMensajesHora" : "adicionalMensajesHora80-" + complementoId,

			"idMinuto" : "adicionalActividadesMinuto80-" + complementoId,
			"idSelectMinuto" : "adicionalMinuto80-" + complementoId,
            "valorMinuto" : "",
            "idMensajesMinuto" : "adicionalMensajesMinuto80-" + complementoId,

			"idMeridiano" : "adicionalActividadesMeridiano80-" + complementoId,
			"idSelectMeridiano" : "adicionalMeridiano80-" + complementoId,
            "valorMeridiano" : "",
            "idMensajesMeridiano" : "adicionalMensajesMeridiano80-" + complementoId
		};
			
    lineaFecha = inicializarFecha(idFechas);

    mosaico += 
        lineaFecha + 
						"</div>" + 
                            
                        "<div class='row'>" +
                            "<div class='col-md-6'>" +
                                "<p>Responsable: " + gUsuarios[datos.idEjecutor].first_name + " " + gUsuarios[datos.idEjecutor].last_name  + "</p>" + 
                            "</div>" + 
                            "<div class='col-md-3'>" +
                                "<div class='form-check'>" +
                                    "<input type='checkbox' class='form-check-input cerrarActividad80' id='cerrarActividad80-" + 
                                        complementoId + "'>" +
                                    "<label class='form-check-label' for='cerrarActividad80'>&nbsp;&nbsp;Cerrar</label>" +
                                "</div>" +
                            "</div>"+

                            "<div class='col-md-3'>" +
                                "<button class='guardarCambios80 btn btn-link' title='Guardar cambios' id='guardarCambios80-" + 
                                    complementoId + "'>" + 
                                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" +
                                    "crmdapliw/app/public/images/pencil.svg alt='Guardar cambios' class='icono'" +
                                    " id='imagenGuardarCambios80-" + complementoId + "'>" +
                                "</button>" +
                            "</div>"+

                        "</div>" +

						"<div class='row'>" +
							"<div class='col-md-12'>" +
								"<div class='mensajesUsuario' id='mensajesUsuario80-" + complementoId + "'>" +
								"</div>" +
							"</div>" +
						"</div>" + 	

                    "</div>" +
                "</div>" +
            "</div>" +
        "</div>" +
        "<br />" +
        "<br />";

    return mosaico;
}

function inicializarFecha(idFechas)
{
    lineaFecha = "";
	var ano = gAnoActual;
	var mes = "";
	var dia = "";
	var hora = "";
	var minuto = "";
    var selectAno = "";
    var selectMes = "";
    var selectDia = "";
    var selectHora = "";
    var selectMinuto = "";
    var contador = 0;

	selectAno = 
        "<div class='input-group-prepend'>" +
	        "<label class='input-group-text' for=" + idFechas.idSelectAno + ">Año</label>" + 
	    "</div>" +
	    "<select class='custom-select' id=" + idFechas.idSelectAno + ">";

    for (i = 0; i <= 10; i++) 
    {
        if (i == 0)
        {
            if (idFechas.valorAno == "")
            {                
                selectAno +=          
				    "<option selected value=''></option>";
            }
            else
            {
                selectAno +=          
				    "<option value=''></option>";                
            }     
        }
        else
        {
            if (idFechas.valorAno == ano)
            {                
                selectAno +=          
				    "<option selected value=" + ano + ">" + ano + "</option>";
            }
            else
            {
                selectAno +=          
				    "<option value=" + ano + ">" + ano + "</option>";
            }
            ano++;
        }
    }
    selectAno += 
        "</select>";

    lineaFecha += 
        "<div class='col-md-2'>" +
            "<div class='input-group mb-3' id=" + idFechas.idAno + ">" + selectAno + "</div>" +
            "<div class='mensajesUsuario' id=" + idFechas.idMensajesAno + "></div>" +
        "</div>";
	
	$j("#" + idFechas.idAno).html(selectAno);

    contador = 0;

	selectMes = 
		"<div class='input-group-prepend'>" +
    		"<label class='input-group-text' for=" + idFechas.idSelectMes + ">Mes</label>" + 
		"</div>" +
		"<select class='custom-select' id=" + idFechas.idSelectMes + ">";

    for (i = 0; i <= 12; i++) 
    {
        if (i == 0)
        {
            if (idFechas.valorMes == "")
            {
                selectMes +=          
				    "<option selected value=''></option>";
            }
            else
            {
                selectMes +=          
				    "<option value=''></option>";
            }
        }
        else
        {
    		mes = (i < 10 ? '0' : '') + i;
            if (idFechas.valorMes == mes)
            {
                selectMes +=          
        			"<option selected value=" + mes + ">" + mes + "</option>";
            }
            else
            {
                selectMes +=          
        			"<option value=" + mes + ">" + mes + "</option>";
            }
        }
    }
    selectMes += 
        "</select>";
	
    lineaFecha += 
        "<div class='col-md-2'>" +
            "<div class='input-group mb-3' id=" + idFechas.idMes + ">" + selectMes + "</div>" +
            "<div class='mensajesUsuario' id=" + idFechas.idMensajesMes + "></div>" +
        "</div>";

    contador = 0;

	selectDia = 
		"<div class='input-group-prepend'>" +
		    "<label class='input-group-text' for=" + idFechas.idSelectDia + ">Día</label>" + 
		"</div>" +
		"<select class='custom-select' id=" + idFechas.idSelectDia + ">";

    for (i = 0; i <= 31; i++) 
    {		
        if (i == 0)
        {
            if (idFechas.valorDia == "")
            {
                selectDia +=          
				    "<option selected value=''></option>";
            }
            else
            {
                selectDia +=          
				    "<option value=''></option>";
            }
        }
        else
        {
    		dia = (i < 10 ? '0' : '') + i;
            if (idFechas.valorDia == dia)
            {
                selectDia +=          
		    	    "<option selected value=" + dia + ">" + dia + "</option>";
            }
            else 
            {
                selectDia +=          
		    	    "<option value=" + dia + ">" + dia + "</option>";
            }
        }
    }
    selectDia += 
        "</select>";
	
    lineaFecha +=
        "<div class='col-md-2'>" + 
            "<div class='input-group mb-3' id=" + idFechas.idDia + ">" + selectDia + "</div>" +
            "<div class='mensajesUsuario' id=" + idFechas.idMensajesDia + "></div>" +
        "</div>";

    contador = 0;

	selectHora = 
		"<div class='input-group-prepend'>" +
		    "<label class='input-group-text' for=" + idFechas.idSelectHora + ">Hora</label>" + 
		"</div>" +
		"<select class='custom-select' id=" + idFechas.idSelectHora + ">";

    for (i = 0; i <= 12; i++) 
    {		
        if (i == 0)
        {
            if (idFechas.valorHora == "")
            {
                selectHora +=          
				    "<option selected value=''></option>";
            }
            else 
            {
                selectHora +=          
				    "<option value=''></option>";
            }
        }
        else
        {
    		hora = (i < 10 ? '0' : '') + i;
            if (idFechas.valorHora == hora)
            {
                selectHora +=          
    			    "<option selected value=" + hora + ">" + hora + "</option>";
            }
            else
            {
                selectHora +=          
    			    "<option value=" + hora + ">" + hora + "</option>";
            }
        }
    }
    selectHora += 
        "</select>";
	
    lineaFecha +=
        "<div class='col-md-2'>" + 
            "<div class='input-group mb-3' id=" + idFechas.idHora + ">" + selectHora + "</div>" +
            "<div class='mensajesUsuario' id=" + idFechas.idMensajesHora + "></div>" +
        "</div>";

    contador = 0;

	selectMinuto = 
		"<div class='input-group-prepend'>" +
		    "<label class='input-group-text' for=" + idFechas.idSelectMinuto + ">Minuto</label>" + 
		"</div>" +
		"<select class='custom-select' id=" + idFechas.idSelectMinuto + ">";
    for (i = -1; i <= 59; i++) 
    {	
        if (i == -1)
        {
            if (idFechas.valorMinuto == "")
            {
                selectMinuto +=          
				    "<option selected value=''></option>";
            }
            else
            {
                selectMinuto +=          
				    "<option value=''></option>";
            }
        }
        else
        {
    		minuto = (i < 10 ? '0' : '') + i;
            if (idFechas.valorMinuto == minuto)
            {
                selectMinuto +=          
		    	    "<option selected value=" + minuto + ">" + minuto + "</option>";
            }
            else
            {
                selectMinuto +=          
		    	    "<option value=" + minuto + ">" + minuto + "</option>";
            }
        }
    }
    selectMinuto += 
        "</select>";
	
    lineaFecha += 
        "<div class='col-md-2'>" +
            "<div class='input-group mb-3' id=" + idFechas.idMinuto + ">" + selectMinuto + "</div>" +
            "<div class='mensajesUsuario' id=" + idFechas.idMensajesMinuto + "></div>" +
        "</div>";

    lineaFecha +=
        "<div class='col-md-2'>" + 
            "<div class='input-group mb-3' id=" + idFechas.idMeridiano + ">" +
	            "<div class='input-group-prepend'>" +
		            "<label class='input-group-text' for=" + idFechas.idSelectMeridiano + ">Meridiano</label>" + 
	            "</div>" +
	            "<select class='custom-select' id=" + idFechas.idSelectMeridiano + ">";

    if (idFechas.valorMeridiano == "")
    {
        lineaFecha += 
            "<option selected value=''></option>" +
            "<option value='am'>am</option>" + 
            "<option value='pm'>pm</option>";
    }
    else if (idFechas.valorMeridiano == "am")
    {
        lineaFecha += 
            "<option value=''></option>" +
            "<option selected value='am'>am</option>" + 
            "<option value='pm'>pm</option>";
    }
    else
    {
        lineaFecha += 
            "<option value=''></option>" +
            "<option value='am'>am</option>" + 
            "<option selected value='pm'>pm</option>";
    }
        
    lineaFecha +=
	            "</select>" +  
            "</div>" +
            "<div class='mensajesUsuario' id=" + idFechas.idMensajesMeridiano + "></div>" +
        "</div>";
    
    return lineaFecha;
}

function filtrarPropiedades(idBienFiltro)
{
    var filtros = 0;
    var indicadorPrecio = 0;

    if (idBienFiltro > 0)
    {
        desmarcarBienesVista();
        $j.each(gBienes, function(clave1, datos1)  
	    {
            if (datos1.ID == idBienFiltro)
            {
                gBienes[clave1].ver = "true";
                return false;
            }
        });
    }
    else
    {    
        $j(".texto50").each(function()
        {   
            if ($j(this).val() > 0)
            {
                filtros = 1;
            }           
        });

        $j(".numero50").each(function()
        {   
            if ($j(this).val() > 0)
            {
                filtros = 1;
            }           
        });

        if (filtros == 0)
        {
            marcarBienesVista();
        }
        else
        {
            desmarcarBienesVista();

	        $j.each(gBienes, function(clave1, datos1)  
	        {
		        if ($j("#busquedaHabitaciones50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_bedrooms)
                    {
			            if (gDatosBienes[datos1.ID].REAL_HOMES_property_bedrooms[0].valor == $j("#busquedaHabitaciones50").val())
			            {
                            gBienes[clave1].ver = "true";
			            }
                    }
		        }
			
		        if ($j("#busquedaBanos50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_bathrooms)
			        {
			            if (gDatosBienes[datos1.ID].REAL_HOMES_property_bathrooms[0].valor == $j("#busquedaBanos50").val())
			            {
				            gBienes[clave1].ver = "true";
			            }
                    }
		        }
				
		        if ($j("#busquedaGarajes50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_garage)
			        {
			            if (gDatosBienes[datos1.ID].REAL_HOMES_property_garage[0].valor == $j("#busquedaGarajes50").val())
			            {
				            gBienes[clave1].ver = "true";
			            }
                    }
		        }

		        if ($j("#busquedaArea50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_size)
			        {
			            if (parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_size[0].valor) >= parseFloat($j("#busquedaArea50").val()))
			            {
				            gBienes[clave1].ver = "true";
			            }
                    }
		        }
		
		        indicadorPrecio = 0;
		
		        if ($j("#busquedaPrecioMinimo50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_price)
			        {
			            if (parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_price[0].valor) >= parseFloat($j("#busquedaPrecioMinimo50").val()))
			            {
				            if ($j("#busquedaPrecioMaximo50").val() > 0)
				            {
					            if (parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_price[0].valor) <= parseFloat($j("#busquedaPrecioMaximo50").val()))
					            {
						            gBienes[clave1].ver = "true";
					            }
					            indicadorPrecio = 1;
				            }
				            else
				            {
					            gBienes[clave1].ver = "true";
				            }
			            }
                    }
		        }
		
		        if ($j("#busquedaPrecioMaximo50").val() > 0 && indicadorPrecio == 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_price)
			        {
			            if (parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_price[0].valor) <= parseFloat($j("#busquedaPrecioMaximo50").val()))
			            {
				            gBienes[clave1].ver = "true";
			            }
                    }
		        }	
	        });
        }
    }
}	

function marcarBienesVista()
{
   $j.each(gBienes, function(clave, datos)  
   {
        gBienes[clave].ver = "true";
   });
}

function desmarcarBienesVista()
{
   $j.each(gBienes, function(clave, datos)  
   {
        gBienes[clave].ver = "false";
   });
}

function mostrarBienes(tipoContenido, valor)
{
	var colorAlerta = "";
    var bienes = "";
    var contador = 1;
	
	if (gVistaPreferida.substring(0, 5) == "Lista")
	{
		bienes += 
			"<div class='table-responsive'>" +
				"<table class='table table-striped table-hover'>" +
					"<thead>" +
						"<tr>" +
                            "<th scope='col' class='text-center' style='width:5%;'>No</th>" +
							"<th scope='col' class='text-center' style='width:10%;'>Foto</th>" +
							"<th scope='col' class='text-center' style='width:30%;'>Propiedad</th>" +
                            "<th scope='col' class='text-center' style='width:30%;'>Captador</th>" +
							"<th scope='col' class='text-center' style='width:25%;'></th>" +
						"</tr>" +
					"</thead>" +
					"<tbody>";
					
		$j.each(gBienes, function(clave, bien)  
		{	
			if (bien.ver == "true")
			{
				bienes += 
                        "<tr>" +
                            "<td class='text-center align-middle'>" + contador + "</td>";
							
				if (gVistaPreferida == "Lista con imágenes")
				{
					if (gDatosBienes[bien.ID]._thumbnail_id)
					{				
						bienes += 
							"<td class='text-center align-middle'><img src=" + gDatosBienes[bien.ID]._thumbnail_id[0].valor + " class='img-thumbnail' alt='Foto de la propiedad'></td>";
					}
					else
					{
						bienes += "<td class='text-center align-middle'>Sin foto</td>";
					}
				}
				else
				{
					if (gDatosBienes[bien.ID]._thumbnail_id)
					{				
						bienes += 
							"<td class='text-center align-middle'>" +
								"<a href=" + gDatosBienes[bien.ID]._thumbnail_id[0].valor + " title='Ver foto' target='_blank'>" +
								"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/camera-slr.svg' ?>" +
								" alt='Ver foto' class='icono'>" +
								"</a>" + 
							"</td>";
					}
					else
					{
						bienes += "<td class='text-center align-middle'>Sin foto</td>";
					}
				}
				
				colorAlerta = alertaActividades(bien.ID);

				if (colorAlerta == "Verde")
				{
					bienes += "<td class='text-center align-middle letraVerde'>" + bien.__name + "</td>";
				}
				else if (colorAlerta == "Naranja")
				{
					bienes += "<td class='text-center align-middle letraAmarilla'>" + bien.__name + "</td>";
				}
				else
				{
					bienes += "<td class='text-center align-middle letraRoja'>" + bien.__name + "</td>";
				}

                if (gRoles.includes("Administrador"))
                {
                    bienes += 
			            "<td class='text-center align-middle'><input type='text' id='buscarCaptador60-" + bien.ID + 
                        "' class='form-control buscarCaptador60'" + 
				        " value='" + gMatrizBienes[bien.ID].nombre_autor + "'>" +
                        "<spam class='mensajesUsuario' id='mensajesUsuario60-" + bien.ID + "'></spam></td>";
                }
                else
                {
					bienes += 
						"<td class='text-center align-middle'><input type='text' id='buscarCaptador60-" + bien.ID + 
                        "' class='form-control buscarCaptador60'" + 
						" value='" + gMatrizBienes[bien.ID].nombre_autor + "' disabled>" +
                        "<spam class='mensajesUsuario' id='mensajesUsuario60-" + bien.ID + "'></spam></td>";
                }
				
				bienes += 
					"<td class='text-center align-middle'>" + 				
						"<a href=" + bien.guid + " title='Ver propiedad' target='_blank' class='btn btn-light' id='verPropiedad60'>" +
						"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
							"crmdapliw/app/public/images/eye.svg alt='ver propiedad' class='icono'>" +
						"</a>" +								
								
						"<a href=<?= mvc_public_url(array('controller' => 'submit-property')) . '?edit_property=" + bien.ID + "' ?>" + 
							" class='btn btn-light' id='editarPropiedad60' title='Editar propiedad' target='_blank'>" +
							"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
							"crmdapliw/app/public/images/pencil.svg alt='Editar propiedad' class='icono'>" +
						"</a>" +
						
						"<button class='btn btn-light ultimaActividad60' id='ultimaActividad60-" + bien.ID + "' title='Agenda'>" +
							"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
							"crmdapliw/app/public/images/calendar.svg alt='Agenda' class='icono'>" +
						"</button>" +
						
						"<button class='btn btn-light personas60' id='personas60-" + bien.ID + "' title='Personas'>" +
							"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
							"crmdapliw/app/public/images/people.svg alt='Personas' class='icono'>" +
						"</button>" +

						"<button class='btn btn-light documentos60' id='documentos60-" + bien.ID + "' title='Documentos'>" +
							"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
							"crmdapliw/app/public/images/document.svg alt='Documentos' class='icono'>" +
						"</button>" +			
					"</td>" +
				"</tr>";
                contador++;
			}
		});
        bienes += 
				    "</tbody>" +
				"</table>" +
			"</div>";
	}
	else
	{
		$j.each(gBienes, function(clave, bien)  
		{
			if (bien.ver == "true")
			{
				bienes += 
					"<div class='col-md-4 mb-3'>" +
						"<div class='card detalleBienes60'>";
											
							if (gVistaPreferida == "Mosaicos con imágenes")
							{
								if (gDatosBienes[bien.ID]._thumbnail_id)
								{
									bienes += 
										"<img src=" + gDatosBienes[bien.ID]._thumbnail_id[0].valor + " class='card-img-top img-fluid' alt='Foto de la propiedad'>";
								}
								else
								{
									bienes += "Sin foto";
								}
							}
							else
							{
								if (gDatosBienes[bien.ID]._thumbnail_id)
								{
									bienes += 
										"<a href=" + gDatosBienes[bien.ID]._thumbnail_id[0].valor + " title='Ver foto' target='_blank'>" +
										"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/camera-slr.svg' ?>" +
										" alt='Ver foto' class='icono'>" +
										"</a>";
								}
								else
								{
									bienes += "Sin foto";
								}
							}
					
							bienes +=                         
							   
							"<div class='card-block'>" +
								"<h4 class='card-title' id='nombreDelBien" + bien.ID + "'>" + bien.__name + "</h4>" +

								"<div class='card bg-light text-dark'>" +
									"<div class='card-body' id='primeraActividadPendiente" + bien.ID + "'>" + 
									"</div>" +
								"</div>" + 

								"<div class='form-group'>" +
									"<label for='buscarCaptador60" + bien.ID + "'>Captador responsable: </label>";

                            if (gRoles.includes("Administrador"))
                            {
                                bienes += 
						            "<input type='text' id='buscarCaptador60-" + bien.ID + "' class='form-control buscarCaptador60'" + 
							            " value='" + gMatrizBienes[bien.ID].nombre_autor + "'>";
                            }
                            else
                            {
								bienes += 
									"<input type='text' id='buscarCaptador60-" + bien.ID + "' class='form-control buscarCaptador60'" + 
										" value='" + gMatrizBienes[bien.ID].nombre_autor + "' disabled>";
                            }
                            
                            bienes +=

								"</div>" +
								"<div class='mensajesUsuario' id='mensajesUsuario60-" + bien.ID + "'>" +
								"</div>" +

								"<div class='card-footer'>" +
									"<p>" +  
										"<a href=" + bien.guid + " title='Ver propiedad' target='_blank' class='btn btn-light' id='verPropiedad60'>" +
										"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
											"crmdapliw/app/public/images/eye.svg alt='Ver propiedad' class='icono'>" +
										"</a>" +								
												
										"<a href=<?= mvc_public_url(array('controller' => 'submit-property')) . '?edit_property=" + bien.ID + "' ?>" + 
											" class='btn btn-light' id='editarPropiedad60' title='Editar propiedad' target='_blank'>" +
											"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
											"crmdapliw/app/public/images/pencil.svg alt='Editar propiedad' class='icono'>" +
										"</a>" +

										"<button class='btn btn-light personas60' id='personas60-" + bien.ID + "' title='Personas'>" +
											"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
											"crmdapliw/app/public/images/people.svg alt='Personas' class='icono'>" +
										"</button>" +

										"<button class='btn btn-light documentos60' id='documentos60-" + bien.ID + "' title='Documentos'>" +
											"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
											"crmdapliw/app/public/images/document.svg alt='Documentos' class='icono'>" +
										"</button>" +

									"</p>" +
								"</div>" +  

							"</div>" +
						"</div>" +
					"</div>";
			}
		});
	}

    $j("#titulo60").html(tipoContenido);

    $j("#cicloBienes60").html(bienes).find(".buscarCaptador60").autocomplete(
    {
        source: gPersonasAsc,
        select: function( event, ui ) 
        {
            idBien = $j(this).attr("id").substring(17);
            idCaptadorAnterior = gMatrizBienes[idBien].post_author;
            idNuevoCaptador = ui.item.id;
            nombreNuevoCaptador = ui.item.value;
            indicadorCaptador = 0;
            idMensaje = "#mensajesUsuario60-" + idBien; 
            actualizarCaptador(idBien, idCaptadorAnterior, idNuevoCaptador, nombreNuevoCaptador, indicadorCaptador, idMensaje);
        }
    });
	
    $j.each(gBienes, function(clave, bien)  
    {
        primeraActividadPendiente(bien.ID);
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
        $j.each(gDatosBienes[idBien].CRMdapliw_actividad_agenda, function(clave, datos)  
        {
            if (datos.estatus == "Abierta")
            {
				if (gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
                {
					actividadMasAntigua = datos.nombreActividad;
					fechaMasAntigua = 
						datos.diaPlanificado + "/" + 
						datos.mesPlanificado + "/" +
						datos.anoPlanificado;
					fechaInvertidaAntigua = datos.fechaInvertida;
					return false;
				}
                else if (gRoles.includes("Promotor") || gRoles.includes("Captador"))
                {
                    if (datos.idEjecutor == gIdUsuario)
                    {
						actividadMasAntigua = datos.nombreActividad;
						fechaMasAntigua = 
							datos.diaPlanificado + "/" + 
							datos.mesPlanificado + "/" +
							datos.anoPlanificado;
						fechaInvertidaAntigua = datos.fechaInvertida;
						return false;
					}
				}
            }
        });        
    }

    if (actividadMasAntigua != "")
    {
        if (fechaInvertidaAntigua < gFechaActualInvertida)
        {
            datosActividadPendiente = 
                "<p class='letraAmarilla'>" +
                    "<b>Actividad planificada: </b>" + actividadMasAntigua + 
                    " <b>Fecha: </b>" + fechaMasAntigua +
                "</p>" +
                "<p>" +
                    "<button class='btn btn-link fondoAzul ultimaActividad60' id='ultimaActividad60-" + idBien + "'>" +
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
                    "<button class='btn btn-link fondoAzul ultimaActividad60' id='ultimaActividad60-" + idBien + "'>" +
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
                "<button class='btn btn-link fondoAzul ultimaActividad60' id='ultimaActividad60-" + idBien + "'>" +
                    "Ver más..." +
                "</button>" +
            "</p>";
    }

    $j("#primeraActividadPendiente" + idBien).html(datosActividadPendiente);
}

function alertaActividades(idBien)
{
	fechaInvertidaAntigua = "";

    if (gDatosBienes[idBien].CRMdapliw_actividad_agenda)
    {
        $j.each(gDatosBienes[idBien].CRMdapliw_actividad_agenda, function(clave, datos)  
        {
            if (datos.estatus == "Abierta")
            {
                if (gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
                {
                    fechaInvertidaAntigua = datos.fechaInvertida;
                    return false;
                }
                else if (gRoles.includes("Promotor") || gRoles.includes("Captador"))
                {
                    if (datos.idEjecutor == gIdUsuario)
                    {
                        fechaInvertidaAntigua = datos.fechaInvertida;
                        return false;
                    }
                }
            }
        });        
    }

    if (fechaInvertidaAntigua != "")
    {
        if (fechaInvertidaAntigua < gFechaActualInvertida)
        {
            colorAlerta = "Naranja";
        }
        else
        {
            colorAlerta = "Verde"; 
        }
    }
    else
    {
        colorAlerta = "Rojo";
    }

    return colorAlerta;
}

function bienesSinActividad()
{
	$j.each(gBienes, function(clave1, datos1)  
	{	
        if (gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda)
        {
            indicadorActividadAbierta = 0;

	        $j.each(gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda, function(clave2, datos2)  
	        {
                if (gRoles.includes("Promotor") || gRoles.includes("Captador"))
                {
                    if (datos2.idEjecutor == gIdUsuario)
                    {
                        if (datos2.estatus == "Abierta")
                        {
                            indicadorActividadAbierta = 1;
                            return false;
                        }
                    }
                }
                else
                {
                    if (datos2.estatus == "Abierta")
                    {
                        indicadorActividadAbierta = 1;
                        return false;
                    }
                }
            });
            if (indicadorActividadAbierta == 0)
            {
                gBienes[clave1].ver = "true";
            }            
        }
        else
        {
            gBienes[clave1].ver = "true";
        }
    });
}

function filtrarAgenda(idPersona)
{
    var indicadorVer = "";
	
	var filtro = "";

    if (idPersona > 0)
    {
		filtro = "Persona"
		
        desmarcarAgendaVista();

        $j.each(gDatosBienes, function(clave1, datos1)  
        {
            if (datos1.CRMdapliw_actividad_agenda)
            {
                $j.each(datos1.CRMdapliw_actividad_agenda, function(clave2, datos2)  
                {
                    if (datos2.idEjecutor == idPersona)
                    {
                        gDatosBienes[clave1].CRMdapliw_actividad_agenda[clave2].ver = "true";
                    }
                });
            }
        });    
    }
    else
    {
        if ($j("#busquedaActividades51").val() == "Todas")
        {
			filtro = "Todas";
			
			$j.each(gDatosBienes, function(clave1, datos1)  
			{
				if (datos1.CRMdapliw_actividad_agenda)
				{
					$j.each(datos1.CRMdapliw_actividad_agenda, function(clave2, datos2)  
					{
                        if (gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
                        {
							gDatosBienes[clave1].CRMdapliw_actividad_agenda[clave2].ver = "true";
						}
						else
						{
							if (datos2.idEjecutor == gIdUsuario)
							{
								gDatosBienes[clave1].CRMdapliw_actividad_agenda[clave2].ver = "true";
							}
						}
					});
				}
			});
        }
        else
        {
			if ($j("#busquedaActividades51").val() == "Actividades atrasadas")
			{
				filtro = "Actividades atrasadas";
			}
			else if ($j("#busquedaActividades51").val() == "Actividades del mes")
			{
				filtro = "Actividades del mes";
			}
			else if ($j("#busquedaActividades51").val() == "Actividades para hoy")
			{
				filtro = "Actividades para hoy";
			}			

            desmarcarAgendaVista();

            $j.each(gDatosBienes, function(clave1, datos1)  
            {
                if (datos1.CRMdapliw_actividad_agenda)
                {
                    $j.each(datos1.CRMdapliw_actividad_agenda, function(clave2, datos2)  
                    {   
                        indicadorVer = "false";

                        if (gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
                        {
                            indicadorVer = verificarFechasActividades(datos2);
                        }
                        else
                        {
                            if (datos2.idEjecutor == gIdUsuario)
                            {
                                indicadorVer = verificarFechasActividades(datos2);
                            }
                        }
                        if (indicadorVer == "true")
                        {
                            gDatosBienes[clave1].CRMdapliw_actividad_agenda[clave2].ver = "true";
                        }                  
                    });
                }
            });
        }
    }
	return filtro;
}	

function marcarAgendaVista()
{
    $j.each(gDatosBienes, function(clave1, datos1)  
    {
        if (datos1.CRMdapliw_actividad_agenda)
        {
            if (datos1.CRMdapliw_actividad_agenda[0])
            {
                $j.each(datos1.CRMdapliw_actividad_agenda, function(clave2, datos2)  
                {
                    gDatosBienes[clave1].CRMdapliw_actividad_agenda[clave2].ver = "true";
                });
            }
        }
    });
}

function desmarcarAgendaVista()
{
    $j.each(gDatosBienes, function(clave1, datos1)  
    {
        if (datos1.CRMdapliw_actividad_agenda)
        {
            if (datos1.CRMdapliw_actividad_agenda[0])
            {
                $j.each(datos1.CRMdapliw_actividad_agenda, function(clave2, datos2)  
                {
                    gDatosBienes[clave1].CRMdapliw_actividad_agenda[clave2].ver = "false";
                });
            }
        }
    });
}

function verificarFechasActividades(actividad)
{
    indicadorVer = "false";

    if ($j("#busquedaActividades51").val() == "Actividades atrasadas")
    {
        fechaPlanificadaInvertida = 
            actividad.anoPlanificado + actividad.mesPlanificado + actividad.diaPlanificado;

        if (fechaPlanificadaInvertida < gFechaActualInvertida)
        {
            indicadorVer = "true";
        }
    }
    else if ($j("#busquedaActividades51").val() == "Actividades del mes")
    {
        if (actividad.mesPlanificado == gMesActual)
        {
            indicadorVer = "true";
        }
    }
    else if ($j("#busquedaActividades51").val() == "Actividades para hoy")
    {
        if (actividad.diaPlanificado == gDiaActual)
        {
            indicadorVer = "true";
        }
    }
    return indicadorVer;
}

function personasBien(idBien)
{
    var indicadorCaptadorPropietario = 0;

    $j("#tituloPersonas100").html("Personas relacionadas con la propiedad " + gMatrizBienes[idBien].post_title);

   	if (gVistaPreferida == "Lista con imágenes" || gVistaPreferida == "Mosaico con imágenes")
	{
        if (gDatosBienes[idBien]._thumbnail_id)
        {
            $j("#imagen100").html("<img src=" + gDatosBienes[idBien]._thumbnail_id[0].valor + " class='card-img-top img-fluid' alt='Foto de la propiedad'>");
        }
        else
        {
            $j("#imagen100").html("Foto de la propiedad");
        }
    }
    else
    {
		if (gDatosBienes[idBien]._thumbnail_id)
		{				
			referenciaImagen = 
				"<a href=" + gDatosBienes[idBien]._thumbnail_id[0].valor + " title='Ver foto' target='_blank'>" +
					"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/camera-slr.svg' ?>" +
					" alt='Ver foto' class='icono'>" +
				"</a>"; 

            $j("#imagen100").html(referenciaImagen);
		}
		else
		{
			$j("#imagen100").html("Sin foto");
		}
    }

    if (gRoles.includes("Promotor") || gRoles.includes("Captador"))
    {
        if (gMatrizBienes[idBien].post_author == gIdUsuario)
        {
            indicadorCaptadorPropietario = 1;                        
        }
    }

    if (indicadorCaptadorPropietario == 1 || gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
    {
        $j("#nombrePropietario100").val(gMatrizBienes[idBien].propietario);
        $j("#mensajesPropietario100").html("");
    }
    else
    {
        $j("#grupoPropietario100").addClass("noVer");
    }    

    $j("#nombreCaptador100").val(gMatrizBienes[idBien].nombre_autor);
    $j("#mensajesCaptador100").html("");

    if (gRoles.includes("Administrador") == false)
    {
        $j("#nombreCaptador100").attr("disabled", true);        
    }
    
    $j("#nombreCliente100").val("");
    $j("#mensajesCliente100").html("");

    $j("#mensajesComprador100").html("");

    compradoresPotenciales(idBien);
}

function compradoresPotenciales(idBien)
{
    var compradoresPotenciales =
            "<div class='col-md-12 mb-3'>";

    var complementoId = "";

    if (gDatosBienes[idBien].CRMdapliw_cliente)
    {
        $j.each(gDatosBienes[idBien].CRMdapliw_cliente, function(clave, datos)  
        {
            if (datos.activo == "true")
            {
                complementoId = datos.id + "-" + datos.idUser + "-" + idBien;

                compradoresPotenciales += 
                    "<div class='card' id='comprador100-" + complementoId + "'>" +
                        "<div class='card-block'>" + 
                            "<h4 class='card-title'>" + datos.valor + "</h4>" +
                            "<div class='card bg-light text-dark'>" +
                                "<div class='card-body'>" +
                                    "<p> Promotor: " + datos.nombrePromotorCliente + "</p>"+
                                "</div>" +
                            "</div>" +
                            "<div class='card-footer'>" +
                                "<p>" +                                                            
                                    "<button class='btn btn-light eliminarComprador100'" + 
                                        "id='eliminarComprador100-" + complementoId + "'" + 
                                        " title='Eliminar comprador potencial'>" +
                                        "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                                        "crmdapliw/app/public/images/trash.svg alt='Eliminar comprador' class='icono'" +
                                        " id='imagenEliminarComprador100-" + complementoId + "'>" +
                                    "</button>" +
                                "</p>" +
                            "</div>" +  
                        "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                        "<div class='col-md-12'>" +
                            "<div class='mensajesUsuario' id='mensajesComprador100-" + complementoId + "'>" +
                            "</div>" +
                        "</div>" +
                    "</div>" + 
                    "<br />";
            }
        });
    }

    compradoresPotenciales += "</div>";

    $j("#compradoresPotenciales100").html(compradoresPotenciales);
}

function inicializarPersonas()
{
    borrarMensajesAnteriores();
    $j("#tipoIdentificacion110").val("");
    $j("#numeroIdentificacion110").val(0);
    $j("#primerNombre110").val("");
    $j("#segundoNombre110").val("");
    $j("#primerApellido110").val("");
    $j("#segundoApellido110").val("");

	$j("#rolesCheckbox110").each(function (index) 
	{ 
		$j(this).attr('checked', false);
		$j(this).prop('checked', false);
	});

    $j("#celular110").val("");
    $j("#telefonoFijo110").val("");
    $j("#email110").val("@");
    $j("#direccion110").val("");

    $j("#tituloAgregarPersonas110").html("Agregar personas a la propiedad " + gMatrizBienes[gIdPostActual].post_title);
}

function guardarPersona(indicadorCheckbox)
{
	borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
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
    segundoNombre = $j("#segundoNombre110").val();  

    primerApellido = $j("#primerApellido110").val();
    segundoApellido = $j("#segundoApellido110").val();  

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

    celular = $j("#celular110").val(); 
    telefonoFijo = $j("#telefonoFijo110").val();

    email = $j("#email110").val();
    direccion = $j("#direccion110").val();  
    
    /* Descomentar solo para pruebas
    arregloPrueba = [{"nombre" : "Ángel", "apellido" : "Sanz"}, {"nombre" : "Juan", "apellido" : "González"}];

    pruebaJson = 
        {
            "idPost" : gIdPostActual,
            "arregloPrueba" : arregloPrueba
        };  
    */

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
                "direccion" : direccion,
                "idPromotor" : gIdUsuario
            }
        };

    $j.post("<?= mvc_public_url(array('controller' => 'users', 'action' => 'agregar_persona')) ?>", 
        jsonPersona, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {   
            $j("#guardarPersona10").attr("disabled", false).html(gImagenAnterior);

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

            borrarMensajesAnteriores();                
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
		    if (gFuncionLlamadora == "bienesSinActividad51")
		    {
                $j("#cerrarPersonasSinActividad10").removeClass('noVer');
		    }
		    else if (gFuncionLlamadora == "busquedaPropiedades10" || gFuncionLlamadora == "busquedaNombre50")
		    {	
                $j("#cerrarPersonas10").removeClass('noVer');
		    }
            $j("#agregarPersona10").removeClass("noVer");
            window.scrollTo(0, 0);           
        } 
        else 
        {
            $j("#guardarPersona10").attr("disabled", false).html(gImagenAnterior);

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

            borrarMensajesAnteriores();                
            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>"; 

        	$j("#mensajesUsuario30").html(mensajesUsuario);
			window.scrollTo(0, 0);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $j("#guardarPersona10").attr("disabled", false).html(gImagenAnterior);

		borrarMensajesAnteriores();
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" +
                    "Estimado usuario el servidor tardó mucho en responder, " +
                    "por favor pulse el botón 'Recargar página' " + 
                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/reload.svg' ?>" +
                    " alt='Recargar página' class='icono'>" +
					" que se encuentra a su derecha y luego consulte si efectivamente se guardaron los cambios" +
                "</strong>" + 
            "</div>"; 

        $j("#mensajesUsuario30").html(mensajesUsuario);
		window.scrollTo(0, 0);
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

    borrarMensajesAnteriores();
    
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

    if ($j("#primerNombre110").val() == "") 
    {   
        indicadorError = 1;
        mensajeError = anterior + "Escriba el primer nombre de la persona" + posterior;
        $j("#mensajesPrimerNombre110").html(mensajeError);
    }

    if ($j("#primerApellido110").val() == "")
    {   
        indicadorError = 1;
        mensajeError = anterior + "Por favor escriba el primer apellido de la persona" + posterior;
        $j("#mensajesPrimerApellido110").html(mensajeError);
    }

    if ($j("#celular110").val() == "" && $j("#telefonoFijo110").val() == "")
    {   
        indicadorError = 1;
        mensajeError = anterior + "Por favor escriba al menos un número de teléfono de la persona" + posterior;
        $j("#mensajesCelular110").html(mensajeError);
        $j("#mensajesTelefono110").html(mensajeError);
    }

    if ($j("#email110").val() == "@")
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
        $j("#guardarPersona10").attr("disabled", false).html(gImagenAnterior);
        mensajeError = anterior + "Estimado usuario uno o más datos contienen errores, por favor verifique" + posterior;
        $j("#mensajesUsuario30").html(mensajeError);
        window.scrollTo(0, 0);           
    }
}

function agregarComprador(idBien, idComprador, nombreComprador)
{
    borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se agrega el comprador </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
        "</div>";

    $j("#mensajesCliente100").html(mensajesUsuario);

    indicadorArregloComprador = 0;

    if (gDatosBienes[idBien].CRMdapliw_cliente)
    {
        $j.each(gDatosBienes[idBien].CRMdapliw_cliente, function(clave, datos)  
        {
            if (datos.idUser == idComprador)
            {
                if (datos.activo == "true")
                {
                    borrarMensajesAnteriores();
                    mensajesUsuario =
                        "<div class='alert alert-danger alert-dismissible'>" +
                            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                            "<strong>Este comprador ya está asociado a esta propiedad</strong>" +
                        "</div>"; 

	                $j("#mensajesCliente100").html(mensajesUsuario);
                    indicadorArregloComprador = 1;                
                }
            }
        });
    }
    if (indicadorArregloComprador == 0)
    {
        jsonCompradorBien = 
            {
                "idBien" : idBien,
                "idComprador" : idComprador
            };

        $j.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'agregar_comprador_bien')) ?>", 
            jsonCompradorBien, null, "json")          
        .done(function(response) 
        {
            if (response.satisfactorio) 
            {
			    vectorGeneralActualizado = response.vectorGeneral;
			    actualizarVectores(vectorGeneralActualizado);

                borrarMensajesAnteriores();
                mensajesUsuario =
                    "<div class='alert alert-success alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                        "<strong>" + response.mensaje + "</strong>" +
                    "</div>";

                $j("#mensajesCliente100").html(mensajesUsuario);

                compradoresPotenciales(idBien);
            } 
            else 
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
                borrarMensajesAnteriores();
                mensajesUsuario =
                    "<div class='alert alert-danger alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                        "<strong>" + response.mensaje + "</strong>" +
                    "</div>"; 

            	$j("#mensajesUsuario30").html(mensajesUsuario);
				window.scrollTo(0, 0);
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown) 
        {
            borrarMensajesAnteriores();
            mensajesUsuario =
				"<div class='alert alert-danger alert-dismissible'>" +
					"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
					"<strong>" +
						"Estimado usuario el servidor tardó mucho en responder, " +
						"por favor pulse el botón 'Recargar página' " + 
						"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/reload.svg' ?>" +
						" alt='Recargar página' class='icono'>" +
						" que se encuentra a su derecha y luego consulte si efectivamente se guardaron los cambios" +
					"</strong>" + 
				"</div>"; 

            $j("#mensajesUsuario30").html(mensajesUsuario);
			window.scrollTo(0, 0);
        });  
    }        
}

function eliminarComprador(idCompradorPromotor)
{
    borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se elimina el comprador </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
        "</div>";

    var arregloId = idCompradorPromotor.split("-");
    var idMensaje = "#mensajesComprador100-" + idCompradorPromotor;  
    var idPostmeta = arregloId[0];
    
    $j(idMensaje).html(mensajesUsuario);

    var jsonPostmeta = 
    {
        "idPostmeta" : idPostmeta
    }
	
    $j.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'eliminar_comprador')) ?>", 
        jsonPostmeta, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {
            $j("#eliminarComprador100-" + idCompradorPromotor).attr("disabled", false).html(gImagenAnterior);  

            borrarMensajesAnteriores();
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

            $j("#mensajesUsuario30").html(mensajesUsuario);

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

            compradoresPotenciales(gIdPostActual);
            window.scrollTo(0, 0);
        } 
        else 
        {
            $j("#eliminarComprador100-" + idCompradorPromotor).attr("disabled", false).html(gImagenAnterior); 

            borrarMensajesAnteriores();
            mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" + response.mensaje + "</strong>" +
            "</div>"; 

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

        	$j(idMensaje).html(mensajesUsuario);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $j("#eliminarComprador100-" + idCompradorPromotor).attr("disabled", false).html(gImagenAnterior); 

        borrarMensajesAnteriores();
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" +
                    "Estimado usuario el servidor tardó mucho en responder, " +
                    "por favor pulse el botón 'Recargar página' " + 
                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/reload.svg' ?>" +
                    " alt='Recargar página' class='icono'>" +
					" que se encuentra a su derecha y luego consulte si efectivamente se guardaron los cambios" +
                "</strong>" + 
            "</div>";

	    $j(idMensaje).html(mensajesUsuario);
    });
}

function actualizarCaptador(idBien, idCaptadorAnterior, idNuevoCaptador, nombreNuevoCaptador, indicadorCaptador, idMensaje)
{
    borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
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
			vectorGeneralActualizado = response.vectorGeneral;
			actualizarVectores(vectorGeneralActualizado);

            borrarMensajesAnteriores();
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";
            $j(idMensaje).html(mensajesUsuario);
        } 
        else 
        {
			vectorGeneralActualizado = response.vectorGeneral;
			actualizarVectores(vectorGeneralActualizado);

            borrarMensajesAnteriores();
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
        borrarMensajesAnteriores();
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" +
                    "Estimado usuario el servidor tardó mucho en responder, " +
                    "por favor pulse el botón 'Recargar página' " + 
                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/reload.svg' ?>" +
                    " alt='Recargar página' class='icono'>" +
					" que se encuentra a su derecha y luego consulte si efectivamente se guardaron los cambios" +
                "</strong>" + 
            "</div>"; 

    	$j(idMensaje).html(mensajesUsuario);
    });
}

function guardarCambiosAgenda(idActividad)
{
    borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
        "</div>";
    var arregloId = idActividad.split("-");
    var idMensaje = "#mensajesUsuario80-" + idActividad;
    var tarjeta = "#actividad80-" + idActividad;
    var idActividadObj = arregloId[1];
    var notasObj = "";
    var anoPlanificadoObj = "";
    var mesPlanificadoObj = "";
    var diaPlanificadoObj = "";
    var horaPlanificadoObj = "";
    var minutoPlanificadoObj = "";
    var meridianoPlanificadoObj = "";

    var adicionalAnoPlanificadoObj = "";
    var adicionalMesPlanificadoObj = "";
    var adicionalDiaPlanificadoObj = "";
    var adicionalHoraPlanificadoObj = "";
    var adicionalMinutoPlanificadoObj = "";
    var adicionalMeridianoPlanificadoObj = "";
    var adicionalNotasObj = "";

    var estatusObj = "";

    var informacionAdicional = [""];

    $j("#notas80-" + idActividad).val($j.trim($j("#notas80-" + idActividad).val().toUpperCase()));

    notasObj = $j("#notas80-" + idActividad).val();
    anoPlanificadoObj = $j("#ano80-" + idActividad).val();
    mesPlanificadoObj = $j("#mes80-" + idActividad).val();
    diaPlanificadoObj = $j("#dia80-" + idActividad).val();
    horaPlanificadoObj = $j("#hora80-" + idActividad).val();
    minutoPlanificadoObj = $j("#minuto80-" + idActividad).val();
    meridianoPlanificadoObj = $j("#meridiano80-" + idActividad).val();

    if ($j("#cerrarActividad80-" + idActividad).prop("checked") == true)
    {
        estatusObj = "Cerrada por el usuario";
    }
    else
    {
        estatusObj = "abierta";
    }

    if (gIndicadorAdicional == 1)
    {
        $j("#adicionalNotas80-" + idActividad).val($j.trim($j("#adicionalNotas80-" + idActividad).val().toUpperCase()));

        adicionalNotasObj = $j("#adicionalNotas80-" + idActividad).val();
        adicionalAnoPlanificadoObj = $j("#adicionalAno80-" + idActividad).val();
        adicionalMesPlanificadoObj = $j("#adicionalMes80-" + idActividad).val();
        adicionalDiaPlanificadoObj = $j("#adicionalDia80-" + idActividad).val();
        adicionalHoraPlanificadoObj = $j("#adicionalHora80-" + idActividad).val();
        adicionalMinutoPlanificadoObj = $j("#adicionalMinuto80-" + idActividad).val();
        adicionalMeridianoPlanificadoObj = $j("#adicionalMeridiano80-" + idActividad).val();

        informacionAdicional =
            [{
                "nombreActividad" : "Confirmación solicitud de cita para mostrar propiedad",
                "notas" : adicionalNotasObj,
                "anoPlanificado" : adicionalAnoPlanificadoObj,
                "mesPlanificado" : adicionalMesPlanificadoObj,
                "diaPlanificado" : adicionalDiaPlanificadoObj,
                "horaPlanificado" : adicionalHoraPlanificadoObj,
                "minutoPlanificado" : adicionalMinutoPlanificadoObj,
                "meridianoPlanificado" : adicionalMeridianoPlanificadoObj
            }];
    }

    var jsonActividad = 
    {
        "idActividad" : idActividadObj,
        "notas" : notasObj,
        "anoPlanificado" : anoPlanificadoObj,
        "mesPlanificado" : mesPlanificadoObj,
        "diaPlanificado" : diaPlanificadoObj,
        "horaPlanificado" : horaPlanificadoObj,
        "minutoPlanificado" : minutoPlanificadoObj,
        "meridianoPlanificado" : meridianoPlanificadoObj,
        "informacionAdicional" : informacionAdicional,
        "estatus" : estatusObj
    }

    $j(idMensaje).html(mensajesUsuario);
 
    $j.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'editar_actividad')) ?>", 
        jsonActividad, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {
			$j("#guardarCambios80-" + idActividad).attr("disabled", false).html(gImagenAnterior);

			borrarMensajesAnteriores();
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";
							
            if (estatusObj == "Cerrada por el usuario")
            {
                $j(tarjeta).addClass("noVer");
				$j("#mensajesUsuario30").html(mensajesUsuario);
				window.scrollTo(0, 0);
            }
			else
			{
				$j(idMensaje).html(mensajesUsuario);
			}
			
            if (gIndicadorAdicional == 1)
            {
                $j("#adicionalFechaPlanificada80-" + idActividad).addClass("noVer");
                $j("#adicionalGrupoNotas80-" + idActividad).addClass("noVer");
            }
        		
            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);
        } 
        else 
        {
			$j("#guardarCambios80-" + idActividad).attr("disabled", false).html(gImagenAnterior);

			borrarMensajesAnteriores();
            mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" + response.mensaje + "</strong>" +
            "</div>"; 

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

        	$j(idMensaje).html(mensajesUsuario);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
		$j("#guardarCambios80-" + idActividad).attr("disabled", false).html(gImagenAnterior);

		borrarMensajesAnteriores();
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" +
                    "Estimado usuario el servidor tardó mucho en responder, " +
                    "por favor pulse el botón 'Recargar página' " + 
                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/reload.svg' ?>" +
                    " alt='Recargar página' class='icono'>" +
					" que se encuentra a su derecha y luego consulte si efectivamente se guardaron los cambios" +
                "</strong>" + 
            "</div>"; 

	    $j(idMensaje).html(mensajesUsuario);
    });
}

function validarActividad(tipoActividad, idActividad)
{
    var actividadesRestringidas =
        [
            "Solicitar cita para mostrar propiedad"
        ];

    var indicadorError = 0;
    var anterior =
        "<div class='alert alert-danger alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>";

    var posterior = "</strong></div>"; 

    borrarMensajesAnteriores();

    if (tipoActividad == "Nueva")
    {
        if ($j("#selectOpciones90").val() == "")  
        {   
            $j("#guardarActividad10").attr("disabled", false).html(gImagenAnterior); 
            indicadorError = 1;
            mensajeError = anterior + "Seleccione una actividad" + posterior;
            $j("#mensajesActividad90").html(mensajeError);
        }
        else
        {
		    idFechas =
		    {
			    "idSelectAno" : "#ano90",
                "idMensajesAno" : "#mensajesAno90",

			    "idSelectMes" : "#mes90",
                "idMensajesMes" : "#mensajesMes90",

			    "idSelectDia" : "#dia90",
                "idMensajesDia" : "#mensajesDia90",

			    "idSelectHora" : "#hora90",
                "idMensajesHora" : "#mensajesHora90",

			    "idSelectMinuto" : "#minuto90",
                "idMensajesMinuto" : "#mensajesMinuto90",

			    "idSelectMeridiano" : "#meridiano90",
                "idMensajesMeridiano" : "#mensajesMeridiano90"
            }
           
            indicadorError = validarFecha(idFechas);
    
            if (indicadorError == 0)
		    {
			    guardarActividad();
		    }
            else
            {
                $j("#guardarActividad10").attr("disabled", false).html(gImagenAnterior); 
            }
        }	
	}	
	else
	{
        var arregloId = idActividad.split("-");       
        clave = arregloId[0];

        if (gFuncionLlamadora == "verNotificaciones20" || gFuncionLlamadora == "busquedaAgenda10")
        {
            gIdPostActual = arregloId[2];
        }

        datos = gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[clave]		

	    if (datos.idEjecutor == gIdUsuario)
	    {	
            if (actividadesRestringidas.includes(datos.nombreActividad))
            {
				$j("#guardarCambios80-" + idActividad).attr("disabled", false).html(gImagenAnterior);
                alert("Estimado usuario esta actividad no se puede modificar. Debe que esperar la confirmación de la solicitud");
            }
            else
            {
	            complementoId = idActividad;           
	            idFechas =
	            {
		            "idSelectAno" : "#ano80-" + complementoId,
                    "idMensajesAno" : "#mensajesAno80-" + complementoId,

		            "idSelectMes" : "#mes80-" + complementoId,
                    "idMensajesMes" : "#mensajesMes80-" + complementoId,

		            "idSelectDia" : "#dia80-" + complementoId,
                    "idMensajesDia" : "#mensajesDia80-" + complementoId,

		            "idSelectHora" : "#hora80-" + complementoId,
                    "idMensajesHora" : "#mensajesHora80-" + complementoId,

		            "idSelectMinuto" : "#minuto80-" + complementoId,
                    "idMensajesMinuto" : "#mensajesMinuto80-" + complementoId,

		            "idSelectMeridiano" : "#meridiano80-" + complementoId,
                    "idMensajesMeridiano" : "#mensajesMeridiano80-" + complementoId		
                };	

                indicadorError = validarFecha(idFechas);

                if (indicadorError == 0)
                {
                    if (gIndicadorAdicional == 1)
                    {
	                    idFechas =
	                    {
		                    "idSelectAno" : "#adicionalAno80-" + complementoId,
                            "idMensajesAno" : "#adicionalMensajesAno80-" + complementoId,

		                    "idSelectMes" : "#adicionalMes80-" + complementoId,
                            "idMensajesMes" : "#adicionalMensajesMes80-" + complementoId,

		                    "idSelectDia" : "#adicionalDia80-" + complementoId,
                            "idMensajesDia" : "#adicionalMensajesDia80-" + complementoId,

		                    "idSelectHora" : "#adicionalHora80-" + complementoId,
                            "idMensajesHora" : "#adicionalMensajesHora80-" + complementoId,

		                    "idSelectMinuto" : "#adicionalMinuto80-" + complementoId,
                            "idMensajesMinuto" : "#adicionalMensajesMinuto80-" + complementoId,

		                    "idSelectMeridiano" : "#adicionalMeridiano80-" + complementoId,
                            "idMensajesMeridiano" : "#adicionalMensajesMeridiano80-" + complementoId		
                        };
                        indicadorError = validarFecha(idFechas);
                    }
                }
                if (indicadorError == 0)
                {
                    guardarCambiosAgenda(idActividad);       
                }
				else
				{
					$j("#guardarCambios80-" + idActividad).attr("disabled", false).html(gImagenAnterior);
				}
            }
	    }
	    else
	    {
			$j("#guardarCambios80-" + idActividad).attr("disabled", false).html(gImagenAnterior);
		    alert("No puede realizar cambios en esta actividad porque pertenece a otro usuario");
	    }
    }
}

function validarFecha(idFechas)
{
    var indicadorError = 0;

    var anterior =
        "<div class='alert alert-danger alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>";

    var posterior = "</strong></div>"; 
	
	if ($j(idFechas.idSelectAno).val() == "")  
	{ 
		indicadorError = 1;
		mensajeError = anterior + "Seleccione el año" + posterior;
		$j(idFechas.idMensajesAno).html(mensajeError);
	}
	
	if ($j(idFechas.idSelectMes).val() == "")  
	{ 
		indicadorError = 1;
		mensajeError = anterior + "Seleccione el mes" + posterior;
		$j(idFechas.idMensajesMes).html(mensajeError);
	}
	
	if ($j(idFechas.idSelectDia).val() == "")  
	{ 
		indicadorError = 1;
		mensajeError = anterior + "Seleccione el día" + posterior;
		$j(idFechas.idMensajesDia).html(mensajeError);
	}

	if ($j(idFechas.idSelectHora).val() == "")  
	{ 
		indicadorError = 1;
		mensajeError = anterior + "Seleccione la hora" + posterior;
		$j(idFechas.idMensajesHora).html(mensajeError);
	}
	
	if ($j(idFechas.idSelectMinuto).val() == "")  
	{ 
		indicadorError = 1;
		mensajeError = anterior + "Seleccione los minutos" + posterior;
		$j(idFechas.idMensajesMinuto).html(mensajeError);
	}
	
	if ($j(idFechas.idSelectMeridiano).val() == "")  
	{ 
		indicadorError = 1;
		mensajeError = anterior + "indique si es am o pm" + posterior;
		$j(idFechas.idMensajesMeridiano).html(mensajeError);
	}   
	
    if (indicadorError == 0)
    {
		fechaPlanificadaInvertida = 
			$j(idFechas.idSelectAno).val() +
			$j(idFechas.idSelectMes).val() +
			$j(idFechas.idSelectDia).val();

		if (fechaPlanificadaInvertida < gFechaActualInvertida)
		{
            indicadorError = 1;
			mensajeError = anterior + "Estimado usuario la fecha planificada es menor a la fecha actual, por favor verifique" + posterior;
			$j("#mensajesUsuario30").html(mensajeError);
			window.scrollTo(0, 0); 
		}
    }
    else
    {
        mensajeError = anterior + "Estimado usuario uno o más datos contienen errores, por favor verifique" + posterior;
        $j("#mensajesUsuario30").html(mensajeError);
        window.scrollTo(0, 0);           
    }

    return indicadorError;
}

function verificarAdicional(idActividad)
{
    var complementoId = idActividad.substring(18);
    var arregloId = idActividad.split("-");       
    clave = arregloId[1];

    if (gFuncionLlamadora == "verNotificaciones20" || gFuncionLlamadora == "busquedaAgenda10")
    {
        gIdPostActual = arregloId[3];
    }
       
    datos = gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[clave]		
	if (datos.idEjecutor == gIdUsuario)
	{
        if (datos.nombreActividad == "Solicitud de cita para mostrar propiedad")
        {
            gIndicadorAdicional = 1;

            borrarMensajesAnteriores();
            var mensajesUsuario = 
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>Estimado usuario por favor escriba los datos referentes a la confirmación de la cita</strong>" +
                "</div>";

            idMensaje = "#mensajesAdicional80-" + complementoId; 
            $j(idMensaje).html(mensajesUsuario);

		    $j("#adicionalTitulo80-" + complementoId).removeClass("noVer");
            $j("#adicionalFechaPlanificada80-" + complementoId).removeClass("noVer");
            $j("#adicionalGrupoNotas80-" + complementoId).removeClass("noVer");
        }
  	}
	else
	{
		alert("No puede realizar cambios porque esta actividad pertenece a otro usuario");
	}
}

function inicializarFormularioActividad()
{
	borrarMensajesAnteriores();
    if (gBotonCerrarLlamador == "#cerrarAgenda10")
    {
        $j("#tituloAgregarActividad90").html("Planificar actividades para " + gMatrizBienes[gIdPostActual].post_title); 
    }
    else
    {
        $j("#tituloAgregarActividad90").html("Planificar actividades");
        $j("#grupoBusqueda90").removeClass("noVer"); 
    }
    $j('#busquedaPropiedad90').val("");
    $j('#actividadAgenda90').val("");
    $j('#notas90').val("");

    $j('#selectOpciones90').html(gOpcionesSelectActividades);
	idFechas =
		{
			"idAno" : "actividadesAno90",
			"idSelectAno" : "ano90",
            "valorAno" : gAnoActual, 
            "idMensajesAno" : "mensajesAno90",

			"idMes" : "actividadesMes90",
			"idSelectMes" : "mes90",
            "valorMes" : gMesActual,
            "idMensajesMes" : "mensajesMes90",

			"idDia" : "actividadesDia90",
			"idSelectDia" : "dia90",
            "valorDia" : gDiaActual,
            "idMensajesDia" : "mensajesDia90",

			"idHora" : "actividadesHora90",
			"idSelectHora" : "hora90",
            "valorHora" : "",
            "idMensajesHora" : "mensajesHora90",

			"idMinuto" : "actividadesMinuto90",
			"idSelectMinuto" : "minuto90",
            "valorMinuto" : "",
            "idMensajesMinuto" : "mensajesMinuto90",

			"idMeridiano" : "actividadesMeridiano90",
            "valorMeridiano" : "",
			"idSelectMeridiano" : "meridiano90",
            "idMensajesMeridiano" : "mensajesMeridiano90"
		};
				
    lineaFecha = inicializarFecha(idFechas);
    $j("#fechaPlanificada90").html(lineaFecha);

    $j("#meridiano90").on("keydown", function(e) 
    {
        if (e.which == 9)
        {
            return false;
        }
    });  
}

function guardarActividad()
{
    borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se guardan los datos </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
        "</div>";

    $j("#notas90").val($j.trim($j("#notas90").val().toUpperCase()));

    anoPlanificadoEntero = parseInt($j("#ano90").val());
    mesPlanificadoEntero = parseInt($j("#mes90").val());
    mesPlanificadoEnteroMenosUno = mesPlanificadoEntero - 1;
    diaPlanificadoEntero = parseInt($j("#dia90").val());

    semanaPlanificada = new Date(anoPlanificadoEntero, mesPlanificadoEnteroMenosUno, diaPlanificadoEntero).getWeekNumber();

    jsonActividad = 
        {"idPost" : gIdPostActual,
        "actividad" :  
            {
                "nombreActividad" : $j("#selectOpciones90").val(),
                "notas" : $j("#notas90").val(),
                "anoPlanificado" : $j("#ano90").val(),
                "mesPlanificado" : $j("#mes90").val(),
                "diaPlanificado" : $j("#dia90").val(),
                "horaPlanificado" : $j("#hora90").val(),
                "minutoPlanificado" : $j("#minuto90").val(),
                "meridianoPlanificado" : $j("#meridiano90").val(),
                "semanaPlanificada" : semanaPlanificada,
                "anoCierre" : $j("#ano90").val(),
                "mesCierre" : $j("#mes90").val(),
                "diaCierre" : $j("#dia90").val(),
                "horaCierre" : $j("#hora90").val(),
                "minutoCierre" : $j("#minuto90").val(),
                "meridianoCierre" : $j("#meridiano90").val(),
				"idPropiedad" : gIdPostActual,
                "idEjecutor" : gIdUsuario,
                "idSolicitante" : gIdUsuario,
                "idActividadPadre" : "",
                "notificacion" : "Vista",
                "informacionAdicional" : [""],
                "historialDeCambios" : [""],
                "estatus" : "Abierta"
            }
        };
    
    if ($j("#selectOpciones90").val() == "Solicitar cita para mostrar propiedad")
    {
        destinatarios = [gMatrizBienes[gIdPostActual].post_author];

        $j.each(gUsuarios, function(clave, datos)  
        {
            if (datos.CRMdapliw_roles.includes("Gestor de negocios"))
            {
                destinatarios.push(clave);
            }
        });                               

        jsonActividad.actividad.informacionAdicional =
            [{
                "solicitante" : gNombreUsuario,
                "destinatarios" : destinatarios
            }];        
    }

    $j("#mensajesAgregarActividad90").html(mensajesUsuario);

    $j.post("<?= mvc_public_url(array('controller' => 'postmetas', 'action' => 'agregar_actividad')) ?>", 
        jsonActividad, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {
            $j("#guardarActividad10").attr("disabled", false).html(gImagenAnterior); 

            borrarMensajesAnteriores();
            gMensajePendientePorMostrar =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

            $j("#agregarActividad90").addClass("noVer");
            $j("#cerrarAgregarActividad10").addClass("noVer");
            $j("#guardarActividad10").addClass("noVer");
            if (gFuncionLlamadora == "busquedaAgenda10")
            {
                filtro = filtrarAgenda();
                mostrarAgenda(filtro, "");
            }
            else if (gFuncionLlamadora == "verNotificaciones20")
            {
                mostrarAgenda("Notificaciones", "");   
            } 
            else if (gFuncionLlamadora == "bienesSinActividad51" || gFuncionLlamadora == "busquedaPropiedades10" || gFuncionLlamadora == "busquedaNombre50")
            {
                mostrarAgenda("Propiedad", gIdPostActual);    
            }
            else if (gFuncionLlamadora == "solicitudesDeCita51")
            {
                solicitudesDeCita();
                mostrarAgenda("Citas", 0);
            } 
			else if (gFuncionLlamadora == "PersonaAgenda51")
			{
				filtro = filtrarAgenda(gIdPersonaActual);  
				mostrarAgenda(filtro, gIdPersonaActual);
			} 
        } 
        else 
        {
            $j("#guardarActividad10").attr("disabled", false).html(gImagenAnterior); 

            borrarMensajesAnteriores();
            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>"; 

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

        	$j("#mensajesUsuario30").html(mensajesUsuario);
			window.scrollTo(0, 0);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $j("#guardarActividad10").attr("disabled", false).html(gImagenAnterior); 

        borrarMensajesAnteriores();
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong>" +
                    "Estimado usuario el servidor tardó mucho en responder, " +
                    "por favor pulse el botón 'Recargar página' " + 
                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/reload.svg' ?>" +
                    " alt='Recargar página' class='icono'>" +
					" que se encuentra a su derecha y luego consulte si efectivamente se guardaron los cambios" +
                "</strong>" + 
            "</div>"; 

        $j("#mensajesUsuario30").html(mensajesUsuario);
		window.scrollTo(0, 0);
    });  
}

function actualizarVectores(vectorGeneralActualizado)
{
    gVectorGeneral = vectorGeneralActualizado;
    vectorGeneralActualizado = "";
    gBienes = gVectorGeneral.bienes;
    gMatrizBienes = gVectorGeneral.matrizBienes;
    gBienesAutocomplete = gVectorGeneral.bienesAutocomplete;
    gDatosBienes = gVectorGeneral.datosBienes;
    gIdUsuario = gVectorGeneral.idUsuario;
    gNombreUsuario = gVectorGeneral.nombreUsuario;
    gRoles = gVectorGeneral.roles;
    gUsuarios = gVectorGeneral.usuarios;
    gPersonasAsc = gVectorGeneral.personasAsc;
    gNotificaciones = gVectorGeneral.notificaciones;	
    gVistaPreferida = gVectorGeneral.vistaPreferida;
    gOpcionesSelectActividades = gVectorGeneral.opcionesSelectActividades;
    gVectorGeneral = "";

    $j("#busquedaNombre50").autocomplete(
    {
        source: gBienesAutocomplete,
        select: function( event, ui ) 
        {   
            idBienFiltro = ui.item.id;          
            $j("#busquedaPropiedades50").addClass('noVer');
            $j("#cerrarBusquedaPropiedades10").addClass('noVer');
            gFuncionLlamadora = "busquedaNombre50";
            $j("#busquedaPropiedades10").addClass('noVer');
            filtrarPropiedades(idBienFiltro);
            mostrarBienes("Bien", "");
            $j("#bienes60").removeClass('noVer');
            $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
            $j("#publicarPropiedad10").removeClass('noVer');
            window.scrollTo(0, 0);
        }
    });

    $j("#cicloBienes60").find(".buscarCaptador60").autocomplete(
    {
        source: gPersonasAsc,
        select: function( event, ui ) 
        {
            idBien = $j(this).attr("id").substring(17);
            idCaptadorAnterior = gMatrizBienes[idBien].post_author;
            idNuevoCaptador = ui.item.id;
            nombreNuevoCaptador = ui.item.value;
            indicadorCaptador = 0;
            idMensaje = "#mensajesUsuario60-" + idBien; 
            actualizarCaptador(idBien, idCaptadorAnterior, idNuevoCaptador, nombreNuevoCaptador, indicadorCaptador, idMensaje);
        }
    });

    $j("#busquedaPropiedad90").autocomplete(
    {
        source: gBienesAutocomplete,
        select: function( event, ui ) 
        {   
            gIdPostActual = ui.item.id;          
            $j("#busquedaPropiedad90").val(gIdPostActual);
        }
    });

    $j('#nombreCaptador100').autocomplete(
    {
        source: gPersonasAsc,
        select: function( event, ui ) 
        {   
            idBien = gIdPostActual;
            idCaptadorAnterior = gMatrizBienes[idBien].post_author;
            idNuevoCaptador = ui.item.id;
            nombreNuevoCaptador = ui.item.value;
            indicadorCaptador = 1;
            idMensaje = "#mensajesCaptador100"; 
            actualizarCaptador(idBien, idCaptadorAnterior, idNuevoCaptador, nombreNuevoCaptador, indicadorCaptador, idMensaje);
        }
    });

    $j('#nombreCliente100').autocomplete(
    {
        source: gPersonasAsc,
        select: function( event, ui ) 
        { 
            idBien = gIdPostActual;  
            idComprador = ui.item.id; 
            nombreComprador = ui.item.value;
            agregarComprador(idBien, idComprador, nombreComprador);
        }
    });

    $j("#personaAgenda51").autocomplete(
    {
        source: gPersonasAsc,
        select: function( event, ui ) 
        {   
            gIdPersonaActual = ui.item.id;    
            $j("#busquedaAgenda51").addClass('noVer');
            $j("#cerrarBusquedaAgenda10").addClass('noVer');
            $j("#busquedaAgenda10").addClass('noVer');
            gFuncionLlamadora = "PersonaAgenda51";
            gBotonCerrarLlamador = "#cerrarAgendaFiltrada10";
            filtro = filtrarAgenda(gIdPersonaActual);  
            mostrarAgenda(filtro, gIdPersonaActual);
        }
    });
}

function solicitudesDeCita()
{
    desmarcarAgendaVista();

    $j.each(gDatosBienes, function(clave1, datos1)  
    {
        if (datos1.CRMdapliw_actividad_agenda)
        {
            $j.each(datos1.CRMdapliw_actividad_agenda, function(clave2, datos2)  
            {
                if (datos2.nombreActividad == "Solicitud de cita para mostrar propiedad")
                {
                    datos2.ver = "true";
                }
            });
        }
    });    
}

function inhabilitarTecla(clave, datos)
{
    complementoId = clave + "-" + datos.id + "-" + datos.idPropiedad;   
    $j("#meridiano80-" + complementoId).on("keydown", function(e) 
    {
        if (e.which == 9)
        {
            return false;
        }
    });  
    $j("#adicionalMeridiano80-" + complementoId).on("keydown", function(e) 
    {
        if (e.which == 9)
        {
            return false;
        }
    });  
}

// Eventos
$j(document).ready(function()
{
    $j("#vistas20").val(gVistaPreferida);

    mostrarNotificaciones();

    $j("#vistas20").change(function()
    {
        gVistaPreferida = $j("#vistas20").val();
		actualizarVistaPreferida();
    });       

    $j("#verNotificaciones20").click(function()
    {
        $j("#principal40").addClass('noVer');

        if ($j("#grupoVista20").hasClass('noVer') === false)
        {
            $j("#grupoVista20").addClass('noVer');
        }  

        if ($j("#notificaciones20").hasClass('noVer') === false)
        {
            $j("#notificaciones20").addClass('noVer');
        }
        gFuncionLlamadora = "verNotificaciones20";
        gBotonCerrarLlamador = "#cerrarNotificaciones10";  
        mostrarAgenda("Notificaciones", "");
    });

    $j("#cerrarNotificaciones10").click(function()
    {
        $j("#agenda80").addClass('noVer');
        $j("#cerrarNotificaciones10").addClass('noVer');
        $j("#agregarActividad10").addClass('noVer');
        borrarMensajesAnteriores();
        if ($j("#grupoVista20").hasClass('noVer'))
        {
            $j("#grupoVista20").removeClass('noVer');
        }  
        if (gNotificaciones > 0)
        {
            $j("#notificaciones20").removeClass('noVer');
        }   
        $j("#principal40").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j("#propiedades40").click(function()
    {
        $j("#principal40").addClass('noVer');
        if ($j("#grupoVista20").hasClass('noVer') === false)
        {
            $j("#grupoVista20").addClass('noVer');
        }  
        if ($j("#notificaciones20").hasClass('noVer') === false)
        {
            $j("#notificaciones20").addClass('noVer');
        }   
        $j("#busquedaPropiedades50").removeClass('noVer');
        $j("#cerrarBusquedaPropiedades10").removeClass('noVer');
        $j("#busquedaPropiedades10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j("#cerrarBusquedaPropiedades10").click(function()
    {
        $j("#busquedaPropiedades50").addClass('noVer');
        $j("#cerrarBusquedaPropiedades10").addClass('noVer');
        $j("#busquedaPropiedades10").addClass('noVer');
        borrarMensajesAnteriores();
        if ($j("#grupoVista20").hasClass('noVer'))
        {
            $j("#grupoVista20").removeClass('noVer');
        }  
        if (gNotificaciones > 0)
        {
            $j("#notificaciones20").removeClass('noVer');
        } 
        $j("#busquedaCodigo50").val(""); 
        $j("#busquedaHabitaciones50").val(""); 
        $j("#busquedaBanos50").val(""); 
        $j("#busquedaGarajes50").val(""); 
        $j("#busquedaArea50").val(""); 
        $j("#busquedaZona50").val(""); 
        $j("#busquedaPrecioMinimo50").val(""); 
        $j("#busquedaPrecioMaximo50").val(""); 
        $j("#principal40").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j("#busquedaNombre50").autocomplete(
    {
        source: gBienesAutocomplete,
        select: function( event, ui ) 
        {   
            idBienFiltro = ui.item.id;          
            $j("#busquedaPropiedades50").addClass('noVer');
            $j("#cerrarBusquedaPropiedades10").addClass('noVer');
            $j("#busquedaPropiedades10").addClass('noVer');
            gFuncionLlamadora = "busquedaNombre50";
            filtrarPropiedades(idBienFiltro);
            mostrarBienes("Bien", "");
            $j("#bienes60").removeClass('noVer');
            $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
            $j("#publicarPropiedad10").removeClass('noVer');
            window.scrollTo(0, 0);
        }
    });

    $j('#busquedaPropiedades10').click(function()
    {
        $j("#busquedaPropiedades50").addClass('noVer');
        $j("#cerrarBusquedaPropiedades10").addClass('noVer');
        $j("#busquedaPropiedades10").addClass('noVer');
        filtrarPropiedades(0);
		gFuncionLlamadora = "busquedaPropiedades10";
        mostrarBienes("Propiedades", "");
        $j("#bienes60").removeClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#cerrarPropiedadesFiltradas10').click(function()
    {
        $j("#bienes60").addClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").addClass('noVer');
		if (gFuncionLlamadora == "busquedaPropiedades10" || gFuncionLlamadora == "busquedaNombre50")
		{
			$j("#publicarPropiedad10").addClass('noVer');
            $j("#busquedaNombre50").val("");
			$j("#busquedaPropiedades50").removeClass('noVer');
			$j("#cerrarBusquedaPropiedades10").removeClass('noVer');
			$j("#busquedaPropiedades10").removeClass('noVer');
		}
		else if (gFuncionLlamadora == "bienesSinActividad51")
		{
			$j("#busquedaAgenda51").removeClass('noVer');
			$j("#cerrarBusquedaAgenda10").removeClass('noVer');
			$j("#busquedaAgenda10").removeClass('noVer');			
		}
        window.scrollTo(0, 0);
    });

    $j("#agenda40").click(function()
    {
        $j("#principal40").addClass('noVer');

        if ($j("#grupoVista20").hasClass('noVer') === false)
        {
            $j("#grupoVista20").addClass('noVer');
        }  

        if ($j("#notificaciones20").hasClass('noVer') === false)
        {
            $j("#notificaciones20").addClass('noVer');
        }   

        $j("#busquedaAgenda51").removeClass('noVer');

        if (gRoles.includes("Captador") || gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
        {
            if ($j("#solicitudesDeCita51").hasClass('noVer') === true)
            {
                $j("#solicitudesDeCita51").removeClass('noVer');
            }
        }

        if (gRoles.includes("Gestor de negocios") || gRoles.includes("Administrador"))
        {
            if ($j("#grupoPersonaAgenda51").hasClass('noVer') === true)
            {
                $j("#grupoPersonaAgenda51").removeClass('noVer');
            }
        }

        $j("#cerrarBusquedaAgenda10").removeClass('noVer');
        $j("#busquedaAgenda10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j("#cerrarBusquedaAgenda10").click(function()
    {
        $j("#busquedaAgenda51").addClass('noVer');
        $j("#busquedaActividades51").val("Todas");
        $j("#cerrarBusquedaAgenda10").addClass('noVer');
        $j("#busquedaAgenda10").addClass('noVer');
        borrarMensajesAnteriores();
        if ($j("#grupoVista20").hasClass('noVer'))
        {
            $j("#grupoVista20").removeClass('noVer');
        }  
        if (gNotificaciones > 0)
        {
            $j("#notificaciones20").removeClass('noVer');
        }   
        $j("#principal40").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#bienesSinActividad51').click(function()
    {
        $j("#busquedaAgenda51").addClass('noVer'); 
        $j("#cerrarBusquedaAgenda10").addClass('noVer');
        $j("#busquedaAgenda10").addClass('noVer');
        desmarcarBienesVista();
        bienesSinActividad();
		gFuncionLlamadora = "bienesSinActividad51";
        mostrarBienes("Propiedades sin Actividades Planificadas", "");
        $j("#bienes60").removeClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#busquedaAgenda10').click(function()
    {
        $j("#busquedaAgenda51").addClass('noVer');
        $j("#cerrarBusquedaAgenda10").addClass('noVer');
        $j("#busquedaAgenda10").addClass('noVer');
        filtro = filtrarAgenda();
        gFuncionLlamadora = "busquedaAgenda10";
        gBotonCerrarLlamador = "#cerrarAgendaFiltrada10";
        mostrarAgenda(filtro, "");
    });

    $j('#cerrarAgendaFiltrada10').click(function()
    {
		$j("#personaAgenda51").val("");
        $j("#agenda80").addClass('noVer');
        $j("#cerrarAgendaFiltrada10").addClass('noVer');
        $j("#agregarActividad10").addClass("noVer");
        $j("#busquedaAgenda51").removeClass('noVer');
        $j("#cerrarBusquedaAgenda10").removeClass('noVer');
        $j("#busquedaAgenda10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j("#cicloBienes60").on("click", ".personas60", function()
    {       
        gPosicionAnterior = $j(this).attr('id');
        gIdPostActual = $j(this).attr('id').substring(11);
        $j('#bienes60').addClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").addClass('noVer');
        $j("#publicarPropiedad10").addClass('noVer');
        personasBien(gIdPostActual);
        $j("#personas100").removeClass("noVer");
		if (gFuncionLlamadora == "bienesSinActividad51")
		{
            $j("#cerrarPersonasSinActividad10").removeClass('noVer');
		}
		else if (gFuncionLlamadora == "busquedaPropiedades10" || gFuncionLlamadora == "busquedaNombre50")
		{	
            $j("#cerrarPersonas10").removeClass('noVer');
		}
        $j("#agregarPersona10").removeClass("noVer");
        window.scrollTo(0, 0);
    });

    $j("#agregarPersona10").click(function()
    {       
        $j("#personas100").addClass("noVer");
        if (gFuncionLlamadora == "bienesSinActividad51")
        {
            $j("#cerrarPersonasSinActividad10").addClass('noVer');
        }
        else
        {   
            $j("#cerrarPersonas10").addClass('noVer');
        }
        $j("#agregarPersona10").addClass('noVer');
        inicializarPersonas();
        $j("#agregarPersonas110").removeClass("noVer");
        $j("#rolesCheckbox110").addClass('noVer');
        $j("#cerrarAgregarPersona10").removeClass('noVer');
        $j("#guardarPersona10").removeClass("noVer");
        window.scrollTo(0, 0);
    });

    $j("#guardarPersona10").click(function()
    {
        gImagenAnterior = $j("#guardarPersona10").html();  
        $j("#guardarPersona10").attr("disabled", true).html(gImagenEspere);
        indicadorCheckbox = 0;
        validarPersona(indicadorCheckbox);
    });

    $j('#nombreCliente100').autocomplete(
    {
        source: gPersonasAsc,
        select: function( event, ui ) 
        { 
            idBien = gIdPostActual;  
            idComprador = ui.item.id; 
            nombreComprador = ui.item.value;
            agregarComprador(idBien, idComprador, nombreComprador);
        }
    });

    $j("#personas100").on("click", ".eliminarComprador100", function()
    {
		gImagenAnterior = $j(this).html();
		$j(this).attr("disabled", true).html(gImagenEspere);
        idCompradorPromotor = $j(this).attr("id").substring(21); 
        eliminarComprador(idCompradorPromotor);
    });

    $j('#cerrarPersonas10').click(function()
    {
        $j("#personas100").addClass("noVer");
        $j("#cerrarPersonas10").addClass('noVer');
        $j("#agregarPersona10").addClass("noVer");
        borrarMensajesAnteriores();
        if (gFuncionLlamadora == "busquedaPropiedades10")
        {
            filtrarPropiedades(0);
        }
        else if (gFuncionLlamadora == "busquedaNombre50")
        {
            filtrarPropiedades(gIdPostActual);
        }            
        mostrarBienes("Propiedades", "");
        $j("#bienes60").removeClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        $j("#cicloBienes60").find("#" + gPosicionAnterior).focus();
    });

    $j('#cerrarPersonasSinActividad10').click(function()
    {
        $j("#personas100").addClass("noVer");
        $j("#cerrarPersonasSinActividad10").addClass('noVer');
        $j("#agregarPersona10").addClass("noVer");
        borrarMensajesAnteriores();		
        desmarcarBienesVista();
        bienesSinActividad();
        mostrarBienes("Propiedades sin Actividades Planificadas", "");
        $j("#bienes60").removeClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
        $j("#cicloBienes60").find("#" + gPosicionAnterior).focus();				
    });

    $j('#nombreCaptador100').autocomplete(
    {
        source: gPersonasAsc,
        select: function( event, ui ) 
        {   
            idBien = gIdPostActual;
            idCaptadorAnterior = gMatrizBienes[idBien].post_author;
            idNuevoCaptador = ui.item.id;
            nombreNuevoCaptador = ui.item.value;
            indicadorCaptador = 1;
            idMensaje = "#mensajesCaptador100"; 
            actualizarCaptador(idBien, idCaptadorAnterior, idNuevoCaptador, nombreNuevoCaptador, indicadorCaptador, idMensaje);
        }
    });

    $j("#cerrarAgregarPersona10").click(function()
    {       
        $j("#agregarPersonas110").addClass("noVer");
        $j("#cerrarAgregarPersona10").addClass('noVer');
        $j("#guardarPersona10").addClass("noVer");
        personasBien(gIdPostActual);
        $j("#personas100").removeClass("noVer");
        $j("#cerrarPersonas10").removeClass('noVer');
        $j("#agregarPersona10").removeClass("noVer");
        window.scrollTo(0, 0);
    });

    $j("#cicloBienes60").on("click", ".ultimaActividad60", function()
    {       
        gPosicionAnterior = $j(this).attr('id');
        gIdPostActual = $j(this).attr('id').substring(18);
        $j('#bienes60').addClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").addClass('noVer');
        $j("#publicarPropiedad10").addClass('noVer');
        $j("#agregarActividad10").removeClass('noVer');
		if (gFuncionLlamadora == "bienesSinActividad51")
		{
			gBotonCerrarLlamador = "#cerrarAgendaSinActividad10";
		}
		else if (gFuncionLlamadora == "busquedaPropiedades10" || gFuncionLlamadora == "busquedaNombre50")
		{	
			gBotonCerrarLlamador = "#cerrarAgenda10";
		}
        mostrarAgenda("Propiedad", gIdPostActual);
    });

    $j('#cerrarAgenda10').click(function()
    {
        $j("#agenda80").addClass("noVer");
        $j("#cerrarAgenda10").addClass('noVer');
        $j("#agregarActividad10").addClass("noVer");
        borrarMensajesAnteriores();
        if (gFuncionLlamadora == "busquedaPropiedades10")
        {
            filtrarPropiedades(0);
        }
        else if (gFuncionLlamadora == "busquedaNombre50")
        {
            filtrarPropiedades(gIdPostActual);
        }            
        mostrarBienes("Propiedades", "");
        $j("#bienes60").removeClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        $j("#cicloBienes60").find("#" + gPosicionAnterior).focus();	
    });

    $j('#cerrarAgendaSinActividad10').click(function()
    {
        $j("#agenda80").addClass("noVer");
        $j("#cerrarAgendaSinActividad10").addClass('noVer');
        $j("#agregarActividad10").addClass("noVer");
        borrarMensajesAnteriores();		
        desmarcarBienesVista();
        bienesSinActividad();
        mostrarBienes("Propiedades sin Actividades Planificadas", "");
        $j("#bienes60").removeClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
        $j("#cicloBienes60").find("#" + gPosicionAnterior).focus();				
    });

    $j("#agenda80").on("click", ".actividad80", function()
    {
        var idActividad = $j(this).attr('id');       
        var arregloId = idActividad.split("-");       
        clave = arregloId[1];
        gIdPostActual = arregloId[3];
        datos = gDatosBienes[gIdPostActual].CRMdapliw_actividad_agenda[clave]
		borrarMensajesAnteriores();
        mosaico = crearMosaicos(clave, datos);
        $j("#agenda80").html(mosaico);
        inhabilitarTecla(clave, datos);
        $j(gBotonCerrarLlamador).addClass('noVer');
        $j("#agregarActividad10").addClass('noVer');
        $j("#cerrarActividadIndividual10").removeClass("noVer");
        window.scrollTo(0, 0);  
    });

    $j("#cerrarActividadIndividual10").click(function()
    {
        $j('#agenda80').addClass('noVer');
        $j("#cerrarActividadIndividual10").addClass('noVer');
        if (gFuncionLlamadora == "busquedaAgenda10")
        {
            filtro = filtrarAgenda();
            mostrarAgenda(filtro, "");
        }
        else if (gFuncionLlamadora == "verNotificaciones20")
        {
            mostrarAgenda("Notificaciones", "");   
        } 
        else if (gFuncionLlamadora == "bienesSinActividad51" || gFuncionLlamadora == "busquedaPropiedades10" || gFuncionLlamadora == "busquedaNombre50")
        {
            mostrarAgenda("Propiedad", gIdPostActual);    
        }
        else if (gFuncionLlamadora == "solicitudesDeCita51")
        {
            solicitudesDeCita();
            mostrarAgenda("Citas", 0);
        } 
        else if (gFuncionLlamadora == "PersonaAgenda51")
        {
            filtro = filtrarAgenda(gIdPersonaActual);  
            mostrarAgenda(filtro, gIdPersonaActual);
        } 
    });

    $j("#agenda80").on("click", ".cerrarActividad80", function()
    {
        var idActividad = $j(this).attr('id');
        verificarAdicional(idActividad);
    })

    $j("#agenda80").on("click", ".guardarCambios80", function()
    {
		gImagenAnterior = $j(this).html();
		$j(this).attr("disabled", true).html(gImagenEspere);
        var idActividad = $j(this).attr('id').substring(17);
  	    validarActividad("Existente", idActividad);
    });

    $j('#agregarActividad10').click(function()
    {
        $j('#agenda80').addClass('noVer');
        $j(gBotonCerrarLlamador).addClass('noVer');
        $j('#agregarActividad10').addClass('noVer');
        inicializarFormularioActividad();
        $j('#agregarActividad90').removeClass('noVer');       
        $j('#cerrarAgregarActividad10').removeClass('noVer');
        $j('#guardarActividad10').removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#cerrarAgregarActividad10').click(function()
    {
        borrarMensajesAnteriores();
        $j("#agregarActividad90").addClass("noVer");
        $j("#cerrarAgregarActividad10").addClass('noVer');
        $j("#guardarActividad10").addClass("noVer");
        $j('#agenda80').removeClass('noVer');
        $j(gBotonCerrarLlamador).removeClass('noVer');
        $j("#agregarActividad10").removeClass('noVer');
    });

    $j('#guardarActividad10').click(function()
    {
        gImagenAnterior = $j("#guardarActividad10").html();
        $j("#guardarActividad10").attr("disabled", true).html(gImagenEspere);
        tipoActividad = "Nueva";
        validarActividad(tipoActividad, "");
    });

    $j("#busquedaPropiedad90").autocomplete(
    {
        source: gBienesAutocomplete,
        select: function( event, ui ) 
        {   
            gIdPostActual = ui.item.id;          
            $j("#busquedaPropiedad90").val(gIdPostActual);
        }
    });

    $j("#direccion110").on("keydown", function(e) 
    {
        if (e.which == 9)
        {
            return false;
        }
    });  

    $j('#solicitudesDeCita51').click(function()
    {
        $j("#busquedaAgenda51").addClass('noVer');
        $j("#cerrarBusquedaAgenda10").addClass('noVer');
        $j("#busquedaAgenda10").addClass('noVer');
        gFuncionLlamadora = "solicitudesDeCita51"  
        gBotonCerrarLlamador = "#cerrarAgendaFiltrada10";
        solicitudesDeCita();
        mostrarAgenda("Citas", 0);
    });

    $j("#personaAgenda51").autocomplete(
    {
        source: gPersonasAsc,
        select: function( event, ui ) 
        {   
            gIdPersonaActual = ui.item.id;    
            $j("#busquedaAgenda51").addClass('noVer');
            $j("#cerrarBusquedaAgenda10").addClass('noVer');
            $j("#busquedaAgenda10").addClass('noVer');
            gFuncionLlamadora = "PersonaAgenda51";
            gBotonCerrarLlamador = "#cerrarAgendaFiltrada10";
            filtro = filtrarAgenda(gIdPersonaActual);  
			console.log("filtro " + filtro);
            mostrarAgenda(filtro, gIdPersonaActual);
        }
    });

    $j('#inicioCrm10').click(function()
    {
        $j("#inicioCrm10").attr("disabled", true).html(gImagenEspere);
    });

    $j('#recargarPagina10').click(function()
    {
        $j("#recargarPagina10").attr("disabled", true).html(gImagenEspere);
    });
	
});
</script>
