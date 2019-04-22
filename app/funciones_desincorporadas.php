        $permiso = 0;

        if (in_array("Promotor", $roles))
        {
            $permiso = $permiso + 1;    
        }

        if (in_array("Captador", $roles))
        {
            $permiso = $permiso + 2;    
        }
        
        if (in_array("Gestor de negocios", $roles))
        {
            $permiso = $permiso + 4;
        }
        
        if (in_array("Administrador", $roles))
        {
            $permiso = $permiso + 8;
        }

		$cadenaRoles = "";
		
        if (in_array("Administrador", $roles))
        {
			$cadenaRoles = "Administrador";
		}
		elseif (in_array("Gestor de negocios", $roles)) 
		{
			if (in_array("Captador", $roles))
			{
				if (in_array("Promotor", $roles))
				{
					$cadenaRoles = "GestorCaptadorPromotor";
				}
				else
				{
					$cadenaRoles = "GestorCaptador";
				}
			}
			elseif (in_array("Promotor", $roles))
			{
				$cadenaRoles = "GestorPromotor";
			}
			else
			{
				$cadenaRoles = "Gestor";
			}
		}
		elseif (in_array("Captador", $roles))
		{
			if (in_array("Promotor", $roles))
			{
				$cadenaRoles = "CaptadorPromotor";
			}
			else
			{
				$cadenaRoles = "Captador";
			}
		}
		elseif (in_array("Promotor", $roles))
		{
			$cadenaRoles = "Promotor";
		}

