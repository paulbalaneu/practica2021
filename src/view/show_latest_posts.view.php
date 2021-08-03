<?php 
if(!empty($img))
	$src = "images/" . $img[0]['name'];
else
	$src = "images/noimage.jpg";
?>

<div class="col-md-4 col-sm-6 col-12">
	<div class="card pb_featured_card">
		<a href="<?php echo "post.php?id=" . $rows[$i]["post_id"];?>"><img src="<?php echo $src?>" class="card-img-top pb_featured_image" width="auto" height="auto" alt="..."></a>

		<div class="card-body">
			<h5 class="card-title pb_featured_price"><?php echo $rows[$i]["price"]?></h5>
			<p class="card-text pb_featured_location"><?php echo $rows[$i]["city"]?>, <?php echo $rows[$i]["region"]?></p>
		</div>
	</div>
</div>
