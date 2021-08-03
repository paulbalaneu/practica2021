<?php
    require_once("class/crud.class.php");
    $crud = new Crud;

    $res = $crud->read(array("*"), "nav", array(array("id", ">", "0", "")));
    $xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");
?>