<?php

require "config.php";
require "index.class.php";

class User
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

	//0=is not available, 1=is available
	private function check_user_availability($username, $email)
	{
		$sql = "SELECT * FROM users WHERE uname = ? OR uemail = ?";
		if($stmt = $this->db->prepare($sql))
		{
			$stmt->bind_param("ss", $username, $email);
			$stmt->execute();
			$result = $stmt->get_result();
			if($result->num_rows === 0)
			{
				$stmt->close();
				return 1;
			}
			else
			{
				$stmt->close();
				return 0;
			}
		}
	}

	private function add_user($name, $username, $password, $email)
	{
		$sql = "INSERT INTO users (uname, upass, fullname, uemail) VALUES (?, ?, ?, ?)";
		if($stmt = $this->db->prepare($sql))
		{
			$stmt->bind_param("ssss", $username, $password, $name, $email);
			$stmt->execute();
			$stmt->close();
		}	
	}

	public function sanitize($input)
	{
	    $input = mysqli_real_escape_string($this->db, $input);
	    $input = trim($input);
	    $input = stripslashes($input);
	    $input = htmlspecialchars($input);    
	    return $input;	
	}

	public function reg_user($name, $username, $password, $email)
	{
		$password = password_hash($password, PASSWORD_DEFAULT);
		if(self::check_user_availability($username, $email) == 1)
			self::add_user($name, $username, $password, $email);
		else
			echo "Utilizatorul deja exista";			
	}

	public function login($useremail, $password)
	{
		$sql = "SELECT uid, upass FROM users WHERE uemail = ? OR uname = ?";
		if($stmt = $this->db->prepare($sql))
		{
			$stmt->bind_param("ss", $useremail, $useremail);
			$stmt->execute();
			$result = $stmt->get_result();
			if($result->num_rows === 1)
			{
				$row = $result->fetch_assoc();
				if(password_verify($password, $row['upass']) == true)
				{
					session_start();
					$_SESSION['login'] = true;
					$_SESSION['uid'] = $row['uid'];
					return true;
				}
			}
			else
			{
				return false;
			}
		}
	}

	//true=user is logged in, false= user is not logged in
	public function check_login()
	{
		if (session_status() == PHP_SESSION_NONE) 
		{
		    session_start();
		}
		if(isset($_SESSION['login']))
			return $_SESSION['login'];
	}

	public function logout()
	{
		$_SESSION['login'] = false;	
		session_destroy();
	}

	public function new_password($email)
	{
		$index = new Index;
		$token = $index->basic_index(10);

		$sql = "UPDATE users SET token = ? WHERE uemail = ?";
		if($stmt = $this->db->prepare($sql))
		{
			$stmt->bind_param("ss", $token, $email);
			$stmt->execute();
			$stmt->close();
		}
	}

	public function reset_password($email, $token, $password)
	{
		$password = password_hash($password, PASSWORD_DEFAULT);
		$sql = "UPDATE users SET upass = ? WHERE uemail = ? AND token = ?";
		if($stmt = $this->db->prepare($sql))
		{
			$stmt->bind_param("sss", $password, $email, $token);
			$stmt->execute();
			$stmt->close();
		}
	}

	public function check_reCaptcha()
	{ 
		$response = null;
		$reCaptcha = new ReCaptcha(SECRET_KEY);

		if ($_POST["g-recaptcha-response"])
		{
		    $response = $reCaptcha->verifyResponse(
		        $_SERVER["REMOTE_ADDR"],
		        $_POST["g-recaptcha-response"]
		    );
		}

		if($response != null && $response->success)
			return true;
		else
			return false;
	}

	public function check_password($password)
	{
		$uppercase = $lowercase = $number = $specialChars = true;
		if(UPPERCASE) $uppercase = preg_match('@[A-Z]@', $password);
		if(LOWERCASE) $lowercase = preg_match('@[a-z]@', $password);
		if(NUMBERS) $number    = preg_match('@[0-9]@', $password);
		if(SPECIAL_CHARACTERS) $specialChars = preg_match('@[^\w]@', $password);

		if($uppercase && $lowercase && $number && $specialChars && strlen($password) >= PASSWORD_LENGTH)
			return 1;
		else
			return 0;
	}

}