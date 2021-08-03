<?php
require_once("../class/crud.class.php");
require_once("../class/image.class.php");
require_once("../class/index.class.php");
require_once("../class/validate.class.php");

$crud = new Crud;
$image = new Image;
$index = new Index;
$validate = new Validate;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
  $ad_type = $title = $description = $city = $region = $adress = $land_type = $localization = $rooms = $bathrooms = $floors = $appartement_type = $comfort = $year_construction = $furniture = $price= $curency = $surface = $name = $email = $phone = $post_id = $propertie_type = "";

  $ok = 1;
  $propertie_type = $validate->sanitize(strtolower($_POST['propertie_type']));

  //Get the values from the form into variables
  if(!empty($_POST['title']) && $validate->check_title($_POST['title']))
      $title = $validate->sanitize($_POST['title']);
  else
  {
    echo "Wrong title";
    $ok = 0;
  }


  if(!empty($_POST['description']))
      $description = $validate->sanitize($_POST['description']);
  else
  {
    echo "Wrong description";
      $ok = 0;
  }
  

  if(!empty($_POST['adress']) && $validate->check_adress($_POST['adress']))
      $adress = $validate->sanitize($_POST['adress']);
  else
  {
    echo "Wrong adress";
      $ok = 0;
  }


  if(!empty($_POST['price']) && $validate->check_numbers($_POST['price']))
      $price = $validate->sanitize($_POST['price']);
  else
  {
    echo "Wrong price";
      $ok = 0;
  }

  if(!empty($_POST['surface']) && $validate->check_numbers($_POST['surface']))
      $surface = $validate->sanitize($_POST['surface']);
  else
  {
    echo "Wrong surface";
      $ok = 0;
  }
  
  if(!empty($_POST['name']) && $validate->check_letters($_POST['name']))
      $name = $validate->sanitize($_POST['name']);
  else
  {
    echo "Wrong name";
      $ok = 0;
  }

  if(!empty($_POST['email']) && $validate->check_email($_POST['email']))
      $email = $validate->sanitize($_POST['email']);
  else
  {
    echo "Wrong email";
      $ok = 0;
  }

  if(!empty($_POST['phone']) && $validate->check_phone($_POST['phone']))
      $phone = $validate->sanitize($_POST['phone']);
  else
  {
    echo "Wrong phone";
      $ok = 0;
  }

  if(strcmp($propertie_type, "land") === 0)
  {
    $ad_type = $_POST['ad_type'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $land_type = $_POST['land_type'];
    $localization = $_POST['localization'];
  }

  if(strcmp($propertie_type, "house") === 0)
  {
    $ad_type = $_POST['ad_type'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $rooms = $_POST['rooms'];
    $bathrooms = $_POST['bathrooms'];
    $floors = $_POST['floors'];
    $furniture = $_POST['furniture'];
    $curency = $_POST['curency'];
    $year_construction = $_POST['year_construction'];
  }

  if(strcmp($propertie_type, "appartement") === 0)
  {
    $ad_type = $_POST['ad_type'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $rooms = $_POST['rooms'];
    $bathrooms = $_POST['bathrooms'];
    $floors = $_POST['floors'];
    $furniture = $_POST['furniture'];
    $appartement_type = $_POST['appartement_type'];
    $comfort = $_POST['comfort'];
    $curency = $_POST['curency'];  
    $year_construction = $_POST['year_construction'];
  }
  
  $post_id = $crud->last_record_id('id', 'houses') + 1 . '-' . $index->basic_index(10);

  if(strcmp($city, "Select") === 0)
      $ok = 0;

  //Submit the values to the database
  if($ok === 1)
  {
    $crud->insert("houses", array("type", "title", "description", "city", "region", "adress", "land_type", "localization", "rooms", "bathrooms", "floors", "appartement_type", "comfort", "year_construction", "furniture", "price", "currency", "surface", "name", "email", "phone", "post_id", "property_type"), array($ad_type, $title, $description, $city, $region, $adress, $land_type, $localization, $rooms, $bathrooms, $floors, $appartement_type, $comfort, $year_construction, $furniture, $price, $curency, $surface, $name, $email, $phone, $post_id, $propertie_type));
  
      $image->add_image($post_id, "upload_image1");
      $image->add_image($post_id, "upload_image2");
      $image->add_image($post_id, "upload_image3");
      $image->add_image($post_id, "upload_image4");
      $image->add_image($post_id, "upload_image5");
      $image->add_image($post_id, "upload_image6");
  }  
  else
  {
    echo"Nu merge";
  }     
}
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../style/style.css">

    <title>Add post</title>
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

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="pb_container_add_properties">
        <label class="pb_label">Ad type</label>
        <select name="ad_type" class="form-control">
          <option>Rent</option>
          <option>Sale</option>
        </select>
        <label class="pb_label">Title</label>
        <label class="pb_error" id="title_error"></label><br>
        <input class="form-control" type="text" name="title" id="title"><br>


        <label class="pb_label">Description</label>
        <label class="pb_error" id="description_error"></label><br>
        <textarea name="description" id="description" class="form-control"></textarea><br>
        </div>

        <div class="pb_spacer"></div>
        <div class="pb_container_add_properties">
        <div class="row">
          <div class="col-sm-4">
            <label class="pb_label">City</label>
            <label class="pb_error" id="city_error"></label><br>
        <select name="city" id="city" class="form-control">
          <option>Select</option>
          <option>Alba</option>
          <option>Arad</option>
          <option>Arges</option>
          <option>Bacau</option>
          <option>Bihor</option>
          <option>Bistrita Nasaud</option>
          <option>Botosani</option>
          <option>Braila</option>
          <option>Brasov</option>
          <option>Bucuresti Ilfov</option>
          <option>Buzau</option>
          <option>Calarasi</option>
          <option>Caras Severin</option>
          <option>Cluj</option>
          <option>Constanta</option>
          <option>Covasna</option>
          <option>Dambovita</option>
          <option>Dolj</option>
          <option>Galati</option>
          <option>Giurgiu</option>
          <option>Gorj</option>
          <option>Harghita</option>
          <option>Hunedoara</option>
          <option>Ialomita</option>
          <option>Iasi</option>
          <option>Ilfov</option>
          <option>Maramures</option>
          <option>Mehedinti</option>
          <option>Mures</option>
          <option>Neamt</option>
          <option>Olt</option>
          <option>Prahova</option>
          <option>Salaj</option>
          <option>Satu-Mare</option>
          <option>Sibiu</option>
          <option>Suceava</option>
          <option>Teleorman</option>
          <option>Timis</option>
          <option>Tulcea</option>
          <option>Valcea</option>
          <option>Vaslui</option>
          <option>Vrancea</option>
        </select>
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Region</label><br>
            <div id="reg">
            <select disabled class="form-control">
                <option>Choose a region</option>
            </select>
            </div>
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Adress</label>
            <label class="pb_error" id="adress_error"></label><br>
          <input name="adress" id="adress" class="form-control" type="text">
          </div>
        </div>
 
        <div class="row">
          <div class="col-sm-6">
            <label class="pb_label">Type of propertie</label>
            <label class="pb_error" id="type_propertie_error"></label><br>
            <select name="propertie_type" id="type_propertie" class="form-control">
              <option>Select</option>
              <option>House</option>
              <option>Appartement</option>
              <option>Land</option>
              <option>Office</option>
            </select><br>
          </div>
        </div>
      
        <div id="propertie_details"></div>
        </div>
        <div class="pb_spacer"></div>
        <div class="pb_container_add_properties">
        <label class="pb_label">Price</label>
        <label class="pb_error" id="price_error"></label><br>
        <div class="row">
          <div class="col-sm-3">       
            <input name="price" id="price" class="form-control" type="text" name="" placeholder="">
          </div>

          <div class="col-sm-2 px-0">
            <select name="curency" class="form-control">
              <option>EUR</option>
              <option>USD</option>
              <option>RON</option>
            </select>

          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-3">
            <label class="pb_label">Surface</label>
            <label class="pb_error" id="surface_error"></label><br>
            <input name="surface" id="surface" class="form-control" type="text" name="" placeholder="m²">
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-4">
            <label class="pb_label">Name</label>
            <label class="pb_error" id="name_error"></label><br>
            <input name="name" id="name" class="form-control" type="text" name="">
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Email</label>
            <label class="pb_error" id="email_error"></label><br>
            <input name="email" id="email" class="form-control" type="text" name="">
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Phone</label>
            <label class="pb_error" id="phone_error"></label><br>
            <input name="phone" id="phone" class="form-control" type="text" name="">
          </div>
        </div>
      </div>

    <div class="pb_spacer"></div>
    <div class="pb_container_add_properties">
      <div class="row">
        <div class="col-sm-12">
          <label class="pb_label">*The first image is also the thumbnail</label>
        </div>
      </div>

      <div class="row" style="margin-top:5px">
        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image1" name="upload_image1">
            <label class="custom-file-label" for="upload_image1">Thumbnail</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image2" name="upload_image2">
            <label class="custom-file-label" for="upload_image2">Choose file</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image3" name="upload_image3">
            <label class="custom-file-label" for="upload_image3">Choose file</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image4" name="upload_image4">
            <label class="custom-file-label" for="upload_image1">Choose file</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image5" name="upload_image5">
            <label class="custom-file-label" for="upload_image2">Choose file</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image6" name="upload_image6">
            <label class="custom-file-label" for="upload_image3">Choose file</label>
          </div>
        </div>
      </div>
    </div>

    <div class="pb_spacer"></div>
    <input class="btn btn-primary" type="submit" name="">
    <div class="pb_spacer"></div>
    </div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/romania_locations.js"></script>
    <script type="text/javascript" src="js/type_propertie.js"></script>
    <script type="text/javascript" src="js/error_check.js"></script>
    <script type="text/javascript">
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>


  </body>
</html>