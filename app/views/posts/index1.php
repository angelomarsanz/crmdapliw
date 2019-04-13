<div class="container">
    <?php if (isset($matrizBienes) && isset($datosBienes)): ?>
        <!-- div con sufijo 00 -->
        <div class="container" style="position: fixed;" id="testFunction00">
        Angel
        </div>

        <!-- div con sufijo 10 -->
        <div class="container" id="menuCrm10">
            <nav class="fixed-bottom navbar-dark" style="text-align: center; background-color:#085b9e; opacity: 0.5;" id="opcionesMenu10">			

                <a href=<?= mvc_public_url(array("controller" => "posts")) ?> class="btn btn-link" id="inicioCrm10" title="Inicio CRM">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/home.svg" ?>
                    alt="Inicio CRM" class="iconoMenu">
                </a>

                <a href=<?= mvc_public_url(array("controller" => "posts")) ?> class="btn btn-link noVer" id="cerrarBusquedaPropiedades10" title="Cerrar">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?>
                    alt="Cerrar búsqueda propiedades" class="iconoMenu">
                </a>

				<button title="Ejecutar búsqueda" class="btn btn-link noVer" id="busquedaPropiedades10">
					<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
					alt="Ejecutar búsqueda propiedades" class="iconoMenu">
				</button>

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarPropiedadesFiltradas10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar propiedades filtradas" class="iconoMenu">
                </button>

				<a href=<?= mvc_public_url(array("controller" => "submit-property")) ?> class="btn btn-link noVer" id="publicarPropiedad10" title="Publicar propiedad">
					<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/plus.svg" ?>
					alt="Publicar propiedad" class="iconoMenu">
				</a>

                <a href=<?= mvc_public_url(array("controller" => "posts")) ?> class="btn btn-link noVer" id="cerrarBusquedaAgenda10" title="Cerrar">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?>
                    alt="Cerrar búsqueda agenda" class="iconoMenu">
                </a>

				<button title="Ejecutar búsqueda" class="btn btn-link noVer" id="busquedaAgenda10">
					<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/magnifying-glass.svg" ?>
					alt="Ejecutar búsqueda agenda" class="iconoMenu">
				</button>

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgendaFiltrada10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar agenda filtrada" class="iconoMenu">
                </button>

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarAgenda10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar agenda" class="iconoMenu">
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
                    alt="Agregar actividad" class="iconoMenu">
                </button>

                <button title="Cerrar" class="btn btn-link noVer" id="cerrarPersonas10">
                    <img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/x.svg" ?> 
                    alt="Cerrar personas" class="iconoMenu">
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
                    alt="Guardar persona" class="iconoMenu">
                </button>
				
				<!-- Inicio grupo botones que ya no se estàn usando -->
				          					
					<button title="Otras opciones" class="btn btn-link noVer" id="otrasOpciones10">
						<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) . "crmdapliw/app/public/images/grid-two-up.svg" ?>
						alt="Otras opciones" class="iconoMenu">
					</button>
										
				<!-- Fin botones que ya no se están usando -->

            </nav>
        </div>

        <!-- div con sufijo 20 -->
        <div class="container" id="tituloCrm20">
			<div class="row">
				<div class="col-md-4">
					<h1 class="letraAzul">CRM</h1>
				</div>
				<div class="col-md-4" id="grupoVista20">
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
						<div id="mensajesVistas20" class="mensajesUsuarios"></div>
					</div>
				</div>
                <div class="col-md-4 text-center noVer" id="notificaciones20">
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
            <br />
            <br />
            <br />
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
            <?php
                for ($i = 1; $i <= 100; $i++) 
                {
                    echo "<br />";
                }
            ?>
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
            <?php
                for ($i = 1; $i <= 100; $i++) 
                {
                    echo "<br />";
                }
            ?>
        </div> 
 
        <!-- div con sufijo 51 -->
        <div class="container formulario noVer" id="busquedaAgenda51">
            <div class="row">
                <div class="col-md-4">              
					<p class="letraAzul">Agenda</p>
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
            <?php
                for ($i = 1; $i <= 100; $i++) 
                {
                    echo "<br />";
                }
            ?>
        </div>
				 
        <!-- div con sufijo 60 -->
        <div class="container formulario noVer" id="bienes60">
            <h2 class="letraAzul" id="titulo60"></h2>
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
								<div class='input-group mb-3 noVer' id='actividadesAdministrador90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='Administrador90'>Actividad</label> 
									</div>
									<select class='custom-select' id='Administrador90'> 
										<option selected></option> 
										<option value="Agregar datos del propietario">Agregar datos del propietario</option> 
                                        <option value="Confirmar cita para mostrar propiedad">
                                            Confirmar cita para mostrar propiedad</option>
                                        <option value="Coordinar actividades para mostrar propiedad">Coordinar actividades para mostrar propiedad</option>
										<option value="Coordinar elaboración de cartel de venta">Coordinar elaboración de cartel de venta</option>
										<option value="Coordinar elaboración de pendón">Coordinar elaboración de pendón</option>
										<option value="Coordinar elaboración de valla">Coordinar elaboración de valla</option>
										<option value="Coordinar labores de limpieza del inmueble">Coordinar labores de limpieza del inmueble</option>
										<option value="Coordinar pago de condominio">Coordinar pago de condominio</option>
										<option value="Coordinar pago de servicios público">Coordinar pago de servicios públicos</option>
										<option value="Coordinar publicidad en la prensa">Coordinar publicidad en la prensa</option>
										<option value="Coordinar publicidad en la radio">Coordinar publicidad en la radio</option>
										<option value="Coordinar publicidad en la tv">Coordinar publicidad en la tv</option>
										<option value="Coordinar publicidad en las redes sociales">Coordinar publicidad en las redes sociales</option>
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
										<option value="Reunión con el propietario">Reunión con el propietario</option>
										<option value="Se firmó la opción compra-venta">Se firmó la opción compra-venta</option>
										<option value="Solicitar documentos al propietario">Solicitar documentos al propietario</option> 
                                        <option value="Solicitar cita para mostrar propiedad">Solicitar cita para mostrar propiedad</option>               
										<option value="Subir documentos escaneados al servidor">Subir documentos escaneados al servidor</option>                   
										<option value="Visitar a cliente potencial">Visitar a cliente potencial</option>
									</select> 
								</div>

								<div class='input-group mb-3 noVer' id='actividadesGestorCaptadorPromotor90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='GestorCaptadorPromotor90'>Actividad</label> 
									</div>
									<select class='custom-select' id='GestorCaptadorPromotor90'> 
										<option selected></option> 
										<option value="Agregar datos del propietario">Agregar datos del propietario</option> 
                                        <option value="Confirmar cita para mostrar propiedad">
                                            Confirmar cita para mostrar propiedad</option>
                                        <option value="Coordinar actividades para mostrar propiedad">Coordinar actividades para mostrar propiedad</option>
										<option value="Coordinar elaboración de cartel de venta">Coordinar elaboración de cartel de venta</option>
										<option value="Coordinar elaboración de pendón">Coordinar elaboración de pendón</option>
										<option value="Coordinar elaboración de valla">Coordinar elaboración de valla</option>
										<option value="Coordinar labores de limpieza del inmueble">Coordinar labores de limpieza del inmueble</option>
										<option value="Coordinar pago de condominio">Coordinar pago de condominio</option>
										<option value="Coordinar pago de servicios público">Coordinar pago de servicios públicos</option>
										<option value="Coordinar publicidad en la prensa">Coordinar publicidad en la prensa</option>
										<option value="Coordinar publicidad en la radio">Coordinar publicidad en la radio</option>
										<option value="Coordinar publicidad en la tv">Coordinar publicidad en la tv</option>
										<option value="Coordinar publicidad en las redes sociales">Coordinar publicidad en las redes sociales</option>
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
										<option value="Reunión con el propietario">Reunión con el propietario</option>
										<option value="Se firmó la opción compra-venta">Se firmó la opción compra-venta</option>
										<option value="Solicitar documentos al propietario">Solicitar documentos al propietario</option>
                                        <option value="Solicitar cita para mostrar propiedad">Solicitar cita para mostrar propiedad</option>                   
										<option value="Subir documentos escaneados al servidor">Subir documentos escaneados al servidor</option>                   
										<option value="Visitar a cliente potencial">Visitar a cliente potencial</option>
									</select> 
								</div>

								<div class='input-group mb-3 noVer' id='actividadesGestorCaptador90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='GestorCaptador90'>Actividad</label> 
									</div>
									<select class='custom-select' id='GestorCaptador90'> 
										<option selected></option> 
										<option value="Agregar datos del propietario">Agregar datos del propietario</option> 
                                        <option value="Confirmar cita para mostrar propiedad">
                                            Confirmar cita para mostrar propiedad</option>
                                        <option value="Coordinar actividades para mostrar propiedad">Coordinar actividades para mostrar propiedad</option>
										<option value="Coordinar elaboración de cartel de venta">Coordinar elaboración de cartel de venta</option>
										<option value="Coordinar elaboración de pendón">Coordinar elaboración de pendón</option>
										<option value="Coordinar elaboración de valla">Coordinar elaboración de valla</option>
										<option value="Coordinar labores de limpieza del inmueble">Coordinar labores de limpieza del inmueble</option>
										<option value="Coordinar pago de condominio">Coordinar pago de condominio</option>
										<option value="Coordinar pago de servicios público">Coordinar pago de servicios públicos</option>
										<option value="Coordinar publicidad en la prensa">Coordinar publicidad en la prensa</option>
										<option value="Coordinar publicidad en la radio">Coordinar publicidad en la radio</option>
										<option value="Coordinar publicidad en la tv">Coordinar publicidad en la tv</option>
										<option value="Coordinar publicidad en las redes sociales">Coordinar publicidad en las redes sociales</option>
										<option value="Coordinar reparaciones del inmueble">Coordinar reparaciones del inmueble</option>
										<option value="Desinstalar cartel de venta">Desinstalar cartel de venta</option>
										<option value="El propietario desistió de la venta">El propietario desistió de la venta</option>
										<option value="El propietario vendió el inmueble">El propietario vendió el inmueble</option>
										<option value="Firma compromiso de negocio con el propietario">Firma compromiso de negocio con el propietario</option> 
										<option value="Firma documento de venta">Firma documento de venta</option> 
										<option value="Firma opción compra-venta">Firma opción compra-venta</option> 
										<option value="Instalación del cartel de venta">Instalación del cartel de venta</option>
										<option value="Llamar a propietario">Llamar a propietario</option>
										<option value="Ofrecer inmueble a clientes potenciales">Ofrecer inmueble a clientes potenciales</option>
										<option value="Preparación del documento de venta">Preparación del documento de venta</option>
										<option value="Preparación de la opción compra-venta">Preparación de la opción compra-venta</option>
										<option value="Reunión con el propietario">Reunión con el propietario</option>
										<option value="Se firmó la opción compra-venta">Se firmó la opción compra-venta</option>
										<option value="Solicitar documentos al propietario">Solicitar documentos al propietario</option>
										<option value="Subir documentos escaneados al servidor">Subir documentos escaneados al servidor</option>                   
									</select>
								</div>

								<div class='input-group mb-3 noVer' id='actividadesGestorPromotor90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='GestorPromotor90'>Actividad</label> 
									</div>
									<select class='custom-select' id='GestorPromotor90'> 
										<option selected></option> 
                                        <option value="Confirmar cita para mostrar propiedad">
                                            Confirmar cita para mostrar propiedad</option>
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
										<option value="Reunión con el propietario">Reunión con el propietario</option>
										<option value="Se firmó la opción compra-venta">Se firmó la opción compra-venta</option>
										<option value="Solicitar documentos al propietario">Solicitar documentos al propietario</option>
                                        <option value="Solicitar cita para mostrar propiedad">Solicitar cita para mostrar propiedad</option>                   
										<option value="Subir documentos escaneados al servidor">Subir documentos escaneados al servidor</option>                   
										<option value="Visitar a cliente potencial">Visitar a cliente potencial</option>
									</select> 
								</div>

								<div class='input-group mb-3 noVer' id='actividadesGestor90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='Gestor90'>Actividad</label> 
									</div>
									<select class='custom-select' id='Gestor90'> 
										<option selected></option> 
                                        <option value="Confirmar cita para mostrar propiedad">
                                            Confirmar cita para mostrar propiedad</option>
                                        <option value="Coordinar actividades para mostrar propiedad">Coordinar actividades para mostrar propiedad</option>
										<option value="El propietario desistió de la venta">El propietario desistió de la venta</option>
										<option value="El propietario vendió el inmueble">El propietario vendió el inmueble</option>
										<option value="Firma compromiso de negocio con el propietario">Firma compromiso de negocio con el propietario</option> 
										<option value="Firma documento de venta">Firma documento de venta</option> 
										<option value="Firma opción compra-venta">Firma opción compra-venta</option> 
										<option value="Llamar a cliente potencial">Llamar a cliente potencial</option>
										<option value="Llamar a propietario">Llamar a propietario</option>
										<option value="Preparación del documento de venta">Preparación del documento de venta</option>
										<option value="Preparación de la opción compra-venta">Preparación de la opción compra-venta</option>
										<option value="Reunión con el propietario">Reunión con el propietario</option>
										<option value="Se firmó la opción compra-venta">Se firmó la opción compra-venta</option>
									</select> 
								</div>

								<div class='input-group mb-3 noVer' id='actividadesCaptadorPromotor90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='CaptadorPromotor90'>Actividad</label> 
									</div>
									<select class='custom-select' id='CaptadorPromotor90'> 
										<option selected></option> 
										<option value="Agregar datos del propietario">Agregar datos del propietario</option> 
                                        <option value="Confirmar cita para mostrar propiedad">
                                            Confirmar cita para mostrar propiedad</option>
										<option value="Coordinar elaboración de cartel de venta">Coordinar elaboración de cartel de venta</option>
										<option value="Coordinar elaboración de pendón">Coordinar elaboración de pendón</option>
										<option value="Coordinar elaboración de valla">Coordinar elaboración de valla</option>
										<option value="Coordinar labores de limpieza del inmueble">Coordinar labores de limpieza del inmueble</option>
										<option value="Coordinar pago de condominio">Coordinar pago de condominio</option>
										<option value="Coordinar pago de servicios público">Coordinar pago de servicios públicos</option>
										<option value="Coordinar publicidad en la prensa">Coordinar publicidad en la prensa</option>
										<option value="Coordinar publicidad en la radio">Coordinar publicidad en la radio</option>
										<option value="Coordinar publicidad en la tv">Coordinar publicidad en la tv</option>
										<option value="Coordinar publicidad en las redes sociales">Coordinar publicidad en las redes sociales</option>
										<option value="Coordinar reparaciones del inmueble">Coordinar reparaciones del inmueble</option>
										<option value="Desinstalar cartel de venta">Desinstalar cartel de venta</option>
										<option value="El propietario desistió de la venta">El propietario desistió de la venta</option>
										<option value="El propietario vendió el inmueble">El propietario vendió el inmueble</option>
										<option value="Llamar a propietario">Llamar a propietario</option>
										<option value="Llamar a cliente potencial">Llamar a cliente potencial</option>
										<option value="Ofrecer inmueble a clientes potenciales">Ofrecer inmueble a clientes potenciales</option>
										<option value="Reunión con el propietario">Reunión con el propietario</option>
										<option value="Solicitar documentos al propietario">Solicitar documentos al propietario</option>                   
										<option value="Subir documentos escaneados al servidor">Subir documentos escaneados al servidor</option>
                                        <option value="Solicitar cita para mostrar propiedad">Solicitar cita para mostrar propiedad</option>
										<option value="Visitar a cliente potencial">Visitar a cliente potencial</option>
									</select> 
								</div>

								<div class='input-group mb-3 noVer' id='actividadesCaptador90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='Captador90'>Actividad</label> 
									</div>
									<select class='custom-select' id='Captador90'> 
										<option selected></option> 
										<option value="Agregar datos del propietario">Agregar datos del propietario</option> 
                                        <option value="Confirmar cita para mostrar propiedad">
                                            Confirmar cita para mostrar propiedad</option>
										<option value="Coordinar elaboración de cartel de venta">Coordinar elaboración de cartel de venta</option>
										<option value="Coordinar elaboración de pendón">Coordinar elaboración de pendón</option>
										<option value="Coordinar elaboración de valla">Coordinar elaboración de valla</option>
										<option value="Coordinar labores de limpieza del inmueble">Coordinar labores de limpieza del inmueble</option>
										<option value="Coordinar pago de condominio">Coordinar pago de condominio</option>
										<option value="Coordinar pago de servicios público">Coordinar pago de servicios públicos</option>
										<option value="Coordinar publicidad en la prensa">Coordinar publicidad en la prensa</option>
										<option value="Coordinar publicidad en la radio">Coordinar publicidad en la radio</option>
										<option value="Coordinar publicidad en la tv">Coordinar publicidad en la tv</option>
										<option value="Coordinar publicidad en las redes sociales">Coordinar publicidad en las redes sociales</option>
										<option value="Coordinar reparaciones del inmueble">Coordinar reparaciones del inmueble</option>
										<option value="Desinstalar cartel de venta">Desinstalar cartel de venta</option>
										<option value="El propietario desistió de la venta">El propietario desistió de la venta</option>
										<option value="El propietario vendió el inmueble">El propietario vendió el inmueble</option>
										<option value="Llamar a propietario">Llamar a propietario</option>
										<option value="Reunión con el propietario">Reunión con el propietario</option>
										<option value="Solicitar documentos al propietario">Solicitar documentos al propietario</option>                   
										<option value="Subir documentos escaneados al servidor">Subir documentos escaneados al servidor</option>                   
									</select> 
								</div>

								<div class='input-group mb-3 noVer' id='actividadesPromotor90'>
									<div class='input-group-prepend'>
										<label class='input-group-text' for='Promotor90'>Actividad</label> 
									</div>
									<select class='custom-select' id='Promotor90'> 
										<option selected></option> 
										<option value="Llamar a cliente potencial">Llamar a cliente potencial</option>
										<option value="Ofrecer inmueble a clientes potenciales">Ofrecer inmueble a clientes potenciales</option>
                                        <option value="Solicitar cita para mostrar propiedad">Solicitar cita para mostrar propiedad</option>
										<option value="Visitar a cliente potencial">Visitar a cliente potencial</option>
									</select> 
								</div>

                                <div class="mensajesUsuario" id="mensajesActividad90"></div>

							</div>
						</div> 
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group"> 
									<label for="informacionAdicional90">Información adicional</label> 
									<input type="text" class="form-control" id="informacionAdicional90"> 
								</div>
                                <div class="mensajesUsuario" id="mensajesInformacion90"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12" id="fechaPlanificada90">								
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
							<input type="text" class="form-control" id="celular110"> 
						</div>
						<div id="mensajesCelular110" class="mensajesUsuario"></div> 

						<div class="form-group"> 
							<label for="telefonoFijo110">Teléfono fijo</label> 
							<input type="text" class="form-control" id="telefonoFijo110"> 
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
			<?php
				for ($i = 1; $i <= 100; $i++) 
				{
					echo "<br />";
				}
			?>
		</div>
    <?php else: ?>
        <!-- div con sufijo 10000 -->
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
</div>

