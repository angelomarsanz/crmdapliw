<?php

class Postmeta extends MvcPostMeta {

    var $display_field = 'meta_key';
    var $belongs_to = array('Post' => array('foreign_key' => 'post_id'));
}
