<?php
require_once "config.php";

class Crud
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

	public function get_sql_select($select, $from, $where)
	{
		$sql = 'SELECT ';	

		for($i=0;$i < count($select) - 1;$i++)
			$sql .= $select[$i] . ", ";

		$sql .= $select[$i] . ' FROM ' . $from . ' WHERE ';

		foreach($where as $row)
			for($i=0;$i<count($row);$i++)
			{
				if($i == 2)
					$sql .= ' ?';
				else
					$sql .= ' ' . $row[$i];
			}

		return $sql;
	}

	private function bind_params($stmt, $params)
	{
	    if ($params != null)
	    {
	        // Generate the Type String (eg: 'issisd')
	        $types = '';
	        foreach($params as $param)
	        {
	            if(is_int($param)) {
	                // Integer
	                $types .= 'i';
	            } elseif (is_float($param)) {
	                // Double
	                $types .= 'd';
	            } elseif (is_string($param)) {
	                // String
	                $types .= 's';
	            } else {
	                // Blob and Unknown
	                $types .= 'b';
	            }
	        }
	  
	        // Add the Type String as the first Parameter
	        $bind_names[] = $types;
	  
	        // Loop thru the given Parameters
	        for ($i=0; $i<count($params);$i++)
	        {
	            // Create a variable Name
	            $bind_name = 'bind' . $i;
	            // Add the Parameter to the variable Variable
	            $$bind_name = $params[$i];
	            // Associate the Variable as an Element in the Array
	            $bind_names[] = &$$bind_name;
	        }
	         
	        // Call the Function bind_param with dynamic Parameters
	        call_user_func_array(array($stmt,'bind_param'), $bind_names);
	    }
	    return $stmt;
	}

	private function get_params($where)
	{
		$return = array();
		for($i=0;$i<count($where);$i++)
			array_push($return, $where[$i][2]);
		return $return;
	}

	public function read($select, $from, $where)
	{
		if($stmt = $this->db->prepare($this->get_sql_select($select, $from, $where)))
		{
			$this->bind_params($stmt, $this->get_params($where));
			$stmt->execute();
			$return_array = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
			$stmt->close();

			if(!$return_array)
				return false;
			else
				return $return_array;
		}
	}

	//CREATE

	private function get_sql_create($table, array $columns, array $values)
	{
		$sql = "INSERT INTO " . $table . " (";
		for($i=0; $i<count($columns) - 1; $i++)
			$sql .= $columns[$i] . ", ";
		$sql .= $columns[count($columns)-1] . ") VALUES (";
		for($i=0; $i<count($columns) - 1; $i++)
			$sql .= "?, ";
		$sql .= "?)";
		return $sql;	
	}

	public function insert($table, array $columns, array $values)
	{
		if($stmt = $this->db->prepare($this->get_sql_create($table, $columns, $values)))
		{
			$this->bind_params($stmt, $values);
			$stmt->execute();
			$stmt->close();
			return true;
		}
		return false;
	}

	//UPDATE

	private function get_sql_update($table, $columns, $values, $conditions)
	{
		$sql = "UPDATE " . $table . " SET ";
		for($i=0; $i<count($columns) - 1; $i++)
			$sql .= $columns[$i] . " = ? ,";
		$sql .= $columns[$i] . " = ? ";

		$sql .= " WHERE ";

		foreach($conditions as $row)
			for($i=0;$i<count($row);$i++)
			{
				if($i == 2)
					$sql .= ' ?';
				else
					$sql .= ' ' . $row[$i];
			}

		return $sql;
	}

	public function update($table, $columns, $values, $conditions)
	{
		if($stmt = $this->db->prepare($this->get_sql_update($table, $columns, $values, $conditions)))
		{
			$this->bind_params($stmt, array_merge($values, $this->get_params($conditions)));
			$stmt->execute();
			$stmt->close();
			return true;
		}
		return false;
	}

	//DELETE

	private function get_sql_delete($table, $conditions)
	{
		$sql = "DELETE FROM " . $table . " WHERE ";

		foreach($conditions as $row)
			for($i=0;$i<count($row);$i++)
			{
				if($i == 2)
					$sql .= ' ?';
				else
					$sql .= ' ' . $row[$i];
			}

		return $sql;
	}

	public function delete($table, $conditions)
	{
		if($stmt = $this->db->prepare($this->get_sql_delete($table, $conditions)))
		{
			$this->bind_params($stmt, $this->get_params($conditions));
			$stmt->execute();
			$stmt->close();
			return 1;
		}
		return 0;
	}

	public function is_duplicate($select, $from, $where)
	{
		$check = false;
		if($stmt = $this->db->prepare($this->get_sql_select($select, $from, $where)))
		{
			$this->bind_params($stmt, $this->get_params($where));
			$stmt->execute();
			if($stmt->get_result()->num_rows === 0)
				$check = false;
			else
				$check = true;
			$stmt->close();
		}

		return $check;
	}

	public function last_record_id($select, $table)
	{
		$sql = "SELECT " . $select . " FROM " . $table . " ORDER BY " . $select . " DESC LIMIT 1";

		if($result = $this->db->query($sql))
		{
			$row = $result->fetch_assoc();
			return $row['id'];
		}
	}

	public function post_time($date) 
	{
		$time = explode(" ", $date);

	    $year_month_day_post = explode("-", $time[0]);
	    $hour_minute_second = explode(":", $time[1]);
		
		return 'Posted at ' . $hour_minute_second[0] . ':' . $hour_minute_second[1] . ' on ' . $year_month_day_post[2] . '-' . $year_month_day_post[1] . '-' . $year_month_day_post[0] . '</label>';  
	}
}
?>