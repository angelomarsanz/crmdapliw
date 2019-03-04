<?php

class PostmetasController extends MvcPublicController 
{
    public function test_function()
    {
        $postMetas = $this->Postmeta->find(array(
            'joins' => array('Post'),
            'includes' => array('Post'),
            'conditions' => array(
                'Post.post_type' => 'property',
                'Post.post_status' => array('Publish', 'Pending'),
                'Post.ID' => array(5763, 5849)),
            'order' => 'Post.ID ASC'));
        
        $this->set('postMetas', $postMetas);
    }

    public function agregar_actividad()
    {
        $this->autoRender = false;

        if (isset($_POST['idPost']))
        {
            $jsondata = [];

            $postmeta = ['post_id' => $_POST['idPost'], 'meta_key' => 'CRMdapliw_actividad_agenda', 'meta_value' => json_encode($_POST['actividad'])];
            $id = $this->Postmeta->insert($postmeta);

            $jsondata["success"] = true;
            $jsondata["message"] = "La actividad se agregó correctamente";
            $jsondata["id"] = $id;
         
            exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
        }
    }
    public function cerrar_actividad()
    {
        $this->autoRender = false;

        if (isset($_POST['idPostmeta']))
        {
            $idPostmeta = $_POST['idPostmeta'];

            $jsondata = [];

            $object = $this->Postmeta->find_by_id($idPostmeta);

            $objetoActividad = json_decode($object->meta_value);

            $objetoActividad->informacionAdicional = $_POST['informacionAdicional'];

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
            
            $jsondata["success"] = true;
            $jsondata["message"] = "La actividad se cerró correctamente";
        }
        else
        {
            $jsondata["success"] = false;
            $jsondata["message"] = "No se pudo cerrar la actividad";
        } 
        exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
    }
}