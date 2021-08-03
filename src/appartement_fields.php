<div class="row">
	<div class="col-sm-4">
		<label class="pb_label">Number of rooms</label><br>
	    <select name="rooms" class="pb_select_field">
	    	<option>Select</option>
	      <option>1 room</option>
	      <option>2 rooms</option>
	      <option>3 rooms</option>
	      <option>4 rooms</option>
	      <option>5 rooms or more</option>
	    </select>
	</div>

	<div class="col-sm-4">
	    <label class="pb_label">Number of bathrooms</label><br>
	    <select name="bathrooms" class="pb_select_field">
	    	<option>Select</option>
	      <option>1 bathroom</option>
	      <option>2 bathrooms</option>
	      <option>3 bathrooms</option>
	      <option>4 bathrooms</option>
	      <option>5 bathrooms or more</option>
	    </select>
	</div>

	<div class="col-sm-4">
	    <label class="pb_label">Floor</label><br>
	    <select name="floors" class="pb_select_field">
	    	<option>Select</option>
	      	<option>Ground floor</option>
	      	<option>Floor 1</option>
	      	<option>Floor 2</option>
	      	<option>Floor 3</option>
	      	<option>Floor 4</option>
	      	<option>Floor 5</option>
	      	<option>Floor 6</option>
	      	<option>Floor 7</option>
	      	<option>Floor 8</option>
	      	<option>Floor 9</option>
	      	<option>Floor 10 or more</option>
	    </select>
	</div>
	</div>


	<div class="row">
	<div class="col-sm-4">
	    <label class="pb_label">State of the appartement</label><br>
	    <select name="furniture" class="pb_select_field">
	    	<option>Select</option>
	      <option>Unfurnished</option>
	      <option>Partially furnished</option>
	      <option>Furnished</option>
	    </select>
	</div>

	<div class="col-sm-4">
	    <label class="pb_label">Appartement type</label><br>
	    <select name="appartement_type" class="pb_select_field">
	    	<option>Select</option>
	      <option>Decomandat</option>
	      <option>Semidecomandat</option>
	      <option>Nedecomandat</option>
	      <option>Open-space</option>
	      <option>Circular</option>
	    </select>
	</div>

	<div class="col-sm-4">
	    <label class="pb_label">Comfort</label><br>
	    <select name="comfort" class="pb_select_field">
	    	<option>Select</option>
	      <option>1</option>
	      <option>2</option>
	      <option>3</option>
	      <option>Premium/Lux</option>
	    </select>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-4">
	    <label class="pb_label">Year of construction</label><br>
	    <input <?php if(isset($_GET['year_construction'])) echo'value="' . $_GET['year_construction'] . '" ';?> name="year_construction" class="pb_input_field" type="text" name="">
	</div>
</div>