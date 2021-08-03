<div class="row pb_result_container">
    <div class="col-md-3 col-sm-12">
        <a href="<?php echo "post.php?id=" . $result['post_id'];?>"><img class="img-fluid pb_result_image" src="<?php echo "images/" . $crud->read(array('name'), 'images', $where)[0]["name"]?>"></a>
    </div>

    <div class="col-md-6 col-sm-12">
        <a href="<?php echo "post.php?id=" . $result['post_id']?>">
            <h2 class="pb_result_title"><?php echo $result["title"]?></h2>
        </a>

        <label class="pb_result_location"><i style="font-size:12px" class="material-icons"> navigation </i><?php echo  $result['city'] . ', ' . $result['region'] . ', ' . $result['adress'] ?></label>

        <label class="pb_result_date"><i style="font-size:12px" class="material-icons"> calendar_today </i> <?php echo $crud->post_time($result['time']) ?></label> 
    </div>
    
    <div class="col-md-3 col-sm-12">
        <label class="text-center pb_result_price float-right"><?php echo $result['price'] . ' ' . $result['currency']?>
        </label>
    </div>
</div>