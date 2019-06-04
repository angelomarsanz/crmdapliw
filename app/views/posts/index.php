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

            <button title="Email" class="btn btn-link noVer" id="email10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/envelope-closed.svg" ?> 
                alt="Enviar email" class="iconoMenu">
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

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgregarPersonaFiltro10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar agregar persona filtro" class="iconoMenu">
            </button>

            <button title="Guardar persona" class="btn btn-link noVer" id="guardarPersona10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> 
                alt="Guardar persona" class="iconoMenu" id="imagenGuardarPersona10">
            </button>

			<button title="Cerrar" class="btn btn-link noVer" id="cerrarBusquedaPersonas10">
				<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?>
				alt="Cerrar búsqueda personas" class="iconoMenu">
			</button>

			<button title="Ejecutar búsqueda" class="btn btn-link noVer" id="busquedaPersonas10">
				<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
				alt="Ejecutar búsqueda personas" class="iconoMenu">
			</button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarBusquedaPorPersona10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar personas filtradas" class="iconoMenu">
            </button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarVerPersona10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar ver persona" class="iconoMenu">
            </button>

            <button title="Guardar cambios" class="btn btn-link noVer" id="guardarCambiosPersona10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/pencil.svg" ?> 
                alt="Guardar cambios persona" class="iconoMenu" id="imagenGuardarPersona10">
            </button>

            <button title="Preferencias" class="btn btn-link noVer" id="preferencias10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/preferencias.svg" ?> 
                alt="Preferencias" class="iconoMenu">
            </button>     

            <button title="Agregar persona" class="btn btn-link noVer" id="agregarMasPersonas10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                alt="Agregar persona" class="iconoMenu">
            </button>     

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarPreferencias10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar preferencias" class="iconoMenu">
            </button>

            <button title="Agregar preferencia" class="btn btn-link noVer" id="agregarPreferencia10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                alt="Agregar preferencia" class="iconoMenu">
            </button>     

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgregarPreferencia10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar agregar preferencia" class="iconoMenu">
            </button>

            <button title="Guardar preferencia" class="btn btn-link noVer" id="guardarPreferencia10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/check.svg" ?> 
                alt="Guardar preferencia" class="iconoMenu" id="imagenGuardarPreferencia10">
            </button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarModificarPreferencia10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar modificar preferencia" class="iconoMenu">
            </button>

            <button title="Guardar cambios preferencia" class="btn btn-link noVer" id="guardarCambiosPreferencia10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/pencil.svg" ?> 
                alt="Guardar cambios preferencia" class="iconoMenu" id="imagenGuardarCambiosPreferencia10">
            </button>

            <button title="Cerrar" class="btn btn-link noVer" id="cerrarPersonasFiltradas10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                alt="Cerrar personas filtradas" class="iconoMenu">
            </button>

            <button title="Agregar persona" class="btn btn-link noVer" id="agregarPersonaFiltro10">
                <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?> 
                alt="Agregar persona filtro" class="iconoMenu">
            </button>          

        </div>

        <!-- div con sufijo 20 -->
        <div class="container" id="tituloCrm20">
			<div class="row">
				<div class="col-md-2">
					<h1 class="letraAzul">CRM</h1>
				</div>
				<div class="col-md-1" id="fotoPerfil20">
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
            <br />
        </div>
        
        <!-- div con sufijo 30 -->
        <div class="container mensajesUsuario" id="mensajesUsuario30">
        </div>
 
		<!-- div con sufijo 40 -->
        <div class="container formulario" id="principal40">
			<div class="row">
				<div class="col-4 col-md-4 text-center">
					<button title="Agenda" class="btn btn-link" id="agenda40">
						<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/calendar.svg" ?>
							alt="Agenda" class="img-fluid mx-auto iconoPrincipal">
					</button>
				</div>
				<div class="col-4 col-md-4 text-center">
					<button title="Propiedades" class="btn btn-link" id="propiedades40">
						<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/tmbr-icon.svg" ?>
							alt="Propiedades" class="img-fluid iconoPrincipal">
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
					<div class="form-group noVer">
						<label for="busquedaCodigo50">Código</label>
						<input type="text" class="form-control texto50" id="busquedaCodigo50">
					</div>
					<div class="form-group">
						<label for="busquedaNombre50" class="letraAzul">Nombre</label>
						<input type="text" class="form-control texto50" id="busquedaNombre50">
					</div>

                    <div class="input-group mb-3 noVer">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="tipoPropiedad50">Tipo de propiedad</label>
                        </div>
                        <select class="custom-select texto50" id="tipoPropiedad50">
                            <option selected value=""></option>
                            <option value="Apartamento">Apartamento</option>
                            <option value="Casa">Casa</option>
                            <option value="Galpón">Galpón</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Local comercial">Local comercial</option>
                            <option value="Oficina">Oficina</option>
                            <option value="Proyecto en preventa">Proyecto en preventa</option>
                            <option value="Terreno">Terreno</option>
                            <option value="townhouse">townhouse</option>
                        </select>
                    </div>
                    <div id="mensajesTipoPropiedad50" class="mensajesUsuario"></div>

                    <div class="input-group mb-3 noVer">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="tipoOperacion50">Tipo de operación</label>
                        </div>
                        <select class="custom-select texto50" id="tipoOperacion50">
                            <option selected value=""></option>
                            <option value="Alquiler">Alquiler</option>
                            <option value="Compra">Compra</option>
                        </select>
                    </div>
                    <div id="mensajesTipoOperacion112" class="mensajesUsuario"></div>

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

					<p>Rango de precio</p>

					<div class="form-group">
						<label for="busquedaPrecioMinimo50">Desde</label>
						<input type="number" class="form-control numero50" id="busquedaPrecioMinimo50">
					</div>
					
					<div class="form-group">
						<label for="busquedaPrecioMaximo50">Hasta</label>
						<input type="number" class="form-control numero50" id="busquedaPrecioMaximo50">
					</div>

					<div class="form-group">
						<label for="ubicacion50" class="letraAzul">Ubicación</label>
						<input type="text" class="form-control texto50" id="ubicacion50">
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

        <!-- div con sufijo 52 -->
        <div class="container formulario noVer" id="busquedaPersonas52">
   			<h2 class="letraAzul">Filtro Personas</h2>
            <div class="row">
                <div class="col-md-4">              
                    <p>
					    <div class="form-group" id="grupoBusquedaPorPersona52">
						    <label for="busquedaPorPersona52">Persona</label>
						    <input type="text" class="form-control" id="busquedaPorPersona52">
					    </div>
                    </p>
                    <p>
					    <div class="input-group mb-3">
						    <div class="input-group-prepend">
							    <label class="input-group-text" for="busquedaGrupos52">Grupos de personas</label>
						    </div>
						    <select class="custom-select" id="busquedaGrupos52">
							    <option value="Administradores">Administradores</option>
							    <option value="Asesores de inversión inmobiliaria">Asesores de inversión inmobiliaria</option>
                                <option value="Captadores">Captadores</option>
								<option value="Clientes">Clientes</option>
							    <option value="Gestores de negocios">Gestores de negocios</option>
							    <option value="Outsourcing">Outsourcing</option>
							    <option value="Propietarios">Propietarios</option>
							    <option selected value="Todos">Todos</option>
						    </select>
					    </div>
                    </p>
				</div>
            </div>
        </div>
				 
        <!-- div con sufijo 60 -->
        <div class="container formulario noVer" id="bienes60">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="letraAzul" id="titulo60"></h2>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
				        <label for="enviarA60">Enviar a:</label>
				        <input type="text" class="form-control" id="enviarA60">
			        </div>
                    <div class="mensajesUsuario" id="mensajesEnviarA60"></div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
				        <label for="alEmail60">Email:</label>
				        <input type="text" class="form-control" id="alEmail60">
			        </div>
                    <div class="mensajesUsuario" id="mensajesAlEmail60"></div>
                </div>
            </div>
            <div class="row" id="cicloBienes60">
            </div>
            <div class="row">
                <div class="<div class='col-md-12" id="pieDePagina60">
                </div>
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
						            <input type="text" class="form-control" id="busquedaPropiedad90">
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


		<!-- div con sufijo 105 -->
		<div class="container formulario noVer" id="listaPersonas105">
			<h2 class="letraAzul" id="tituloListaPersonas105"></h2>
			<br />
			<div class="row" id="detalleListaPersonas105"></div>
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
							<label for="primerNombre110">Nombre(s)*</label> 
							<input type="text" class="form-control" id="primerNombre110"> 
						</div>
						<div id="mensajesPrimerNombre110" class="mensajesUsuario"></div>    

						<div class="form-group"> 
							<label for="primerApellido110">Apellido(s)*</label> 
							<input type="text" class="form-control" id="primerApellido110"> 
						</div>
						<div id="mensajesPrimerApellido110" class="mensajesUsuario"></div>    

						<div id="rolesCheckbox110">

							<p style="color: black;">Roles*</p>

							<div class="form-check roles110">
								<input type="checkbox" class="form-check-input" id="administrador110"> 
								<label class='form-check-label' for="administrador110">&nbsp;&nbsp;Administrador</label>
							</div>

							<div class="form-check roles110">
								<input type="checkbox" class="form-check-input" id="gestorNegocios110"> 
								<label class='form-check-label' for="gestorNegocios110">&nbsp;&nbsp;Gestor de negocios</label>
							</div>

							<div class="form-check roles110">
								<input type="checkbox" class="form-check-input" id="captador110"> 
								<label class='form-check-label' for="captador110">&nbsp;&nbsp;Captador</label>
							</div>

							<div class="form-check roles110">
								<input type="checkbox" class="form-check-input" id="promotor110"> 
								<label class='form-check-label' for="promotor110">&nbsp;&nbsp;Asesor de inversión inmobiliaria</label>
							</div>

							<div class="form-check roles110">
								<input type="checkbox" class="form-check-input" id="propietario110"> 
								<label class='form-check-label' for="propietario110">&nbsp;&nbsp;Propietario</label>
							</div>

							<div class="form-check roles110">
								<input type="checkbox" class="form-check-input" id="cliente110"> 
								<label class='form-check-label' for="cliente110">&nbsp;&nbsp;Cliente o comprador potencial</label>
							</div>

							<div class="form-check roles110">
								<input type="checkbox" class="form-check-input" id="outsourcing110"> 
								<label class='form-check-label' for="outsourcing110">&nbsp;&nbsp;Outsourcing</label>
							</div>

							<div id="mensajesRoles110" class="mensajesUsuario"></div> 

							<br />

						</div>
                        
                        <div id="grupoRol110">
						    <div class="form-group"> 
							    <label for="rol110">Rol*</label> 
							    <input type="text" class="form-control" id="rol110" value="Cliente" disabled> 
						    </div>
						    <div id="mensajesRol110" class="mensajesUsuario"></div>
                        </div> 

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

                    <button class="btn btn-link" title="Eliminar persona" id="eliminarPersona110"> 
                        <img src=<?= mvc_public_url(array("controller" => "wp-content", "action" => "plugins")) .
                        "crmdapliw/app/public/images/trash.svg" ?> alt='Eliminar persona' class='icono'" 
                        id="imagenEliminarPersona110">
                    </button>
                    <div id="mensajesEliminarPersona110" class="mensajesUsuario"></div>
				</div>

			</div>
		</div>

		<!-- div con sufijo 111 -->
		<div class="container formulario noVer" id="preferencias111">
			<h2 class="letraAzul" id="tituloPreferencias111"></h2>
			<br />
			<div id="detallePreferencias111"></div>
        </div>

		<!-- div con sufijo 112 -->
		<div class="container formulario noVer" id="agregarPreferencia112">
			<h2 class="letraAzul" id="tituloAgregarPreferencia112"></h2>
			<br />
			<form>
				<div class="row">
					<div class="col-md-4">
					    <div class="input-group mb-3">
						    <div class="input-group-prepend">
							    <label class="input-group-text" for="tipoPropiedad112">Tipo de propiedad</label>
						    </div>
						    <select class="custom-select texto112" id="tipoPropiedad112">
							    <option selected value=""></option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Casa">Casa</option>
                                <option value="Galpón">Galpón</option>
                                <option value="Hotel">Hotel</option>
							    <option value="Local comercial">Local comercial</option>
                                <option value="Oficina">Oficina</option>
                                <option value="Proyecto en preventa">Proyecto en preventa</option>
							    <option value="Terreno">Terreno</option>
                                <option value="townhouse">townhouse</option>
						    </select>
					    </div>
                        <div id="mensajesTipoPropiedad112" class="mensajesUsuario"></div>

					    <div class="input-group mb-3">
						    <div class="input-group-prepend">
							    <label class="input-group-text" for="tipoOperacion112">Tipo de operación</label>
						    </div>
						    <select class="custom-select texto112" id="tipoOperacion112">
							    <option selected value=""></option>
                                <option value="Alquiler">Alquiler</option>
                                <option value="Compra">Compra</option>
						    </select>
					    </div>
                        <div id="mensajesTipoOperacion112" class="mensajesUsuario"></div>
						
                    </div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="habitaciones112">Habitaciones</label>
							<input type="number" class="form-control numero112" id="habitaciones112">
						</div>
                        <div id="mensajesHabitaciones112" class="mensajesUsuario"></div>

						<div class="form-group">
							<label for="banos112">Baños</label>
							<input type="Number" class="form-control numero112" id="banos112">
						</div>
                        <div id="mensajesBanos112" class="mensajesUsuario"></div>

						<div class="form-group">
							<label for="garajes112">Garajes</label>
							<input type="Number" class="form-control numero112" id="garajes112">
						</div>
                        <div id="mensajesGarajes112" class="mensajesUsuario"></div>

						<div class="form-group">
							<label for="area112">Área M2 (igual o mayor a)</label>
							<input type="Number" class="form-control numero112" id="area112">
						</div>
                        <div id="mensajesArea112" class="mensajesUsuario"></div>
					</div>

					<div class="col-md-4">
						<p>Rango de precio</p>
						<div class="form-group">
							<label for="precioMinimo112">Desde</label>
							<input type="number" class="form-control numero112" id="precioMinimo112">
						</div>
                        <div id="mensajesPrecioMinimo112" class="mensajesUsuario"></div>
						
						<div class="form-group">
							<label for="precioMaximo112">Hasta</label>
							<input type="number" class="form-control numero112" id="precioMaximo112">
						</div>
                        <div id="mensajesPrecioMaximo112" class="mensajesUsuario"></div>
					</div>
				</div>		

                <div class="row">
                    <div class="col-md-12">

                        <?php
                            $column_class = 'rh_form--1-column';
                        ?>

                        <div class="form-group">
                            <label for="coordenadas112">Coordenadas Google Maps</label>
                            <input type="text" class="form-control" id="coordenadas112" disabled>
                        </div>

                        <div id="mensajesAddress" class="mensajesUsuario"></div>

                        <div class="rh_form__item rh_form--relative <?php echo esc_attr( $column_class ); ?> rh_form--columnAlign address-map-fields-wrapper">
                            <div class="address-wrapper">
                                <label for="address"><?php esc_html_e( 'Address', 'framework' ); ?></label>
                                <input type="text" class="required texto112" name="address" id="address" title="<?php esc_attr_e( '* Please provide a property address!', 'framework' ); ?>" />
                            </div>

                            <!-- /.address-wrapper -->
                            <div class="map-wrapper">
                                <button class="rh_btn rh_btn--secondary goto-address-button" type="button" value="address">Buscar dirección y coordenadas en Google Maps</button>
                                <div class="map-canvas"></div>
                                <input type="hidden" name="coordinates" class="map-coordinate" value="10.234146,-68.00510199999997" />
                            </div>
                        </div>
                    </div>
                </div>

			</form>
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
var gPersonas = gVectorGeneral.personas;
var gAdministradores = gVectorGeneral.administradores;
var gGestores = gVectorGeneral.gestores;
var gCaptadores = gVectorGeneral.captadores;
var gPromotores = gVectorGeneral.promotores;
var gPropietarios = gVectorGeneral.propietarios;
var gClientes = gVectorGeneral.clientes;
var gOutsourcing = gVectorGeneral.outsourcing;
var gNotificaciones = gVectorGeneral.notificaciones;
var gVistaPreferida = gVectorGeneral.vistaPreferida;
var gOpcionesSelectActividades = gVectorGeneral.opcionesSelectActividades;
var gDireccionesUnico = gVectorGeneral.direccionesUnico;

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

