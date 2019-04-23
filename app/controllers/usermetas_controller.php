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
