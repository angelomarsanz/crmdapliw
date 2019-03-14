<?php

class PostmetasController extends MvcPublicController 
{
    public function test_function()
    {

    }

    public function agregar_actividad()
    {
        $this->autoRender = false;

        if (isset($_POST['idPost']))
        {
            $jsondata = [];

            $postmeta = ['post_id' => $_POST['idPost'], 'meta_key' => 'CRMdapliw_actividad_agenda', 'meta_value' => json_encode($_POST['actividad'])];
            $id = $this->Postmeta->insert($postmeta);

            $jsondata["satisfactorio"] = true;
            $jsondata["mensaje"] = "La actividad se agregó correctamente";
            $jsondata["id"] = $id;
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
        /*
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
}
