$( document ).ready(function() 
{	
	var $value = $( "#type_propertie option:selected" ).text();
	$( "#type_propertie" ).click(function() 
	{
  		var $value = $( "#type_propertie option:selected" ).text();
		switch($value)
		{
			case "House":
				$select = `
				<div class="row">
					<div class="col-sm-4">
						<label class="pb_label">Number of rooms</label>
						<label class="pb_error" id="rooms_error"></label><br>
				        <select name="rooms" id="rooms" class="pb_select_field">
				        <option>Select</option>
				          <option>1 room</option>
				          <option>2 room</option>
				          <option>3 room</option>
				          <option>4 room</option>
				          <option>5 room or more</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Number of bathrooms</label>
				        <label class="pb_error" id="bathrooms_error"></label><br>
				        <select name="bathrooms" id="bathrooms" class="pb_select_field">
				        <option>Select</option>
				          <option>1 bathroom</option>
				          <option>2 bathrooms</option>
				          <option>3 bathrooms</option>
				          <option>4 bathrooms</option>
				          <option>5 bathrooms or more</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Number of floors</label>
				        <label class="pb_error" id="floors_error"></label><br>
				        <select name="floors" id="floors" class="pb_select_field">
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
				        <label class="pb_label">Year of construction</label>
				        <label class="pb_error" id="year_construction_error"></label><br>
				        <input name="year_construction" id="year_construction" class="pb_input_field" type="text" name="">
					</div>

					<div class="col-sm-6">
						<label class="pb_label">State of the house</label>
						<label class="pb_error" id="furniture_error"></label><br>
				        <select name="furniture" id="furniture" class="pb_select_field">
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
						<label class="pb_label">Number of rooms</label>
						<label class="pb_error" id="rooms_error"></label><br>
				        <select name="rooms" id="rooms" class="pb_select_field">
				        <option>Select</option>
				          <option>1 room</option>
				          <option>2 rooms</option>
				          <option>3 rooms</option>
				          <option>4 rooms</option>
				          <option>5 rooms or more</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Number of bathrooms</label>
				        <label class="pb_error" id=bathrooms_error"></label><br>
				        <select name="bathrooms" id="bathrooms" class="pb_select_field">
				        <option>Select</option>
				          <option>1 bathroom</option>
				          <option>2 bathrooms</option>
				          <option>3 bathrooms</option>
				          <option>4 bathrooms</option>
				          <option>5 bathrooms or more</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Floor</label>
				        <label class="pb_error" id="floors_error"></label><br>
				        <select name="floors" id="floors" class="pb_select_field">
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
				        <label class="pb_label">State of the appartement</label>
				        <label class="pb_error" id="furniture_error"></label><br>
				        <select name="furniture" id="furniture" class="pb_select_field">
				        <option>Select</option>
				          <option>Unfurnished</option>
				          <option>Partially furnished</option>
				          <option>Furnished</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Appartement type</label>
				        <label class="pb_error" id="appartement_type_error"></label><br>
				        <select name="appartement_type" id="appartement_type" class="pb_select_field">
				          <option>Select</option>
				          <option>Decomandat</option>
				          <option>Semidecomandat</option>
				          <option>Nedecomandat</option>
				          <option>Open-space</option>
				          <option>Circular</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Comfort</label>
				        <label class="pb_error" id="comfort_error"></label><br>
				        <select name="comfort" id="comfort" class="pb_select_field">
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
				        <label class="pb_label">Year of construction</label>
				        <label class="pb_error" id="year_construction_error"></label><br>
				        <input name="year_construction" id="year_construction" class="pb_input_field" type="text" name="">
					</div>
		        </div>
				`;
				$( "div#propertie_details" ).html($select);
				break;


				case "Land":
				$select = `
				<div class="row">
					<div class="col-sm-6">
						<label class="pb_label">Land type</label>
						<label class="pb_error" id="land_type_error"></label><br>
				        <select name="land_type" id="land_type" class="pb_select_field">
				        	<option>Select</option>
				          <option>Teren rezidential</option>
				          <option>Teren comercial</option>
				          <option>Teren agricol</option>
				          <option>Teren industrial</option>
				        </select>
					</div>

					<div class="col-sm-6">
						<label class="pb_label">Localization</label>
						<label class="pb_error" id="localization_error"></label><br>
				        <select name="localization" id="localization" class="pb_select_field">
				          <option>Select</option>
				          <option>Intravilan</option>
				          <option>Extravilan</option>
				        </select>
					</div>
				</div>
				`;
				$( "div#propertie_details" ).html($select);
				break;
		}
	});

});