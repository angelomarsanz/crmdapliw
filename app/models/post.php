<?php

class Post extends MvcPost {

    var $display_field = 'post_title';
    var $belongs_to = array('User' => array('foreign_key' => 'post_author'));
    var $has_many = array('Postmeta' => array('foreign_key' => 'post_id', 'dependent' => true)); 
}
