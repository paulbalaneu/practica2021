<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	require_once("../../class/crud.class.php");
	$crud = new Crud;
	
	$ok = 1;

	if(!empty($_POST['nav_item_id']))
		$nav_item_id = $_POST['nav_item_id'];
	else
		$ok = 0;
	if($ok === 1)
	{
		$conditions = array(
			array('id', '=', $nav_item_id, ''),
		);
		$crud->delete("nav", $conditions);
	}
}

header("Location: ../edit_nav.php");
die();
