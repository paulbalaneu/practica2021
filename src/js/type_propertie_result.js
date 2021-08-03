$( document ).ready(function() 
{	
	  $( "#clickme" ).click(function() {
		  $( "#book" ).slideToggle( "slow", function() {
		    // Animation complete.
		  });
		});


	$( "#type_propertie" ).change(function() 
	{
  		var $value = $( "#type_propertie option:selected" ).text();
		switch($value)
		{
			case "House":
				$select = `
				<div class="row">
					<div class="col-md-4">
						<label class="pb_label">Rooms</label><br>
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
				        <label class="pb_label">Bathrooms</label><br>
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
				        <label class="pb_label">Floors</label><br>
				        <select name="floors" class="pb_select_field">
				          	<option>Select</option>
				        	<option>Ground floor</option>
				          	<option>1 floor</option>
				          	<option>2 floors</option>
				         	<option>3 floors</option>
				         	<option>4 floors</option>
				          	<option>5 floors or more</option>
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
				          <option>Select</option>
				          <option>Unfurnished</option>
				          <option>Partially furnished</option>
				          <option>Furnished</option>
				        </select>
					</div>
		        </div>
				`;
				$( "div#propertie_details" ).html($select);
				break;

				case "Appartement":
				$select = `
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
				        <input name="floors" class="pb_input_field" type="text" name="">
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
				        <input name="year_construction" class="pb_input_field" type="text" name="">
					</div>
		        </div>
				`;
				$( "div#propertie_details" ).html($select);
				break;
		}
	});

});