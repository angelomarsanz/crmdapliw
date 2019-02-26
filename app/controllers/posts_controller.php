<?php

class PostsController extends MvcPublicController 
{
    public function test_function()
    {
        $this->load_model('Postmeta');

        $propiedadesBienes = $this->Postmeta->find(array(
            'joins' => array('Post'),
            'includes' => array('Post'),
            'conditions' => array(
                'Post.post_type' => 'property',
                'Post.post_status' => array('Publish', 'Pending'),
                'Post.ID' => array(5763, 5849)),
            'order' => 'Post.ID ASC, Postmeta.meta_key ASC, Postmeta.meta_id ASC'));
        
        $this->set('propiedadesBienes', $propiedadesBienes);
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
//                    'ID' => array(5763, 5849),
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

            $this->set('posts', $posts);
            $this->set('bienes', $bienes);
            $this->set('propiedadesBienes', $propiedadesBienes);
        }
    }
}