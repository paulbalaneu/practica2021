<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require_once("../../class/crud.class.php");
    $crud = new Crud;

    $ok = 1;

    if(!empty($_POST['item_name']))
        $item_name = $_POST['item_name'];
    else
        $ok = 0;

    if(!empty($_POST['link']))
        $link = $_POST['link'];
    else
        $ok = 0;

    if($ok === 1)
    {
        $crud->insert("nav", array("item_name", "link"), array($item_name, $link));

        header("Location: ../edit_nav.php?result=success");
        die();
    }
    else
    {
        header("Location: ../edit_nav.php?result=failure");
        die();
    } 
}

header("Location: ../edit_nav.php");
die();