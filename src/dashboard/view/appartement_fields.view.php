<div class="row">
	<div class="col-sm-4">
		<label class="pb_label">Number of rooms</label><br>
	    <select name="rooms" class="pb_select_field">
	    	<option <?php if(strcmp($result[0]['rooms'], 'Select') === 0) echo'selected="true"';?>>Select</option>
	      <option <?php if(strcmp($result[0]['rooms'], '1 room') === 0) echo'selected="true"';?>>1 room</option>
	      <option <?php if(strcmp($result[0]['rooms'], '2 rooms') === 0) echo'selected="true"';?>>2 rooms</option>
	      <option <?php if(strcmp($result[0]['rooms'], '3 rooms') === 0) echo'selected="true"';?>>3 rooms</option>
	      <option <?php if(strcmp($result[0]['rooms'], '4 rooms') === 0) echo'selected="true"';?>>4 rooms</option>
	      <option <?php if(strcmp($result[0]['rooms'], '5 rooms or more') === 0) echo'selected="true"';?>>5 rooms or more</option>
	    </select>
	</div>

	<div class="col-sm-4">
	    <label class="pb_label">Number of bathrooms</label><br>
	    <select name="bathrooms" class="pb_select_field">
	    	<option <?php if(strcmp($result[0]['bathrooms'], 'Select') === 0) echo'selected="true"';?>>Select</option>
	      <option <?php if(strcmp($result[0]['bathrooms'], '1 bathroom') === 0) echo'selected="true"';?>>1 bathroom</option>
	      <option <?php if(strcmp($result[0]['bathrooms'], '2 bathrooms') === 0) echo'selected="true"';?>>2 bathrooms</option>
	      <option <?php if(strcmp($result[0]['bathrooms'], '3 bathrooms') === 0) echo'selected="true"';?>>3 bathrooms</option>
	      <option <?php if(strcmp($result[0]['bathrooms'], '4 bathrooms') === 0) echo'selected="true"';?>>4 bathrooms</option>
	      <option <?php if(strcmp($result[0]['bathrooms'], '5 bathrooms or more') === 0) echo'selected="true"';?>>5 bathrooms or more</option>
	    </select>
	</div>

	<div class="col-sm-4">
	    <label class="pb_label">Floor</label><br>
	    <select name="floors" class="pb_select_field">
	    	<option <?php if(strcmp($result[0]['floors'], 'Select') === 0) echo'selected="true"';?>>Select</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Ground floor') === 0) echo'selected="true"';?>>Ground floor</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 1') === 0) echo'selected="true"';?>>Floor 1</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 2') === 0) echo'selected="true"';?>>Floor 2</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 3') === 0) echo'selected="true"';?>>Floor 3</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 4') === 0) echo'selected="true"';?>>Floor 4</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 5') === 0) echo'selected="true"';?>>Floor 5</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 6') === 0) echo'selected="true"';?>>Floor 6</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 7') === 0) echo'selected="true"';?>>Floor 7</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 8') === 0) echo'selected="true"';?>>Floor 8</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 9') === 0) echo'selected="true"';?>>Floor 9</option>
	      	<option <?php if(strcmp($result[0]['floors'], 'Floor 10 or more') === 0) echo'selected="true"';?>>Floor 10 or more</option>
	    </select>
	</div>
	</div>


	<div class="row">
	<div class="col-sm-4">
	    <label class="pb_label">State of the appartement</label><br>
	    <select name="furniture" class="pb_select_field">
	    	<option <?php if(strcmp($result[0]['furniture'], 'Select') === 0) echo'selected="true"';?>>Select</option>
	      <option <?php if(strcmp($result[0]['furniture'], 'Unfurnished') === 0) echo'selected="true"';?>>Unfurnished</option>
	      <option <?php if(strcmp($result[0]['furniture'], 'Partially furnished') === 0) echo'selected="true"';?>>Partially furnished</option>
	      <option <?php if(strcmp($result[0]['furniture'], 'Furnished') === 0) echo'selected="true"';?>>Furnished</option>
	    </select>
	</div>

	<div class="col-sm-4">
	    <label class="pb_label">Appartement type</label><br>
	    <select name="appartement_type" class="pb_select_field">
	    	<option <?php if(strcmp($result[0]['appartement_type'], 'Select') === 0) echo'selected="true"';?>>Select</option>
	      <option <?php if(strcmp($result[0]['appartement_type'], 'Decomandat') === 0) echo'selected="true"';?>>Decomandat</option>
	      <option <?php if(strcmp($result[0]['appartement_type'], 'Semidecomandat') === 0) echo'selected="true"';?>>Semidecomandat</option>
	      <option <?php if(strcmp($result[0]['appartement_type'], 'Nedecomandat') === 0) echo'selected="true"';?>>Nedecomandat</option>
	      <option <?php if(strcmp($result[0]['appartement_type'], 'Open-space') === 0) echo'selected="true"';?>>Open-space</option>
	      <option <?php if(strcmp($result[0]['appartement_type'], 'Circular') === 0) echo'selected="true"';?>>Circular</option>
	    </select>
	</div>

	<div class="col-sm-4">
	    <label class="pb_label">Comfort</label><br>
	    <select name="comfort" class="pb_select_field">
	    	<option <?php if(strcmp($result[0]['comfort'], 'Select') === 0) echo'selected="true"';?>>Select</option>
	      <option <?php if(strcmp($result[0]['comfort'], '1') === 0) echo'selected="true"';?>>1</option>
	      <option <?php if(strcmp($result[0]['comfort'], '2') === 0) echo'selected="true"';?>>2</option>
	      <option <?php if(strcmp($result[0]['comfort'], '3') === 0) echo'selected="true"';?>>3</option>
	      <option <?php if(strcmp($result[0]['comfort'], 'Premium/Lux') === 0) echo'selected="true"';?>>Premium/Lux</option>
	    </select>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-4">
	    <label class="pb_label">Year of construction</label><br>
	    <select name="year_construction" class="pb_select_field">
        	<option <?php if(strcmp($result[0]['year_construction'], 'Select') === 0) echo'selected="true"';?>>Select</option>
        	<option <?php if(strcmp($result[0]['year_construction'], '2020') === 0) echo'selected="true"';?>>2020</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2019') === 0) echo'selected="true"';?>>2019</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2018') === 0) echo'selected="true"';?>>2018</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2017') === 0) echo'selected="true"';?>>2017</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2016') === 0) echo'selected="true"';?>>2016</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2015') === 0) echo'selected="true"';?>>2015</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2014') === 0) echo'selected="true"';?>>2014</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2013') === 0) echo'selected="true"';?>>2013</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2012') === 0) echo'selected="true"';?>>2012</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2011') === 0) echo'selected="true"';?>>2011</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2010') === 0) echo'selected="true"';?>>2010</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2009') === 0) echo'selected="true"';?>>2009</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2008') === 0) echo'selected="true"';?>>2008</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2007') === 0) echo'selected="true"';?>>2007</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2006') === 0) echo'selected="true"';?>>2006</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2005') === 0) echo'selected="true"';?>>2005</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2004') === 0) echo'selected="true"';?>>2004</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2003') === 0) echo'selected="true"';?>>2003</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2002') === 0) echo'selected="true"';?>>2002</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2001') === 0) echo'selected="true"';?>>2001</option>
			<option <?php if(strcmp($result[0]['year_construction'], '2000') === 0) echo'selected="true"';?>>2000</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1999') === 0) echo'selected="true"';?>>1999</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1998') === 0) echo'selected="true"';?>>1998</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1997') === 0) echo'selected="true"';?>>1997</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1996') === 0) echo'selected="true"';?>>1996</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1995') === 0) echo'selected="true"';?>>1995</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1994') === 0) echo'selected="true"';?>>1994</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1993') === 0) echo'selected="true"';?>>1993</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1992') === 0) echo'selected="true"';?>>1992</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1991') === 0) echo'selected="true"';?>>1991</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1990') === 0) echo'selected="true"';?>>1990</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1989') === 0) echo'selected="true"';?>>1989</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1988') === 0) echo'selected="true"';?>>1988</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1987') === 0) echo'selected="true"';?>>1987</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1986') === 0) echo'selected="true"';?>>1986</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1985') === 0) echo'selected="true"';?>>1985</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1984') === 0) echo'selected="true"';?>>1984</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1983') === 0) echo'selected="true"';?>>1983</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1982') === 0) echo'selected="true"';?>>1982</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1981') === 0) echo'selected="true"';?>>1981</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1980') === 0) echo'selected="true"';?>>1980</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1979') === 0) echo'selected="true"';?>>1979</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1978') === 0) echo'selected="true"';?>>1978</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1977') === 0) echo'selected="true"';?>>1977</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1976') === 0) echo'selected="true"';?>>1976</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1975') === 0) echo'selected="true"';?>>1975</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1974') === 0) echo'selected="true"';?>>1974</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1973') === 0) echo'selected="true"';?>>1973</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1972') === 0) echo'selected="true"';?>>1972</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1971') === 0) echo'selected="true"';?>>1971</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1970') === 0) echo'selected="true"';?>>1970</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1969') === 0) echo'selected="true"';?>>1969</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1968') === 0) echo'selected="true"';?>>1968</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1967') === 0) echo'selected="true"';?>>1967</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1966') === 0) echo'selected="true"';?>>1966</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1965') === 0) echo'selected="true"';?>>1965</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1964') === 0) echo'selected="true"';?>>1964</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1963') === 0) echo'selected="true"';?>>1963</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1962') === 0) echo'selected="true"';?>>1962</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1961') === 0) echo'selected="true"';?>>1961</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1960') === 0) echo'selected="true"';?>>1960</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1959') === 0) echo'selected="true"';?>>1959</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1958') === 0) echo'selected="true"';?>>1958</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1957') === 0) echo'selected="true"';?>>1957</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1956') === 0) echo'selected="true"';?>>1956</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1955') === 0) echo'selected="true"';?>>1955</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1954') === 0) echo'selected="true"';?>>1954</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1953') === 0) echo'selected="true"';?>>1953</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1952') === 0) echo'selected="true"';?>>1952</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1951') === 0) echo'selected="true"';?>>1951</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1950') === 0) echo'selected="true"';?>>1950</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1949') === 0) echo'selected="true"';?>>1949</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1948') === 0) echo'selected="true"';?>>1948</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1947') === 0) echo'selected="true"';?>>1947</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1946') === 0) echo'selected="true"';?>>1946</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1945') === 0) echo'selected="true"';?>>1945</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1944') === 0) echo'selected="true"';?>>1944</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1943') === 0) echo'selected="true"';?>>1943</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1942') === 0) echo'selected="true"';?>>1942</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1941') === 0) echo'selected="true"';?>>1941</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1940') === 0) echo'selected="true"';?>>1940</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1939') === 0) echo'selected="true"';?>>1939</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1938') === 0) echo'selected="true"';?>>1938</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1937') === 0) echo'selected="true"';?>>1937</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1936') === 0) echo'selected="true"';?>>1936</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1935') === 0) echo'selected="true"';?>>1935</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1934') === 0) echo'selected="true"';?>>1934</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1933') === 0) echo'selected="true"';?>>1933</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1932') === 0) echo'selected="true"';?>>1932</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1931') === 0) echo'selected="true"';?>>1931</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1930') === 0) echo'selected="true"';?>>1930</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1929') === 0) echo'selected="true"';?>>1929</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1928') === 0) echo'selected="true"';?>>1928</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1927') === 0) echo'selected="true"';?>>1927</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1926') === 0) echo'selected="true"';?>>1926</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1925') === 0) echo'selected="true"';?>>1925</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1924') === 0) echo'selected="true"';?>>1924</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1923') === 0) echo'selected="true"';?>>1923</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1922') === 0) echo'selected="true"';?>>1922</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1921') === 0) echo'selected="true"';?>>1921</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1920') === 0) echo'selected="true"';?>>1920</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1919') === 0) echo'selected="true"';?>>1919</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1918') === 0) echo'selected="true"';?>>1918</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1917') === 0) echo'selected="true"';?>>1917</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1916') === 0) echo'selected="true"';?>>1916</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1915') === 0) echo'selected="true"';?>>1915</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1914') === 0) echo'selected="true"';?>>1914</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1913') === 0) echo'selected="true"';?>>1913</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1912') === 0) echo'selected="true"';?>>1912</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1911') === 0) echo'selected="true"';?>>1911</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1910') === 0) echo'selected="true"';?>>1910</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1909') === 0) echo'selected="true"';?>>1909</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1908') === 0) echo'selected="true"';?>>1908</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1907') === 0) echo'selected="true"';?>>1907</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1906') === 0) echo'selected="true"';?>>1906</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1905') === 0) echo'selected="true"';?>>1905</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1904') === 0) echo'selected="true"';?>>1904</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1903') === 0) echo'selected="true"';?>>1903</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1902') === 0) echo'selected="true"';?>>1902</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1901') === 0) echo'selected="true"';?>>1901</option>
			<option <?php if(strcmp($result[0]['year_construction'], '1900') === 0) echo'selected="true"';?>>1900</option>
		        	
        </select>
	</div>
</div>