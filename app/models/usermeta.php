<?php

class Usermeta extends MvcUserMeta {

    var $display_field = 'meta_key';
    var $belongs_to = array('User' => array('foreign_key' => 'user_id'));

}
