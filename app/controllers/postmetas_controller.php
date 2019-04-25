<?php

class PostmetasController extends MvcPublicController 
{
    public function test_function()
    {
        return "Hola mundo";
    }

    public function agregar_actividad()
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

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {
            $this->load_model("Binnacle");

            /* Descomentar solo para pruebas

                $datosActividad = 
                    '{"idPost" : "5297",
                    "actividad" :  {"nombreActividad":"Solicitar cita para mostrar propiedad","notas":"","anoPlanificado":"2019","mesPlanificado":"04","diaPlanificado":"17","horaPlanificado":"11","minutoPlanificado":"10","meridianoPlanificado":"am","anoCierre":"2019","mesCierre":"04","diaCierre":"17","horaCierre":"11","minutoCierre":"10","meridianoCierre":"am","idPropiedad":"5297","idEjecutor":"41","idSolicitante":"41","idActividadPadre":"","notificacion":"Vista","informacionAdicional":[{"solicitante":"Rub\u00e9n Montero","destinatarios":["5","38"]}],"historialDeCambios":[""],"estatus":"Abierta"}}';

            $_POST = json_decode($datosActividad, true);

            */

            if (isset($_POST["idPost"]))
            {
                $postmeta = ["post_id" => $_POST["idPost"], "meta_key" => "CRMdapliw_actividad_agenda", "meta_value" => json_encode($_POST["actividad"])];
                $id = $this->Postmeta->insert($postmeta);

                if ($id > 0)
                {
                    $actividad = $_POST["actividad"];

                    if ($actividad["nombreActividad"] == "Solicitar cita para mostrar propiedad")
                    {
                        $destinatarios = $actividad["informacionAdicional"][0]["destinatarios"];
                        
                        $actividad["nombreActividad"] = "Solicitud de cita para mostrar propiedad";
                        $actividad["notas"] = "Solicitada por " . $actividad["informacionAdicional"][0]["solicitante"]; 
                        $actividad["idSolicitante"] = $actividad["idEjecutor"];                    
                        $actividad["notificacion"] = "No vista";
                        $actividad["informacionAdicional"] = [""];
                        $actividad["idActividadPadre"] = $id;

                        $indicadorError = 0;

                        foreach ($destinatarios as $destinatario)
                        {
                            $actividad["idEjecutor"] = $destinatario;
                            $postmeta = ['post_id' => $_POST['idPost'], 'meta_key' => 'CRMdapliw_actividad_agenda', 'meta_value' => json_encode($actividad)];
                            $idHijo = $this->Postmeta->insert($postmeta);

                            if ($idHijo == 0)
                            {
                                $indicadorError = 1;
                                $binnacle = 
                                    [
                                        "novedad" => "No se pudo crear la actividad solicitud de cita para el usuario " . $destinatario,
                                        "tipo_clase" => "controlador",
                                        "nombre_clase" => "Postmetas",
                                        "nombre_metodo" => "agregar_actividad"                             
                                    ];
                                $idBinnacle = $this->Binnacle->insert($binnacle);
                                break;
                            }
                        }
                        if ($indicadorError == 0)
                        {
                            $jsondata["satisfactorio"] = true;
                            $jsondata["mensaje"] = "La actividad se agregó correctamente";
                        }
                        else
                        {
                            $jsondata["satisfactorio"] = false;
                            $jsondata["mensaje"] = "No se pudo crear la actividad Solicitud de cita para el usuario " . $destinatario;
                        }
                    }
                    else
                    {
                        $jsondata["satisfactorio"] = true;
                        $jsondata["mensaje"] = "La actividad se agregó correctamente";
                    }
                }
                else
                {   
                    $binnacle = 
                        [
                            "novedad" => "No se pudo agregar la actividad a la propiedad: " . $_POST["idPost"],
                            "tipo_clase" => "controlador",
                            "nombre_clase" => "Postmetas",
                            "nombre_metodo" => "agregar_actividad"                             
                        ];
                    $idBinnacle = $this->Binnacle->insert($binnacle);

                    $jsondata["satisfactorio"] = false;
                    $jsondata["mensaje"] = "No se pudo agregar la actividad a la propiedad: " . $_POST["idPost"];      
                }
            }
            else
            {
                $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "No se pudo agregar la actividad";
            }
            require_once("posts_controller.php");
            $postsController = new PostsController();
            $vectorGeneral = $postsController->cargar_vectores();
            $jsondata["vectorGeneral"] = $vectorGeneral;
        }
        else
        {
            $jsondata["satisfactorio"] = false;
            $jsondata["mensaje"] = "Usuario no autorizado";
            $vectorGeneral = "";        
        }
        exit(json_encode($jsondata)); 
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

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

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
						[{
							"nombreActividad" : "Confirmación solicitud de cita para mostrar propiedad",
							"notas" : "Prueba",
							"anoPlanificado" : "2019",
							"mesPlanificado" : "04",
							"diaPlanificado" : "16",
							"horaPlanificado" : "10",
							"minutoPlanificado" : "33",
							"meridianoPlanificado" : "am"
						}],
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

    			$informacionAdicionalAnterior = $objetoActividad->informacionAdicional;

