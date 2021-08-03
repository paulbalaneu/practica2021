<?php
require_once("class/crud.class.php");
require_once("class/image.class.php");
require_once("class/index.class.php");
require_once("class/validate.class.php");

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