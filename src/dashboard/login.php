<?php  
require_once("../class/sql.class.php");
$sql = new Sql;

if(isset($_POST['submit']))
{
	$user = trim($_POST['username']);
	$pass = trim($_POST['password']);
	$login = $sql->fetch_single("SELECT username, password FROM users WHERE username = ?", array($user));

	if(!empty($login))
	{
		if(password_verify($pass, $login["password"]))
		{
			session_start();
			$_SESSION["username"] = $user;
			header("Location: dashboard.php");
			die();
		}
		else
		{
			echo "Wrong user";
		}
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
<body>


<div class="container">
        <div class="row" style="margin-top:20px;margin-bottom: 10px">
            <div class="col">
                <h1 class="text-center">Welcome back!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                
            <div class="wrapper">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="">

                    </div>    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">

                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login" name="submit">
                    </div>
                </form>
            </div>    

            </div>
        </div>
    </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>