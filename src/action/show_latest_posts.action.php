<?php 
//It is used in the main page to show the latest ads

require_once("class/sql.class.php");
$sql = new Sql;

//Get the last six posts to $rows matrix
$rows = $sql->fetch_assoc("SELECT city, region, price, post_id FROM houses ORDER BY id DESC LIMIT 6", array());

//Print them on the screen
for($i=0; $i<6; $i++)
{
    //Select the thumbnail image of the post
    $img = $sql->fetch_assoc("SELECT name FROM images WHERE post_id = ? ORDER BY id DESC LIMIT 1", array($rows[$i]["post_id"]));
    //Require the view for this specific action
    require("view/show_latest_posts.view.php");
}
?>