var mapField = {};

var gClavePreferencia = 0;

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

var gRegex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

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
            
            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

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

                if (response.mensaje != "Usuario no autorizado")
                {
        			vectorGeneralActualizado = response.vectorGeneral;
        			actualizarVectores(vectorGeneralActualizado);
                }

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
			"<br />";

        imagenCabecera = mostrarImagenCabecera(tipoContenido, valor);

        agenda += imagenCabecera + encabezadoTabla;
			
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
				"<br />";

            imagenCabecera = mostrarImagenCabecera(tipoContenido, valor);

            agenda += imagenCabecera + encabezadoTabla;

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

        imagenCabecera = mostrarImagenCabecera(tipoContenido, valor);

        agenda += imagenCabecera;

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

            imagenCabecera = mostrarImagenCabecera(tipoContenido, valor);

            agenda += imagenCabecera;

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

function mostrarImagenCabecera(tipoContenido, valor)
{
    imagenCabecera = "";
    fotoPerfil = "";

    if (tipoContenido == "Propiedad")
    {
        if (gUsuarios[gMatrizBienes[valor].post_author].fotoPerfil)
        {
            fotoPerfil = gUsuarios[gMatrizBienes[valor].post_author].fotoPerfil;
        }
    }
    else if (tipoContenido == "Persona")
    {
        if (gUsuarios[gIdPersonaActual].fotoPerfil)
        {
            fotoPerfil = gUsuarios[gIdPersonaActual].fotoPerfil;
        }
    }

    if (gVistaPreferida == "Lista con imágenes" || gVistaPreferida == "Mosaicos con imágenes")
    {
        if (fotoPerfil == "")
        {
            imagenCabecera +=
                "<div class='col-12 col-sm-6 col-md-12 mb-3'>" +
                    "<img class='img-fluid img-thumbnail border border-info' style='width: 100px; opacity: 0.3;' alt='Foto del captador'" +
                    " src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" +
                    "crmdapliw/app/public/images/person.svg>" +
                "</div>";
        }
        else
        {
            imagenCabecera +=
                "<div class='col-12 col-sm-6 col-md-12 mb-3'>" +
                    "<img class='img-fluid img-thumbnail border border-info' style='width: 100px' alt='Foto del captador' src=" + fotoPerfil + ">" +
                "</div>";
        } 
    }
    else
    {
        if (fotoPerfil == "")
        {
            imagenCabecera +=
                "<div class='col-12 col-sm-6 col-md-12 mb-3'>" +
                    "Sin foto" +
                "</div>";
        }
        else
        {
            imagenCabecera +=
                "<div class='col-12 col-sm-6 col-md-12 mb-3'>" +
    			    "<a href=" + fotoPerfil + " title='Ver foto' target='_blank' class='text-center'>" +
				        "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/camera-slr.svg' ?>" +
					        " alt='Ver foto' class='icono'>" +
			        "</a>" + 
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
            if ($j(this).val() != "")
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
                indicadorSeleccionado = 0;

		        if ($j("#busquedaHabitaciones50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_bedrooms)
                    {
			            if (gDatosBienes[datos1.ID].REAL_HOMES_property_bedrooms[0].valor != $j("#busquedaHabitaciones50").val())
			            {
                            indicadorSeleccionado = 1;
			            }
                    }
                    else
                    {
                        indicadorSeleccionado = 1;
		            }
		        }
			
		        if ($j("#busquedaBanos50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_bathrooms)
			        {
			            if (gDatosBienes[datos1.ID].REAL_HOMES_property_bathrooms[0].valor != $j("#busquedaBanos50").val())
			            {
				            indicadorSeleccionado = 1;
			            }
                    }
                    else
                    {
                        indicadorSeleccionado = 1;
		            }
		        }
				
		        if ($j("#busquedaGarajes50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_garage)
			        {
			            if (gDatosBienes[datos1.ID].REAL_HOMES_property_garage[0].valor != $j("#busquedaGarajes50").val())
			            {
				            indicadorSeleccionado = 1;
			            }
                    }
                    else
                    {
                        indicadorSeleccionado = 1;
		            }
		        }

		        if ($j("#busquedaArea50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_size)
			        {
			            if (parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_size[0].valor) < parseFloat($j("#busquedaArea50").val()))
			            {
				            indicadorSeleccionado = 1;
			            }
                    }
                    else
                    {
                        indicadorSeleccionado = 1;
		            }
		        }
			
		        if ($j("#busquedaPrecioMinimo50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_price)
			        {
                        if (Number.isNaN(parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_price[0].valor)))
                        {
                            indicadorSeleccionado = 1;
                        }
                        else
                        {
			                if (parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_price[0].valor) < parseFloat($j("#busquedaPrecioMinimo50").val()))
			                {
					            indicadorSeleccionado = 1;
			                }
                        }
                    }
                    else
                    {
                        indicadorSeleccionado = 1;
		            }
		        }
		
		        if ($j("#busquedaPrecioMaximo50").val() > 0)
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_price)
			        {
                        if (Number.isNaN(parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_price[0].valor)))
                        {
                            indicadorSeleccionado = 1;
                        }
                        else
                        {
			                if (parseFloat(gDatosBienes[datos1.ID].REAL_HOMES_property_price[0].valor) > parseFloat($j("#busquedaPrecioMaximo50").val()))
			                {
				                indicadorSeleccionado = 1;
			                }
                        }
                    }
                    else
                    {
                        indicadorSeleccionado = 1;
		            }
		        }

		        if ($j("#ubicacion50").val() != "")
		        {
			        if (gDatosBienes[datos1.ID].REAL_HOMES_property_address)
			        {
                        dondeBusco = gDatosBienes[datos1.ID].REAL_HOMES_property_address[0].valor.toUpperCase();

                        loQueBusco = $j("#ubicacion50").val().toUpperCase();

			            if (dondeBusco.indexOf(loQueBusco) < 0)
			            {
				            indicadorSeleccionado = 1;
			            }
                    }
                    else
                    {
                        indicadorSeleccionado = 1;
		            }
		        }

                if (indicadorSeleccionado == 0)
                {
                    gBienes[clave1].ver = "true";
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
    var coincidencias = 0;
	
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
                            "<th scope='col' class='text-center' style='width:25%;'>Captador</th>" +
							"<th scope='col' class='text-center' style='width:25%;'></th>" +
                            "<th scope='col' class='text-center' style='width:5%;'></th>" +
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
                    "<td>" +
                        "<div class='form-check email60'>" +
							"<input type='checkbox' class='form-check-input' id='email60-" + bien.ID + "'>" + 
								"<label class='form-check-label' for='email60-" + bien.ID + "'></label>" +
							"</div>" +
                        "<div>" +
                    "</td>"+
				"</tr>";
                contador++;
                coincidencias++;
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
                contador++;
                coincidencias++;
			}
		});
	}

    $j("#titulo60").html(tipoContenido);

    if (coincidencias > 0)
    {
        if ($j("#enviarA60").val() == "")
        {
            var mensajesUsuario = 
                "<div class='alert alert-info alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>Escriba las primeras letras del nombre del cliente en 'Enviar a:', seleccione el cliente, verifique el email, marque las propiedades que desea enviar y después haga clic en el ícono 'Email' </strong>" +
                "</div>";
        }
        else
        {
            var mensajesUsuario = 
                "<div class='alert alert-info alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>Verifique el email del cliente, marque las propiedades que desea enviar y después haga clic en el ícono 'Email' </strong>" +
                "</div>";
        }

        $j("#mensajesUsuario30").html(mensajesUsuario);
    }

    $j("#cicloBienes60").html(bienes).find(".buscarCaptador60").autocomplete(
    {
        source: gCaptadores,
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

    if (coincidencias > 0)
    {
        $j("#pieDePagina60").html("<p>Total coincidencias: " + coincidencias + "</p>");
    }
    else
    {
        $j("#pieDePagina60").html("<p>" + "No se encontraron propiedades acordes con la búsqueda" + "</p>");
    }
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
    $j("#primerApellido110").val("");

	$j("#rolesCheckbox110 input").each(function (index) 
	{ 
		$j(this).attr('checked', false);
		$j(this).prop('checked', false);
	});

    $j("#celular110").val("");
    $j("#telefonoFijo110").val("");
    $j("#email110").val("@");
    $j("#direccion110").val("");

    if (gFuncionLlamadora == "agregarPersonaFiltro10")
    {
        $j("#tituloAgregarPersonas110").html("Agregar persona");
    }
    else
    {
        $j("#tituloAgregarPersonas110").html("Agregar personas a la propiedad " + gMatrizBienes[gIdPostActual].post_title);
    }
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
    $j("#primerApellido110").val($j.trim($j("#primerApellido110").val().toUpperCase()));
    $j("#celular110").val($j.trim($j("#celular110").val().toUpperCase()));
    $j("#telefonoFijo110").val($j.trim($j("#telefonoFijo110").val().toUpperCase()));
    $j("#email110").val($j.trim($j("#email110").val().toLowerCase()));
    $j("#direccion110").val($j.trim($j("#direccion110").val().toUpperCase())); 

    if (indicadorCheckbox == 0)
    {
        roles = ["Cliente"];
    }
    else
    {
        roles = [];
        $j("#rolesCheckbox110 input").each(function (index) 
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
                if ($j(this).attr("id") == "cliente110")
                {
                    roles.push("Cliente");
                }
                if ($j(this).attr("id") == "outsourcing110")
                {
                    roles.push("Outsourcing");
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

    if (gFuncionLlamadora == "agregarPersonaFiltro10")
    { 
        gIdPostActual = 0;
    }

    jsonPersona = 
        {"idPost" : gIdPostActual,
        "persona" :  
            {
                "tipoIdentificacion" : $j("#tipoIdentificacion110").val(),
                "numeroIdentificacion" : $j("#numeroIdentificacion110").val(),
                "primerNombre" : $j("#primerNombre110").val(),
                "primerApellido" : $j("#primerApellido110").val(),
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

            if (gFuncionLlamadora == "agregarPersonaFiltro10")
            {
                $j("#agregarPersonas110").addClass("noVer");
                $j("#cerrarAgregarPersonaFiltro10").addClass('noVer');
                $j("#guardarPersona10").addClass("noVer");

                if (roles.includes("Cliente"))
                {
                    gIdPersonaActual = response.idUser;

                    tituloAgregarPreferencia = 
                        "Agregar preferencia del cliente " + 
                        gUsuarios[gIdPersonaActual].first_name + " " + gUsuarios[gIdPersonaActual].last_name; 
                    $j("#tituloAgregarPreferencia112").html(tituloAgregarPreferencia);
                    $j("#coordenadas112").val("");
                    $j("#address").val("");
                    $j(".map-coordinate").val("10.234146,-68.00510199999997");

                    $j('.map-wrapper').each(function(){
                        mapField.init($j(this));
                    });

                    $j("#agregarPreferencia112").removeClass("noVer");
                    $j("#cerrarAgregarPreferencia10").removeClass("noVer");
                    $j("#guardarPreferencia10").removeClass("noVer");
                }
                else
                {
                    filtroPersonas = $j("#busquedaGrupos52").val();
                    $j("#cerrarPersonasFiltradas10").removeClass('noVer');
                    $j("#agregarPersonaFiltro10").removeClass('noVer');
                    mostrarPersonas(filtroPersonas);
                    $j("#listaPersonas105").removeClass('noVer');
                }
            }
            else
            {
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
            }
            window.scrollTo(0, 0);           
        } 
        else 
        {
            $j("#guardarPersona10").attr("disabled", false).html(gImagenAnterior);

            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

            borrarMensajesAnteriores();

            var anterior =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>";

            var posterior = "</strong></div>"; 
                
        	$j("#mensajesUsuario30").html(anterior + response.mensaje + posterior);

            if (response.identificacionDuplicada)
            {
                $j("#mensajesIdentificacion110").html(anterior + response.identificacionDuplicada + posterior);
            }
            if (response.emailDuplicado)
            {
                $j("#mensajesEmail110").html(anterior + response.emailDuplicado + posterior);
            }
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


    borrarMensajesAnteriores();
    
    if ($j("#tipoIdentificacion110").val() == "")  
    {   
        indicadorError = 1;
        mensajeError = anterior + "Seleccione el tipo de identificación" + posterior;
        $j("#mensajesTipo110").html(mensajeError);
    }

    if ($j("#numeroIdentificacion110").val() < 1)
    {   
        indicadorError = 1;
        mensajeError = anterior + "Verifique el número de identificacion" + posterior;
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

    if ($j("#celular110").val() < 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "No debe contener números negativos" + posterior;
        $j("#mensajesCelular110").html(mensajeError);
    }

    if ($j("#telefonoFijo110").val() < 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "No debe contener números negativos" + posterior;
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
        if (gRegex.test($j('#email110').val().trim()) == false) 
        {
            indicadorError = 1;
            mensajeError = anterior + "La dirección de correo no es válida" + posterior;
            $j("#mensajesEmail110").html(mensajeError);
        }
    }

    if (indicadorCheckbox == 1)
    {
        $j("#rolesCheckbox110 input").each(function (index) 
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

	return indicadorError;
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
                if (response.mensaje != "Usuario no autorizado")
                {
        			vectorGeneralActualizado = response.vectorGeneral;
        			actualizarVectores(vectorGeneralActualizado);
                }

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

            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

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
            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

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

            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

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

        if (gFuncionLlamadora == "verNotificaciones20" || gFuncionLlamadora == "busquedaAgenda10" 
            || gFuncionLlamadora == "solicitudesDeCita51" || gFuncionLlamadora == "personaAgenda51")
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

    if (gFuncionLlamadora == "verNotificaciones20" || gFuncionLlamadora == "busquedaAgenda10" 
        || gFuncionLlamadora == "solicitudesDeCita51" || gFuncionLlamadora == "personaAgenda51")
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

    if (gFuncionLlamadora == "bienesSinActividad51" || gFuncionLlamadora == "busquedaPropiedades10" 
        || gFuncionLlamadora == "busquedaNombre50")
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
                mostrarAgenda("Citas", "");
            } 
			else if (gFuncionLlamadora == "personaAgenda51")
			{
				filtro = filtrarAgenda(gIdPersonaActual);  
				mostrarAgenda(filtro, "");
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

            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

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
    gPersonas = gVectorGeneral.personas;
    gAdministradores = gVectorGeneral.administradores;
    gGestores = gVectorGeneral.gestores;
    gCaptadores = gVectorGeneral.captadores;
    gPromotores = gVectorGeneral.promotores;
    gPropietarios = gVectorGeneral.propietarios;
    gClientes = gVectorGeneral.clientes;
    gOutsourcing = gVectorGeneral.outsourcing;
    gNotificaciones = gVectorGeneral.notificaciones;	
    gVistaPreferida = gVectorGeneral.vistaPreferida;
    gOpcionesSelectActividades = gVectorGeneral.opcionesSelectActividades;
    gDireccionesUnico = gVectorGeneral.direccionesUnico;
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
        source: gCaptadores,
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
        source: gCaptadores,
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
        source: gClientes,
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
        source: gPersonas,
        select: function( event, ui ) 
        {   
            gIdPersonaActual = ui.item.id;    
            $j("#busquedaAgenda51").addClass('noVer');
            $j("#cerrarBusquedaAgenda10").addClass('noVer');
            $j("#busquedaAgenda10").addClass('noVer');
            gFuncionLlamadora = "personaAgenda51";
            gBotonCerrarLlamador = "#cerrarAgendaFiltrada10";
            filtro = filtrarAgenda(gIdPersonaActual);  
            mostrarAgenda(filtro, "");
        }
    });

    $j("#busquedaPorPersona52").autocomplete(
    {
        source: gPersonas,
        select: function( event, ui ) 
        {   
            gFuncionLlamadora = "busquedaPorPersona52";
            gIdPersonaActual = ui.item.id;    
            $j("#busquedaPersonas52").addClass('noVer');
            $j("#cerrarBusquedaPersonas10").addClass('noVer');
            $j("#busquedaPersonas10").addClass('noVer');
            $j("#cerrarBusquedaPorPersona10").removeClass('noVer');
            $j("#guardarCambiosPersona10").removeClass('noVer');
            if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Cliente"))
            {                   
                $j("#preferencias10").removeClass('noVer');
            }
            $j("#agregarPersonas110").removeClass('noVer');
            if ($j("#grupoRol110").hasClass('noVer') === false)
            {
                $j("#grupoRol110").addClass('noVer');
            }
            cargarDatosPersona();
        }
    });

    $j("#ubicacion50").autocomplete(
    {
        source: gDireccionesUnico,
        select: function( event, ui ) 
        {   
        }
    });

    $j("#enviarA60").autocomplete(
    {
        source: gClientes,
        select: function( event, ui ) 
        {   
            gIdPersonaActual = ui.item.id;  
            $j("#alEmail60").val(gUsuarios[gIdPersonaActual].email);  
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

function mostrarFotoPerfil()
{
    var fotoPerfil = "";
	if (gUsuarios[gIdUsuario].fotoPerfil)
	{
		fotoPerfil = 
            "<img class='img-fluid img-thumbnail border border-info' style='width: 50px;' alt='Foto perfil' src=" + gUsuarios[gIdUsuario].fotoPerfil + ">"; 
	}
	else
	{
        fotoPerfil = 
            "<img class='img-fluid img-thumbnail border border-info' style='width: 50px; opacity: 0.3;' alt='Foto perfil'" +
            " src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" +
            "crmdapliw/app/public/images/person.svg>"; 

    }
       
    $j("#fotoPerfil20").html(fotoPerfil);
}

function cargarDatosPersona()
{
    borrarMensajesAnteriores();
    
	var tipoIdentificacion = "";
	var numeroIdentificacion = "";
	
	if (gUsuarios[gIdPersonaActual].CRMdapliw_identificacion)
    {
		var arregloIdentificacion = gUsuarios[gIdPersonaActual].CRMdapliw_identificacion.split("-");       
		tipoIdentificacion = arregloIdentificacion[0];
		numeroIdentificacion = arregloIdentificacion[1];
	}

    $j("#tipoIdentificacion110").val(tipoIdentificacion);
    $j("#numeroIdentificacion110").val(numeroIdentificacion);
    
    $j("#primerNombre110").val(gUsuarios[gIdPersonaActual].first_name);
    $j("#primerApellido110").val(gUsuarios[gIdPersonaActual].last_name);

	$j("#rolesCheckbox110 input").each(function (index) 
	{ 
		$j(this).attr('checked', false);
		$j(this).prop('checked', false);
	});

    if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Administrador"))
    {
   		$j("#administrador110").attr('checked', true);
		$j("#administrador110").prop('checked', true);
    }
    if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Gestor de negocios"))
    {
   		$j("#gestorNegocios110").attr('checked', true);
		$j("#gestorNegocios110").prop('checked', true);
    }
    if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Captador"))
    {
   		$j("#captador110").attr('checked', true);
		$j("#captador110").prop('checked', true);
    }
    if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Promotor"))
    {
   		$j("#promotor110").attr('checked', true);
		$j("#promotor110").prop('checked', true);
    }
    if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Propietario"))
    {
   		$j("#propietario110").attr('checked', true);
		$j("#propietario110").prop('checked', true);
    }
    if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Cliente"))
    {
   		$j("#cliente110").attr('checked', true);
		$j("#cliente110").prop('checked', true);
    }
    if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Outsourcing"))
    {
   		$j("#outsourcing110").attr('checked', true);
		$j("#outsourcing110").prop('checked', true);
    }
    if (gUsuarios[gIdPersonaActual].CRMdapliw_celular)
    {
        $j("#celular110").val(gUsuarios[gIdPersonaActual].CRMdapliw_celular);
    }
    if (gUsuarios[gIdPersonaActual].CRMdapliw_telefono_fijo)
    {
        $j("#telefonoFijo110").val(gUsuarios[gIdPersonaActual].CRMdapliw_telefono_fijo);
    }
    $j("#email110").val(gUsuarios[gIdPersonaActual].email);
    if (gUsuarios[gIdPersonaActual].CRMdapliw_direccion)
    {
        $j("#direccion110").val(gUsuarios[gIdPersonaActual].CRMdapliw_direccion);
    }
    if ($j("#eliminarPersona110").hasClass('noVer'))
    {
        $j("#eliminarPersona110").removeClass('noVer');
    }
}
   
function eliminarPersona()
{
	borrarMensajesAnteriores();
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se elimina el usuario </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
        "</div>";

    $j("#mensajesEliminarPersona110").html(mensajesUsuario);

    $j.post("<?= mvc_public_url(array('controller' => 'usermetas', 'action' => 'eliminar_persona')) ?>", 
        { "idPersonaEliminar" : gIdPersonaActual }, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {   
            $j("#eliminarPersona110").attr("disabled", false).html(gImagenAnterior);

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

            borrarMensajesAnteriores();                
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

            $j("#mensajesUsuario30").html(mensajesUsuario);

            if (gFuncionLlamadora == "busquedaPorPersona52")
            {
                $j("#cerrarBusquedaPorPersona10").addClass('noVer');
                $j("#guardarCambiosPersona10").addClass('noVer');
                if ($j("#preferencias10").hasClass('noVer') === false)
                {
                    $j("#preferencias10").addClass('noVer');            
                }
                $j("#agregarPersonas110").addClass('noVer');
                $j("#busquedaPorPersona52").val("");
                $j("#busquedaPersonas52").removeClass('noVer');
                $j("#cerrarBusquedaPersonas10").removeClass('noVer');
                $j("#busquedaPersonas10").removeClass('noVer');
            }
            else if (gFuncionLlamadora == "verPersona105")
            {
                $j("#cerrarVerPersona10").addClass('noVer');
                $j("#guardarCambiosPersona10").addClass('noVer');
                if ($j("#preferencias10").hasClass('noVer') === false)
                {                  
                    $j("#preferencias10").addClass('noVer');
                }
                $j("#agregarPersonas110").addClass('noVer');
                $j("#cerrarPersonasFiltradas10").removeClass('noVer');
                $j("#agregarPersonaFiltro10").removeClass('noVer');
                filtroPersonas = $j("#busquedaGrupos52").val();
                mostrarPersonas(filtroPersonas);
                $j("#listaPersonas105").removeClass('noVer');                
            }
            window.scrollTo(0, 0);           
        } 
        else 
        {
            $j("#eliminarPersona110").attr("disabled", false).html(gImagenAnterior);

            if (response.mensaje != "Usuario no autorizado")
            {
                vectorGeneralActualizado = response.vectorGeneral;
                actualizarVectores(vectorGeneralActualizado);
            }

            borrarMensajesAnteriores();                
            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>"; 

        	$j("#mensajesEliminarPersona110").html(mensajesUsuario);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $j("#eliminarPersona110").attr("disabled", false).html(gImagenAnterior);

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

        $j("#mensajesEliminarPersona110").html(mensajesUsuario);
    });  
}

function guardarCambiosPersona(indicadorCheckbox)
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
    $j("#primerApellido110").val($j.trim($j("#primerApellido110").val().toUpperCase()));
    $j("#celular110").val($j.trim($j("#celular110").val().toUpperCase()));
    $j("#telefonoFijo110").val($j.trim($j("#telefonoFijo110").val().toUpperCase()));
    $j("#email110").val($j.trim($j("#email110").val().toLowerCase()));
    $j("#direccion110").val($j.trim($j("#direccion110").val().toUpperCase())); 

    if (indicadorCheckbox == 0)
    {
        roles = ["Cliente"];
    }
    else
    {
        roles = [];
        $j("#rolesCheckbox110 input").each(function (index) 
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
                if ($j(this).attr("id") == "cliente110")
                {
                    roles.push("Cliente");
                }
                if ($j(this).attr("id") == "outsourcing110")
                {
                    roles.push("Outsourcing");
                }				
            }
        });
    } 

    celular = $j("#celular110").val(); 
    telefonoFijo = $j("#telefonoFijo110").val();

    email = $j("#email110").val();
    direccion = $j("#direccion110").val();  
    
    jsonPersona = 
        {"idUser" : gIdPersonaActual,
        "persona" :  
            {
                "tipoIdentificacion" : $j("#tipoIdentificacion110").val(),
                "numeroIdentificacion" : $j("#numeroIdentificacion110").val(),
                "primerNombre" : $j("#primerNombre110").val(),
                "primerApellido" : $j("#primerApellido110").val(),
                "roles" : roles,
                "celular" : celular,
                "telefonoFijo" : telefonoFijo,
                "email" : email,
                "direccion" : direccion,
            }
        };

    $j.post("<?= mvc_public_url(array('controller' => 'users', 'action' => 'guardar_Cambios_persona')) ?>", 
        jsonPersona, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {   
            $j("#guardarCambiosPersona10").attr("disabled", false).html(gImagenAnterior);

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

            borrarMensajesAnteriores();                
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

            $j("#mensajesUsuario30").html(mensajesUsuario);

            if (gFuncionLlamadora == "busquedaPorPersona52")
            {
                $j("#cerrarBusquedaPorPersona10").addClass('noVer');
                $j("#guardarCambiosPersona10").addClass('noVer');
                if ($j("#preferencias10").hasClass('noVer') === false)
                {
                    $j("#preferencias10").addClass('noVer');            
                }
                $j("#agregarPersonas110").addClass('noVer');
                $j("#busquedaPorPersona52").val("");
                $j("#busquedaPersonas52").removeClass('noVer');
                $j("#cerrarBusquedaPersonas10").removeClass('noVer');
                $j("#busquedaPersonas10").removeClass('noVer');
            }
            else if (gFuncionLlamadora == "verPersona105")
            {
                $j("#cerrarVerPersona10").addClass('noVer');
                $j("#guardarCambiosPersona10").addClass('noVer');
                if ($j("#preferencias10").hasClass('noVer') === false)
                {                  
                    $j("#preferencias10").addClass('noVer');
                }
                $j("#agregarPersonas110").addClass('noVer');
                $j("#cerrarPersonasFiltradas10").removeClass('noVer');
                $j("#agregarPersonaFiltro10").removeClass('noVer');
                filtroPersonas = $j("#busquedaGrupos52").val();
                mostrarPersonas(filtroPersonas);
                $j("#listaPersonas105").removeClass('noVer');                
            }
            window.scrollTo(0, 0);           
        } 
        else 
        {
            $j("#guardarCambiosPersona10").attr("disabled", false).html(gImagenAnterior);

            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

            borrarMensajesAnteriores();

            var anterior =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>";

            var posterior = "</strong></div>"; 
                
        	$j("#mensajesUsuario30").html(anterior + response.mensaje + posterior);

            if (response.identificacionDuplicada)
            {
                $j("#mensajesIdentificacion110").html(anterior + response.identificacionDuplicada + posterior);
            }
            if (response.emailDuplicado)
            {
                $j("#mensajesEmail110").html(anterior + response.emailDuplicado + posterior);
            }
			window.scrollTo(0, 0);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $j("#guardarCambiosPersona10").attr("disabled", false).html(gImagenAnterior);

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

function mostrarPreferencias()
{
    tituloPreferencias = "Preferencias del cliente: " + gUsuarios[gIdPersonaActual].first_name + " " + gUsuarios[gIdPersonaActual].last_name;
    $j("#tituloPreferencias111").html(tituloPreferencias);
 
    var preferencias = "";
    var complementoId = "";

    if (gUsuarios[gIdPersonaActual].CRMdapliw_preferencias)
    {
        preferencias += "<div class='col-md-12 mb-3'>";

		contadorPreferencia = 0;
        $j.each(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias, function(clave1, datos1)  
        {
            if (datos1.Estatus == "Activa")
            {
				contadorPreferencia++;
				
                complementoId = clave1;

                preferencias += 
                    "<div class='card' id='preferencia111-" + complementoId + "'>" +
                        "<div class='card-block'>" + 
                            "<h4 class='card-title'> Preferencia " + contadorPreferencia + "</h4>" +
                            "<div class='card bg-light text-dark'>" +
                                "<div class='card-body'>" +
								"<p>";
		
				$j.each(datos1, function(clave2, datos2)  
				{						
					preferencias += "<b>" + clave2 + ":</b> " + datos2 + " ";					
				});
		
				preferencias += 
									"</p>"+
                                "</div>" +
                            "</div>" +
                            "<div class='card-footer'>" +
                                "<p>" +                                                            
                                    "<button class='btn btn-light modificarPreferencia111'" + 
                                        "id='modificarPreferencia111-" + complementoId + "'" + 
                                        " title='Modificar preferencia'>" +
                                        "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                                        "crmdapliw/app/public/images/pencil.svg alt='Modificar preferencia' class='icono'" +
                                        " id='imagenModificarPreferencia111-" + complementoId + "'>" +
                                    "</button>" +
                                    "<button class='btn btn-light eliminarPreferencia111'" + 
                                        "id='eliminarPreferencia111-" + complementoId + "'" + 
                                        " title='Eliminar preferencia'>" +
                                        "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                                        "crmdapliw/app/public/images/trash.svg alt='Eliminar preferencia' class='icono'" +
                                        " id='imagenEliminarPreferencia111-" + complementoId + "'>" +
                                    "</button>" +
                                "</p>" +
                            "</div>" +  
                        "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                        "<div class='col-md-12'>" +
                            "<div class='mensajesUsuario' id='mensajesPreferencia111-" + complementoId + "'>" +
                            "</div>" +
                        "</div>" +
                    "</div>" + 
                    "<br />";
            }
        });
        preferencias += "</div>";
    }

    $j("#detallePreferencias111").html(preferencias);
}

(function(){
	var thisMapField = this;

	this.container = null;
	this.canvas = null;
	this.latlng = null;
	this.map = null;
	this.marker = null;
	this.geocoder = null;

	this.init = function($container){
		this.container = $container;
		this.canvas = $container.find('.map-canvas');
		this.initLatLng(53.346881, -6.258860);
		this.initMap();
		this.initMarker();
		this.initGeocoder();
		this.initMarkerPosition();
		this.initListeners();
		this.initAutoComplete();
		this.bindHandlers();
	}

	this.initLatLng = function($lat, $lng){
		this.latlng = new window.google.maps.LatLng($lat, $lng);
	}

	this.initMap = function(){
		this.map = new window.google.maps.Map(this.canvas[0], {
			zoom: 8,
			center: this.latlng,
			streetViewControl: 0,
			mapTypeId: window.google.maps.MapTypeId.ROADMAP,
			mapTypeControlOptions: {
				position: google.maps.ControlPosition.LEFT_BOTTOM
			},
			zoomControlOptions: {
				position: google.maps.ControlPosition.RIGHT_BOTTOM
			},
			styles : [
				{
					"featureType": "landscape",
					"stylers": [
						{
							"hue": "#FFBB00"
						},
						{
							"saturation": 43.400000000000006
						},
						{
							"lightness": 37.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.highway",
					"stylers": [
						{
							"hue": "#FFC200"
						},
						{
							"saturation": -61.8
						},
						{
							"lightness": 45.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.arterial",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 51.19999999999999
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.local",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 52
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "water",
					"stylers": [
						{
							"hue": "#0078FF"
						},
						{
							"saturation": -13.200000000000003
						},
						{
							"lightness": 2.4000000000000057
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "poi",
					"stylers": [
						{
							"hue": "#00FF6A"
						},
						{
							"saturation": -1.0989010989011234
						},
						{
							"lightness": 11.200000000000017
						},
						{
							"gamma": 1
						}
					]
				}
			]
		});
	}

	this.initMarker = function(){
		this.marker = new window.google.maps.Marker({position: this.latlng, map: this.map, draggable: true});
	}

	this.initMarkerPosition = function(){
		var coord = this.container.find('.map-coordinate').val();
		var addressField = this.container.find('.goto-address-button').val();
		var l;
		var zoom;

		if (coord){
			l = coord.split( ',' );
			this.marker.setPosition( new window.google.maps.LatLng( l[0], l[1] ) );

			zoom = l.length > 2 ? parseInt( l[2], 10 ) : 15;

			this.map.setCenter(this.marker.position);
			this.map.setZoom(zoom);
		} else if (addressField) {
			this.geocodeAddress(addressField);
		}
	}

	this.initGeocoder = function(){
		this.geocoder = new window.google.maps.Geocoder();
	}

	this.initListeners = function(){
		var that = thisMapField;
		window.google.maps.event.addListener(this.map, 'click', function (event)
		{
			that.marker.setPosition(event.latLng);
			that.updatePositionInput(event.latLng);
		});
		window.google.maps.event.addListener(this.marker, 'drag', function (event)
		{
			that.updatePositionInput(event.latLng);
		});
	}

	this.updatePositionInput = function(latLng){
		this.container.find('.map-coordinate').val(latLng.lat() + ',' + latLng.lng());
        $j("#coordenadas112").val(latLng.lat() + ',' + latLng.lng());
	}

	this.geocodeAddress = function(addressField){
		var address = '';
		var fieldList = addressField.split(',');
		var loop;

		for (loop = 0; loop < fieldList.length; loop++)
		{
			address += jQuery('#' + fieldList[loop] ).val();
			if(loop+1 < fieldList.length) {  address += ', '; }
		}

		address = address.replace( /\n/g, ',' );
		address = address.replace( /,,/g, ',' );

		var that = thisMapField;
		this.geocoder.geocode({'address': address}, function (results, status)
		{
			if ( status == window.google.maps.GeocoderStatus.OK )
			{
				that.updatePositionInput(results[0].geometry.location);
				that.marker.setPosition(results[0].geometry.location);
				that.map.setCenter(that.marker.position);
				that.map.setZoom(15);
			}
		});
	}

	this.initAutoComplete = function(){
		var addressField = this.container.find('.goto-address-button').val();
		if (!addressField) return null;

		var that = thisMapField;
		$j('#' + addressField).autocomplete({
			source: function(request, response) {
				// TODO: add 'region' option, to help bias geocoder.
				that.geocoder.geocode( {'address': request.term }, function(results, status) {
					response($j.map(results, function(item) {
						return {
							label: item.formatted_address,
							value: item.formatted_address,
							latitude: item.geometry.location.lat(),
							longitude: item.geometry.location.lng()
						};
					}));
				});
			},
			select: function(event, ui) {
				that.container.find(".map-coordinate").val(ui.item.latitude + ',' + ui.item.longitude );
                $j("#coordenadas112").val(ui.item.latitude + ',' + ui.item.longitude);

                var location = new window.google.maps.LatLng(ui.item.latitude, ui.item.longitude);
				that.map.setCenter(location);
				// Drop the Marker
				setTimeout(function(){
					that.marker.setValues({
						position: location,
						animation: window.google.maps.Animation.DROP
					});
				}, 1500);
			}
		});
	}

	this.bindHandlers = function(){
		var that = thisMapField;
		this.container.find('.goto-address-button').bind('click', function() { that.onFindAddressClick($j(this)); });
	}

	this.onFindAddressClick = function($that){
		var $this = $that;
		this.geocodeAddress($this.val());
	}

}).apply( mapField );

function validarPreferencia()
{
    var indicadorError = 0; 
    var anterior =
        "<div class='alert alert-danger alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>";

    var posterior = "</strong></div>"; 

    borrarMensajesAnteriores();
    
    if ($j("#tipoPropiedad112").val() == "")  
    {   
        indicadorError = 1;
        mensajeError = anterior + "Seleccione el tipo de propiedad" + posterior;
        $j("#mensajesTipoPropiedad112").html(mensajeError);
    }

    if ($j("#tipoOperacion112").val() == "")
    {   
        indicadorError = 1;
        mensajeError = anterior + "Seleccione el tipo de operación" + posterior;
        $j("#mensajesTipoOperacion112").html(mensajeError);
    }

    if ($j("#habitaciones112").val() < 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "No debe contener números negativos" + posterior;
        $j("#mensajesHabitaciones112").html(mensajeError);
    }

    if ($j("#banos112").val() < 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "No debe contener números negativos" + posterior;
        $j("#mensajesBanos112").html(mensajeError);
    }

    if ($j("#garajes112").val() < 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "No debe contener números negativos" + posterior;
        $j("#mensajesGarajes112").html(mensajeError);
    }

    if ($j("#area112").val() < 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "No debe contener números negativos" + posterior;
        $j("#mensajesArea112").html(mensajeError);
    }

    if ($j("#precioMinimo112").val() < 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "No debe contener números negativos" + posterior;
        $j("#mensajesPrecioMinimo112").html(mensajeError);
    }

    if ($j("#precioMaximo112").val() < 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "No debe contener números negativos" + posterior;
        $j("#mensajesPrecioMaximo112").html(mensajeError);
    }

    if ($j("#address").val() == "") 
    {   
        indicadorError = 1;
        mensajeError = anterior + "Escriba la dirección del inmueble" + posterior;
        $j("#mensajesAddress").html(mensajeError);
    }

    if (indicadorError == 1)
    {
        mensajeError = anterior + "Estimado usuario uno o más datos contienen errores, por favor verifique" + posterior;
        $j("#mensajesUsuario30").html(mensajeError);
        window.scrollTo(0, 0);
    }
	return indicadorError;
}

function guardarPreferencia()
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

    $j("#address").val($j.trim($j("#address").val()));

    jsonPreferencia = 
        {"idUsuario" : gIdPersonaActual,
        "preferencia" :  
            {
                "Tipo de propiedad" : $j("#tipoPropiedad112").val(),
                "Tipo de operacion" : $j("#tipoOperacion112").val(),
                "Habitaciones" : $j("#habitaciones112").val(),
                "Baños" : $j("#banos112").val(),
                "Garajes" : $j("#garajes112").val(),
                "Area M2" : $j("#area112").val(),
                "Precio mínimo" : $j("#precioMinimo112").val(),
                "Precio máximo" : $j("#precioMaximo112").val(),
                "Ubicación" : $j("#address").val(),
                "Coordenadas" : $j("#coordenadas112").val(),                
                "Estatus" : "Activa"
            }
        };

    $j.post("<?= mvc_public_url(array('controller' => 'usermetas', 'action' => 'guardar_preferencia')) ?>", 
        jsonPreferencia, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {   
            $j("#guardarPreferencia10").attr("disabled", false).html(gImagenAnterior);

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

            borrarMensajesAnteriores();                
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

            $j("#mensajesUsuario30").html(mensajesUsuario);

            $j("#agregarPreferencia112").addClass("noVer");
            $j("#cerrarAgregarPreferencia10").addClass("noVer");
            $j("#guardarPreferencia10").addClass("noVer");
		               
            $j("#tipoPropiedad50").val($j("#tipoPropiedad112").val());
            $j("#tipoOperacion50").val($j("#tipoOperacion112").val());
            $j("#busquedaHabitaciones50").val($j("#habitaciones112").val());
            $j("#busquedaBanos50").val($j("#banos112").val());
            $j("#busquedaGarajes50").val($j("#garajes112").val());
            $j("#busquedaArea50").val($j("#area112").val());
            $j("#busquedaPrecioMinimo50").val($j("#precioMinimo112").val());
            $j("#busquedaPrecioMaximo50").val($j("#precioMaximo112").val());
            $j("#ubicacion50").val($j("#address").val());

            $j("#enviarA60").val(gUsuarios[gIdPersonaActual].first_name + " " + gUsuarios[gIdPersonaActual].last_name);

            $j("#alEmail60").val(gUsuarios[gIdPersonaActual].email);

            limpiarCamposPreferencia();

            filtrarPropiedades(0);
            mostrarBienes("Propiedades", "");
            $j("#bienes60").removeClass('noVer');
            $j("#cerrarPropiedadesFiltradas10").removeClass('noVer');
            $j("#email10").removeClass('noVer');
            $j("#publicarPropiedad10").removeClass('noVer');
            window.scrollTo(0, 0);
        } 
        else 
        {
            $j("#guardarPreferencia10").attr("disabled", false).html(gImagenAnterior);

            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

            borrarMensajesAnteriores();

            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>";
              
        	$j("#mensajesUsuario30").html(mensajesUsuario);
            window.scrollTo(0, 0);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $j("#guardarPreferencia10").attr("disabled", false).html(gImagenAnterior);

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

function guardarCambiosPreferencia()
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

    $j("#address").val($j.trim($j("#address").val()));

    jsonPreferencia = 
        {"idUsuario" : gIdPersonaActual,
        "clavePreferencia" : gClavePreferencia,
        "preferencia" :  
            {
                "Tipo de propiedad" : $j("#tipoPropiedad112").val(),
                "Tipo de operacion" : $j("#tipoOperacion112").val(),
                "Habitaciones" : $j("#habitaciones112").val(),
                "Baños" : $j("#banos112").val(),
                "Garajes" : $j("#garajes112").val(),
                "Area M2" : $j("#area112").val(),
                "Precio mínimo" : $j("#precioMinimo112").val(),
                "Precio máximo" : $j("#precioMaximo112").val(),
                "Ubicación" : $j("#address").val(),
                "Coordenadas" : $j("#coordenadas112").val(),
                "Estatus" : "Activa"
            }
        };

    $j.post("<?= mvc_public_url(array('controller' => 'usermetas', 'action' => 'guardar_cambios_preferencia')) ?>", 
        jsonPreferencia, null, "json")          
    .done(function(response) 
    {
        if (response.satisfactorio) 
        {   
            $j("#guardarCambiosPreferencia10").attr("disabled", false).html(gImagenAnterior);

            vectorGeneralActualizado = response.vectorGeneral;
            actualizarVectores(vectorGeneralActualizado);

            borrarMensajesAnteriores();                
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

            $j("#mensajesUsuario30").html(mensajesUsuario);

            limpiarCamposPreferencia();
            $j("#agregarPreferencia112").addClass("noVer");
            $j("#cerrarModificarPreferencia10").addClass("noVer");
            $j("#guardarCambiosPreferencia10").addClass("noVer");
		    mostrarPreferencias();
            $j("#preferencias111").removeClass("noVer");
            $j("#cerrarPreferencias10").removeClass("noVer");
            $j("#agregarPreferencia10").removeClass("noVer");
            window.scrollTo(0, 0);           
        } 
        else 
        {
            $j("#guardarCambiosPreferencia10").attr("disabled", false).html(gImagenAnterior);

            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

            borrarMensajesAnteriores();

            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>";
              
        	$j("#mensajesUsuario30").html(mensajesUsuario);
            window.scrollTo(0, 0);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $j("#guardarCambiosPreferencia10").attr("disabled", false).html(gImagenAnterior);

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

function cargarCamposPreferencia()
{
    $j("#tipoPropiedad112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Tipo de propiedad"]);
    $j("#tipoOperacion112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Tipo de operacion"]);
    $j("#habitaciones112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Habitaciones"]);
    $j("#banos112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Baños"]);
    $j("#garajes112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Garajes"]);
    $j("#area112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Area M2"]);
    $j("#precioMinimo112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Precio mínimo"]);
    $j("#precioMaximo112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Precio máximo"]);    
    $j("#coordenadas112").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Coordenadas"]);
    $j("#address").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Ubicación"]);
    $j(".map-coordinate").val(gUsuarios[gIdPersonaActual].CRMdapliw_preferencias[gClavePreferencia]["Coordenadas"]);

    $j('.map-wrapper').each(function(){
        mapField.init($j(this));
    });
}

function eliminarPreferencia(idPreferencia)
{
    clavePreferencia = $j("#" + idPreferencia).attr('id').substring(23);
	
    borrarMensajesAnteriores();

    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere </strong>" +
            "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/aperture.svg' ?>" +
            " alt='Por favor espere' class='icono imgre'>" +
        "</div>";

    $j("#mensajesPreferencia111-" + clavePreferencia).html(mensajesUsuario);

    jsonPreferencia = 
        {
            "idUsuario" : gIdPersonaActual,
            "clavePreferencia" : clavePreferencia  
        };

    $j.post("<?= mvc_public_url(array('controller' => 'usermetas', 'action' => 'eliminar_preferencia')) ?>", 
        jsonPreferencia, null, "json")          
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

            $j("#mensajesUsuario30").html(mensajesUsuario);

		    mostrarPreferencias();
            window.scrollTo(0, 0);           
        } 
        else 
        {
            $j("#" + idPreferencia).attr("disabled", false).html(gImagenAnterior);

            if (response.mensaje != "Usuario no autorizado")
            {
    			vectorGeneralActualizado = response.vectorGeneral;
    			actualizarVectores(vectorGeneralActualizado);
            }

            borrarMensajesAnteriores();

            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>";
              
        	$j("#mensajesPreferencia111-" + clavePreferencia).html(mensajesUsuario);
            window.scrollTo(0, 0);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        $j("#" + idPreferencia).attr("disabled", false).html(gImagenAnterior);

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

        $j("#mensajesPreferencia111-" + clavePreferencia).html(mensajesUsuario);
		window.scrollTo(0, 0);
    });  
}

function limpiarCamposPreferencia()
{
    $j("#tituloAgregarPreferencia112").html("");
    $j("#tipoPropiedad112").val("");
    $j("#tipoOperacion112").val("");
    $j("#address").val("");
    $j("#habitaciones112").val("");
    $j("#banos112").val("");
    $j("#garajes112").val("");
    $j("#area112").val("");
    $j("#precioMinimo112").val("");
    $j("#precioMaximo112").val("");    
}

function verificarFiltroPersonas(filtroPersonas)
{
	vectorPermisosPersonas =
		{
			"Administradores" : ["Administrador"],
			"Asesores de inversión inmobiliaria" : ["Administrador", "Gestor de negocios"], 
			"Captadores" : ["Administrador", "Gestor de negocios"],
			"Clientes" : ["Administrador", "Gestor de negocios", "Promotor"],
			"Gestores de negocios" : ["Administrador"],
			"Outsourcing" : ["Administrador", "Gestor de negocios"],
			"Propietarios" : ["Administrador", "Gestor de negocios", "Captador"],
			"Todos" : ["Administrador"]
		};

	permisoFiltroPersonas = false;
	
	rolesAutorizados = vectorPermisosPersonas[filtroPersonas];
	
	$j.each(rolesAutorizados, function(clave, datos)  
	{	
		if (gRoles.includes(datos))
		{
			permisoFiltroPersonas = true;
			return false;
		}
	});
	
	return permisoFiltroPersonas;		
}

function mostrarPersonas(filtroPersonas)
{
    var vectorFiltro = "";
    var complementoId = "";
    var tablaFiltroVector =
        {
            "Administradores" : gAdministradores,
            "Gestores de negocios" : gGestores,
            "Captadores" : gCaptadores,
            "Asesores de inversión inmobiliaria" : gPromotores,
            "Propietarios" : gPropietarios,
            "Clientes" : gClientes,
            "Outsourcing" : gOutsourcing,
            "Todos" : gPersonas
        };

    $j.each(tablaFiltroVector, function(clave, datos)  
	{
        if (clave == filtroPersonas)
        {
            vectorFiltro = datos;
            return false;        
        }
    });

    if (vectorFiltro[0])
    {
		if (gVistaPreferida.substring(0, 5) == "Lista")
		{
			listaPersonas(filtroPersonas, vectorFiltro);
		}
		else
		{
			mosaicoPersonas(filtroPersonas, vectorFiltro);
		}
    }
}

function mosaicoPersonas(filtroPersonas, vectorFiltro)
{
    var mosaicoPersonas = "";

    $j("#tituloListaPersonas105").html(filtroPersonas);
    
    mosaicoPersonas += "<div class='col-md-4 mb-3'>";

    $j.each(vectorFiltro, function(clave, datos)  
    {			
        complementoId = datos.id;
		
        mosaicoPersonas += 
            "<div class='card' id='persona105-" + complementoId + "'>";
				
				if (gVistaPreferida == "Mosaicos con imágenes")
				{
					if (gUsuarios[complementoId]["fotoPerfil"])
					{
						mosaicoPersonas += 
							"<img src=" + gUsuarios[complementoId]["fotoPerfil"] + " class='card-img-top img-fluid' alt='Foto del usuario'>";
					}
					else
					{
						mosaicoPersonas += 					
							"<img class='card-img-top img-fluid' style='opacity: 0.3;' alt='Sin foto'" +
							" src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" +
							"crmdapliw/app/public/images/person.svg>";					
					}
				}
				else
				{
					if (gUsuarios[complementoId]["fotoPerfil"])
					{
						mosaicoPersonas += 
							"<a href=" + gUsuarios[complementoId]["fotoPerfil"] + " title='Ver foto' target='_blank'>" +
							"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/camera-slr.svg' ?>" +
							" alt='Ver foto' class='icono'>" +
							"</a>";
					}
					else
					{
						mosaicoPersonas += "Sin foto";
					}
				}
				
				mosaicoPersonas +=

                "<div class='card-block'>" + 
                    "<h4 class='card-title'>" + datos.label + "</h4>" +
                    "<div class='card bg-light text-dark'>" +
                        "<div class='card-body'>" +
                            "<p>" +                                                            
                                "<button class='btn btn-light verPersona105'" + 
                                    " id='verPersona105-" + complementoId + "'" + 
                                    " title='Ver persona'>" +
                                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                                    "crmdapliw/app/public/images/eye.svg alt='Ver persona' class='icono'" +
                                    " id='imagenVerPersona-" + complementoId + "'>" +
                                "</button>" +
                            "</p>" +
                        "</div>" +  
                    "</div>" +
                "</div>" +
            "</div>" +
            "<div class='mensajesUsuario' id='mensajesPreferencia111-" + complementoId + "'>" +
            "</div>" +
            "<br />";
    });

    mosaicoPersonas += "</div>";
    $j("#detalleListaPersonas105").html(mosaicoPersonas);
}

function listaPersonas(filtroPersonas, vectorFiltro)
{
    var listaPersonas = "";
    var contador = 1;

    $j("#tituloListaPersonas105").html(filtroPersonas);
 
    listaPersonas += 
        "<div class='table-responsive'>" +
            "<table class='table table-striped table-hover'>" +
                "<thead>" +
                    "<tr>" +
                        "<th scope='col' class='text-center' style='width:5%;'>No</th>" +
                        "<th scope='col' class='text-center' style='width:10%;'>Foto</th>" +
                        "<th scope='col' class='text-center' style='width:30%;'>Persona</th>" +
                        "<th scope='col' class='text-center' style='width:25%;'></th>" +
                    "</tr>" +
                "</thead>" +
                "<tbody>";

    $j.each(vectorFiltro, function(clave, datos)  
    {			
        complementoId = datos.id;
		
		listaPersonas += 
            "<tr>" +
                "<td class='text-center align-middle'>" + contador + "</td>";
							
		if (gVistaPreferida == "Lista con imágenes")
		{
            if (gUsuarios[complementoId]["fotoPerfil"])    
			{				
				listaPersonas += 
					"<td class='text-center align-middle'><img src=" + gUsuarios[complementoId]["fotoPerfil"] + " class='img-thumbnail' alt='Foto del usuario'></td>";
			}
			else
			{
				listaPersonas += 
                    "<td class='text-center align-middle'>" +
                        "<img class='card-img-top img-fluid' style='opacity: 0.3;' alt='Sin foto'" +
                        " src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" +
                        "crmdapliw/app/public/images/person.svg>" +			
                    "</td>";
			}
		}
		else
		{
			if (gUsuarios[complementoId]["fotoPerfil"])
			{				
				listaPersonas += 
					"<td class='text-center align-middle'>" +
					    "<a href=" + gUsuarios[complementoId]["fotoPerfil"] + " title='Ver foto' target='_blank'>" +
					        "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . 'crmdapliw/app/public/images/camera-slr.svg' ?>" +
					        " alt='Ver foto' class='icono'>" +
					    "</a>" + 
					"</td>";
			}
			else
			{
				listaPersonas += "<td class='text-center align-middle'>Sin foto</td>";
			}
		}

		listaPersonas += 
                "<td class='text-center align-middle'>" + datos.label + "</td>" +
                "<td class='text-center align-middle'>" + 									
                    "<button class='btn btn-light verPersona105'" + 
                        " id='verPersona105-" + complementoId + "'" + 
                        " title='Ver persona'>" +
                        "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                        "crmdapliw/app/public/images/eye.svg alt='Ver persona' class='icono'" +
                        " id='imagenVerPersona-" + complementoId + "'>" +
                    "</button>" +
                "</td>" +
			"</tr>";
        
        contador++;
	});
    
    listaPersonas += 
                "</tbody>" +
            "</table>" +
        "</div>";

    $j("#detalleListaPersonas105").html(listaPersonas);
}

function activarRoles()
{
    var rolesPermitidos =
        {
            "Administrador" : ["administrador110", "gestorNegocios110", "captador110", "promotor110", "propietario110", "cliente110", "outsourcing110"],
            "Gestor de negocios" : ["captador110", "promotor110", "propietario110", "cliente110", "outsourcing110"],
            "Captador" : ["propietario110"],
            "Promotor" : ["cliente110"]
        }

    $j("#administrador110").addClass("noVer");
    $j("#gestorNegocios110").addClass("noVer");
    $j("#captador110").addClass("noVer");
    $j("#promotor110").addClass("noVer");
    $j("#propietario110").addClass("noVer");
    $j("#cliente110").addClass("noVer");
    $j("#outsourcing110").addClass("noVer");

    $j.each(gRoles, function(clave1, datos1)  
    {	
        $j.each(rolesPermitidos, function(clave2, datos2)  
        {	
            if (datos1 == clave2)
            {
                $j.each(rolesPermitidos[clave2], function(clave3, datos3)  
                {	
                    if ($j("#" + datos3).hasClass('noVer'))
                    {
                        $j("#" + datos3).removeClass('noVer');
                    }
                });
            }            
        });
    });
}

function borrarCriteriosFiltroPropiedades()
{
    $j("#tipoPropiedad50").val(""); 
    $j("#tipoOperacion50").val(""); 
    $j("#busquedaCodigo50").val(""); 
    $j("#busquedaHabitaciones50").val(""); 
    $j("#busquedaBanos50").val(""); 
    $j("#busquedaGarajes50").val(""); 
    $j("#busquedaArea50").val(""); 
    $j("#busquedaZona50").val(""); 
    $j("#busquedaPrecioMinimo50").val(""); 
    $j("#busquedaPrecioMaximo50").val(""); 
    $j("#ubicacion50").val("");
}

function enviarEmailPropiedades()
{
    bienesEmail = [];
        
    var coordenadaBien = "";
    var contadorBienes = 0;
    var indicadorError = 0;

    borrarMensajesAnteriores();

    var anterior =
        "<div class='alert alert-danger alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>";

    var posterior = "</strong></div>"; 

    $j("#cicloBienes60 input").each(function (index) 
    {
        if ($j(this).prop("checked") == true)
        {
            idBien = $j(this).attr("id").substring(8);

            coordenadasBien = "Sin coordenadas";

            if (gDatosBienes[idBien].REAL_HOMES_property_location)
            {
                coordenadasBien = gDatosBienes[idBien].REAL_HOMES_property_location[0].valor;
            }
            bienSeleccionado =
                {
                    "nombreBien" : gMatrizBienes[idBien].post_title,
                    "guidBien" : gMatrizBienes[idBien].guid,
                    "coordenadas" : coordenadasBien
                };
            bienesEmail.push(bienSeleccionado);
            contadorBienes++;
        }
    });

    if (gIdPersonaActual == "")
    {
        indicadorError = 1;
        mensajeError = anterior + "Por favor escriba las primeras letras del nombre del cliente y seleccione" + posterior;
        $j("#mensajesEnviarA60").html(mensajeError);        
    }

    if ($j("#enviarA60").val() == "")
    {
        indicadorError = 1;
        mensajeError = anterior + "Por favor escriba las primeras letras del nombre del cliente y seleccione" + posterior;
        $j("#mensajesEnviarA60").html(mensajeError);        
    }

    if ($j("#alEmail60").val() == "")
    {   
        indicadorError = 1;
        mensajeError = anterior + "Por favor escriba las primeras letras del nombre del cliente y seleccione" + posterior;
        $j("#mensajesEnviarA60").html(mensajeError);     
    }
    else
    {
        if (gRegex.test($j('#alEmail60').val().trim()) == false) 
        {
            indicadorError = 1;
            mensajeError = anterior + "La dirección de correo no es válida" + posterior;
            $j("#mensajesAlEmail60").html(mensajeError);
        }
    }

   if (contadorBienes == 0)
    {   
        indicadorError = 1;
        mensajeError = anterior + "Por favor seleccione al menos una propiedad" + posterior;
        $j("#mensajesUsuario30").html(mensajeError);
    } 

    if (indicadorError == 0)
    {
        personaBienesEmail =
        {
            "cliente" : gUsuarios[gIdPersonaActual].first_name + " " + gUsuarios[gIdPersonaActual].last_name,
            "email" : $j("#alEmail60").val(),
            "contador" : contadorBienes,
            "propiedades" : bienesEmail
        }

        console.log(personaBienesEmail);

        $j.post("<?= mvc_public_url(array('controller' => 'users', 'action' => 'enviar_email_propiedades')) ?>", 
            personaBienesEmail, null, "json")          
        .done(function(response) 
        {
            if (response.satisfactorio) 
            {   
                $j("#email10").attr("disabled", false).html(gImagenAnterior);

                vectorGeneralActualizado = response.vectorGeneral;
                actualizarVectores(vectorGeneralActualizado);

                borrarMensajesAnteriores();                

                mensajesUsuario =
                    "<div class='alert alert-success alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                        "<strong>" + response.mensaje + "</strong>" +
                    "</div>";

                $j("#mensajesUsuario30").html(mensajesUsuario);
            } 
            else 
            {
                $j("#email10").attr("disabled", false).html(gImagenAnterior);

                if (response.mensaje != "Usuario no autorizado")
                {
                    vectorGeneralActualizado = response.vectorGeneral;
                    actualizarVectores(vectorGeneralActualizado);
                }

                borrarMensajesAnteriores();                

                mensajesUsuario =
                    "<div class='alert alert-danger alert-dismissible'>" +
                        "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                        "<strong>" + response.mensaje + "</strong>" +
                    "</div>";

                $j("#mensajesUsuario30").html(mensajesUsuario);
            }
            window.scrollTo(0, 0);           
        })
        .fail(function(jqXHR, textStatus, errorThrown) 
        {
            $j("#email10").attr("disabled", false).html(gImagenAnterior);

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
        $j("#email10").attr("disabled", false).html(gImagenAnterior);
        window.scrollTo(0, 0); 
    }  
}

// Eventos
$j(document).ready(function()
{
    $j("#vistas20").val(gVistaPreferida);

    mostrarNotificaciones();
    mostrarFotoPerfil()
    
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
        borrarCriteriosFiltroPropiedades();
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
        $j("#email10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#cerrarPropiedadesFiltradas10').click(function()
    {

        $j("#bienes60").addClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").addClass('noVer');
        $j("#email10").addClass('noVer');
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
        else if (gFuncionLlamadora == "agregarPersonaFiltro10" || 
            gFuncionLlamadora == "verPersona105")
        {
            mostrarPreferencias();
            $j("#preferencias111").removeClass("noVer");
            $j("#cerrarPreferencias10").removeClass("noVer");
            $j("#agregarPreferencia10").removeClass("noVer");
            
            if ($j("#publicarPropiedad10").hasClass('noVer') === false)
            {
                $j("#publicarPropiedad10").addClass('noVer');
            }  
            borrarCriteriosFiltroPropiedades();
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
        gFuncionLlamadora = "busquedaAgenda10";
        gBotonCerrarLlamador = "#cerrarAgendaFiltrada10";
        filtro = filtrarAgenda();
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
        if ($j("#rolesCheckbox110").hasClass('noVer') === false)
        {
            $j("#rolesCheckbox110").addClass('noVer');
        }
        if ($j("#eliminarPersona110").hasClass('noVer') === false)
        {
            $j("#eliminarPersona110").addClass('noVer');
        }
        $j("#cerrarAgregarPersona10").removeClass('noVer');
        $j("#guardarPersona10").removeClass("noVer");
        window.scrollTo(0, 0);
    });

    $j("#guardarPersona10").click(function()
    {
        gImagenAnterior = $j("#guardarPersona10").html();  
        $j("#guardarPersona10").attr("disabled", true).html(gImagenEspere);
        if (gFuncionLlamadora == "agregarPersonaFiltro10")
        {
            indicadorCheckbox = 1;    
        }
        else
        {
            indicadorCheckbox = 0;
        }
        indicadorError = validarPersona(indicadorCheckbox);
		if (indicadorError == 0)
		{
			guardarPersona(indicadorCheckbox);
		}
		else
		{
			$j("#guardarPersona10").attr("disabled", false).html(gImagenAnterior);
			
			mensajesUsuario =
				"<div class='alert alert-danger alert-dismissible'>" +
					"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
					"<strong>Estimado usuario uno o más datos contienen errores, por favor verifique</strong>" +
				"</div>"; 			
			
			$j("#mensajesUsuario30").html(mensajesUsuario);
			window.scrollTo(0, 0);           
		}
    });

    $j('#nombreCliente100').autocomplete(
    {
        source: gClientes,
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
        source: gCaptadores,
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
            mostrarAgenda("Citas", "");
        } 
        else if (gFuncionLlamadora == "personaAgenda51")
        {
            filtro = filtrarAgenda(gIdPersonaActual);  
            mostrarAgenda(filtro, "");
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
        window.scrollTo(0, 0);  
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
        mostrarAgenda("Citas", "");
    });

    $j("#personaAgenda51").autocomplete(
    {
        source: gPersonas,
        select: function( event, ui ) 
        {   
            gIdPersonaActual = ui.item.id;    
            $j("#busquedaAgenda51").addClass('noVer');
            $j("#cerrarBusquedaAgenda10").addClass('noVer');
            $j("#busquedaAgenda10").addClass('noVer');
            gFuncionLlamadora = "personaAgenda51";
            gBotonCerrarLlamador = "#cerrarAgendaFiltrada10";
            filtro = filtrarAgenda(gIdPersonaActual);  
            mostrarAgenda(filtro, "");
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

    $j("#personas40").click(function()
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

        $j("#busquedaPersonas52").removeClass('noVer');
        $j("#cerrarBusquedaPersonas10").removeClass('noVer');
        $j("#busquedaPersonas10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j("#cerrarBusquedaPersonas10").click(function()
    {
        $j("#busquedaPersonas52").addClass('noVer');
        $j("#busquedaPorPersona52").val("");
        $j("#busquedaGrupos52").val("Todos");
        $j("#cerrarBusquedaPersonas10").addClass('noVer');
        $j("#busquedaPersonas10").addClass('noVer');
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

    $j("#busquedaPorPersona52").autocomplete(
    {
        source: gPersonas,
        select: function( event, ui ) 
        {   
            gFuncionLlamadora = "busquedaPorPersona52";
            gIdPersonaActual = ui.item.id;    
            $j("#busquedaPersonas52").addClass('noVer');
            $j("#cerrarBusquedaPersonas10").addClass('noVer');
            $j("#busquedaPersonas10").addClass('noVer');
            $j("#cerrarBusquedaPorPersona10").removeClass('noVer');
            $j("#guardarCambiosPersona10").removeClass('noVer');
            if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Cliente"))
            {                   
                $j("#preferencias10").removeClass('noVer');
            }
            $j("#agregarPersonas110").removeClass('noVer');
            if ($j("#grupoRol110").hasClass('noVer') === false)
            {
                $j("#grupoRol110").addClass('noVer');
            }
            cargarDatosPersona();
        }
    });

    $j("#cerrarBusquedaPorPersona10").click(function()
    {
        $j("#cerrarBusquedaPorPersona10").addClass('noVer');
        $j("#guardarCambiosPersona10").addClass('noVer');
        if ($j("#preferencias10").hasClass('noVer') === false)
        {
                $j("#preferencias10").addClass('noVer');            
        }
        $j("#agregarPersonas110").addClass('noVer');
        $j("#busquedaPorPersona52").val("");
        borrarMensajesAnteriores();
        $j("#busquedaPersonas52").removeClass('noVer');
        $j("#cerrarBusquedaPersonas10").removeClass('noVer');
        $j("#busquedaPersonas10").removeClass('noVer');
        window.scrollTo(0, 0);        
    });

    $j("#eliminarPersona110").click(function()
    {
        var r= confirm('¿Está seguro de que desea eliminar este usuario');
        if (r == false)
        {
            return false;
        }
        gImagenAnterior = $j("#eliminarPersona110").html();  
        $j("#eliminarPersona110").attr("disabled", true).html(gImagenEspere);
        eliminarPersona()
    });
	
    $j("#guardarCambiosPersona10").click(function()
    {
        gImagenAnterior = $j("#guardarCambiosPersona10").html();  
        $j("#guardarCambiosPersona10").attr("disabled", true).html(gImagenEspere);
        indicadorCheckbox = 1;
        indicadorError = validarPersona(indicadorCheckbox);
		if (indicadorError == 0)
		{
			guardarCambiosPersona(indicadorCheckbox);
		}
		else
		{
			$j("#guardarCambiosPersona10").attr("disabled", false).html(gImagenAnterior);
			mensajesUsuario =
				"<div class='alert alert-danger alert-dismissible'>" +
					"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
					"<strong>Estimado usuario uno o más datos contienen errores, por favor verifique</strong>" +
				"</div>"; 			
			
			$j("#mensajesUsuario30").html(mensajesUsuario);
			window.scrollTo(0, 0);           
		}
    });
    
    $j("#preferencias10").click(function()
    {
		mostrarPreferencias();
        if ($j("#cerrarBusquedaPorPersona10").hasClass('noVer') === false)
        {
            $j("#cerrarBusquedaPorPersona10").addClass('noVer');
        }
        if ($j("#cerrarVerPersona10").hasClass('noVer') === false)
        {
            $j("#cerrarVerPersona10").addClass('noVer');
        }
        $j("#guardarCambiosPersona10").addClass('noVer');
        $j("#preferencias10").addClass('noVer');            
        $j("#agregarPersonas110").addClass('noVer');
        $j("#preferencias111").removeClass("noVer");
        $j("#cerrarPreferencias10").removeClass("noVer");
        $j("#agregarPreferencia10").removeClass("noVer");
        window.scrollTo(0, 0); 
	});

    $j("#cerrarPreferencias10").click(function()
    {
        borrarMensajesAnteriores();
        $j("#preferencias111").addClass("noVer");
        $j("#cerrarPreferencias10").addClass("noVer");
        $j("#agregarPreferencia10").addClass("noVer");
        if (gFuncionLlamadora == "busquedaPorPersona52")
        {
            $j("#cerrarBusquedaPorPersona10").removeClass('noVer');
        }
        else
        {
            $j("#cerrarVerPersona10").removeClass('noVer');
        }
        $j("#guardarCambiosPersona10").removeClass('noVer');
        $j("#preferencias10").removeClass('noVer');
        $j("#agregarPersonas110").removeClass('noVer');
        window.scrollTo(0, 0);  
	});

    $j("#agregarPreferencia10").click(function()
    {
        borrarMensajesAnteriores();
        $j("#preferencias111").addClass("noVer");
        $j("#agregarPreferencia10").addClass("noVer");
        $j("#cerrarPreferencias10").addClass("noVer");
        tituloAgregarPreferencia = 
            "Agregar preferencia del cliente " + 
            gUsuarios[gIdPersonaActual].first_name + " " + gUsuarios[gIdPersonaActual].last_name; 
        $j("#tituloAgregarPreferencia112").html(tituloAgregarPreferencia);
        $j("#coordenadas112").val("");
        $j("#address").val("");
        $j(".map-coordinate").val("10.234146,-68.00510199999997");

        $j('.map-wrapper').each(function(){
            mapField.init($j(this));
        });

        $j("#agregarPreferencia112").removeClass("noVer");
        $j("#cerrarAgregarPreferencia10").removeClass("noVer");
        $j("#guardarPreferencia10").removeClass("noVer");
        window.scrollTo(0, 0);  
    });

    $j("#cerrarAgregarPreferencia10").click(function()
    {
        $j("#agregarPreferencia112").addClass("noVer");
        $j("#cerrarAgregarPreferencia10").addClass("noVer");
        $j("#guardarPreferencia10").addClass("noVer");
        borrarMensajesAnteriores();
        if (gFuncionLlamadora == "agregarPersonaFiltro10")
        {
            filtroPersonas = $j("#busquedaGrupos52").val();
            $j("#cerrarPersonasFiltradas10").removeClass('noVer');
            $j("#agregarPersonaFiltro10").removeClass('noVer');
            mostrarPersonas(filtroPersonas);
            $j("#listaPersonas105").removeClass('noVer');
        }
        else
        {
            $j("#preferencias111").removeClass("noVer");
            $j("#cerrarPreferencias10").removeClass("noVer");
            $j("#agregarPreferencia10").removeClass("noVer");
        }
        window.scrollTo(0, 0);  
    });

    $j("#guardarPreferencia10").click(function()
    {
        var indicadorError = validarPreferencia();
        if (indicadorError == 0)
        {
            gImagenAnterior = $j("#guardarPreferencia10").html();  
            $j("#guardarPreferencia10").attr("disabled", true).html(gImagenEspere);
            guardarPreferencia();
        }
    });

    $j("#detallePreferencias111").on("click", ".modificarPreferencia111", function()
    {    
        borrarMensajesAnteriores();
        gClavePreferencia = $j(this).attr('id').substring(24);
        cargarCamposPreferencia();
        $j("#preferencias111").addClass("noVer");
        $j("#cerrarPreferencias10").addClass("noVer");
        $j("#agregarPreferencia10").addClass("noVer");
        tituloAgregarPreferencia = 
            "Modificar preferencia del cliente " + 
            gUsuarios[gIdPersonaActual].first_name + " " + gUsuarios[gIdPersonaActual].last_name;
        $j("#tituloAgregarPreferencia112").html(tituloAgregarPreferencia);
        $j("#agregarPreferencia112").removeClass("noVer"); 
        $j("#cerrarModificarPreferencia10").removeClass("noVer");  
        $j("#guardarCambiosPreferencia10").removeClass("noVer");        
    });

    $j("#cerrarModificarPreferencia10").click(function()
    {    
        borrarMensajesAnteriores();
        limpiarCamposPreferencia();
        $j("#agregarPreferencia112").addClass("noVer"); 
        $j("#cerrarModificarPreferencia10").addClass("noVer");  
        $j("#guardarCambiosPreferencia10").addClass("noVer");        
        $j("#preferencias111").removeClass("noVer");
        $j("#cerrarPreferencias10").removeClass("noVer");
        $j("#agregarPreferencia10").removeClass("noVer");
        window.scrollTo(0, 0);  
    });

    $j("#guardarCambiosPreferencia10").click(function()
    {
        var indicadorError = validarPreferencia();
        if (indicadorError == 0)
        {
            gImagenAnterior = $j("#guardarCambiosPreferencia10").html();  
            $j("#guardarCambiosPreferencia10").attr("disabled", true).html(gImagenEspere);
            guardarCambiosPreferencia();
        }
    });

    $j("#detallePreferencias111").on("click", ".eliminarPreferencia111", function()
    {   
        var r= confirm('¿Está seguro de que desea eliminar esta preferencia');
        if (r == false)
        {
            return false;
        } 
        idPreferencia = $j(this).attr("id");
        gImagenAnterior = $j(this).html();  
        $j(this).attr("disabled", true).html(gImagenEspere);
        eliminarPreferencia(idPreferencia);
    });
	
	$j("#busquedaPersonas10").click(function()
	{
        filtroPersonas = $j("#busquedaGrupos52").val();
		permisoFiltroPersonas = verificarFiltroPersonas(filtroPersonas);
		if (permisoFiltroPersonas == true)
		{
			$j("#busquedaPersonas52").addClass('noVer');
			$j("#cerrarBusquedaPersonas10").addClass('noVer');
			$j("#busquedaPersonas10").addClass('noVer');
			$j("#cerrarPersonasFiltradas10").removeClass('noVer');
			$j("#agregarPersonaFiltro10").removeClass('noVer');
            mostrarPersonas(filtroPersonas);
            $j("#listaPersonas105").removeClass('noVer');
            window.scrollTo(0, 0); 
		}
		else
		{
			alert("Estimado usuario usted no está autorizado a visualizar la información del grupo de personas seleccionado");
		}
	});
	
	$j("#cerrarPersonasFiltradas10").click(function()
	{
        borrarMensajesAnteriores();
		$j("#busquedaGrupos52").val("Todos");
		$j("#cerrarPersonasFiltradas10").addClass('noVer');
        $j("#tituloListaPersonas105").html("");
        $j("#detalleListaPersonas105").html("");
		$j("#listaPersonas105").addClass('noVer');
        $j("#agregarPersonaFiltro10").addClass('noVer');
		$j("#busquedaPersonas52").removeClass('noVer');
        $j("#cerrarBusquedaPersonas10").removeClass('noVer');
        $j("#busquedaPersonas10").removeClass('noVer');
        window.scrollTo(0, 0);  
	});

    $j("#detalleListaPersonas105").on("click", ".verPersona105", function()
    {
        gFuncionLlamadora = "verPersona105";
        gIdPersonaActual = $j(this).attr('id').substring(14);
		$j("#listaPersonas105").addClass('noVer');
		$j("#cerrarPersonasFiltradas10").addClass('noVer');
        $j("#agregarPersonaFiltro10").addClass('noVer');
        $j("#cerrarVerPersona10").removeClass('noVer');
        $j("#guardarCambiosPersona10").removeClass('noVer');
        if (gUsuarios[gIdPersonaActual].CRMdapliw_roles.includes("Cliente"))
        {                   
            $j("#preferencias10").removeClass('noVer');
        }
        activarRoles()
        if ($j("#grupoRol110").hasClass('noVer') === false)
        {
            $j("#grupoRol110").addClass('noVer');
        }
        $j("#agregarPersonas110").removeClass('noVer');
        cargarDatosPersona();
        window.scrollTo(0, 0); 
    });

    $j("#cerrarVerPersona10").click(function()
    {
        borrarMensajesAnteriores();
        $j("#cerrarVerPersona10").addClass('noVer');
        $j("#guardarCambiosPersona10").addClass('noVer');
        if ($j("#preferencias10").hasClass('noVer') === false)
        {
            $j("#preferencias10").addClass('noVer');            
        }
        $j("#agregarPersonas110").addClass('noVer');
        filtroPersonas = $j("#busquedaGrupos52").val();
        $j("#cerrarPersonasFiltradas10").removeClass('noVer');
        $j("#agregarPersonaFiltro10").removeClass('noVer');
        mostrarPersonas(filtroPersonas);
        $j("#listaPersonas105").removeClass('noVer');
        window.scrollTo(0, 0);  
    });

    $j("#agregarPersonaFiltro10").click(function()
    {     
        gFuncionLlamadora = "agregarPersonaFiltro10";  
        $j("#cerrarPersonasFiltradas10").addClass('noVer');
		$j("#agregarPersonaFiltro10").addClass('noVer');
        $j("#listaPersonas105").addClass('noVer');
        inicializarPersonas();
        activarRoles()
        if ($j("#grupoRol110").hasClass('noVer') === false)
        {
            $j("#grupoRol110").addClass('noVer');
        }
        if ($j("#eliminarPersona110").hasClass('noVer') === false)
        {
            $j("#eliminarPersona110").addClass('noVer');
        }
        $j("#agregarPersonas110").removeClass("noVer");
        $j("#cerrarAgregarPersonaFiltro10").removeClass('noVer');
        $j("#guardarPersona10").removeClass("noVer");
        window.scrollTo(0, 0);
    });

    $j("#cerrarAgregarPersonaFiltro10").click(function()
    {       
        borrarMensajesAnteriores();
        $j("#agregarPersonas110").addClass("noVer");
        $j("#cerrarAgregarPersonaFiltro10").addClass('noVer');
        $j("#guardarPersona10").addClass("noVer");
        $j("#cerrarPersonasFiltradas10").removeClass('noVer');
		$j("#agregarPersonaFiltro10").removeClass('noVer');
        $j("#listaPersonas105").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('.map-wrapper').each(function(){
        mapField.init($j(this));
    });

    $j("#ubicacion50").autocomplete(
    {
        source: gDireccionesUnico,
        select: function( event, ui ) 
        {   
        }
    });

    $j("#email10").click(function()
    {    
        gImagenAnterior = $j("#email10").html();  
        $j("#email10").attr("disabled", true).html(gImagenEspere); 
        enviarEmailPropiedades();        
    });

    $j("#enviarA60").autocomplete(
    {
        source: gClientes,
        select: function( event, ui ) 
        {   
            gIdPersonaActual = ui.item.id;  
            $j("#alEmail60").val(gUsuarios[gIdPersonaActual].email);  
        }
    });

});
</script>