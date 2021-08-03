<?php 
if(isset($_POST['submit']))
{
	if($_POST['propertie'] == "house")
	{
		header("Location: search.php?search_field=&propertie=House&submit=Search&city=Select&ad=Select&min=&max=&currency=Select&surface=&rooms=Select&bathrooms=Select&floors=Select&year_construction=&furniture=Select");
		die();
	}

	if($_POST['propertie'] == "appartement")
	{
		header("Location: search.php?search_field=&propertie=Appartement&submit=Search&city=Select&ad=Select&min=&max=&currency=Select&surface=&rooms=Select&bathrooms=Select&floors=Select&year_construction=&furniture=Select");
		die();
	}

	if($_POST['propertie'] == "land")
	{
		header("Location: search.php?search_field=&propertie=Land&submit=Search&city=Select&ad=Select&min=&max=&currency=Select&surface=&rooms=Select&bathrooms=Select&floors=Select&furniture=Select&appartement_type=Select&comfort=Select&year_construction=");
		die();
	}
}

?>