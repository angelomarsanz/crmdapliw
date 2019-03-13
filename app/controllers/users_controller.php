<?php

class UsersController extends MvcPublicController 
{
    public function show() 
    {
        $object = $this->model->find_by_id($this->params['id'], array(
            'includes' => array('User')
        ));
        $this->set('object', $object);
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
