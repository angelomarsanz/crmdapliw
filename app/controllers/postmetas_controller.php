<?php

class PostmetasController extends MvcPublicController 
{
    public function test_function()
    {
    }

    public function agregar_actividad()
    {
        $this->autoRender = false;

        $this->load_model("Binnacle");

        if (isset($_POST["idPost"]))
        {
            $jsondata = [];

            $postmeta = ["post_id" => $_POST["idPost"], "meta_key" => "CRMdapliw_actividad_agenda", "meta_value" => json_encode($_POST["actividad"])];
            $id = $this->Postmeta->insert($postmeta);

            if ($id > 0)
            {
                $actividad = $_POST["actividad"];

                if ($actividad["nombreActividad"] == "Solicitar cita para mostrar propiedad")
                {
                    $actividad["nombreActividad"] = "Solicitud cita para mostrar propiedad";
                    $actividad["informacionAdicional"] = "Solicitada por " . $actividad["informacionAdicional"]["solicitante"]; 
                    $actividad["idSolicitante"] = $actividad["idEjecutor"];                    
                    $actividad["notificacion"] = "No vista";
                    $actividad["idActividadPadre"] = $id;

                    $indicadorError = 0;

                    foreach ($actividad["informacionAdicional"]["destinatarios"] as $destinatario)
                    {
                        $actividad["idEjecutor"] = $destinatario;
                        $postmeta = ['post_id' => $_POST['idPost'], 'meta_key' => 'CRMdapliw_actividad_agenda', 'meta_value' => json_encode($actividad)];
                        $idHijo = $this->Postmeta->insert($postmeta);

                        if ($idHijo == 0)
                        {
                            $indicadorError = 1;
                            $binnacle = 
                                [
                                    "novedad" => "No se pudo crear la actividad coordinar visita a la propiedad para el usuario " . $destinatario;
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
                        $jsondata["id"] = $id;
                    }
                    else
                    {
                        $jsondata["satisfactorio"] = false;
                        $jsondata["mensaje"] = "No se pudo crear la actividad coordinar visita a la propiedad para el usuario " . $destinatario;
                    }
                }
                else
                {
                    $jsondata["satisfactorio"] = true;
                    $jsondata["mensaje"] = "La actividad se agregó correctamente";
                    $jsondata["id"] = $id;
                }
            }         
        }
        else
        {
            $jsondata["satisfactorio"] = false;
            $jsondata["mensaje"] = "No se pudo agregar la actividad";
        }
        exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
    }

    public function editar_actividad()
    {
        $this->autoRender = false;

        $jsondata = [];

        /* Descomentar solo para pruebas 
        $actividad = '{"actualizar":"Sí","idBien":"5297","idActividad":"5447","informacionAdicional":"ACTUALIZADA","diaPlanificado":"13","mesPlanificado":"11","anoPlanificado":"2019","estatus":"false"}';
        
        $_POST = json_decode($actividad, true);
        */

        if (isset($_POST["idActividad"]))
        {
            $object = $this->Postmeta->find_by_id($_POST["idActividad"]);

            $objetoActividad = json_decode($object->meta_value);
    
            $objetoActividad->informacionAdicional = $_POST["informacionAdicional"];

            if ($_POST["estatus"] == "true")
            {
                setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
                date_default_timezone_set('America/Caracas');
        
                $fechaHoy = new DateTime(); 
                $fechaFormato = $fechaHoy->format('d-m-Y');            
                $fechaVector = explode('-', $fechaFormato);
        
                $objetoActividad->diaCierre = $fechaVector[0];
                $objetoActividad->mesCierre = $fechaVector[1];
                $objetoActividad->anoCierre = $fechaVector[2];
        
                $objetoActividad->estatus = "true";  

                $jsonObjetoActividad = json_encode($objetoActividad);      
                $this->Postmeta->update($object->__id, array('meta_value' => $jsonObjetoActividad));

                $jsondata["satisfactorio"] = true;
                $jsondata["mensaje"] = "La actividad se cerró correctamente";    
     
            }
            else
            {
                $objetoActividad->diaPlanificado = $_POST["diaPlanificado"];
                $objetoActividad->mesPlanificado = $_POST["mesPlanificado"];
                $objetoActividad->anoPlanificado = $_POST["anoPlanificado"];

                $jsonObjetoActividad = json_encode($objetoActividad);      
                $this->Postmeta->update($object->__id, array('meta_value' => $jsonObjetoActividad));

                $jsondata["satisfactorio"] = true;
                $jsondata["mensaje"] = "";    
            }
        } 
        else
        {
            $jsondata["satisfactorio"] = false;
            $jsondata["mensaje"] = "";
        }    
        exit(json_encode($jsondata, JSON_FORCE_OBJECT));
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

        $this->load_model("User");

        $this->load_model("Binnacle");

        /* Descomentar solo para pruebas
        $_POST['idBien'] = 5297;
        $_POST['idComprador'] = 75;
        */

        if (isset($_POST['idBien']))
        {
            $jsondata = [];

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
        exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
    }

    public function eliminar_comprador()
    {
        $this->autoRender = false;

        $jsondata = [];

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
        exit(json_encode($jsondata, JSON_FORCE_OBJECT));
    }
}
