<?php

class User extends MvcUser {

    var $display_field = 'user_login';
    var $has_many = 
        array('Usermeta' => array('foreign_key' => 'user_id', 'dependent' => true), 
            'Post' => array('foreign_key' => 'post_author', 'dependent' => true));
}
