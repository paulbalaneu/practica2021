<?php
// Check if the user is already logged in, if yes then redirect him to welcome page
session_start();
if(!isset($_SESSION["username"]))
{
    header("location: login.php");
    exit;
}
?>
<?php
require_once("../class/crud.class.php");
require_once("../class/image.class.php");
require_once("../class/index.class.php");
require_once("../class/validate.class.php");

$crud = new Crud;
$image = new Image;
$index = new Index;
$validate = new Validate;

$result = $crud->read(array("*"), "houses", array(array("post_id", "=", $_GET['post_id'], "")));
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

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="action/update_post.action.php?post_id=<?php echo $_GET['post_id']?>" method="POST">
    <div class="container">
        <div class="pb_container_add_properties">
        <label class="pb_label">Ad type</label>
        <select name="ad_type" class="form-control">
          <option <?php if(strcmp($result[0]['type'], 'Rent') === 0) echo'selected="true"';?>>Rent</option>
          <option <?php if(strcmp($result[0]['type'], 'Sale') === 0) echo'selected="true"';?>>Sale</option>
        </select>
        <label class="pb_label">Title</label>
        <label class="pb_error" id="title_error"></label><br>
        <input <?php if(isset($result[0]['title'])) echo'value="' . $result[0]['title'] . '" ';?> class="form-control" type="text" name="title" id="title"><br>


        <label class="pb_label">Description</label>
        <label class="pb_error" id="description_error"></label><br>
        <textarea name="description" id="description" class="form-control"><?php if(isset($result[0]['description'])) echo $result[0]['description'];?></textarea><br>
        </div>

        <div class="pb_spacer"></div>
        <div class="pb_container_add_properties">
        <div class="row">
          <div class="col-sm-4">
            <label class="pb_label">City</label>
            <label class="pb_error" id="city_error"></label><br>
        <select name="city" id="city" class="form-control">
          <option>Select</option>
                    <option <?php if(strcmp($result[0]['city'], 'Alba') === 0) echo'selected="true"';?>>Alba</option>
                    <option <?php if(strcmp($result[0]['city'], 'Arad') === 0) echo'selected="true"';?>>Arad</option>
                    <option <?php if(strcmp($result[0]['city'], 'Arges') === 0) echo'selected="true"';?>>Arges</option>
                    <option <?php if(strcmp($result[0]['city'], 'Bacau') === 0) echo'selected="true"';?>>Bacau</option>
                    <option <?php if(strcmp($result[0]['city'], 'Bihor') === 0) echo'selected="true"';?>>Bihor</option>
                    <option <?php if(strcmp($result[0]['city'], 'Bistrita Nasaud') === 0) echo'selected="true"';?>>Bistrita Nasaud</option>
                    <option <?php if(strcmp($result[0]['city'], 'Botosani') === 0) echo'selected="true"';?>>Botosani</option>
                    <option <?php if(strcmp($result[0]['city'], 'Braila') === 0) echo'selected="true"';?>>Braila</option>
                    <option <?php if(strcmp($result[0]['city'], 'Brasov') === 0) echo'selected="true"';?>>Brasov</option>
                    <option <?php if(strcmp($result[0]['city'], 'Bucuresti') === 0) echo'selected="true"';?>>Bucuresti</option>
                    <option <?php if(strcmp($result[0]['city'], 'Buzau') === 0) echo'selected="true"';?>>Buzau</option>
                    <option <?php if(strcmp($result[0]['city'], 'Calarasi') === 0) echo'selected="true"';?>>Calarasi</option>
                    <option <?php if(strcmp($result[0]['city'], 'Caras Severin') === 0) echo'selected="true"';?>>Caras Severin</option>
                    <option <?php if(strcmp($result[0]['city'], 'Cluj') === 0) echo'selected="true"';?>>Cluj</option>
                    <option <?php if(strcmp($result[0]['city'], 'Constanta') === 0) echo'selected="true"';?>>Constanta</option>
                    <option <?php if(strcmp($result[0]['city'], 'Covasna') === 0) echo'selected="true"';?>>Covasna</option>
                    <option <?php if(strcmp($result[0]['city'], 'Dambovita') === 0) echo'selected="true"';?>>Dambovita</option>
                    <option <?php if(strcmp($result[0]['city'], 'Dolj') === 0) echo'selected="true"';?>>Dolj</option>
                    <option <?php if(strcmp($result[0]['city'], 'Galati') === 0) echo'selected="true"';?>>Galati</option>
                    <option <?php if(strcmp($result[0]['city'], 'Giurgiu') === 0) echo'selected="true"';?>>Giurgiu</option>
                    <option <?php if(strcmp($result[0]['city'], 'Gorj') === 0) echo'selected="true"';?>>Gorj</option>
                    <option <?php if(strcmp($result[0]['city'], 'Harghita') === 0) echo'selected="true"';?>>Harghita</option>
                    <option <?php if(strcmp($result[0]['city'], 'Hunedoara') === 0) echo'selected="true"';?>>Hunedoara</option>
                    <option <?php if(strcmp($result[0]['city'], 'Ialomita') === 0) echo'selected="true"';?>>Ialomita</option>
                    <option <?php if(strcmp($result[0]['city'], 'Iasi') === 0) echo'selected="true"';?>>Iasi</option>
                    <option <?php if(strcmp($result[0]['city'], 'Ilfov') === 0) echo'selected="true"';?>>Ilfov</option>
                    <option <?php if(strcmp($result[0]['city'], 'Maramures') === 0) echo'selected="true"';?>>Maramures</option>
                    <option <?php if(strcmp($result[0]['city'], 'Mehedinti') === 0) echo'selected="true"';?>>Mehedinti</option>
                    <option <?php if(strcmp($result[0]['city'], 'Mures') === 0) echo'selected="true"';?>>Mures</option>
                    <option <?php if(strcmp($result[0]['city'], 'Neamt') === 0) echo'selected="true"';?>>Neamt</option>
                    <option <?php if(strcmp($result[0]['city'], 'Olt') === 0) echo'selected="true"';?>>Olt</option>
                    <option <?php if(strcmp($result[0]['city'], 'Prahova') === 0) echo'selected="true"';?>>Prahova</option>
                    <option <?php if(strcmp($result[0]['city'], 'Salaj') === 0) echo'selected="true"';?>>Salaj</option>
                    <option <?php if(strcmp($result[0]['city'], 'Satu-Mare') === 0) echo'selected="true"';?>>Satu-Mare</option>
                    <option <?php if(strcmp($result[0]['city'], 'Sibiu') === 0) echo'selected="true"';?>>Sibiu</option>
                    <option <?php if(strcmp($result[0]['city'], 'Suceava') === 0) echo'selected="true"';?>>Suceava</option>
                    <option <?php if(strcmp($result[0]['city'], 'Teleorman') === 0) echo'selected="true"';?>>Teleorman</option>
                    <option <?php if(strcmp($result[0]['city'], 'Timis') === 0) echo'selected="true"';?>>Timis</option>
                    <option <?php if(strcmp($result[0]['city'], 'Tulcea') === 0) echo'selected="true"';?>>Tulcea</option>
                    <option <?php if(strcmp($result[0]['city'], 'Valcea') === 0) echo'selected="true"';?>>Valcea</option>
                    <option <?php if(strcmp($result[0]['city'], 'Vaslui') === 0) echo'selected="true"';?>>Vaslui</option>
                    <option <?php if(strcmp($result[0]['city'], 'Vrancea') === 0) echo'selected="true"';?>>Vrancea</option>
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
          <input <?php if(isset($result[0]['adress'])) echo'value="' . $result[0]['adress'] . '" ';?> name="adress" id="adress" class="form-control" type="text">
          </div>
        </div>
 
        <div class="row">
          <div class="col-sm-6">
            <label class="pb_label">Type of propertie</label>
            <label class="pb_error" id="type_propertie_error"></label><br>
            <select name="propertie_type" id="type_propertie" class="form-control">
              <option <?php if(strcmp($result[0]['property_type'], 'house') === 0) echo'selected="true"';?>>House</option>
              <option <?php if(strcmp($result[0]['property_type'], 'appartement') === 0) echo'selected="true"';?>>Appartement</option>
              <option <?php if(strcmp($result[0]['property_type'], 'land') === 0) echo'selected="true"';?>>Land</option>
              <option <?php if(strcmp($result[0]['property_type'], 'office') === 0) echo'selected="true"';?>>Office</option>
            </select><br>
          </div>
        </div>
      
        <div id="propertie_details">
          <?php 
            if(strcmp($result[0]['property_type'], 'appartement') === 0)
              require_once("view/appartement_fields.view.php");

          	if(strcmp($result[0]['property_type'], 'house') === 0)
              require_once("view/house_fields.view.php");

	          if(strcmp($result[0]['property_type'], 'land') === 0)
	            require_once("view/land_fields.view.php");
          ?>
        </div>

        </div>
        <div class="pb_spacer"></div>
        <div class="pb_container_add_properties">
        <label class="pb_label">Price</label>
        <label class="pb_error" id="price_error"></label><br>
        <div class="row">
          <div class="col-sm-3">       
            <input <?php if(isset($result[0]['price'])) echo'value="' . $result[0]['price'] . '" ';?> name="price" id="price" class="form-control" type="text" name="" placeholder="">
          </div>

          <div class="col-sm-2 px-0">
            <select name="curency" class="form-control">
              <option <?php if(strcmp($result[0]['currency'], 'EUR') === 0) echo'selected="true"';?>>EUR</option>
              <option <?php if(strcmp($result[0]['currency'], 'USD') === 0) echo'selected="true"';?>>USD</option>
              <option <?php if(strcmp($result[0]['currency'], 'RON') === 0) echo'selected="true"';?>>RON</option>
            </select>

          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-3">
            <label class="pb_label">Surface</label>
            <label class="pb_error" id="surface_error"></label><br>
            <input <?php if(isset($result[0]['surface'])) echo'value="' . $result[0]['surface'] . '" ';?> name="surface" id="surface" class="form-control" type="text" name="" placeholder="m²">
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-4">
            <label class="pb_label">Name</label>
            <label class="pb_error" id="name_error"></label><br>
            <input <?php if(isset($result[0]['name'])) echo'value="' . $result[0]['name'] . '" ';?> name="name" id="name" class="form-control" type="text" name="">
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Email</label>
            <label class="pb_error" id="email_error"></label><br>
            <input <?php if(isset($result[0]['email'])) echo'value="' . $result[0]['email'] . '" ';?> name="email" id="email" class="form-control" type="text" name="">
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Phone</label>
            <label class="pb_error" id="phone_error"></label><br>
            <input <?php if(isset($result[0]['phone'])) echo'value="' . $result[0]['phone'] . '" ';?> name="phone" id="phone" class="form-control" type="text" name="">
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