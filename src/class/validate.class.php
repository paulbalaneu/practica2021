<?php
require_once "config.php";

class Validate
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

	public function sanitize($input)
	{
		$input = mysqli_real_escape_string($this->db, $input);
	    $input = trim($input);
	    $input = strip_tags($input);
	    $input = stripslashes($input);
	    $input = htmlspecialchars($input);    
	    return $input;
	}

	public function check_title($input)
	{
		for($i=0;$i<strlen($input);$i++)
			if(preg_match('/[a-zA-Z0-9\s?!%|,.:;.\/ĂÎȘȚÂăîșțâ]/', $input[$i]) == false)
			{
				echo $input[$i];
				return false;
			}

		return true;
	}

	public function check_email($input)
	{
		if(!filter_var($input, FILTER_VALIDATE_EMAIL))
			return false;

		return true;
	}

	public function check_numbers($input)
	{
		for($i=0;$i<strlen($input);$i++)
			if(preg_match('/^\d+$/', $input[$i]) == false)
				return false;

		return true;
	}

	public function check_letters($input)
	{
		for($i=0;$i<strlen($input);$i++)
			if(preg_match("/^[a-zA-Z -ĂÎȘȚÂăîșțâ]+$/", $input[$i]) == false)
				return false;

		return true;
	}

	public function check_adress($input)
	{
		for($i=0;$i<strlen($input);$i++)
			if(preg_match('/[A-Za-z0-9 -.;,:ĂÎȘȚÂăîșțâ]/', $input[$i]) == false)
				return false;

		return true;
	}

	public function check_phone($input)
	{
		for($i=0;$i<strlen($input);$i++)
			if(preg_match('/[0-9 +-]/', $input[$i]) == false)
				return false;

		return true;
	}
}