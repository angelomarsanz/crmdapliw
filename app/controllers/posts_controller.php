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
                   'ID' => array(5297),
                    'post_type' => 'property',
                    'post_status' => array('Publish', 'Pending')),
                'order' => 'post_title ASC'));

            $propiedadesBienes = $this->Postmeta->find(array(
                'joins' => array('Post'),
                'includes' => array('Post'),
                'conditions' => array(
                   'ID' => array(5297),
                    'Post.post_type' => array('property', 'CRMdapliw'),
                    'Post.post_status' => array('Publish', 'Pending')),
                'order' => 'Post.ID ASC, Postmeta.meta_key ASC, Postmeta.meta_id ASC'));            
                
            $contadorBienes = 0;
            $matrizBienes = [];
            foreach ($bienes as $bien)
            {
                $matrizBienes[$bien->ID]['post_title'] = $bien->post_title;
                $matrizBienes[$bien->ID]['post_author'] = $bien->post_author;
                $matrizBienes[$bien->ID]['guid'] = $bien->guid;
                $matrizBienes[$bien->ID]['post_status'] = $bien->post_status;
                $contadorBienes++;
            }
            
            $contadorDatosBienes = 0;
            $datosBienes = [];
            foreach ($propiedadesBienes as $propiedadesBien)
            {
                if ($propiedadesBien->meta_key == "CRMdapliw_actividad_agenda")
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["id"] = $propiedadesBien->meta_id;
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["valor"] = json_decode($propiedadesBien->meta_value);
                }
                elseif ($propiedadesBien->meta_key == "REAL_HOMES_property_images")
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["id"] = $propiedadesBien->meta_id;
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["valor"] = $this->buscar_url($propiedadesBien->meta_value, $posts);
                }
                elseif ($propiedadesBien->meta_key == "_thumbnail_id")
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["id"] = $propiedadesBien->meta_id;
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["valor"] = $this->buscar_url($propiedadesBien->meta_value, $posts);
                }
                else
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["id"] = $propiedadesBien->meta_id;
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["valor"] = $propiedadesBien->meta_value;
                }
                $contadorDatosBienes++;
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
            $this->load_model('Postmeta');

            $posts = $this->Post->find(array('order' => 'ID ASC'));

            $bienes = $this->Post->find(array(
                'conditions' => array(
//                   'ID' => array(5763, 5849),
                    'post_type' => 'property',
                    'post_status' => array('Publish', 'Pending')),
                'order' => 'post_title ASC'));

            $propiedadesBienes = $this->Postmeta->find(array(
                'joins' => array('Post'),
                'includes' => array('Post'),
                'conditions' => array(
//                    'Post.ID' => array(5763, 5849),
                    'Post.post_type' => array('property', 'CRMdapliw'),
                    'Post.post_status' => array('Publish', 'Pending')),
                'order' => 'Post.ID ASC, Postmeta.meta_key ASC, Postmeta.meta_id ASC'));            
                
            $contadorBienes = 0;
            $matrizBienes = [];
            foreach ($bienes as $bien)
            {
                $matrizBienes[$bien->ID]['post_title'] = $bien->post_title;
                $matrizBienes[$bien->ID]['post_author'] = $bien->post_author;
                $matrizBienes[$bien->ID]['guid'] = $bien->guid;
                $matrizBienes[$bien->ID]['post_status'] = $bien->post_status;
                $contadorBienes++;
            }
            
            $contadorDatosBienes = 0;
            $datosBienes = [];
            foreach ($propiedadesBienes as $propiedadesBien)
            {
                if ($propiedadesBien->meta_key == "CRMdapliw_actividad_agenda")
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["id"] = $propiedadesBien->meta_id;
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["valor"] = json_decode($propiedadesBien->meta_value);
                }
                elseif ($propiedadesBien->meta_key == "REAL_HOMES_property_images")
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["id"] = $propiedadesBien->meta_id;
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["valor"] = $this->buscar_url($propiedadesBien->meta_value, $posts);
                }
                elseif ($propiedadesBien->meta_key == "_thumbnail_id")
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["id"] = $propiedadesBien->meta_id;
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["valor"] = $this->buscar_url($propiedadesBien->meta_value, $posts);
                }
                else
                {
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["id"] = $propiedadesBien->meta_id;
                    $datosBienes[$propiedadesBien->post_id][$propiedadesBien->meta_key][]["valor"] = $propiedadesBien->meta_value;
                }
                $contadorDatosBienes++;
            }
            
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
}