<script>
// Variables globales
var gBienes = <?= json_encode($bienes) ?>;
var gMatrizBienes = <?= json_encode($matrizBienes) ?>;
var gBienesAutocomplete = <?= json_encode($bienesAutocomplete) ?>;
var gDatosBienes = <?= json_encode($datosBienes) ?>;
var gIdUsuario = <?= $idUsuario ?>;
var gNombreUsuario = "<?= $nombreUsuario ?>";
var gRoles = <?= json_encode($roles) ?>;
var gPermiso = <?= $permiso ?>;
var gCadenaRoles = "<?= $cadenaRoles ?>";
var gUsuarios = <?= json_encode($usuarios) ?>;
var gPersonasAsc = <?= json_encode($personasAsc) ?>;
var gIdPostActual = "";
var gPosicionAnterior = "";
var gVistaPreferida = "<?= $vistaPreferida ?>";
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

var gBotonCerrar = "";
var gNotificaciones = <?= $notificaciones ?>;

// Funciones

function testFunction()
{
    alert("Hola Ángel!");
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
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se actualiza la preferencia de vista</strong>" +
        "</div>";

    borrarMensajesAnteriores();
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
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";
				
			borrarMensajesAnteriores();
            $j("#mensajesVistas20").html(mensajesUsuario);
        } 
        else 
        {
            mensajesUsuario =
                "<div class='alert alert-danger alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>"; 

			borrarMensajesAnteriores();
            $j("#mensajesVistas20").html(mensajesUsuario);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) 
    {
        mensajesUsuario =
            "<div class='alert alert-danger alert-dismissible'>" +
                "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                "<strong> Estimado usuario ocurrió una falla en el servidor y no se pudo actualizar la preferencia de vista !</strong>" +
            "</div>"; 

		borrarMensajesAnteriores();
		$j("#mensajesVistas20").html(mensajesUsuario);
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
	
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se busca la información</strong>" +
        "</div>";
		
	borrarMensajesAnteriores();

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
				$j.each(resultado.bienesNotificaciones, function(clave1, datos1)  
				{
					$j.each(gDatosBienes[datos1].CRMdapliw_actividad_agenda, function(clave2, datos2)  
					{
						if (datos2.notificacion == "No vista" && datos2.idEjecutor == gIdUsuario)						
						{
							gDatosBienes[datos1].CRMdapliw_actividad_agenda[clave2].notificacion = "Vista";
						}
					});  
                });        
					
				borrarMensajesAnteriores();
                $j("#agenda80").html(resultado.agenda);
				$j("#agenda80").removeClass("noVer");
				$j(gBotonCerrar).removeClass("noVer");
				$j("#agregarActividad10").removeClass("noVer");
				window.scrollTo(0, 0);           
			} 
			else 
			{
				mensajesUsuario =
				"<div class='alert alert-danger alert-dismissible'>" +
					"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
					"<strong>No se pudo acceder a la información</strong>" +
				"</div>"; 

				borrarMensajesAnteriores();

				$j("#mensajesUsuario30").html(mensajesUsuario);
				window.scrollTo(0, 0);        
            }
		})
		.fail(function(jqXHR, textStatus, errorThrown) 
		{
			mensajesUsuario =
				"<div class='alert alert-danger alert-dismissible'>" +
					"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
					"<strong>¡ Ocurrió un error en el servidor. No se pudo acceder a la información</strong>" +
				"</div>"; 

				borrarMensajesAnteriores();

				$j("#mensajesUsuario30").html(mensajesUsuario);
				window.scrollTo(0, 0);    
		});
	}
	else
	{
		borrarMensajesAnteriores();
        $j("#agenda80").html(resultado.agenda);
        $j("#ano80").val(gAnoActual);
        $j("#mes80").val(gMesActual);
        $j("#dia80").val(gDiaActual);
		$j("#agenda80").removeClass("noVer");
		$j(gBotonCerrar).removeClass("noVer");
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
						"<th scope='col' class='text-center' style='width:25%;'>Propiedad</th>" +
						"<th scope='col' class='text-center' style='width:25%;'>Actividad</th>" +
						"<th scope='col' class='text-center' style='width:20%;'>Fecha</th>" +
						"<th scope='col' class='text-center' style='width:10%;'></th>" +
					"</tr>" +
				"</thead>" +
				"<tbody>";
				
	var pieTabla = 
				"</tbody>" +
			"</table>" +
    	"</div>";	

	if (tipoContenido == "propiedad")
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
			arregloActividades = gDatosBienes[valor].CRMdapliw_actividad_agenda.sort(function(a,b)
			{
				return (a.fechaInvertida - b.fechaInvertida);
			});
						
			$j.each(arregloActividades, function(clave, datos)  
			{
				if (datos.estatus == "Abierta")
				{
					if (datos.notificacion == "No vista" && datos.idEjecutor == gIdUsuario)						
					{
                        bienesNotificaciones.push(datos.idPropiedad);
						notificaciones.push(datos.id);
					}

                    if (gPermiso > 3)
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
				arregloActividades = gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda.sort(function(a,b)
				{
					return (a.fechaInvertida - b.fechaInvertida);
				});
				
				$j.each(arregloActividades, function(clave2, datos2)  
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
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas para " + valor + "</h2>" +
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
				arregloActividades = gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda.sort(function(a,b)
				{
					return (a.fechaInvertida - b.fechaInvertida);
				});
				
				$j.each(arregloActividades, function(clave2, datos2)  
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
	
	for (i = 1; i <= 200; i++) 
    {
        agenda += "<br />";
    }

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

	if (tipoContenido == "propiedad")
	{

        var agenda =
            "<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas para " + gMatrizBienes[valor].post_title + "</h2>" +
            "<h3 class='letraAzul'>Captador responsable: " + gMatrizBienes[valor].nombre_autor + "</h3>" +
            "<br />" +
            "<br />" +
            "<div class='row'>";

        if (valor > 0)
        {
            imagenCabecera = mostrarImagenCabecera(valor);

            agenda += imagenCabecera;
        }

        if (gDatosBienes[valor].CRMdapliw_actividad_agenda)
        {
            arregloActividades = gDatosBienes[idPost].CRMdapliw_actividad_agenda.sort(function(a,b)
            {
                return (a.fechaInvertida - b.fechaInvertida);
            });

            $j.each(arregloActividades, function(clave, datos)  
            {
				if (datos.estatus == "Abierta")
				{
					if (datos.notificacion == "No vista" && datos.idEjecutor == gIdUsuario)						
					{
                        bienesNotificaciones.push(datos.idPropiedad);
						notificaciones.push(datos.id);
					}

                    if (gPermiso > 3)
                    {    
                        mosaico = crearMosaicos(clave, datos);
                        agenda += mosaico;
                    }
                    else
                    {
                        if (datos.idEjecutor == gIdUsuario)
                        {
                            mosaico = crearMosaicos(clave, datos);
                            agenda += mosaico;                        }
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
            "<div class='row'>";

        if (valor > 0)
        {
            imagenCabecera = mostrarImagenCabecera(valor);

            agenda += imagenCabecera;
        }

		$j.each(gBienes, function(clave1, datos1) 
		{				
			if (gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda)
			{
				arregloActividades = gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda.sort(function(a,b)
				{
					return (a.fechaInvertida - b.fechaInvertida);
				});
				
				$j.each(arregloActividades, function(clave2, datos2)  
				{
					if (datos2.estatus == "Abierta")						
					{
						if (datos2.notificacion == "No vista" && datos2.idEjecutor == gIdUsuario)						
						{
                            bienesNotificaciones.push(datos2.idPropiedad);
							notificaciones.push(datos2.id);
                        }
                        mosaico = crearMosaicos(clave2, datos2);
                        agenda += mosaico;
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
				"<div class='row'>";		
		}
		if (tipoContenido == "Citas")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Solicitudes de cita</h2>" +
				"<br />" +
				"<br />" +
				"<div class='row'>";		
		}
		else if (tipoContenido == "Persona")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>Actividades planificadas para " + valor + "</h2>" +
				"<br />" +
				"<br />" +
				"<div class='row'>";
		}
		else if (tipoContenido.substring(0, 11) == "Actividades")
		{
			var agenda =
				"<h2 class='letraAzul' id='tituloAgenda80'>" + tipoContenido + "</h2>" +
				"<br />" +
				"<br />" +
				"<div class='row'>";
        }

        if (valor > 0)
        {
            imagenCabecera = mostrarImagenCabecera(valor);

            agenda += imagenCabecera;
        }

		$j.each(gBienes, function(clave1, datos1) 
		{			
			if (gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda)
			{
				arregloActividades = gDatosBienes[datos1.ID].CRMdapliw_actividad_agenda.sort(function(a,b)
				{
					return (a.fechaInvertida - b.fechaInvertida);
				});
				
				$j.each(arregloActividades, function(clave2, datos2)  
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
					}
				});
			}
		});
    }

    agenda += "</div></div>";

    for (i = 1; i <= 200; i++) 
    {
        agenda += "<br />";
    }

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
						"<a href=" + gDatosBienes[valor]._thumbnail_id[0].valor + " title='Ver foto'>" +
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

    mosaico += 
        "<div class='col-12 col-sm-6 col-md-8 mb-3'>" +
            "<div class='card' id='actividad80-" + clave + "-" + idActividad + "-" + datos.idPropiedad + "'>" +
                "<div class='card-block'>" + 
                    "<h4 class='card-title'>" + datos.nombreActividad + "</h4>" +
                    "<div class='card bg-light text-dark'>" +
                        "<div class='card-body'>" +

                            "<div class='row'>" +
                                "<div class='col-md-12'>" +
                                    "<div class='form-group'>" + 
                                        "<label for='notas80'>Notas</label>" +  
                                        "<input type='text' class='form-control' id='notas80-" + 
                                            clave + "-" + idActividad + "-" + datos.idPropiedad + "' value='" + datos.notas + "'>" + 
                                    "</div>" +
                                "</div>" + 
                            "</div>" +

                            "<div class='row' id='fechaPlanificada80'>";
                
	idFechas =
		{
			"idAno" : "actividadesAno80",
			"idSelectAno" : "ano80",
            "valorAno" : datos.anoPlanificado, 
            "idMensajesAno" : "mensajesAno80",

			"idMes" : "actividadesMes80",
			"idSelectMes" : "mes80",
            "valorMes" : datos.mesPlanificado,
            "idMensajesMes" : "mensajesMes80",

			"idDia" : "actividadesDia80",
			"idSelectDia" : "dia80",
            "valorDia" : datos.diaPlanificado, 
            "idMensajesDia" : "mensajesDia80",

			"idHora" : "actividadesHora80",
			"idSelectHora" : "hora80",
            "valorHora" : datos.HoraPlanificado,
            "idMensajesHora" : "mensajesHora80",

			"idMinuto" : "actividadesMinuto80",
			"idSelectMinuto" : "minuto80",
            "valorMinuto" : datos.minutoPlanificado,
            "idMensajesAno" : "mensajesAno80",

			"idMeridiano" : "actividadesMeridiano80",
			"idSelectMeridiano" : "meridiano80",
            "valorMeridiano" : datos.meridianoPlanificado,
            "idMensajesMeridiano" : "mensajesMeridiano80"
		};
			
    lineaFecha = inicializarFecha(idFechas);

    mosaico += 
        lineaFecha + 
                        "</div>" +
                            
                        "<div class='row'>" +
                            "<div class='col-md-3'>" +
                                "<div class='form-check'>" +
                                    "<input type='checkbox' class='form-check-input cerrarActividad80' id='cerrarActividad80-" + 
                                        clave + "-" + idActividad + "-" + datos.idPropiedad + "'>" +
                                    "<label class='form-check-label' for='cerrarActividad80'>&nbsp;&nbsp;Cerrar</label>" +
                                "</div>" +
                            "</div>"+

                            "<div class='col-md-3'>" +
                                "<button class='guardarCambios80 btn btn-link' title='Guardar cambios' id='guardarCambios80-" + 
                                    clave + "-" + idActividad + "-" + datos.idPropiedad + "'>" + 
                                    "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" +
                                    "crmdapliw/app/public/images/pencil.svg alt='Guardar cambios' class='icono'>" +
                                "</button>" +
                            "</div>"+

                        "</div>" +

                    "</div>" +
                "</div>" +
            "</div>" +
        "</div>" +
        "<div class='row'>" +
            "<div class='col-md-12'>" +
                "<div class='mensajesUsuario' id='mensajesUsuario80-" + clave + "-" + idActividad + "-" + datos.idPropiedad + "'>" +
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
        "<option value=''></option>" +
        "<option selected value='am'>am</option>" + 
        "<option value='pm'>pm</option>";
    }
    else
    {
        "<option value=''></option>" +
        "<option selected value='am'>am</option>" + 
        "<option value='pm'>pm</option>";
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
                            "<th scope='col' class='text-center' style='width:10%;'>No</th>" +
							"<th scope='col' class='text-center' style='width:20%;'>Foto</th>" +
							"<th scope='col' class='text-center' style='width:50%;'>Propiedad</th>" +
							"<th scope='col' class='text-center' style='width:20%;'></th>" +
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
				
				bienes += 
					"<td class='text-center align-middle'>" + 				
						"<a href=" + bien.guid + " title='Ver propiedad' target='_blank' class='btn btn-light' id='verPropiedad60'>" +
						"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
							"crmdapliw/app/public/images/eye.svg alt='ver propiedad' class='icono'>" +
						"</a>" +								
								
						"<a href=<?= mvc_public_url(array('controller' => 'submit-property')) . '?edit_property=" + bien.ID + "' ?>" + 
							" class='btn btn-light' id='editarPropiedad60' title='Editar propiedad'>" +
							"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
							"crmdapliw/app/public/images/pencil.svg alt='Editar propiedad' class='icono'>" +
						"</a>" +
						
						"<button class='btn btn-light agenda60' id='agenda60-" + bien.ID + "' title='Agenda'>" +
							"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
							"crmdapliw/app/public/images/clock.svg alt='Agenda' class='icono'>" +
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

                            if (gPermiso > 3)
                            {
                                bienes += 

						            "<input type='text' id='buscarCaptador60-" + bien.ID + "' class='form-control buscarCaptador60'" + 
							            " value=" + gMatrizBienes[bien.ID].nombre_autor + ">";
                            }
                            else
                            {
						        "<input type='text' id='buscarCaptador60-" + bien.ID + "' class='form-control buscarCaptador60'" + 
							        " value=" + gMatrizBienes[bien.ID].nombre_autor + " disabled>";
                            }
                            
                            bienes +=

								"</div>" +
								"<div class='mensajesUsuario' id='mensajesUsuario60" + bien.ID + "'>" +
								"</div>" +

								"<div class='card-footer'>" +
									"<p>" +  
										"<a href=" + bien.guid + " title='Ver propiedad' target='_blank' class='btn btn-light' id='verPropiedad60'>" +
										"<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
											"crmdapliw/app/public/images/eye.svg alt='Ver propiedad' class='icono'>" +
										"</a>" +								
												
										"<a href=<?= mvc_public_url(array('controller' => 'submit-property')) . '?edit_property=" + bien.ID + "' ?>" + 
											" class='btn btn-light' id='editarPropiedad60' title='Editar propiedad'>" +
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
    $j("#cicloBienes60").html(bienes);
	
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
        arregloActividades = gDatosBienes[idBien].CRMdapliw_actividad_agenda.sort(function(a,b)
        {
            return (a.fechaInvertida - b.fechaInvertida);
        });

        $j.each(arregloActividades, function(clave, datos)  
        {
            if (datos.estatus == "Abierta")
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
        if (fechaInvertidaAntigua < gFechaActualInvertida)
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

function alertaActividades(idBien)
{
	fechaInvertidaAntigua = "";

    if (gDatosBienes[idBien].CRMdapliw_actividad_agenda)
    {
        arregloActividades = gDatosBienes[idBien].CRMdapliw_actividad_agenda.sort(function(a,b)
        {
            return (a.fechaInvertida - b.fechaInvertida);
        });

        $j.each(arregloActividades, function(clave, datos)  
        {
            if (datos.estatus == "Abierta")
            {
                fechaInvertidaAntigua = datos.fechaInvertida;
                return false;
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
                if (gPermiso < 4)
                {
                    console.log("datos2.idEjecutor " + datos2.idEjecutor + " gdIdUsuario " + gIdUsuario);
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

function filtrarAgenda(idPersonaFiltro)
{
    var indicadorVer = "";
	
	var filtro = "";

    if (idPersonaFiltro > 0)
    {
		filtro = "Persona"
		
        desmarcarAgendaVista();

        $j.each(gDatosBienes, function(clave1, datos1)  
        {
            if (datos1.CRMdapliw_actividad_agenda)
            {
                $j.each(datos1.CRMdapliw_actividad_agenda, function(clave2, datos2)  
                {
                    if (datos2.idEjecutor == idPersonaFiltro)
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
			
            marcarAgendaVista();
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

                        if (gPermiso > 3)
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

    if (gDatosBienes[idBien]._thumbnail_id)
    {
        $j("#imagen100").html("<img src=" + gDatosBienes[idBien]._thumbnail_id[0].valor + " class='card-img-top img-fluid' alt='Foto de la propiedad'>");
    }
    else
    {
        $j("#imagen100").html("Foto de la propiedad");
    }

    if (gPermiso < 3 && gMatrizBienes[idBien].post_author == gIdUsuario)
    {
        indicadorCaptadorPropietario = 1;                        
    }

    if (indicadorCaptadorPropietario == 1 || gPermiso > 3)
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

    if (gPermiso < 4)
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

    if (gDatosBienes[idBien].CRMdapliw_cliente)
    {
        var arregloCompradores = gDatosBienes[idBien].CRMdapliw_cliente.slice();

        arregloCompradores.sort(function(a,b)
        {
            return (b.posicionOriginal - a.posicionOriginal);
        });

        $j.each(arregloCompradores, function(clave, datos)  
        {
            if (datos.activo == "true")
            {
                compradoresPotenciales += 
                    "<div class='card' id='comprador100-" + datos.posicionOriginal + "-" + datos.idUser + "-" + idBien + "'>" +
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
                                        "id='eliminarComprador100-" + datos.posicionOriginal + "-" + datos.idUser + "-" + idBien + "-" + datos.id + "'" + 
                                        "title='Eliminar comprador potencial'>" +
                                        "<img src=<?= mvc_public_url(array('controller' => 'wp-content', 'action' => 'plugins')) ?>" + 
                                        "crmdapliw/app/public/images/trash.svg alt='Eliminar comprador' class='icono'>" +
                                    "</button>" +
                                "</p>" +
                            "</div>" +  
                        "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                        "<div class='col-md-12'>" +
                            "<div class='mensajesUsuario' id='mensajesComprador100-" + datos.posicionOriginal + "-" + datos.idUser + "-" + idBien + "-" + datos.id + "'>" +
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

function inicializarPersonas()
{
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
            if (gDatosBienes[gIdPostActual].CRMdapliw_cliente)
            {
                ultimaPosicion = 0;

                $j.each(gDatosBienes[gIdPostActual].CRMdapliw_cliente, function(clave, datos)  
                {
                    ultimaPosicion = clave;
                });
                ultimaPosicion++;
            }
            else
            {
                ultimaPosicion = 0;
            }

            compradorPotencial = 
                {
                    "valor" : primerNombre + " " + segundoNombre + " " + primerApellido + " " + segundoApellido,
                    "id" : response.idPostmeta,
                    "posicionOriginal" : ultimaPosicion,
                    "idUser" : response.idUser,
                    "activo" : "true",
                    "idPromotorCliente" : gIdUsuario,
                    "nombrePromotorCliente" : gNombreUsuario
                }    

            if (gDatosBienes[gIdPostActual].CRMdapliw_cliente)
            {
                gDatosBienes[gIdPostActual].CRMdapliw_cliente.push(compradorPotencial);
            }
            else
            {
                gDatosBienes[gIdPostActual].CRMdapliw_cliente = [compradorPotencial];
            }

            nuevoCliente = 
                {
                    "label" : primerNombre + " " + segundoNombre + " " + primerApellido + " " + segundoApellido + " - COMPRADOR(A)",
                    "value" : primerNombre + " " + segundoNombre + " " + primerApellido + " " + segundoApellido + " - COMPRADOR(A)",
                    "id" : response.idUser
                };              

            gPersonasAsc.push(nuevoCliente);
            gPersonasAsc.sort(function(a,b)
            {
                return (a.label - b.label);
            });        
                
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
        mensajeError = anterior + "Estimado usuario uno o más datos contienen errores, por favor verifique" + posterior;
        $j("#mensajesUsuario30").html(mensajeError);
        window.scrollTo(0, 0);           
    }
}

function agregarComprador(idBien, idComprador, nombreComprador)
{
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se agrega el comprador</strong>" +
        "</div>";

    borrarMensajesAnteriores();
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
                    mensajesUsuario =
                        "<div class='alert alert-danger alert-dismissible'>" +
                            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                            "<strong>Este comprador ya está asociado a esta propiedad</strong>" +
                        "</div>"; 

                    borrarMensajesAnteriores();
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
                indicadorArregloActualizado = 0;
                if (gDatosBienes[idBien].CRMdapliw_cliente)
                {
                    $j.each(gDatosBienes[idBien].CRMdapliw_cliente, function(clave, datos)  
                    {
                        if (datos.idUser == idComprador)
                        {
                            datos.activo = "true";
                            indicadorArregloActualizado = 1;                
                        }
                    });
                }

                if (indicadorArregloActualizado == 0)
                {
                    ultimaPosicion = 0;

                    $j.each(gDatosBienes[gIdPostActual].CRMdapliw_cliente, function(clave, datos)  
                    {
                        ultimaPosicion = clave;
                    });
                    ultimaPosicion++;

                    compradorPotencial = 
                        {
                            "valor" : nombreComprador,
                            "id" : response.idPostmeta,
                            "posicionOriginal" : ultimaPosicion,
                            "idUser" : idComprador,
                            "activo" : "true",
                            "idPromotorCliente" : gIdUsuario,
                            "nombrePromotorCliente" : gNombreUsuario
                        }    

                    if (gDatosBienes[idBien].CRMdapliw_cliente)
                    {
                        gDatosBienes[idBien].CRMdapliw_cliente.push(compradorPotencial);
                    }
                    else
                    {
                        gDatosBienes[idBien].CRMdapliw_cliente = [compradorPotencial];
                    }
                }   
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
}

function eliminarComprador(idCompradorPromotor)
{
    var mensajesUsuario = 
        "<div class='alert alert-info alert-dismissible'>" +
            "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
            "<strong>Por favor espere mientras se elimina el comprador</strong>" +
        "</div>";

    var arregloId = idCompradorPromotor.split("-");
    var idMensaje = "#mensajesComprador100-" + idCompradorPromotor;  
    var idPostmeta = arregloId[3];

    borrarMensajesAnteriores();
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
            mensajesUsuario =
                "<div class='alert alert-success alert-dismissible'>" +
                    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>" +
                    "<strong>" + response.mensaje + "</strong>" +
                "</div>";

            borrarMensajesAnteriores();
            $j("#mensajesUsuario30").html(mensajesUsuario);

            gDatosBienes[gIdPostActual].CRMdapliw_cliente[arregloId[0]].activo = "false";

            compradoresPotenciales(gIdPostActual);
            window.scrollTo(0, 0);
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
                "<strong>Ocurrió un error en el servidor. Los datos no se pudieron guardar !</strong>" +
            "</div>"; 

	    $j(idMensaje).html(mensajesUsuario);
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
        mostrarAgenda("Notificaciones", 0);
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

    $j("#busquedaNombre50").autocomplete(
    {
        source: gBienesAutocomplete,
        select: function( event, ui ) 
        {   
            idBienFiltro = ui.item.id;          
            $j("#busquedaPropiedades50").addClass('noVer');
            $j("#cerrarBusquedaPropiedades10").addClass('noVer');
            $j("#busquedaPropiedades10").addClass('noVer');
            filtrarPropiedades(idBienFiltro);
            gBotonCerrar = "#cerrarPropiedadesFiltradas10";
            mostrarBienes();
            $j("#bienes60").removeClass('noVer');
            $j(gBotonCerrar).removeClass('noVer');
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
        gBotonCerrar = "#cerrarPropiedadesFiltradas10";
        mostrarBienes("Propiedades", "");
        $j("#bienes60").removeClass('noVer');
        $j(gBotonCerrar).removeClass('noVer');
        $j("#publicarPropiedad10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#cerrarPropiedadesFiltradas10').click(function()
    {
        $j("#bienes60").addClass('noVer');
        $j("#cerrarPropiedadesFiltradas10").addClass('noVer');
        $j("#publicarPropiedad10").addClass('noVer');
        $j("#busquedaPropiedades50").removeClass('noVer');
        $j("#cerrarBusquedaPropiedades10").removeClass('noVer');
        $j("#busquedaPropiedades10").removeClass('noVer');
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

        if (gPermiso > 1 && $j("#solicitudesDeCita51").hasClass('noVer') === false)
        {
            $j("#grupoTipoActividad51").removeClass('noVer');
        }

        if (gPermiso > 3 && $j("#grupoPersonaAgenda51").hasClass('noVer') === false)
        {
            $j("#grupoPersonaAgenda51").removeClass('noVer');
        }

        $j("#cerrarBusquedaAgenda10").removeClass('noVer');
        $j("#busquedaAgenda10").removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#bienesSinActividad51').click(function()
    {
        $j("#busquedaAgenda51").addClass('noVer'); 
        $j("#cerrarBusquedaAgenda10").addClass('noVer');
        $j("#busquedaAgenda10").addClass('noVer');
        desmarcarBienesVista();
        bienesSinActividad();
        gBotonCerrar = "#cerrarAgendaFiltrada10";
        mostrarBienes("Propiedades sin Actividades Planificadas", "");
        $j("#bienes60").removeClass('noVer');
        $j(gBotonCerrar).removeClass('noVer');
        window.scrollTo(0, 0);
    });

    $j('#busquedaAgenda10').click(function()
    {
        $j("#busquedaAgenda51").addClass('noVer');
        $j("#cerrarBusquedaAgenda10").addClass('noVer');
        $j("#busquedaAgenda10").addClass('noVer');
        filtro = filtrarAgenda();
        gBotonCerrar = "#cerrarAgendaFiltrada10";
        mostrarAgenda(filtro, 0);
    });

    $j('#cerrarAgendaFiltrada10').click(function()
    {
        $j("#agenda80").addClass('noVer');
        if ($j("#bienes60").hasClass('noVer') === false)
        {
            $j("#bienes60").addClass('noVer');
        } 
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
        $j("#cerrarPersonas10").removeClass('noVer');
        $j("#agregarPersona10").removeClass("noVer");
        window.scrollTo(0, 0);
    });

    $j("#agregarPersona10").click(function()
    {       
        $j("#personas100").addClass("noVer");
        $j("#cerrarPersonas10").addClass('noVer');
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
        idCompradorPromotor = $j(this).attr("id").substring(21); 
        eliminarComprador(idCompradorPromotor);
    });

});
</script>
