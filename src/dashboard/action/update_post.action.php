<?php 

require_once("../../class/crud.class.php");
require_once("../../class/validate.class.php");

$crud = new Crud;
$validate = new Validate;

$result = $crud->read(array("region"), "houses", array(array("post_id", "=", $_GET['post_id'], "")));

$ad_type = $title = $description = $city = $region = $adress = $land_type = $localization = $rooms = $bathrooms = $floors = $appartement_type = $comfort = $year_construction = $furniture = $price= $curency = $surface = $name = $email = $phone = $post_id = $propertie_type = "";

  $ok = 1;
  $propertie_type = strtolower($_POST['propertie_type']);

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
 
  if(empty($region))
    $region = $result[0]['region'];

  if(strcmp($city, "Select") === 0)
      $ok = 0;

$conditions = array(
      array("post_id", "=", $_GET['post_id'], "")
    );

if($ok === 1)
{
$crud->update("houses", array("type", "title", "description", "city", "region", "adress", "land_type", "localization", "rooms", "bathrooms", "floors", "appartement_type", "comfort", "year_construction", "furniture", "price", "currency", "surface", "name", "email", "phone", "post_id", "property_type"), array($ad_type, $title, $description, $city, $region, $adress, $land_type, $localization, $rooms, $bathrooms, $floors, $appartement_type, $comfort, $year_construction, $furniture, $price, $curency, $surface, $name, $email, $phone, $_GET['post_id'], $propertie_type), $conditions);
header("Location: ../all_posts.php?result=success");
die();
}
else
{
  header("Location: ../all_posts.php?result=failure");
}
