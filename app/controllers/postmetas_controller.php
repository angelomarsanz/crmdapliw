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

    public function crear_actividad()
    {
        $this->autoRender = false;

        $jsondata = [];

        $postmeta = ['post_id' => 5849, 'meta_key' => 'Agenda', 'meta_value' => 1];
        $id = $this->Postmeta->insert($postmeta);

        $jsondata["success"] = true;
        $jsondata["message"] = "La actividad se cerró correctamente";
        $jsondata["id"] = $id;
         
        exit(json_encode($jsondata, JSON_FORCE_OBJECT)); 
    }

    public function cerrar_actividad()
    {
        $this->autoRender = false;

        if (isset($_POST['idPostmeta']))
        {
            $idPostmeta = $_POST['idPostmeta'];

            $jsondata = [];

            $object = $this->Postmeta->find_by_id($idPostmeta);
            
            $this->Postmeta->update($object->__id, array('meta_value' => 0));
            
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