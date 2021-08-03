<?php
    require_once("class/crud.class.php");
    $crud = new Crud;

    $search_field = $city = $region = $propertie = $ad = $min = $max = $currency = $surface = $rooms = $bathrooms = $floors = $construction_year = $furniture = $results = "";

    if(isset($_GET['submit']))
    {
        if(!empty($_GET['search_field']))
            $search_field = "%" . $_GET['search_field'] . "%";
        if(strcmp($_GET['city'], "Select") !== 0)
        {
            if(!empty($_GET['city']))
                $city = $_GET['city'];
            if(!empty($_GET['region']))
                $region = $_GET['region'];
        }

        if(!empty($_GET['propertie']))
            $propertie = $_GET['propertie'];
        if(!empty($_GET['ad']))
            $type = $_GET['ad'];
        if(!empty($_GET['min']))
            $min = $_GET['min'];
        if(!empty($_GET['max']))
            $max = $_GET['max'];
        if(!empty($_GET['currency']))
            $currency = $_GET['currency'];
        

        if(strcmp($propertie, "House") === 0)
        {
            if(isset($_GET['surface']))
                $surface = $_GET['surface'];
            if(isset($_GET['rooms']))
                $rooms = $_GET['rooms'];
            if(isset($_GET['bathrooms']))
                $bathrooms = $_GET['bathrooms'];
            if(isset($_GET['floors']))
                $floors = $_GET['floors'];
            if(isset($_GET['year_construction']))
                $construction_year = $_GET['year_construction'];
            if(isset($_GET['furniture']))
                $furniture = $_GET['furniture'];
        }

        if(strcmp($propertie, "Appartement") === 0)
        {
            if(isset($_GET['surface']))
                $surface = $_GET['surface'];
            if(isset($_GET['rooms']))
                $rooms = $_GET['rooms'];
            if(isset($_GET['bathrooms']))
                $bathrooms = $_GET['bathrooms'];
            if(isset($_GET['floors']))
                $floors = $_GET['floors'];
            if(isset($_GET['year_construction']))
                $construction_year = $_GET['year_construction'];
            if(isset($_GET['furniture']))
                $furniture = $_GET['furniture'];
            if(isset($_GET['appartement_type']))
                $appartement_type = $_GET['appartement_type'];
            if(isset($_GET['comfort']))
                $comfort = $_GET['comfort'];
        }

        if(strcmp($propertie, "Land") === 0)
        {
            if(isset($_GET['surface']))
                $surface = $_GET['surface'];
            if(isset($_GET['land_type']))
                $land_type = $_GET['land_type'];
            if(isset($_GET['localization']))
                $localization = $_GET['localization']; 
        }

        
        $where = array();

        if(!empty($_GET['search_field']))
            array_push($where, array("title", "LIKE", $search_field, "AND"));

        if(!empty($city) && strcmp($city, "Select") !== 0)
            array_push($where, array("city", "=", $city, "AND"));

        if(!empty($region) && strcmp($region, "Select") !== 0)
            array_push($where, array("region", "=", $region, "AND"));

        if(!empty($propertie) && strcmp($propertie, "Select") !== 0)
            array_push($where, array("property_type", "=", strtolower($propertie), "AND"));

        if(!empty($type) && strcmp($type, "Select") !== 0)
            array_push($where, array("type", "=", $type, "AND"));

        if(!empty($max))
            array_push($where, array("price", "<=", $max, "AND"));

        if(!empty($min))
            array_push($where, array("price", ">=", $min, "AND"));

        if(!empty($currency) && strcmp($currency, "Select") !== 0)
            array_push($where, array("currency", "=", $currency, "AND"));

        if(!empty($surface))
            array_push($where, array("surface", ">=", $surface, "AND"));

        if(!empty($rooms) && strcmp($rooms, "Select") !== 0)
            array_push($where, array("rooms", "=", $rooms, "AND"));

        if(!empty($bathrooms) && strcmp($bathrooms, "Select") !== 0)
            array_push($where, array("bathrooms", " LIKE ", $bathrooms, "AND"));

        if(!empty($floors) && strcmp($floors, "Select") !== 0)
            array_push($where, array("floors", "=", $floors, "AND"));

        if(!empty($construction_year))
            array_push($where, array("year_construction", "<=", $construction_year, "AND"));

        if(!empty($furniture) && strcmp($furniture, "Select") !== 0)
            array_push($where, array("furniture", "=", $furniture, "AND"));

        if(!empty($appartement_type) && strcmp($appartement_type, "Select") !== 0)
            array_push($where, array("appartement_type", "=", $appartement_type, "AND"));

        if(!empty($comfort) && strcmp($comfort, "Select") !== 0)
            array_push($where, array("comfort", "=", $comfort, "AND"));

        if(!empty($land_type) && strcmp($land_type, "Select") !== 0)
            array_push($where, array("land_type", "=", $land_type, "AND"));

        if(!empty($localization) && strcmp($localization, "Select") !== 0)
            array_push($where, array("localization", "=", $localization, "AND"));

        //We add this because we have to get rid of the AND statement and thus we add a condition that is always true
        if(!empty($where))
            array_push($where, array("id", ">", "0", ""));

            $results = $crud->read(array('*'), 'houses', $where);
    }
?>