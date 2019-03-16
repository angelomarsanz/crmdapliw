<?php

class PostsController extends MvcPublicController 
{
    public function test_function()
    {
        $user = wp_get_current_user();

        if ($user->id > 0)
        {   
            $this->load_model('Postmeta');

            $posts = $this->Post->find(array('order' => 'ID ASC'));

            $bienes = $this->Post->find(array(
                'conditions' => array(
                'ID' => array(5548),
                'post_type' => 'property',
                'post_status' => array('Publish', 'Pending')),
                'order' => 'post_title ASC'));

            $propiedadesBienes = $this->Postmeta->find(array(
                'joins' => array('Post'),
                'includes' => array('Post'),
                'conditions' => array(
                'Post.ID' => array(5548),
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
                        var_dump($datosBienes[$idPostAnterior]["CRMdapliw_actividad_agenda"]);
                        echo "<br />";
                        echo "<br />";
                        
                        $arregloInvertido = $this->array_orderby($datosBienes[$idPostAnterior]["CRMdapliw_actividad_agenda"], 'fechaInvertida', SORT_ASC); 

                        $datosBienes[$idPostAnterior]["CRMdapliw_actividad_agenda"] = $arregloInvertido;

                        var_dump($datosBienes[$idPostAnterior]["CRMdapliw_actividad_agenda"]);
                        echo "<br />";
                        echo "<br />";
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
                    /*
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
                else
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][$posicion] = 
                        ["valor" => $propiedadesBien->meta_value, "id" => $propiedadesBien->meta_id, "posicionOriginal" => $posicion];           
                }
                $contadorDatos++;
            }

            $this->set('posts', $posts);
            $this->set('bienes', $bienes);
            $this->set('propiedadesBienes', $propiedadesBienes);
            $this->set('matrizBienes', $matrizBienes);
            $this->set('datosBienes', $datosBienes);            
        }
    }

    public function index() 
    {
        $user = wp_get_current_user();

        if ($user->id > 0)
        {        
            $this->load_model('Usermeta');

            $userMetas = $this->Usermeta->find(array(
                'joins' => array('User'),
                'selects' => array('User.ID', 'User.user_email', 'Usermeta.user_id', 'Usermeta.meta_key', 'Usermeta.meta_value', 'Usermeta.umeta_id'),
                'conditions' => array(
                    // 'User.ID' => array(32),
                    'Usermeta.meta_key' => array("first_name", "last_name")),
                'order' => 'User.ID ASC, Usermeta.meta_key ASC, Usermeta.umeta_id ASC'));            

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
                $usuarios[$idUsuarioActual][$userMeta->meta_key] = $userMeta->meta_value;
                $contadorUsuarios++;
            }

            $usuariosA = [];
    
            foreach ($usuarios as $clave => $usuario)
            {
                $nombreCompleto = $usuario["first_name"] . ' ' . $usuario["last_name"];
                $usuariosA[] = ["label" => $nombreCompleto, "value" => $nombreCompleto, "id" => $clave];
            }

            $usuariosAsc = $this->array_orderby($usuariosA, 'label', SORT_ASC); 

            $this->load_model('Postmeta');

            $posts = $this->Post->find(array('order' => 'ID ASC'));

            $bienes = $this->Post->find(array(
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
                    /*
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
                else
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][$posicion] = 
                        ["valor" => $propiedadesBien->meta_value, "id" => $propiedadesBien->meta_id, "posicionOriginal" => $posicion];           
                }
                $contadorDatos++;
            }

            $this->set("usuariosAsc", $usuariosAsc);
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

    public function actualizar_promotor()
    {
        $this->autoRender = false;

        /*
        $_POST['idBien'] = 5297;
        $_POST['idPromotorAnterior'] = "1";
        $_POST['idPromotorActual'] = 32;
        */

        if (isset($_POST['idBien']))
        {
            $jsondata = [];

            $this->load_model('Postmeta');
            
            $postmeta = ['post_id' => $_POST['idBien'], 'meta_key' => 'CRMdapliw_promotor_anterior', 'meta_value' => $_POST['idPromotorAnterior']];
            $id = $this->Postmeta->insert($postmeta);

            $object = $this->Post->find_by_id($_POST["idBien"]);
            $this->Post->update($object->__id, array('post_author' => $_POST['idNuevoPromotor']));

            $jsondata["satisfactorio"] = true;
            $jsondata["mensaje"] = "El promotor se actualizó exitosamente";
        }
        else
        {
            $jsondata["satisfactorio"] = false;
            $jsondata["mensaje"] = "El promotor no se pudo actualizar";
        }
        exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
    }
}