				if ($objetoActividad->informacionAdicional != $_POST["informacionAdicional"])
				{
					$objetoActividad->informacionAdicional = $_POST["informacionAdicional"];
					$indicadorCambios = 1;
				}
					
				if ($indicadorCambios == 1)
				{
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

								$arregloAdicional = $_POST["informacionAdicional"][0]; 

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
								$arregloActividad->idActividadPadre = $object->__id;
								$arregloActividad->notificacion = "No vista";
								$arregloActividad->informacionAdicional = [""];
								$arregloActividad->historialDeCambios = [""];
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
				if ($indicadorError == 0)
				{              
					$jsondata["satisfactorio"] = true;
					$jsondata["mensaje"] = "Los cambios se guardaron correctamente";
				}
				else
				{
					$jsondata["satisfactorio"] = false;
					$jsondata["mensaje"] = "No se pudieron guardar los cambios. Error al crear actividades de confirmación";
				}
			} 
			else
			{
				$jsondata["satisfactorio"] = false;
				$jsondata["mensaje"] = "No se pudieron guardar los cambios";
			}
            require_once("posts_controller.php");
            $postsController = new PostsController();
            $vectorGeneral = $postsController->cargar_vectores();
            $jsondata["vectorGeneral"] = $vectorGeneral;
		}
		else
		{
			$jsondata["satisfactorio"] = false;
			$jsondata["mensaje"] = "Usuario no autorizado"; 
			$jsondata["vectorGeneral"] = "";			
		}
        exit(json_encode($jsondata));
    }

    public function modificar_postmeta()
    {
        $contadorDatos = 0;
        $contadorRegistrosActualizados = 0;

        $propiedadesBienes = $this->Postmeta->find(array(
            'joins' => array('Post'),
            'includes' => array('Post'),
            'conditions' => array(
            // 'Post.ID' => array(5548),
            'Post.post_type' => array('property', 'CRMdapliw'),
            'Post.post_status' => array('Publish', 'Pending'),
            'Postmeta.meta_key' => array('CRMdapliw_promotor_anterior')),
            'order' => 'Post.ID ASC, Postmeta.meta_key ASC, Postmeta.meta_id ASC'));            
            
        foreach ($propiedadesBienes as $propiedadesBien)
        {
            if ($contadorDatos == 0)
            {
                $object = $this->Postmeta->find_by_id($propiedadesBien->meta_id);
                $this->Postmeta->update($object->__id, array('meta_value' => 5));
                $contadorRegistrosActualizados++;

                $bienActual = $propiedadesBien->post_id;
            }

            if ($bienActual != $propiedadesBien->post_id)
            {
                $object = $this->Postmeta->find_by_id($propiedadesBien->meta_id);
                $this->Postmeta->update($object->__id, array('meta_value' => 5));
                $contadorRegistrosActualizados++;

                $bienActual = $propiedadesBien->post_id;
            }

            $contadorDatos++;
        }

        echo "<br /><p>Total registros actualizados: " . $contadorRegistrosActualizados . "</p><br />"; 
    }
    
    public function agregar_comprador_bien()
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

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {
            $this->load_model("User");

            $this->load_model("Binnacle");

            /* Descomentar solo para pruebas
            $_POST['idBien'] = 5297;
            $_POST['idComprador'] = 75;
            */

            if (isset($_POST['idBien']))
            {
                $indicadorCompradorBien = 0;

                $compradoresBienes = $this->Postmeta->find(array(
                    'conditions' => array(
                    'post_id' => array($_POST['idBien']),
                    'meta_key' => array('CRMdapliw_cliente'))));

                if (isset($compradoresBienes))
                {
                    foreach($compradoresBienes as $comprador)
                    {
                        $objetoComprador = json_decode($comprador->meta_value);

                        if ($objetoComprador->idUser == $_POST['idComprador'])
                        {
                            $objetoComprador->activo = "true";

                            $jsonObjetoComprador = json_encode($objetoComprador);
                  
                            $this->Postmeta->update($comprador->__id, array('meta_value' =>
                                $jsonObjetoComprador));

                                $jsondata["satisfactorio"] = true;
                                $jsondata["mensaje"] = 
                                    "El comprador se agregó exitosamente a la propiedad"; 

                            $indicadorCompradorBien = 1;
                            break;                                                                  
                        }
                    }
                }

                if ($indicadorCompradorBien == 0)
                {                        
                    $metaValue = ["idUser" => $_POST['idComprador'], "activo" => "true"];
                    $postmeta = ['post_id' => $_POST['idBien'], 'meta_key' => 'CRMdapliw_cliente', 'meta_value' => json_encode($metaValue)];
                    $idPostmeta = $this->Postmeta->insert($postmeta);  

                    if ($idPostmeta == 0)
                    {
                        $binnacle = 
                            [
                                "novedad" => "No se pudo asociar el cliente " . $_POST['idComprador'] . " a la propiedad " . $_POST['idBien'],
                                "tipo_clase" => "controlador",
                                "nombre_clase" => "Postmetas",
                                "nombre_metodo" => "agregar_comprador_bien"                             
                            ];

                        $idBinnacle = $this->Binnacle->insert($binnacle);

                        $jsondata["satisfactorio"] = false;
                        $jsondata["mensaje"] = "No se pudo agregar el cliente a la propiedad";
                    }
                    else
                    {
                        $rolesComprador = $this->Usermeta->find_one(array(
                            'conditions' => array(
                            'user_id' => array($_POST['idComprador']),
                            'meta_key' => array('CRMdapliw_roles'))));

                        $arregloRoles = json_decode($rolesComprador->meta_value);

                        if (!(in_array("Cliente", $arregloRoles)))
                        {
                            array_push($arregloRoles, "Cliente");

                            $this->Usermeta->update($rolesComprador->umeta_id, array('meta_value' =>
                                json_encode($arregloRoles)));
                        }

                        $jsondata["satisfactorio"] = true;
                        $jsondata["mensaje"] = "El cliente se agregó exitosamente a la propiedad";
                        $jsondata["idPostmeta"] = $idPostmeta;
                    }
                }
            }
            else
            {
                $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "No se pudo agregar el cliente a la propiedad";
            }
			require_once("posts_controller.php");
			$postsController = new PostsController();
			$vectorGeneral = $postsController->cargar_vectores();
			$jsondata["vectorGeneral"] = $vectorGeneral;
		}
		else
		{
			$jsondata["satisfactorio"] = false;
			$jsondata["mensaje"] = "Usuario no autorizado"; 
			$jsondata["vectorGeneral"] = "";			
		}
        exit(json_encode($jsondata)); 
    }

    public function eliminar_comprador()
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

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {
            /* Descomentar solo para pruebas 

            $jsonPostmeta = '{"idPostmeta" : "5650"}';

            echo "<p>jsonPostmeta: " . $jsonPostmeta . "</p>";
            
            $_POST = json_decode($jsonPostmeta, true);

            var_dump($_POST);
            echo "<br />";        

            */

            if (isset($_POST["idPostmeta"]))
            {
                $object = $this->Postmeta->find_by_id($_POST["idPostmeta"]);

                $objetoComprador = json_decode($object->meta_value);
        
                $objetoComprador->activo = "false";

                $jsonObjetoComprador = json_encode($objetoComprador);      
                $this->Postmeta->update($object->__id, array('meta_value' =>
                    $jsonObjetoComprador));

                $jsondata["satisfactorio"] = true;
                $jsondata["mensaje"] = 
                    "El comprador se eliminó correctamente";        
            } 
            else
            {
                $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "No se pudo eliminar el comprador";
            }
			require_once("posts_controller.php");
			$postsController = new PostsController();
			$vectorGeneral = $postsController->cargar_vectores();
			$jsondata["vectorGeneral"] = $vectorGeneral;  
		}
		else
		{
			$jsondata["satisfactorio"] = false;
			$jsondata["mensaje"] = "Usuario no autorizado"; 
			$jsondata["vectorGeneral"] = "";			
		}  
        exit(json_encode($jsondata));
    }

	public function desmarcar_notificaciones()
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

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {		
			$this->load_model("Binnacle");

			if (isset($_POST["notificaciones"]))
			{
				foreach ($_POST["notificaciones"] as $notificaciones)
				{
					$object = $this->Postmeta->find_by_id($notificaciones);

					$objetoActividad = json_decode($object->meta_value);

					$objetoActividad->notificacion = "Vista";

					$jsonObjetoActividad = json_encode($objetoActividad);      
					$this->Postmeta->update($object->__id, array('meta_value' => $jsonObjetoActividad));
				}		
				$jsondata["satisfactorio"] = true;
				$jsondata["mensaje"] = "El estatus de la notificación se actualizó exitosamente";
			}
			else
			{	
				$jsondata["satisfactorio"] = false;
				$jsondata["mensaje"] = "No se pudo actualizar el estatus de la notificación"; 
			}
			require_once("posts_controller.php");
			$postsController = new PostsController();
			$vectorGeneral = $postsController->cargar_vectores();
			$jsondata["vectorGeneral"] = $vectorGeneral;
		}
		else
		{
			$jsondata["satisfactorio"] = false;
			$jsondata["mensaje"] = "Usuario no autorizado"; 
			$jsondata["vectorGeneral"] = "";
		}
		exit(json_encode($jsondata));
	}

    public function verificar_permisos($rolesAutorizados = null)
    {
        $this->autoRender = false;

        $usuarioConectado = wp_get_current_user();
        $idUsuario = $usuarioConectado->id;
        $accesoPermitido = "false";

        $this->load_model('Usermeta');
        
        if ($idUsuario > 0)
        {
            $objetoUsuario = $this->Usermeta->find_one(array(
                'conditions' => array(
                    'user_id' => array($idUsuario),
                    'meta_key' => array("CRMdapliw_roles"))));

            if (isset($objetoUsuario))
            {
                $roles = json_decode($objetoUsuario->meta_value);

                foreach($roles as $rol)
                {
                    if (in_array($rol, $rolesAutorizados))
                    {
                        $accesoPermitido = "true";
                        break;    
                    }
                }
            }
        }
        return $accesoPermitido;    
    }
}
