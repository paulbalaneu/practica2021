<?php 
//Version 2.0
require_once("config.php");

class Sql
{
	private $db;
	function __construct()
	{
		set_exception_handler(function($e) {
			error_log($e->getMessage());
		  	exit($e->getMessage()); //something a user can understand
		});

		$DB_OPTIONS = [
			PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
  			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array

		];

		//Sets up connection to the database via PDO
		$this->db = new PDO(DB_INFO, DB_USERNAME, DB_PASSWORD, $DB_OPTIONS);
	}

	/*
	Used for inserting, deleting or updateing rows of an database;

	$sql_code = The actual code written in SQL for that specific task, prepared statements only
	$params = An array with the values of the parameters for the prepared statements
	*/

	public function query($sql_code, array $params)
	{
		
		$this->db->prepare($sql_code)->execute($params);
	}
	
	/*
	Returns an associative array with the rows selected from the database;
	If there are no rows matching the conditions for search the function returns false(boolean);

	$sql_code = The actual code written in SQL for that specific task, prepared statements only
	$params = An array with the values of the parameters for the prepared statements
	*/

	public function fetch_assoc($sql_code, array $params)
	{
		$arr = [];
		$stmt = $this->db->prepare($sql_code);
		$stmt->execute($params);
		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
			$arr[] = $row;

		if(!empty($arr))
			return $arr;
		else
			return false;
	}

	/*
	Returns an numerical array with the rows selected from the database;
	If there are no rows matching the conditions for search the function returns false(boolean);

	$sql_code = The actual code written in SQL for that specific task, prepared statements only
	$params = An array with the values of the parameters for the prepared statements
	*/

	public function fetch_num($sql_code, array $params)
	{
		$arr = [];
		$stmt = $this->db->prepare($sql_code);
		$stmt->execute($params);
		while($row = $stmt->fetch(PDO::FETCH_NUM))
			$arr[] = $row;

		if(!empty($arr))
			return $arr;
		else
			return false;
	}

	/*
	Returns an object array with the rows selected from the database;
	If there are no rows matching the conditions for search the function returns false(boolean);

	$sql_code = The actual code written in SQL for that specific task, prepared statements only
	$params = An array with the values of the parameters for the prepared statements
	*/

	public function fetch_obj($sql_code, array $params)
	{
		//Fetch object array
		$arr = [];
		$stmt = $this->db->prepare($sql_code);
		$stmt->execute($params);
		$arr = $stmt->fetchAll(PDO::FETCH_CLASS);
		if(!empty($arr))
			return $arr;
		else
			return false;
	}

	/*
	Returns an array with a single row selected from the database;
	If there are no rows matching the conditions for search the function returns false(boolean);

	$sql_code = The actual code written in SQL for that specific task, prepared statements only
	$params = An array with the values of the parameters for the prepared statements

	Note: If there is more than one row that matches your search conditions then only the first row found will be returned
	*/

	public function fetch_single($sql_code, array $params)
	{
		//Fetch single row
		$arr = [];
		$stmt = $this->db->prepare($sql_code);
		$stmt->execute($params);
		$arr = $stmt->fetch();
		if(!empty($arr))
			return $arr;
		else
			return false;
	}
}