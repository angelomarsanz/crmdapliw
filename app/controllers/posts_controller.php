<?php

class PostsController extends MvcPublicController 
{
    public function test_function()
    {
        inspiry_new_user_notification( 18, 123 );
    }

    public function index() 
    {
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
            $vectorGeneral = $this->cargar_vectores();
            $this->set("vectorGeneral", $vectorGeneral);                   
        }
    }

    public function cargar_vectores() 
    {   
        $this->autoRender = false;

        $usuarioConectado = wp_get_current_user();
        $idUsuario = $usuarioConectado->id;
        $nombreUsuario = $usuarioConectado->display_name;

        $indicadorCaptadorPropietario = 0;
        $indicadorPromotorCliente = 0;
        $vistaPreferida = "Lista sin imágenes";
        
        $this->load_model('Usermeta');

        $userMetas = $this->Usermeta->find(array(
            'joins' => array('User'),
            'selects' => array('User.ID', 'User.user_email', 'Usermeta.user_id', 'Usermeta.meta_key', 'Usermeta.meta_value', 'Usermeta.umeta_id'),
            'conditions' => array(
                // 'User.ID' => array(32),
                'Usermeta.meta_key' => array("first_name", "last_name", "CRMdapliw_roles", "CRMdapliw_promotor_cliente", "CRMdapliw_captador_propietario", 
                "CRMdapliw_estatus", "CRMdapliw_vista_preferida", "profile_image_id", "CRMdapliw_identificacion",
                "CRMdapliw_celular", "CRMdapliw_telefono_fijo", "CRMdapliw_direccion", "CRMdapliw_preferencias")),
            'order' => 'User.ID ASC, Usermeta.meta_key ASC, Usermeta.umeta_id ASC')); 

        foreach ($userMetas as $userMeta)
        {
            if ($userMeta->ID == $usuarioConectado->id)
            { 
                if ($userMeta->meta_key == "CRMdapliw_roles")
                {
                    $roles = json_decode($userMeta->meta_value, true);
                }
                elseif ($userMeta->meta_key == "CRMdapliw_vista_preferida")
                {
                    $vistaPreferida = $userMeta->meta_value;
                }
            }
        }
       
        $contadorUsuarios = 0;
        $idUsuarioActual = "";
        $usuarios = [];
        $idFotoPerfil = 0;
        foreach ($userMetas as $userMeta)
        {
            if ($contadorUsuarios == 0)
            {
                $idUsuarioActual = $userMeta->ID;
                $usuarios[$idUsuarioActual]["email"] = $userMeta->user_email;
            }
            if ($idUsuarioActual != $userMeta->ID)
            {
                if ($idFotoPerfil > 0)
                {
                    $postPerfil = $this->Post->find_by_id($idFotoPerfil);
				    $usuarios[$idUsuarioActual]["fotoPerfil"] = $postPerfil->guid;
                    $idFotoPerfil = 0;
                }
                $idUsuarioActual = $userMeta->ID;
                $usuarios[$idUsuarioActual]["email"] = $userMeta->user_email;
            }
            if ($userMeta->meta_key == "CRMdapliw_roles")
            {
                $usuarios[$idUsuarioActual][$userMeta->meta_key] = json_decode($userMeta->meta_value);
            }
            elseif ($userMeta->meta_key == "profile_image_id")
            {
                $idFotoPerfil = $userMeta->meta_value;
            }
            elseif ($userMeta->meta_key == "CRMdapliw_preferencias")
            {
				$usuarios[$idUsuarioActual][$userMeta->meta_key] = json_decode($userMeta->meta_value);
			}
            else
            {
                $usuarios[$idUsuarioActual][$userMeta->meta_key] = $userMeta->meta_value;
            }
            $contadorUsuarios++;
        }

        $usuariosAsc = $this->array_orderby($usuarios, 'first_name', SORT_ASC, 'last_name', SORT_ASC ); 
 
        $personas = [];
        $administradores = [];
        $gestores = [];
        $captadores = [];
        $promotores = [];
        $propietarios = [];
        $clientes = [];
        $outsourcing = [];

        foreach ($usuariosAsc as $clave => $usuario)
        {
            if ($usuario["CRMdapliw_estatus"] == "ACTIVO")
            {
                $nombreCompleto = $usuario["first_name"] . ' ' . $usuario["last_name"];

                foreach ($usuario["CRMdapliw_roles"] as $rol)
                {
                    if ($rol == "Promotor")
                    {   
                        if (in_array("Gestor de negocios", $roles) || in_array("Administrador", $roles))
                        {
                            $nombreRol = $nombreCompleto . " - ASESOR(A) DE INVERSIÓN INMOBILIARIA";
                            $personas[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                            $promotores[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                        }
                    }
                    elseif ($rol == "Captador")
                    { 
                        if (in_array("Gestor de negocios", $roles) || in_array("Administrador", $roles))
                        {
                            $nombreRol = $nombreCompleto . " - CAPTADOR(A)";
                            $personas[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                            $captadores[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                        }

                    }
                    elseif ($rol == "Gestor de negocios")
                    {   
                        if (in_array("Administrador", $roles))
                        {
                            $nombreRol = $nombreCompleto . " - GESTOR DE NEGOCIOS";
                            $personas[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                            $gestores[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                        }
                    }
                    elseif ($rol == "Administrador")
                    {   
                        if (in_array("Administrador", $roles))
                        {
                            $nombreRol = $nombreCompleto . " - ADMINISTRADOR(A)";
                            $personas[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                            $administradores[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                        }
                    }
                    elseif ($rol == "Propietario")
                    {   
                        $nombreRol = $nombreCompleto . " - PROPIETARIO(A)";
                        $indicadorCaptadorPropietario = 0;

                        if (in_array("Captador", $roles))
                        {
                            if ($usuario["CRMdapliw_captador_propietario"] == $idUsuario)
                            {
                                $indicadorCaptadorPropietario = 1;
                            } 
                        }

                        if ($indicadorCaptadorPropietario == 1 || in_array("Gestor de negocios", $roles) || in_array("Administrador", $roles))
                        {
                            $personas[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                            $propietarios[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                        }
                    }                       
                    elseif ($rol == "Cliente")
                    {  
                        $nombreRol = $nombreCompleto . " - COMPRADOR(A)";
                        $indicadorPromotorCliente = 0; 


                        if (in_array("Promotor", $roles))
                        {
                            if ($usuario["CRMdapliw_promotor_cliente"] == $idUsuario)
                            {
                                $indicadorPromotorCliente = 1;
                            }
                        } 

                        if ($indicadorPromotorCliente == 1 || in_array("Gestor de negocios", $roles) || in_array("Administrador", $roles))
                        {
                            $personas[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                            $clientes[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                        }
                    }
                    elseif ($rol == "Outsourcing")
                    { 
                        if (in_array("Gestor de negocios", $roles) || in_array("Administrador", $roles))
                        {
                            $nombreRol = $nombreCompleto . " - OUTSOURCING(A)";
                            $personas[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                            $outsourcing[] = ["label" => $nombreRol, "value" => $nombreRol, "id" => $clave];
                        }
                    }
                }
            }
        }

        $this->load_model('Postmeta');

        $posts = $this->Post->find(array('order' => 'ID ASC'));

        $bienes = $this->Post->find(array(
            'selects' => array('ID', 'post_title', 'post_author', 'guid', 'post_status', 'post_type'),
            'conditions' => array(
            // 'ID' => array(5297),
            'post_type' => 'property',
            'post_status' => array('Publish', 'Pending')),
            'order' => 'post_title ASC'));

        $propiedadesBienes = $this->Postmeta->find(array(
            'joins' => array('Post'),
            'includes' => array('Post'),
            'conditions' => array(
            // 'Post.ID' => array(5297),
            'Post.post_type' => array('property'),
            'Post.post_status' => array('Publish', 'Pending')),
            'order' => 'Post.ID ASC, Postmeta.meta_key ASC, Postmeta.meta_id ASC'));            
            
        $matrizBienes = [];
        $bienesAutocomplete = [];
        foreach ($bienes as $bien)
        {
            $matrizBienes[$bien->ID]['post_title'] = $bien->post_title;
            $matrizBienes[$bien->ID]['post_author'] = $bien->post_author;
            $matrizBienes[$bien->ID]['nombre_autor'] = $usuarios[$bien->post_author]['first_name'] . ' ' . $usuarios[$bien->post_author]['last_name'];

            $matrizBienes[$bien->ID]['guid'] = $bien->guid;
            $matrizBienes[$bien->ID]['post_status'] = $bien->post_status;
            $bienesAutocomplete[] = ["label" => $bien->post_title, "value" => $bien->post_title, "id" => $bien->ID];
        }

        $contadorDatos = 0;
        foreach ($propiedadesBienes as $propiedadesBien)
        {
            if ($propiedadesBien->meta_key == "CRMdapliw_captador_anterior")
            {
                if ($contadorDatos == 0)
                {
                    $matrizBienes[$propiedadesBien->post_id]['captador'] = 
                        $usuarios[$propiedadesBien->meta_value]['first_name'] . ' ' . $usuarios[$propiedadesBien->meta_value]['last_name'];

                    $bienActual = $propiedadesBien->post_id;
                }

                if ($bienActual != $propiedadesBien->post_id)
                {
                    $matrizBienes[$propiedadesBien->post_id]['captador'] = 
                        $usuarios[$propiedadesBien->meta_value]['first_name'] . ' ' . $usuarios[$propiedadesBien->meta_value]['last_name'];

                    $bienActual = $propiedadesBien->post_id;
                }

                $contadorDatos++;
            }
            elseif ($propiedadesBien->meta_key == "CRMdapliw_propietario")
            {
                $indicadorCaptadorPropietario = 0;

                if (in_array("Promotor", $roles) || in_array("Captador", $roles))
                {
                    if ($matrizBienes[$propiedadesBien->post_id]['post_author'] == $idUsuario)
                    {
                        $indicadorCaptadorPropietario = 1;
                    }  
                }
                
                if ($indicadorCaptadorPropietario == 1 || in_array("Gestor de negocios", $roles) || in_array("Administrador", $roles))
                {
                    $matrizBienes[$propiedadesBien->post_id]['propietario'] = 
                        $usuarios[$propiedadesBien->meta_value]['first_name'] . ' ' . $usuarios[$propiedadesBien->meta_value]['last_name'];
                }
            }
        }
        
        $contadorDatos = 0;
        $keyActual = 0;
        $idPostAnterior = 0;
        $datosBienes = [];
		$notificaciones = 0;
        foreach ($propiedadesBienes as $propiedadesBien)
        {
            if ($contadorDatos == 0)
            {
                $keyActual = $propiedadesBien->meta_key;
            }
            elseif ($keyActual != $propiedadesBien->meta_key)
            {
                if ($keyActual == "CRMdapliw_actividad_agenda")
                {                       
                    $arregloInvertido = $this->array_orderby($datosBienes[$idPostAnterior]["CRMdapliw_actividad_agenda"], 'fechaInvertida', SORT_ASC); 

                    $datosBienes[$idPostAnterior]["CRMdapliw_actividad_agenda"] = $arregloInvertido;
                }
                elseif ($keyActual == "CRMdapliw_cliente")
                {                       
                    $arregloInvertido = $this->array_orderby($datosBienes[$idPostAnterior]["CRMdapliw_cliente"], 'id', SORT_DESC); 

                    $datosBienes[$idPostAnterior]["CRMdapliw_cliente"] = $arregloInvertido;
                }

                $keyActual = $propiedadesBien->meta_key;
            }
            
            if ($propiedadesBien->meta_key == "CRMdapliw_actividad_agenda")
            {
                $idPostAnterior = $propiedadesBien->post_id;
                $arregloActividad = json_decode($propiedadesBien->meta_value, true);
                
                $arregloActividad["id"] = $propiedadesBien->meta_id;
                $arregloActividad["fechaInvertida"] = 
                    $arregloActividad["anoPlanificado"] . $arregloActividad["mesPlanificado"] . $arregloActividad["diaPlanificado"];

                if ($arregloActividad["estatus"] == "Abierta")
                {
                    if ($arregloActividad["notificacion"] == "No vista")
                    {
                        if ($arregloActividad["idEjecutor"] == $idUsuario)
                        {
                            $notificaciones++;
                        }
                    }
                }
                
                /* Descomentar solo para pruebas
                var_dump($arregloActividad); 
                echo "<br />";
                echo "<br />";
                */

                $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = $arregloActividad;
            }
            elseif ($propiedadesBien->meta_key == "REAL_HOMES_property_images")
            {
                $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = 
                    ["valor" => $this->buscar_url($propiedadesBien->meta_value, $posts), "id" => $propiedadesBien->meta_id];
            }
            elseif ($propiedadesBien->meta_key == "_thumbnail_id")
            {
                $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = 
                    ["valor" => $this->buscar_url($propiedadesBien->meta_value, $posts), "id" => $propiedadesBien->meta_id];
            }
            elseif ($propiedadesBien->meta_key == "CRMdapliw_cliente")
            {
                $idPostAnterior = $propiedadesBien->post_id;

                $arregloCliente = json_decode($propiedadesBien->meta_value, true);

                $indicadorPromotorCliente = 0;

                if (in_array("Promotor", $roles) || in_array("Captador", $roles))
                {
                    if ($usuarios[$arregloCliente["idUser"]]["CRMdapliw_promotor_cliente"] == $idUsuario)
                    {
                        $indicadorPromotorCliente = 1;
                    }
                }

                if ($indicadorPromotorCliente == 1 || in_array("Gestor de negocios", $roles) || in_array("Administrador", $roles))
                {                     
                    $idPromotorCliente = $usuarios[$arregloCliente["idUser"]]["CRMdapliw_promotor_cliente"];
                    $nombrePromotorCliente = $usuarios[$idPromotorCliente]["first_name"] . " " . $usuarios[$idPromotorCliente]["last_name"]; 

                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = 
                        ["valor" => $usuarios[$arregloCliente["idUser"]]["first_name"] . ' ' . $usuarios[$arregloCliente["idUser"]]["last_name"], 
                        "id" => $propiedadesBien->meta_id, "idUser" => $arregloCliente["idUser"], 
                        "activo" => $arregloCliente["activo"], "idPromotorCliente" => $idPromotorCliente,
                        "nombrePromotorCliente" => $nombrePromotorCliente];
                }
                else
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = 
                        ["valor" => "", 
                        "id" => $propiedadesBien->meta_id, "idUser" => 0, 
                        "activo" => "false", "idPromotorCliente" => 0,
                        "nombrePromotorCliente" => ""];
                }
            }
            else
            {
                $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][] = 
                    ["valor" => $propiedadesBien->meta_value, "id" => $propiedadesBien->meta_id];           
            }

            $contadorDatos++;
        }

        $opcionesActividades = $this->Postmeta->find(array(
            'conditions' => array(
                'meta_key' => array('CRMdapliw_opcion_actividades'))));

        $arregloOpciones = [];
        $opcionesSelectActividades = "";

        if (isset($opcionesActividades))
        {
            if (in_array("Administrador", $roles))
            {
                foreach ($opcionesActividades as $opcion)
                {   
                    $actividad = json_decode($opcion->meta_value, true);
                    if ($actividad["estatus"] == "Activa")
                    {
                        $arregloOpciones[] = ["opcion" => $actividad["opcion"], "rol" => $actividad["rol"]];
                    }
                }
            }
            else
            {
                foreach ($opcionesActividades as $opcion)
                {   
                    $actividad = json_decode($opcion->meta_value, true);
                    if ($actividad["estatus"] == "Activa")
                    {                        
                        if (in_array($actividad["rol"], $roles))
                        {
                            $arregloOpciones[] = ["opcion" => $actividad["opcion"], "rol" => $actividad["rol"]];
                        }                        
                    }
                }
            }

            $arregloOpcionesOrdenado = $this->array_orderby($arregloOpciones, 'opcion', SORT_ASC); 
            $contadorOpciones = 0;
            foreach ($arregloOpcionesOrdenado as $ordenado)
            {
                if ($contadorOpciones == 0)
                {
                    $opcionesSelectActividades .= "<option selected value=''></option>";
                }
                $opcionesSelectActividades .= 
                    "<option value='" . $ordenado["opcion"] . "'>" .
                    $ordenado["opcion"] . " (" . $ordenado["rol"] . ")</option>";
                $contadorOpciones++;
            }
        }

        $vectorGeneral =
            [
                "idUsuario" => $idUsuario,
                "nombreUsuario" => $nombreUsuario,
                "roles" => $roles,
                "vistaPreferida" => $vistaPreferida,
                "personas" => $personas,
                "administradores" => $administradores,
                "gestores" => $gestores,
                "captadores" => $captadores,
                "promotores" => $promotores,
                "propietarios" => $propietarios,
                "clientes" => $clientes,
                "outsourcing" => $outsourcing,                
                "userMetas" => $userMetas,
                "usuarios" => $usuarios,           
                "bienes" => $bienes,
                "propiedadesBienes" => $propiedadesBienes,
                "matrizBienes" => $matrizBienes,
                "bienesAutocomplete" => $bienesAutocomplete,
                "datosBienes" => $datosBienes,
                "notificaciones" => $notificaciones,
                "opcionesSelectActividades" => $opcionesSelectActividades
            ];

        return $vectorGeneral;        
    }

    public function buscar_url($id= null, $posts = null)
    {
        $url = "";
        foreach ($posts as $post)
        {
            if ($post->ID == $id)
            {
                $url = $post->guid;
            }
        }
        return $url;
    }

    public function array_orderby()
    {
        $args = func_get_args();
        $data = array_shift($args);
        foreach ($args as $n => $field) {
            if (is_string($field)) {
                $tmp = array();
                foreach ($data as $key => $row)
                    $tmp[$key] = $row[$field];
                $args[$n] = $tmp;
                }
        }
        $args[] = &$data;
        call_user_func_array('array_multisort', $args);
        return array_pop($args);
    }

    public function actualizar_captador()
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
            /* Solo para pruebas
            $_POST['idBien'] = 5297;
            $_POST['idPromotorAnterior'] = "1";
            $_POST['idPromotorActual'] = 32;
            */

            if (isset($_POST['idBien']))
            {
                $this->load_model('Postmeta');
                
                $postmeta = ['post_id' => $_POST['idBien'], 'meta_key' => 'CRMdapliw_captador_anterior', 'meta_value' => $_POST['idCaptadorAnterior']];
                $id = $this->Postmeta->insert($postmeta);

                $object = $this->Post->find_by_id($_POST["idBien"]);
                $this->Post->update($object->__id, array('post_author' => $_POST['idNuevoCaptador']));

                $jsondata["satisfactorio"] = true;
                $jsondata["mensaje"] = "El captador se actualizó exitosamente";
            }
            else
            {
                $jsondata["satisfactorio"] = false;
                $jsondata["mensaje"] = "El captador no se pudo actualizar";
            }
            $vectorGeneral = $this->cargar_vectores();
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

    public function crear_opciones_actividades()
    {
        $this->load_model('Binnacle');
        $this->load_model('Postmeta');

        $actividadesAgenda = $this->Binnacle->find(array(
            'selects' => array('novedad', 'columna_extra1', 'columna_extra2'),
            'conditions' => array(
                'novedad' => array("Actividades agenda"))));

        foreach($actividadesAgenda as $actividad)
        {
            $opcion = ["opcion" => $actividad->columna_extra1, "rol" => $actividad->columna_extra2, "estatus" => "Activa"];  
            $postmeta = ['post_id' => "6080", 'meta_key' => 'CRMdapliw_opcion_actividades', 'meta_value' => json_encode($opcion)]; 
            $idPostmeta = $this->Postmeta->insert($postmeta);  
        }
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
