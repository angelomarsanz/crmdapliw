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
}