function selectActividades()
{
    if (gCadenaRoles == "Administrador")
    {
        $j("#actividadesAdministrador90").removeClass('noVer');
    }   
    else if (gCadenaRoles == "GestorCaptadorPromotor")
    {
         $j("#actividadesGestorCaptadorPromotor90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "GestorCaptador")
    {
         $j("#actividadesGestorCaptador90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "GestorPromotor")
    {
         $j("#actividadesGestorPromotor90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "Gestor")
    {
         $j("#actividadesGestor90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "CaptadorPromotor")
    {
         $j("#actividadesCaptadorPromotor90").removeClass('noVer');
    }    
    else if (gCadenaRoles == "Captador")
    {
         $j("#actividadesCaptador90").removeClass('noVer');
    }    
    else 
    {
         $j("#actividadesPromotor90").removeClass('noVer');
    }    
}

    public function editar_actividad()
    {
        $this->autoRender = false;
		
        $jsondata = [];
        $rolesAutorizados = 
            [
                "Promotor",
                "Captador",
                "Gestor de negocios",
                "Administrador"
            ];

        $accesoPermitido = $this->verificarPermisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {
			$this->load_model("Binnacle");

			$indicadorCambios = 0;
			$indicadorError = 0;

			setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
			date_default_timezone_set('America/Caracas');

			$fechaHoy = new DateTime(); 
			$fechaFormato = $fechaHoy->format('d-m-Y');  
			$fechaVector = explode('-', $fechaFormato);

			/* Descomentar solo para pruebas 

			$actividad = 
				'{
					"idActividad" : "5679",
					"notas" : "Prueba",
					"anoPlanificado" : "2019",
					"mesPlanificado" : "04",
					"diaPlanificado" : "15",
					"horaPlanificado" : "10",
					"minutoPlanificado" : "33",
					"meridianoPlanificado" : "am",
					"informacionAdicional" : 
						{
							"nombreActividad" : "Confirmación solicitud de cita para mostrar propiedad",
							"notas" : "Prueba",
							"anoPlanificado" : "2019",
							"mesPlanificado" : "04",
							"diaPlanificado" : "16",
							"horaPlanificado" : "10",
							"minutoPlanificado" : "33",
							"meridianoPlanificado" : "am"
						},
					"estatus" : "Cerrada por el usuario"
				}';
			
			$_POST = json_decode($actividad, true);

			*/

			if (isset($_POST["idActividad"]))
			{
				$object = $this->Postmeta->find_by_id($_POST["idActividad"]);

				$objetoActividad = json_decode($object->meta_value);
                
				$notasAnterior = $objetoActividad->notas;
				if ($objetoActividad->notas != $_POST["notas"])
				{
					$objetoActividad->notas = $_POST["notas"];
					$indicadorCambios = 1;
				}
				
				$fechaPlanificadaGuardada = 
					$objetoActividad->anoPlanificado .
					$objetoActividad->mesPlanificado .
					$objetoActividad->diaPlanificado .
					$objetoActividad->horaPlanificado . 
					$objetoActividad->minutoPlanificado .
					$objetoActividad->meridianoPlanificado;
					
				$fechaPlanificadaRecibida =
					$_POST["anoPlanificado"] .
					$_POST["mesPlanificado"] .
					$_POST["diaPlanificado"] .
					$_POST["horaPlanificado"] .
					$_POST["minutoPlanificado"] .
					$_POST["meridianoPlanificado"];

				if ($fechaPlanificadaGuardada != $fechaPlanificadaRecibida)
				{
					$objetoActividad->anoPlanificado = $_POST["anoPlanificado"];
					$objetoActividad->mesPlanificado = $_POST["mesPlanificado"];
					$objetoActividad->diaPlanificado = $_POST["diaPlanificado"];
					$objetoActividad->horaPlanificado = $_POST["horaPlanificado"];
					$objetoActividad->minutoPlanificado = $_POST["minutoPlanificado"];
					$objetoActividad->meridianoPlanificado = $_POST["meridianoPlanificado"];
					$indicadorCambios = 1;
				}

                /*
                if (is_array($_POST["informacionAdicional"])) 
		        {
				    $jsonInformacionAdicional = json_encode($_POST["informacionAdicional"]);
                }
                else
                {
                    $jsonInformacionAdicional = $_POST["informacionAdicional"];
                }
                */

    			$informacionAdicionalAnterior = $objetoActividad->informacionAdicional;

				if ($objetoActividad->informacionAdicional != $_POST["informacionAdicional"])
				{
					$objetoActividad->informacionAdicional = $_POST["informacionAdicional"];
					$indicadorCambios = 1;
				}
					
				if ($indicadorCambios == 1)
				{
                    /*					
                    $arregloHistorial = json_decode($objetoActividad->historialDeCambios, true);
					
					$cambioActividad =
						[
							"fechaCambio" => $fechaFormato,
							"notas" => $notasAnterior,
							"fechaPlanificada" => $fechaPlanificadaGuardada,
							"informacionAdicional" => $informacionAdicionalAnterior
						]; 
									
					$arregloHistorial[] = $cambioActividad;
					
					$jsonHistorial = json_encode($arregloHistorial);
					
					$objetoActividad->historialDeCambios = $jsonHistorial;
                    */

					$cambioActividad =
						[
							"fechaCambio" => $fechaFormato,
							"notasAnterior" => $notasAnterior,
							"fechaPlanificadaAnterior" => $fechaPlanificadaGuardada,
							"informacionAdicionalAnterior" => $informacionAdicionalAnterior
						]; 

                    $objetoActividad->historialDeCambios[] = $cambioActividad;
				}
					
				if ($_POST["estatus"] == "Cerrada por el usuario")
				{        
					$objetoActividad->anoCierre = $fechaVector[2];
					$objetoActividad->mesCierre = $fechaVector[1];
					$objetoActividad->diaCierre = $fechaVector[0];
					$objetoActividad->horaCierre = "";
					$objetoActividad->minutoCierre = "";
					$objetoActividad->meridianoCierre = "";
					$objetoActividad->estatus = "Cerrada por el usuario";  
				}

				$jsonObjetoActividad = json_encode($objetoActividad);      
				$this->Postmeta->update($object->__id, array('meta_value' => $jsonObjetoActividad));

				if ($_POST["estatus"] == "Cerrada por el usuario")
				{   
					if ($objetoActividad->nombreActividad == "Solicitud de cita para mostrar propiedad")
					{
						$actividades = $this->Postmeta->find(array(
							'conditions' => array(
							'post_id' => array($objetoActividad->idPropiedad),
							'meta_key' => array('CRMdapliw_actividad_agenda'))));           

						foreach ($actividades as $actividad)
						{
							$arregloActividad = json_decode($actividad->meta_value);

							if ($arregloActividad->idActividadPadre == $objetoActividad->idActividadPadre)
							{
								if ($actividad->__id != $_POST["idActividad"])
								{
									$arregloActividad->anoCierre = $fechaVector[2];
									$arregloActividad->mesCierre = $fechaVector[1];
									$arregloActividad->diaCierre = $fechaVector[0];
									$arregloActividad->horaCierre = "";
									$arregloActividad->minutoCierre = "";
									$arregloActividad->meridianoCierre = "";
									$arregloActividad->estatus = "Cerrada por el sistema"; 
 
									$jsonArregloActividad = json_encode($arregloActividad);      
									$this->Postmeta->update($actividad->__id, array('meta_value' => $jsonArregloActividad));
								}

								$arregloAdicional = $_POST["informacionAdicional"]; 

								$arregloActividad->nombreActividad = $arregloAdicional["nombreActividad"];
								$arregloActividad->notas = $arregloAdicional["notas"];
								$arregloActividad->anoPlanificado = $arregloAdicional["anoPlanificado"];
								$arregloActividad->mesPlanificado = $arregloAdicional["mesPlanificado"];
								$arregloActividad->diaPlanificado = $arregloAdicional["diaPlanificado"];
								$arregloActividad->horaPlanificado = $arregloAdicional["horaPlanificado"];
								$arregloActividad->minutoPlanificado = $arregloAdicional["minutoPlanificado"];
								$arregloActividad->meridianoPlanificado = $arregloAdicional["meridianoPlanificado"];

								$arregloActividad->anoCierre = $arregloAdicional["anoPlanificado"];
								$arregloActividad->mesCierre = $arregloAdicional["mesPlanificado"];
								$arregloActividad->diaCierre = $arregloAdicional["diaPlanificado"];
								$arregloActividad->horaCierre = $arregloAdicional["horaPlanificado"];
								$arregloActividad->minutoCierre = $arregloAdicional["minutoPlanificado"];
								$arregloActividad->meridianoCierre = $arregloAdicional["meridianoPlanificado"];

								$arregloActividad->idSolicitante = $objetoActividad->idEjecutor;
								$arregloActividad->idActividadPadre = $objetoActividad->$_POST["idActividad"];
								$arregloActividad->notificacion = "No vista";
								$arregloActividad->informacionAdicional = "";
								$arregloActividad->historialDeCambios = "";
								$arregloActividad->estatus = "Abierta";

								$jsonArregloActividad = json_encode($arregloActividad);

								$postmeta = 
									[
										'post_id' => $arregloActividad->idPropiedad, 
										'meta_key' => 'CRMdapliw_actividad_agenda', 
										'meta_value' => $jsonArregloActividad
									];

								$idPostmeta = $this->Postmeta->insert($postmeta);  

								if ($idPostmeta == 0)
								{
									$binnacle = 
										[
											"novedad" => "No se pudo crear la actividad hijo de " . $arregloActividad->idActividadPadre . 
												" para el usuario " . $arregloActividad->idEjecutor,
											"tipo_clase" => "controlador",
											"nombre_clase" => "Postmetas",
											"nombre_metodo" => "editar_actividad"                             
										];

									$idBinnacle = $this->Binnacle->insert($binnacle);

									$indicadorError = 1;
									break;
								}
							}                       
						}

						if ($indicadorError == 0)
						{
							$actividadPadre = $this->Postmeta->find_by_id($objetoActividad->idActividadPadre);

							$arregloPadre = json_decode($actividadPadre->meta_value);

							$arregloPadre->anoCierre = $fechaVector[2];
							$arregloPadre->mesCierre = $fechaVector[1];
							$arregloPadre->diaCierre = $fechaVector[0];
							$arregloPadre->horaCierre = "";
							$arregloPadre->minutoCierre = "";
							$arregloPadre->meridianoCierre = "";
							$arregloPadre->estatus = "Cerrada por el sistema"; 

							$jsonArregloPadre = json_encode($arregloPadre);      
							$this->Postmeta->update($actividadPadre->__id, array('meta_value' => $jsonArregloPadre));

							$arregloActividad->idEjecutor = $arregloPadre->idEjecutor;

							$jsonArregloActividad = json_encode($arregloActividad);

							$postmeta = 
								[
									'post_id' => $arregloActividad->idPropiedad, 
									'meta_key' => 'CRMdapliw_actividad_agenda', 
									'meta_value' => $jsonArregloActividad
								];

							$idPostmeta = $this->Postmeta->insert($postmeta);  

							if ($idPostmeta == 0)
							{
								$binnacle = 
									[
										"novedad" => "No se pudo crear la actividad hijo de " . $arregloActividad->idActividadPadre . 
											" para el usuario " . $arregloActividad->idEjecutor,
										"tipo_clase" => "controlador",
										"nombre_clase" => "Postmetas",
										"nombre_metodo" => "editar_actividad"                             
									];

								$idBinnacle = $this->Binnacle->insert($binnacle);

								$indicadorError = 1;
							}
						}
					}
				}
				require_once("posts_controller.php");
				$postsController = new PostsController();
				$vectorGeneral = $postsController->cargar_vectores();

				if ($indicadorError == 0)
				{              
					$jsondata["satisfactorio"] = true;
					$jsondata["mensaje"] = "Los cambios se guardaron correctamente";
					$jsondata["vectorGeneral"] = $vectorGeneral;
				}
				else
				{
					$jsondata["satisfactorio"] = false;
					$jsondata["mensaje"] = "No se pudieron guardar los cambios. Error al crear actividades de confirmación";
					$jsondata["vectorGeneral"] = $vectorGeneral;
				}
			} 
			else
			{
				require_once("posts_controller.php");
				$postsController = new PostsController();
				$vectorGeneral = $postsConstroller->cargarVectores();

				$jsondata["satisfactorio"] = false;
				$jsondata["mensaje"] = "No se pudieron guardar los cambios";
				$jsondata["vectorGeneral"] = $vectorGeneral;
			}
		}
		else
		{
			$jsondata["satisfactorio"] = false;
			$jsondata["mensaje"] = "Usuario no autorizado"; 
			$jsondata["vectorGeneral"] = "";			
		}
        exit(json_encode($jsondata));
    }


