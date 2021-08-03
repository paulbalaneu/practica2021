<?php
    require_once("class/crud.class.php");
    require_once("class/image.class.php");

    $crud = new Crud;
    $image = new Image;

    $result = $crud->read(array('*'), "houses", array(array('post_id', '=', $_GET['id'], '')));
?>