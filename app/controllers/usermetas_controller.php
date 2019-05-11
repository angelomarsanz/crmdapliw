<?php

class UsermetasController extends MvcPublicController 
{
    public function test_function()
    {
    }

	public function actualizar_vista_preferida()
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
			    $_POST["vistaPreferida"] = "Lista sin imágenes";
			    $_POST["idUsuario"] = 41;
		    */
		
		    if (isset($_POST["vistaPreferida"]))
		    {
			    $preferenciaVista = $this->Usermeta->find_one(array(
			    'conditions' => array(
			    'user_id' => array($_POST['idUsuario']),
			    'meta_key' => array('CRMdapliw_vista_preferida'))));
			
			    if (isset($preferenciaVista))
			    {
        		    $this->Usermeta->update($preferenciaVista->umeta_id, array('meta_value' => $_POST["vistaPreferida"]));    
				    $jsondata["satisfactorio"] = true;
				    $jsondata["mensaje"] = "La preferencia de vista se actualizó satisfactoriamente";	
			    }
			    else
			    {
				    $usermeta = ['user_id' => $_POST['idUsuario'], 'meta_key' => 'CRMdapliw_vista_preferida', 'meta_value' => $_POST["vistaPreferida"]];
				    $idUsermeta = $this->Usermeta->insert($usermeta);

                    if ($idUsermeta == 0)
                    {
                        $binnacle = 
                            [
                                "novedad" => "No se pudo actualizar la preferencia de vista del usuario " . $_POST["idusuario"],
                                "tipo_clase" => "controlador",
                                "nombre_clase" => "Usermetas",
                                "nombre_metodo" => "actualizar_vista_preferida"                             
                            ];

                        $idBinnacle = $this->Binnacle->insert($binnacle);
			            $jsondata["satisfactorio"] = false;
                        $jsondata["mensaje"] = "No se pudo actualizar la preferencia de vista";
				    }
				    else
				    {
					    $jsondata["satisfactorio"] = true;
					    $jsondata["mensaje"] = "La preferencia de vista se actualizó satisfactoriamente";				
				    }
			    }
		    }
		    else
		    {
			    $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "No se pudo actualizar la preferencia de vista. Datos recibidos incorrectos";
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

	public function eliminar_persona()
	{
        $this->autoRender = false;

        $jsondata = [];
        $rolesAutorizados = 
            [
                "Gestor de negocios",
                "Administrador"
            ];

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {
            $this->load_model("Binnacle");
				
		    /* Descomentar solo para pruebas
			    $_POST["vistaPreferida"] = "Lista sin imágenes";
			    $_POST["idUsuario"] = 41;
		    */
		
		    if (isset($_POST["idPersonaEliminar"]))
		    {
			    $estatusPersona = $this->Usermeta->find_one(array(
			    'conditions' => array(
			    'user_id' => array($_POST['idPersonaEliminar']),
			    'meta_key' => array('CRMdapliw_estatus'))));
			
			    if (isset($estatusPersona))
			    {
        		    $this->Usermeta->update($estatusPersona->umeta_id, array('meta_value' => "ELIMINADO"));    
				    $jsondata["satisfactorio"] = true;
				    $jsondata["mensaje"] = "El usuario se eliminó correctamente";	
			    }
			    else
			    {
                    $binnacle = 
                        [
                            "novedad" => "No se pudo eliminar el usuario. No existe el registro usermeta " . $_POST["idPersonaEliminar"],
                            "tipo_clase" => "controlador",
                            "nombre_clase" => "Usermetas",
                            "nombre_metodo" => "eliminar_persona"                             
                        ];

                    $idBinnacle = $this->Binnacle->insert($binnacle);
		            $jsondata["satisfactorio"] = false;
                    $jsondata["mensaje"] = "No se pudo eliminar el usuario. No existe el registro usermeta";
			    }
		    }
		    else
		    {
			    $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "No se pudo eliminar el usuario. Datos recibidos incorrectos";
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

	public function guardar_preferencia()
	{
        $this->autoRender = false;

        $jsondata = [];
        $rolesAutorizados = 
            [
                "Promotor",
                "Gestor de negocios",
                "Administrador"
            ];

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {
            $this->load_model("Binnacle");
					
		    if (isset($_POST["idUsuario"]))
		    {
			    $preferenciasCliente = $this->Usermeta->find_one(array(
			    'conditions' => array(
			    'user_id' => array($_POST['idUsuario']),
			    'meta_key' => array('CRMdapliw_preferencias'))));
			
			    if (isset($preferenciasCliente))
			    {
                    $vectorPreferencias = json_decode($preferenciasCliente->meta_value, true);
                    $vectorPreferencias[] = $_POST["preferencia"];

        		    $this->Usermeta->update($preferenciasCliente->umeta_id, array('meta_value' => json_encode($vectorPreferencias)));    
				    $jsondata["satisfactorio"] = true;
				    $jsondata["mensaje"] = "La preferencia del cliente se registró exitosamente";	
			    }
			    else
			    {
                    $vectorPreferencias = [];
                    $vectorPreferencias[] = $_POST["preferencia"];
				    $usermeta = ['user_id' => $_POST['idUsuario'], 'meta_key' => 'CRMdapliw_preferencias', 'meta_value' => json_encode($vectorPreferencias)];
				    $idUsermeta = $this->Usermeta->insert($usermeta);

                    if ($idUsermeta == 0)
                    {
                        $binnacle = 
                            [
                                "novedad" => "No se pudo registrar la preferencia del cliente" . $_POST["idusuario"],
                                "tipo_clase" => "controlador",
                                "nombre_clase" => "Usermetas",
                                "nombre_metodo" => "guardar_preferencia"                             
                            ];

                        $idBinnacle = $this->Binnacle->insert($binnacle);
			            $jsondata["satisfactorio"] = false;
                        $jsondata["mensaje"] = "No se pudo registrar la preferencia del cliente";
				    }
				    else
				    {
					    $jsondata["satisfactorio"] = true;
					    $jsondata["mensaje"] = "La preferencia del cliente ser registró satisfactoriamente";				
				    }
			    }
		    }
		    else
		    {
			    $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "No se pudo registrar la preferencia del cliente. Datos recibidos incorrectos";
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

	public function guardar_cambios_preferencia()
	{
        $this->autoRender = false;

        $jsondata = [];
        $rolesAutorizados = 
            [
                "Promotor",
                "Gestor de negocios",
                "Administrador"
            ];

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {
            $this->load_model("Binnacle");
					
		    if (isset($_POST["idUsuario"]))
		    {
			    $preferenciasCliente = $this->Usermeta->find_one(array(
			    'conditions' => array(
			    'user_id' => array($_POST['idUsuario']),
			    'meta_key' => array('CRMdapliw_preferencias'))));
			
			    if (isset($preferenciasCliente))
			    {
                    $vectorPreferencias = json_decode($preferenciasCliente->meta_value, true);
                    $vectorPreferencias[$_POST["clavePreferencia"]] = $_POST["preferencia"];

        		    $this->Usermeta->update($preferenciasCliente->umeta_id, array('meta_value' => json_encode($vectorPreferencias)));    
				    $jsondata["satisfactorio"] = true;
				    $jsondata["mensaje"] = "La preferencia del cliente se actualizó exitosamente";	
			    }
			    else
			    {
                    $binnacle = 
                        [
                            "novedad" => "No se pudo actualizar la preferencia del cliente" . $_POST["idusuario"],
                            "tipo_clase" => "controlador",
                            "nombre_clase" => "Usermetas",
                            "nombre_metodo" => "guardar_cambios_preferencia"                             
                        ];

                    $idBinnacle = $this->Binnacle->insert($binnacle);
                    $jsondata["satisfactorio"] = false;
                    $jsondata["mensaje"] = "No se pudo actualizar la preferencia del cliente";
			    }
		    }
		    else
		    {
			    $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "No se pudo actualizar la preferencia del cliente. Datos recibidos incorrectos";
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

	public function eliminar_preferencia()
	{
        $this->autoRender = false;

        $jsondata = [];
        $rolesAutorizados = 
            [
                "Promotor",
                "Gestor de negocios",
                "Administrador"
            ];

        $accesoPermitido = $this->verificar_permisos($rolesAutorizados);

        if ($accesoPermitido == "true")
        {
            $this->load_model("Binnacle");
					
		    if (isset($_POST["idUsuario"]))
		    {
			    $preferenciasCliente = $this->Usermeta->find_one(array(
			    'conditions' => array(
			    'user_id' => array($_POST['idUsuario']),
			    'meta_key' => array('CRMdapliw_preferencias'))));
			
			    if (isset($preferenciasCliente))
			    {
                    $vectorPreferencias = json_decode($preferenciasCliente->meta_value, true);
                    $vectorPreferencias[$_POST["clavePreferencia"]]["Estatus"] = "Eliminada";

        		    $this->Usermeta->update($preferenciasCliente->umeta_id, array('meta_value' => json_encode($vectorPreferencias)));    
				    $jsondata["satisfactorio"] = true;
				    $jsondata["mensaje"] = "La preferencia se eliminó exitosamente";	
			    }
			    else
			    {
                    $binnacle = 
                        [
                            "novedad" => "No se pudo eliminar la preferencia del cliente" . $_POST["idusuario"],
                            "tipo_clase" => "controlador",
                            "nombre_clase" => "Usermetas",
                            "nombre_metodo" => "eliminar_preferencia"                             
                        ];

                    $idBinnacle = $this->Binnacle->insert($binnacle);
                    $jsondata["satisfactorio"] = false;
                    $jsondata["mensaje"] = "No se pudo eliminar la preferencia del cliente";
			    }
		    }
		    else
		    {
			    $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "No se pudo eliminar la preferencia del cliente. Datos recibidos incorrectos";
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
}