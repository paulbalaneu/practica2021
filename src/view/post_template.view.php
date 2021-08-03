<div style="margin-top:20px" class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="pb_post_title">
                <?php  echo $result[0]['title'];?>            
            </h2>
            <label class="pb_result_time">
            <?php echo $crud->post_time($result[0]['time']);?>
            </label>
        </div>

        <div class="col-2 pb_post_price">
            <div class="text-center">
                <?php  echo $result[0]['price'] . " " . $result[0]['currency'];?>    
            </div>      
        </div>
    </div>
    <?php
        $img_arr = $image->get_image($_GET['id']);
        if(empty($img_arr))
        {
            $img_arr[0]['name'] = "noimage.jpg";
            $ok = 0;
        }
        else
        {
            $ok = 1;
        }
    ?>

    <div class="row">
        <div class="col-sm-8">
            <a href="images/<?php echo $img_arr[0]['name']?>" data-toggle="lightbox" data-gallery="gallery">
                <img src="images/<?php echo $img_arr[0]['name']?>" class="img-fluid pb_post_big_thumbnail">
            </a>
        <?php
            if($ok !== 0)
            {
                echo '
            <div class="row">
                <div class="col-12">';
                            for($i=1;$i<count($img_arr);$i++)
                                echo '
                            <a href="images/' . $img_arr[$i]['name'] . '" data-toggle="lightbox" data-gallery="gallery">
                                <img src="images/' . $img_arr[$i]['name'] . '" class="img-fluid pb_post_small_thumbnail">
                            </a> 
                            ';
                   echo ' 
                </div>
            </div> ';
            }
            ?>
        </div>

        <div style="margin-top:0px" class="col-sm-4">
            <h3 class="pb_post_section_title" style="margin-top: 5px">Contact</h3>

            <label class="pb_result_contact_title">Name</label>
            <label class="pb_result_contact_value">
                <?php  echo $result[0]['name'];?> 
            </label><br>
            
            <label class="pb_result_contact_title">Email</label>
            <label class="pb_result_contact_value">
                <?php  echo $result[0]['email'];?> 
            </label><br>

            <label class="pb_result_contact_title">Phone</label>
            <label class="pb_result_contact_value">
                <?php  echo $result[0]['phone'];?> 
            </label><br>
        </div>
    </div>

    

    <div class="row">
        <div class="col-sm-8">
            <h3 class="pb_post_section_title">Details</h3>
            <table class="table table-hover">
                <tbody>
                <?php  
                    if($result[0]['property_type'] == 'house')
                    {
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">City</span></th>
                            <td><span class="pb_post_info">' . $result[0]['city'] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Region</span></th>
                            <td><span class="pb_post_info">' . $result[0]["region"] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Location</span></th>
                            <td><span class="pb_post_info">' . $result[0]["adress"] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Surface</span></th>
                            <td><span class="pb_post_info">' . $result[0]["surface"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["rooms"], "Select") !== 0)
                            echo'
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Rooms</span></th>
                            <td><span class="pb_post_info">' . $result[0]["rooms"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["bathrooms"], "Select") !== 0)
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Bathrooms</span></th>
                            <td><span class="pb_post_info">' . $result[0]["bathrooms"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["floors"], "Select") !== 0)
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Floor</span></th>
                            <td><span class="pb_post_info">' . $result[0]["floors"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["year_construction"], "0") !== 0)
                        echo'
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Construction year</span></th>
                            <td><span class="pb_post_info">' . $result[0]["year_construction"] . ' 
                            </span></td>
                        </tr>
                        ';

                        if(strcmp($result[0]["furniture"], "Select") !== 0)
                        echo'
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Furniture</span></th>
                            <td><span class="pb_post_info">' . $result[0]["furniture"] . ' 
                            </span></td>
                        </tr>

                    ';
                }
                    else if($result[0]['property_type'] == 'appartement')
                    {
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">City</span></th>
                            <td><span class="pb_post_info">' . $result[0]['city'] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Region</span></th>
                            <td><span class="pb_post_info">' . $result[0]["region"] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Location</span></th>
                            <td><span class="pb_post_info">' . $result[0]["adress"] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Surface</span></th>
                            <td><span class="pb_post_info">' . $result[0]["surface"] . ' 
                            </span></td>
                        </tr>';
                        if(strcmp($result[0]["rooms"], "Select") !== 0)
                            echo'
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Rooms</span></th>
                            <td><span class="pb_post_info">' . $result[0]["rooms"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["bathrooms"], "Select") !== 0)
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Bathrooms</span></th>
                            <td><span class="pb_post_info">' . $result[0]["bathrooms"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["floors"], "Select") !== 0)
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Floor</span></th>
                            <td><span class="pb_post_info">' . $result[0]["floors"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["appartement_type"], "Select") !== 0)
                            echo'
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Appartement type</span></th>
                            <td><span class="pb_post_info">' . $result[0]["appartement_type"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["comfort"], "Select") !== 0)
                            echo'
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Comfort</span></th>
                            <td><span class="pb_post_info">' . $result[0]["comfort"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["year_construction"], "0") !== 0)
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Construction year</span></th>
                            <td><span class="pb_post_info">' . $result[0]["year_construction"] . ' 
                            </span></td>
                        </tr>';
                        if(strcmp($result[0]["furniture"], "Select") !== 0)
                            echo'
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Furniture</span></th>
                            <td><span class="pb_post_info">' . $result[0]["furniture"] . ' 
                            </span></td>
                        </tr>

                    ';
                }

                else if($result[0]['property_type'] == 'land')
                    {
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">City</span></th>
                            <td><span class="pb_post_info">' . $result[0]['city'] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Region</span></th>
                            <td><span class="pb_post_info">' . $result[0]["region"] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Location</span></th>
                            <td><span class="pb_post_info">' . $result[0]["adress"] . ' 
                            </span></td>
                        </tr>

                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Surface</span></th>
                            <td><span class="pb_post_info">' . $result[0]["surface"] . ' 
                            </span></td>
                        </tr>';
                        if(strcmp($result[0]["land_type"], "Select") !== 0)
                            echo'
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Land type</span></th>
                            <td><span class="pb_post_info">' . $result[0]["land_type"] . ' 
                            </span></td>
                        </tr>';

                        if(strcmp($result[0]["localization"], "Select") !== 0)
                        echo '
                        <tr>
                            <th scope="row"><span class="pb_post_info_title">Localization</span></th>
                            <td><span class="pb_post_info">' . $result[0]["localization"] . ' 
                            </span></td>
                        </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <h3 class="pb_post_section_title">Description</h3>
            <p>
                <?php echo $result[0]['description'];?>         
            </p>
        </div>
    </div>
</div>