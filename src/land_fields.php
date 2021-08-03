<div class="row">
	<div class="col-sm-6">
		<label class="pb_label">Land type</label><br>
        <select name="land_type" class="pb_select_field">
          <option <?php if(isset($_GET['land_type']) && strcmp($_GET['land_type'], 'Select') === 0) echo'selected="true"';?>>Select</option>
          <option <?php if(isset($_GET['land_type']) && strcmp($_GET['land_type'], 'Teren rezidential') === 0) echo'selected="true"';?>>Teren rezidential</option>
          <option <?php if(isset($_GET['land_type']) && strcmp($_GET['land_type'], 'Teren comercial') === 0) echo'selected="true"';?>>Teren comercial</option>
          <option <?php if(isset($_GET['land_type']) && strcmp($_GET['land_type'], 'Teren agricol') === 0) echo'selected="true"';?>>Teren agricol</option>
          <option <?php if(isset($_GET['land_type']) && strcmp($_GET['land_type'], 'Teren industrial') === 0) echo'selected="true"';?>>Teren industrial</option>
        </select>
	</div>

	<div class="col-sm-6">
		<label class="pb_label">Localization</label><br>
        <select name="localization" class="pb_select_field">
          <option <?php if(isset($_GET['localization']) && strcmp($_GET['localization'], 'Select') === 0) echo'selected="true"';?>>Select</option>
          <option <?php if(isset($_GET['localization']) && strcmp($_GET['localization'], 'Intravilan') === 0) echo'selected="true"';?>>Intravilan</option>
          <option <?php if(isset($_GET['localization']) && strcmp($_GET['localization'], 'Extravilan') === 0) echo'selected="true"';?>>Extravilan</option>
        </select>
	</div>
</div>