<?php

class PostsController extends MvcPublicController 
{
    public function test_function()
    {
        $this->load_model('Postmeta');

        $postMetas = $this->Postmeta->find(array(
            'joins' => array('Post'),
            'includes' => array('Post'),
            'conditions' => array(
                'Post.post_type' => 'property',
                'Post.post_status' => array('Publish', 'Pending'),
                'Post.ID' => array(5763, 5849)),
            'order' => 'Post.ID ASC, Postmeta.meta_key ASC, Postmeta.meta_id ASC'));
        
        $this->set('postMetas', $postMetas);
    }
    public function index() 
    {
        $user = wp_get_current_user();
        if ($user->id > 0)
        {        
            $this->set_objects();
        }
    }
}
