<?php

class PostsController extends MvcPublicController 
{
    public function test_function()
    {

    }

    public function index() 
    {
        $usuarioConectado = wp_get_current_user();
        $idUsuario = $usuarioConectado->id;
        
        $indicadorCaptadorPropietario = 0;
        $indicadorPromotorCliente = 0;
        
        if ($usuarioConectado->id > 0)
        {        
            $this->load_model('Usermeta');

            $userMetas = $this->Usermeta->find(array(
                'joins' => array('User'),
                'selects' => array('User.ID', 'User.user_email', 'Usermeta.user_id', 'Usermeta.meta_key', 'Usermeta.meta_value', 'Usermeta.umeta_id'),
                'conditions' => array(
                    // 'User.ID' => array(32),
                    'Usermeta.meta_key' => array("first_name", "last_name", "CRMdapliw_roles", "CRMdapliw_promotor_cliente", "CRMdapliw_captador_propietario")),
                'order' => 'User.ID ASC, Usermeta.meta_key ASC, Usermeta.umeta_id ASC')); 

            foreach ($userMetas as $userMeta)
            {
                if ($userMeta->ID == $usuarioConectado->id)
                { 
                    if ($userMeta->meta_key == "CRMdapliw_roles")
                    {
                        $roles = json_decode($userMeta->meta_value, true);
                    }
                }
            }

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
           
            $contadorUsuarios = 0;
            $idUsuarioActual = "";
            $usuarios = [];
            foreach ($userMetas as $userMeta)
            {
                if ($contadorUsuarios == 0)
                {
                    $idUsuarioActual = $userMeta->ID;
                    $usuarios[$idUsuarioActual]["email"] = $userMeta->user_email;
                }
                if ($idUsuarioActual != $userMeta->ID)
                {
                    $idUsuarioActual = $userMeta->ID;
                    $usuarios[$idUsuarioActual]["email"] = $userMeta->user_email;
                }
                if ($userMeta->meta_key == "CRMdapliw_roles")
                {
                    $usuarios[$idUsuarioActual][$userMeta->meta_key] = json_decode($userMeta->meta_value);
                }
                else
                {
                    $usuarios[$idUsuarioActual][$userMeta->meta_key] = $userMeta->meta_value;
                }
                $contadorUsuarios++;
            }

            $captadores = [];
            $promotores = [];
            $propietarios = [];
            $clientes = [];

            foreach ($usuarios as $clave => $usuario)
            {
                $nombreCompleto = $usuario["first_name"] . ' ' . $usuario["last_name"];

                foreach ($usuario["CRMdapliw_roles"] as $rol)
                {
                    if ($rol == "Promotor")
                    {   
                        $promotores[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                    }
                    elseif ($rol == "Captador")
                    { 
                        $captadores[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                    }
                    elseif ($rol == "Gestor de negocios")
                    {   
                        $gestores[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                    }
                    elseif ($rol == "Propietario")
                    {   
                        $indicadorCaptadorPropietario = 0;

                        if ($permiso < 3 && $usuario["CRMdapliw_captador_propietario"] == $idUsuario)
                        {
                            $indicadorCaptadorPropietario = 1;
                        } 

                        if ($indicadorCaptadorPropietario == 1 || $permiso > 3)
                        {
                            $propietarios[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                        }
                    }                       
                    elseif ($rol == "Cliente")
                    {  
                        $indicadorPromotorCliente = 0; 

                        if ($permiso < 3 && $usuario["CRMdapliw_promotor_cliente"] == $idUsuario)
                        {
                            $indicadorPromotorCliente = 1;
                        } 

                        if ($indicadorPromotorCliente == 1 || $permiso > 3)
                        {
                            $clientes[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
                        }
                    }
                }
            }
            $promotoresAsc = $this->array_orderby($promotores, 'label', SORT_ASC); 
            $captadoresAsc = $this->array_orderby($captadores, 'label', SORT_ASC); 
            $gestoresAsc = $this->array_orderby($gestores, 'label', SORT_ASC); 
            if (isset($propietarios[0]["label"]))
            {
                $propietariosAsc = $this->array_orderby($propietarios, 'label', SORT_ASC); 
            }
            else
            {
                $propietariosAsc = [];
            }
            if (isset($clientes[0]["label"]))
            {
                $clientesAsc = $this->array_orderby($clientes, 'label', SORT_ASC); 
            }
            else
            {
                $clientesAsc = [];
            }
            $this->load_model('Postmeta');

            $posts = $this->Post->find(array('order' => 'ID ASC'));

            $bienes = $this->Post->find(array(
                'conditions' => array(
                'ID' => array(5297),
                'post_type' => 'property',
                'post_status' => array('Publish', 'Pending')),
                'order' => 'post_title ASC'));

            $propiedadesBienes = $this->Postmeta->find(array(
                'joins' => array('Post'),
                'includes' => array('Post'),
                'conditions' => array(
                'Post.ID' => array(5297),
                'Post.post_type' => array('property', 'CRMdapliw'),
                'Post.post_status' => array('Publish', 'Pending')),
                'order' => 'Post.ID ASC, Postmeta.meta_key ASC, Postmeta.meta_id ASC'));            
                
            $matrizBienes = [];
            foreach ($bienes as $bien)
            {
                $matrizBienes[$bien->ID]['post_title'] = $bien->post_title;
                $matrizBienes[$bien->ID]['post_author'] = $bien->post_author;
                $matrizBienes[$bien->ID]['nombre_autor'] = $usuarios[$bien->post_author]['first_name'] . ' ' . $usuarios[$bien->post_author]['last_name'];

                $matrizBienes[$bien->ID]['guid'] = $bien->guid;
                $matrizBienes[$bien->ID]['post_status'] = $bien->post_status;
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

                    if ($permiso < 3 && $matrizBienes[$propiedadesBien->post_id]['post_author'] == $idUsuario)
                    {
                        $indicadorCaptadorPropietario = 1;
                    }  
                    
                    if ($indicadorCaptadorPropietario == 1 || $permiso > 3)
                    {
                        $matrizBienes[$propiedadesBien->post_id]['propietario'] = 
                            $usuarios[$propiedadesBien->meta_value]['first_name'] . ' ' . $usuarios[$propiedadesBien->meta_value]['last_name'];
                    }
                }
            }
            
            $contadorDatos = 0;
            $posicion = 0;
            $keyActual = 0;
            $idPostAnterior = 0;
            $datosBienes = [];
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
                    $posicion = 0;
                    $keyActual = $propiedadesBien->meta_key;
                }
                else
                {
                    $posicion++;
                }
                
                if ($propiedadesBien->meta_key == "CRMdapliw_actividad_agenda")
                {
                    $idPostAnterior = $propiedadesBien->post_id;
                    $arregloActividad = [];
                    $arregloActividad = json_decode($propiedadesBien->meta_value, true);
                    
                    $arregloActividad["id"] = $propiedadesBien->meta_id;
                    $arregloActividad["posicionOriginal"] = $posicion;
                    $arregloActividad["fechaInvertida"] = 
                        $arregloActividad["anoPlanificado"] . $arregloActividad["mesPlanificado"] . $arregloActividad["diaPlanificado"];
                    
                    /* Para pruebas
                    var_dump($arregloActividad); 
                    echo "<br />";
                    echo "<br />";
                    */

                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][$posicion] = $arregloActividad;
                }
                elseif ($propiedadesBien->meta_key == "REAL_HOMES_property_images")
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][$posicion] = 
                        ["valor" => $this->buscar_url($propiedadesBien->meta_value, $posts), "id" => $propiedadesBien->meta_id, "posicionOriginal" => $posicion];
                }
                elseif ($propiedadesBien->meta_key == "_thumbnail_id")
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][$posicion] = 
                        ["valor" => $this->buscar_url($propiedadesBien->meta_value, $posts), "id" => $propiedadesBien->meta_id, "posicionOriginal" => $posicion];
                }
                elseif ($propiedadesBien->meta_key == "CRMdapliw_cliente")
                {
                    $arregloCliente = json_decode($propiedadesBien->meta_value, true);

                    $indicadorPromotorCliente = 0;

                    if ($permiso < 3 && $usuarios[$arregloCliente["idUser"]]["CRMdapliw_promotor_cliente"] == $idUsuario)
                    {
                        $indicadorPromotorCliente = 1;
                    }

                    if ($indicadorPromotorCliente == 1 || $permiso > 3)
                    {                     
                        $idPromotorCliente = $usuarios[$arregloCliente["idUser"]]["CRMdapliw_promotor_cliente"];
                        $nombrePromotorCliente = $usuarios[$idPromotorCliente]["first_name"] . " " . $usuarios[$idPromotorCliente]["last_name"]; 

                        $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][$posicion] = 
                            ["valor" => $usuarios[$arregloCliente["idUser"]]["first_name"] . ' ' . $usuarios[$arregloCliente["idUser"]]["last_name"], 
                            "id" => $propiedadesBien->meta_id, "posicionOriginal" => $posicion, "idUser" => $arregloCliente["idUser"], 
                            "activo" => $arregloCliente["activo"], "idPromotorCliente" => $idPromotorCliente,
                            "nombrePromotorCliente" => $nombrePromotorCliente];
                    }
                    else
                    {
                        $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][$posicion] = 
                            ["valor" => "", 
                            "id" => $propiedadesBien->meta_id, "posicionOriginal" => $posicion, "idUser" => 0, 
                            "activo" => "false", "idPromotorCliente" => 0,
                            "nombrePromotorCliente" => ""];
                    }
                }
                else
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][$posicion] = 
                        ["valor" => $propiedadesBien->meta_value, "id" => $propiedadesBien->meta_id, "posicionOriginal" => $posicion];           
                }

                $contadorDatos++;
            }

            $this->set("idUsuario", $idUsuario);
            $this->set("roles", $roles);
            $this->set("permiso", $permiso);
            $this->set("promotoresAsc", $promotoresAsc);
            $this->set("captadoresAsc", $captadoresAsc);
            $this->set("gestoresAsc", $gestoresAsc);
            $this->set("propietariosAsc", $propietariosAsc);
            $this->set("clientesAsc", $clientesAsc);
            $this->set("userMetas", $userMetas);
            $this->set("usuarios", $usuarios);           
            $this->set('posts', $posts);
            $this->set('bienes', $bienes);
            $this->set('propiedadesBienes', $propiedadesBienes);
            $this->set('matrizBienes', $matrizBienes);
            $this->set('datosBienes', $datosBienes);
        }
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

        /* Solo para pruebas
        $_POST['idBien'] = 5297;
        $_POST['idPromotorAnterior'] = "1";
        $_POST['idPromotorActual'] = 32;
        */

        if (isset($_POST['idBien']))
        {
            $jsondata = [];

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
        exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
    }
}
