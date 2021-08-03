<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['x']))
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
		$crud->delete("houses", $conditions);
	}
}
else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['+']))
{
	header("Location: ../edit_post.php?post_id=" . $_POST['post_id']);
	die();
}

header("Location: ../all_posts.php");
die();
