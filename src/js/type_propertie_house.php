<div class="row">
	<div class="col-md-4">
		<label class="pb_label">Rooms</label><br>
        <select name="rooms" class="pb_select_field">
          <option <?php if(isset($_GET['rooms']) && strcmp($_GET['rooms'], 'Select') === 0) echo'selected="true"';?>>Select</option>
          <option <?php if(isset($_GET['rooms']) && strcmp($_GET['rooms'], '1 room') === 0) echo'selected="true"';?>>1 room</option>
          <option <?php if(isset($_GET['rooms']) && strcmp($_GET['rooms'], '2 rooms') === 0) echo'selected="true"';?>>2 rooms</option>
          <option <?php if(isset($_GET['rooms']) && strcmp($_GET['rooms'], '3 rooms') === 0) echo'selected="true"';?>>3 rooms</option>
          <option <?php if(isset($_GET['rooms']) && strcmp($_GET['rooms'], '4 rooms') === 0) echo'selected="true"';?>>4 rooms</option>
          <option <?php if(isset($_GET['rooms']) && strcmp($_GET['rooms'], '5 rooms or more') === 0) echo'selected="true"';?>>5 rooms or more</option>
        </select>
    </div>

    <div class="col-sm-4">
        <label class="pb_label">Bathrooms</label><br>
        <select name="bathrooms" class="pb_select_field">
          <option <?php if(isset($_GET['bathrooms']) && strcmp($_GET['bathrooms'], 'Select') === 0) echo'selected="true"';?>>Select</option>
          <option <?php if(isset($_GET['bathrooms']) && strcmp($_GET['bathrooms'], '1 bathroom') === 0) echo'selected="true"';?>>1 bathroom</option>
          <option <?php if(isset($_GET['bathrooms']) && strcmp($_GET['bathrooms'], '2 bathroom') === 0) echo'selected="true"';?>>2 bathrooms</option>
          <option <?php if(isset($_GET['bathrooms']) && strcmp($_GET['bathrooms'], '3 bathroom') === 0) echo'selected="true"';?>>3 bathrooms</option>
          <option <?php if(isset($_GET['bathrooms']) && strcmp($_GET['bathrooms'], '4 bathroom') === 0) echo'selected="true"';?>>4 bathrooms</option>
          <option <?php if(isset($_GET['bathrooms']) && strcmp($_GET['bathrooms'], '5 bathrooms or more') === 0) echo'selected="true"';?>>5 bathrooms or more</option>
        </select>
    </div>

    <div class="col-sm-4">
        <label class="pb_label">Floors</label><br>
        <select name="floors" class="pb_select_field">
          	<option <?php if(isset($_GET['floors']) && strcmp($_GET['floors'], 'Select') === 0) echo'selected="true"';?>>Select</option>
        	<option <?php if(isset($_GET['floors']) && strcmp($_GET['floors'], 'Ground floor') === 0) echo'selected="true"';?>>Ground floor</option>
          	<option <?php if(isset($_GET['floors']) && strcmp($_GET['floors'], '1 floor') === 0) echo'selected="true"';?>>1 floor</option>
          	<option <?php if(isset($_GET['floors']) && strcmp($_GET['floors'], '2 floors') === 0) echo'selected="true"';?>>2 floors</option>
         	<option <?php if(isset($_GET['floors']) && strcmp($_GET['floors'], '3 floors') === 0) echo'selected="true"';?>>3 floors</option>
         	<option <?php if(isset($_GET['floors']) && strcmp($_GET['floors'], '4 floors') === 0) echo'selected="true"';?>>4 floors</option>
          	<option <?php if(isset($_GET['floors']) && strcmp($_GET['floors'], '5 floors or more') === 0) echo'selected="true"';?>>5 floors or more</option>
        </select>
    </div>
</div>



<div class="row">
	<div class="col-sm-6">
        <label class="pb_label">Year of construction</label><br>
        <input name="construction_year" class="pb_input_field" type="text" name="">
	</div>

	<div class="col-sm-6">
		<label class="pb_label">State of the house</label><br>
        <select name="furniture" class="pb_select_field">
          <option <?php if(isset($_GET['furniture']) && strcmp($_GET['furniture'], 'Select') === 0) echo'selected="true"';?>>Select</option>
          <option <?php if(isset($_GET['furniture']) && strcmp($_GET['furniture'], 'Unfurnished') === 0) echo'selected="true"';?>>Unfurnished</option>
          <option <?php if(isset($_GET['furniture']) && strcmp($_GET['furniture'], 'Partially furnished') === 0) echo'selected="true"';?>>Partially furnished</option>
          <option <?php if(isset($_GET['furniture']) && strcmp($_GET['furniture'], 'Furnished') === 0) echo'selected="true"';?>>Furnished</option>
        </select>
	</div>
</div>