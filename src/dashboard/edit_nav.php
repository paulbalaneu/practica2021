<?php
    require_once("../class/crud.class.php");
    $crud = new Crud;

    $results = $crud->read(array("*"), "nav", array(array("id", ">", "0", "")));

    if(isset($_GET['result']) && strcmp($_GET['result'], 'success')===0)
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Successfully added
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
    else if(isset($_GET['result']) && strcmp($_GET['result'], 'failure') === 0)
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Failed to add
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';



?>

<?php
// Check if the user is already logged in, if yes then redirect him to welcome page
session_start();
if(!isset($_SESSION["username"]))
{
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Edit navbar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 20px">
  <a class="navbar-brand" href="dashboard.php">Dashboard</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="all_posts.php">Posts</a>

        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Add new
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="add_post.php">Post</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Customize
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="edit_nav.php">Edit navbar</a>
        </div>
      </li>
    </ul>
    <span style="margin-right:3px">Logged in as <?php echo $_SESSION["username"];?> | </span>
    <a href="logout.php">Logout</a>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Navigation item name</th>
                        <th scope="col">Links to</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if(isset($_GET['page']))
                        $page = $_GET['page'];
                    else
                        $page = 1;
                    for($i=$page * 20 - 20;$i<$page * 20;$i++)
                        if($i<count($results))
                        echo '
                        <tr>
                            <th scope="row">' . intval($i + 1) . '</th>
                            <td>' . htmlspecialchars($results[$i]['item_name']) . '</td>
                            <td>' . htmlspecialchars($results[$i]['link']) . '</td>
                            <td>
                                <form method="POST" action="action/delete_nav_item.action.php">
                                    <input type="hidden" name="nav_item_id" value="' . $results[$i]['id'] . '">
                                    <input class="pb_delete_btn" type="submit" value="X">
                                </form>
                            </td>
                        </tr>
                        ';
                        else break;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                    for($i=1;$i<ceil(count($results)/20)+1;$i++)
                        echo '<li class="page-item"><a class="page-link" href="?page=' . $i .'">' . $i . '</a></li>';
                ?>
            </ul>
        </nav>        
    </div>
    <div class="col-6">
        <form action="action/add_nav_item.action.php" method="POST">
            <div class="form-group">
                <label for="formGroupExampleInput">Item name</label>
                <input name="item_name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Link</label>
                <input name="link" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="" value="Add">
            </div>
        </form>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>