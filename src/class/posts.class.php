<?php
require("class/image.class.php");

class Posts
{
	private $db;

	function __construct()
	{
		$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		if(mysqli_connect_errno())
		{
			echo "Nu se poate conecta la baza de date";
			exit;
		}
	}

	public function add_post($title, $user_id)
	{
		$image = new Image;
		$crud = new Crud;
		$index = new Index;

		$post_id = $user_id . "-" . $index->basic_index(10);

		$where = array(
			array('post_id', '=', $post_id, '')
		);

		while($crud->is_duplicate(array("*"), "posts", $where) === true)
		{
			$post_id = $user_id . "-" . $index->basic_index(10);
			$where = array(
				array('post_id', '=', $post_id, '')
			);
		}

		$crud->insert("posts", array("title","post_id"), array($title, $post_id));
		$image->add_image($user_id, $post_id);
	}

}