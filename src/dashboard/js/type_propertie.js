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
						<label class="pb_label">Number of rooms</label><br>
				        <select name="rooms" class="form-control">
				        <option>Select</option>
				          <option>1 room</option>
				          <option>2 room</option>
				          <option>3 room</option>
				          <option>4 room</option>
				          <option>5 room or more</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Number of bathrooms</label><br>
				        <select name="bathrooms" class="form-control">
				        <option>Select</option>
				          <option>1 bathroom</option>
				          <option>2 bathrooms</option>
				          <option>3 bathrooms</option>
				          <option>4 bathrooms</option>
				          <option>5 bathrooms or more</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Number of floors</label><br>
				        <select name="floors" class="form-control">
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
				        <select name="year_construction" class="form-control">
				        	<option>Select</option>
				        	<option>2020</option>
							<option>2019</option>
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
							<option>2015</option>
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>
							<option>2009</option>
							<option>2008</option>
							<option>2007</option>
							<option>2006</option>
							<option>2005</option>
							<option>2004</option>
							<option>2003</option>
							<option>2002</option>
							<option>2001</option>
							<option>2000</option>
							<option>1999</option>
							<option>1998</option>
							<option>1997</option>
							<option>1996</option>
							<option>1995</option>
							<option>1994</option>
							<option>1993</option>
							<option>1992</option>
							<option>1991</option>
							<option>1990</option>
							<option>1989</option>
							<option>1988</option>
							<option>1987</option>
							<option>1986</option>
							<option>1985</option>
							<option>1984</option>
							<option>1983</option>
							<option>1982</option>
							<option>1981</option>
							<option>1980</option>
							<option>1979</option>
							<option>1978</option>
							<option>1977</option>
							<option>1976</option>
							<option>1975</option>
							<option>1974</option>
							<option>1973</option>
							<option>1972</option>
							<option>1971</option>
							<option>1970</option>
							<option>1969</option>
							<option>1968</option>
							<option>1967</option>
							<option>1966</option>
							<option>1965</option>
							<option>1964</option>
							<option>1963</option>
							<option>1962</option>
							<option>1961</option>
							<option>1960</option>
							<option>1959</option>
							<option>1958</option>
							<option>1957</option>
							<option>1956</option>
							<option>1955</option>
							<option>1954</option>
							<option>1953</option>
							<option>1952</option>
							<option>1951</option>
							<option>1950</option>
							<option>1949</option>
							<option>1948</option>
							<option>1947</option>
							<option>1946</option>
							<option>1945</option>
							<option>1944</option>
							<option>1943</option>
							<option>1942</option>
							<option>1941</option>
							<option>1940</option>
							<option>1939</option>
							<option>1938</option>
							<option>1937</option>
							<option>1936</option>
							<option>1935</option>
							<option>1934</option>
							<option>1933</option>
							<option>1932</option>
							<option>1931</option>
							<option>1930</option>
							<option>1929</option>
							<option>1928</option>
							<option>1927</option>
							<option>1926</option>
							<option>1925</option>
							<option>1924</option>
							<option>1923</option>
							<option>1922</option>
							<option>1921</option>
							<option>1920</option>
							<option>1919</option>
							<option>1918</option>
							<option>1917</option>
							<option>1916</option>
							<option>1915</option>
							<option>1914</option>
							<option>1913</option>
							<option>1912</option>
							<option>1911</option>
							<option>1910</option>
							<option>1909</option>
							<option>1908</option>
							<option>1907</option>
							<option>1906</option>
							<option>1905</option>
							<option>1904</option>
							<option>1903</option>
							<option>1902</option>
							<option>1901</option>
							<option>1900</option>		        	
				        </select>
					</div>

					<div class="col-sm-6">
						<label class="pb_label">State of the house</label><br>
				        <select name="furniture" class="form-control">
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
				        <select name="rooms" class="form-control">
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
				        <select name="bathrooms" class="form-control">
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
				        <select name="floors" class="form-control">
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
				        <select name="furniture" class="form-control">
				        <option>Select</option>
				          <option>Unfurnished</option>
				          <option>Partially furnished</option>
				          <option>Furnished</option>
				        </select>
				    </div>

				    <div class="col-sm-4">
				        <label class="pb_label">Appartement type</label><br>
				        <select name="appartement_type" class="form-control">
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
				        <select name="comfort" class="form-control">
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
				        <select name="year_construction" class="form-control">
				        	<option>2020</option>
							<option>2019</option>
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
							<option>2015</option>
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>
							<option>2009</option>
							<option>2008</option>
							<option>2007</option>
							<option>2006</option>
							<option>2005</option>
							<option>2004</option>
							<option>2003</option>
							<option>2002</option>
							<option>2001</option>
							<option>2000</option>
							<option>1999</option>
							<option>1998</option>
							<option>1997</option>
							<option>1996</option>
							<option>1995</option>
							<option>1994</option>
							<option>1993</option>
							<option>1992</option>
							<option>1991</option>
							<option>1990</option>
							<option>1989</option>
							<option>1988</option>
							<option>1987</option>
							<option>1986</option>
							<option>1985</option>
							<option>1984</option>
							<option>1983</option>
							<option>1982</option>
							<option>1981</option>
							<option>1980</option>
							<option>1979</option>
							<option>1978</option>
							<option>1977</option>
							<option>1976</option>
							<option>1975</option>
							<option>1974</option>
							<option>1973</option>
							<option>1972</option>
							<option>1971</option>
							<option>1970</option>
							<option>1969</option>
							<option>1968</option>
							<option>1967</option>
							<option>1966</option>
							<option>1965</option>
							<option>1964</option>
							<option>1963</option>
							<option>1962</option>
							<option>1961</option>
							<option>1960</option>
							<option>1959</option>
							<option>1958</option>
							<option>1957</option>
							<option>1956</option>
							<option>1955</option>
							<option>1954</option>
							<option>1953</option>
							<option>1952</option>
							<option>1951</option>
							<option>1950</option>
							<option>1949</option>
							<option>1948</option>
							<option>1947</option>
							<option>1946</option>
							<option>1945</option>
							<option>1944</option>
							<option>1943</option>
							<option>1942</option>
							<option>1941</option>
							<option>1940</option>
							<option>1939</option>
							<option>1938</option>
							<option>1937</option>
							<option>1936</option>
							<option>1935</option>
							<option>1934</option>
							<option>1933</option>
							<option>1932</option>
							<option>1931</option>
							<option>1930</option>
							<option>1929</option>
							<option>1928</option>
							<option>1927</option>
							<option>1926</option>
							<option>1925</option>
							<option>1924</option>
							<option>1923</option>
							<option>1922</option>
							<option>1921</option>
							<option>1920</option>
							<option>1919</option>
							<option>1918</option>
							<option>1917</option>
							<option>1916</option>
							<option>1915</option>
							<option>1914</option>
							<option>1913</option>
							<option>1912</option>
							<option>1911</option>
							<option>1910</option>
							<option>1909</option>
							<option>1908</option>
							<option>1907</option>
							<option>1906</option>
							<option>1905</option>
							<option>1904</option>
							<option>1903</option>
							<option>1902</option>
							<option>1901</option>
							<option>1900</option>		        	
				        </select>
					</div>
		        </div>
				`;
				$( "div#propertie_details" ).html($select);
				break;


				case "Land":
				$select = `
				<div class="row">
					<div class="col-sm-6">
						<label class="pb_label">Land type</label><br>
				        <select name="land_type" class="form-control">
				        	<option>Select</option>
				          <option>Teren rezidential</option>
				          <option>Teren comercial</option>
				          <option>Teren agricol</option>
				          <option>Teren industrial</option>
				        </select>
					</div>

					<div class="col-sm-6">
						<label class="pb_label">Localization</label><br>
				        <select name="localization" class="form-control">
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