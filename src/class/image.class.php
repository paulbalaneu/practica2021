<?php
require_once "crud.class.php";
require_once "index.class.php";

class Image
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

	public function add_image($post_id, $form_name)
	{
		$table = 'images';
		$columns = array("name", "post_id");
		$crud = new Crud;
		$index = new Index;
		$img_name = $post_id . "-" . $index->basic_index(10);

		$where = array(
			array('name', '=', $img_name, '')
		);

		while($crud->is_duplicate(array("*"), $table, $where) === true)
		{
			$img_name = $post_id . "-" . $index->basic_index(10);
			$where = array(
				array('images', '=', $img_name, '')
			);
		}

		$file_extension = $this->upload_image($img_name, $form_name);

		if($file_extension !== false)
		{
			$img_name .= "." . $file_extension;
			$crud->insert($table, $columns, array($img_name, $post_id));
		}			
	}

	public function get_image($post_id)
	{
		$crud = new Crud;
		$where = array(
			array("post_id", '=', $post_id)
		);
		return $crud->read(array("name"), "images", $where);
	}

	private function upload_image($name, $form_name)
	{
		if(isset($_FILES[$form_name]))
		{
			$errors= array();
			$file_name = $name . '.' . pathinfo($_FILES[$form_name]['name'], PATHINFO_EXTENSION);
			$file_size =$_FILES[$form_name]['size'];
			$file_tmp =$_FILES[$form_name]['tmp_name'];
			$file_type=$_FILES[$form_name]['type'];
			$file_ext_arr=explode('.',$_FILES[$form_name]['name']);
			$file_ext = strtolower(end($file_ext_arr));

			$extensions= array("jpeg","jpg","png");

			if(in_array($file_ext,$extensions)=== false)
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";

			if($file_size > 2097152)
				$errors[]='File size must be exactly 2 MB';

			if(empty($errors)==true)
			{
				move_uploaded_file($file_tmp,"images/".$file_name);
				return $file_ext;
			}
			else
				return false;			
		}
	}
}