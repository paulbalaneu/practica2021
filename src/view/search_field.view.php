    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <input <?php if(isset($_GET['search_field'])) echo'value="' . $_GET['search_field'] . '" ';?> class="pb_search_bar_result" type="text" name="search_field" placeholder="Search"> 
            </div>

            <div class="col-sm-3">
                <select name="propertie" id="propertie" class="pb_select_field" style="margin-top: 8px">
                    <option <?php if(isset($_GET['propertie']) && strcmp($_GET['propertie'], 'Appartement') === 0) echo'selected="true"';?>>Appartement</option>
                    <option <?php if(isset($_GET['propertie']) && strcmp($_GET['propertie'], 'House') === 0) echo'selected="true"';?>>House</option>
                    <option <?php if(isset($_GET['propertie']) && strcmp($_GET['propertie'], 'Land') === 0) echo'selected="true"';?>>Land</option>
                </select>
            </div>

            <div class="col-sm-2">
                <input name="submit" type="submit" class="btn btn-primary pb_search_bar_result_button" value="Search"><br>
                <a class="pb_result_adv_search" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Advanced search</a>
            </div>
        </div>
        
        <div class="row float-right">
            
        </div>

        <div class="collapse" id="collapseExample">
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <label class="pb_label">City</label>
                <select name="city" id="city" class="pb_select_field">
                    <option>Select</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Alba') === 0) echo'selected="true"';?>>Alba</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Arad') === 0) echo'selected="true"';?>>Arad</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Arges') === 0) echo'selected="true"';?>>Arges</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Bacau') === 0) echo'selected="true"';?>>Bacau</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Bihor') === 0) echo'selected="true"';?>>Bihor</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Bistrita Nasaud') === 0) echo'selected="true"';?>>Bistrita Nasaud</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Botosani') === 0) echo'selected="true"';?>>Botosani</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Braila') === 0) echo'selected="true"';?>>Braila</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Brasov') === 0) echo'selected="true"';?>>Brasov</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Bucuresti') === 0) echo'selected="true"';?>>Bucuresti</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Buzau') === 0) echo'selected="true"';?>>Buzau</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Calarasi') === 0) echo'selected="true"';?>>Calarasi</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Caras Severin') === 0) echo'selected="true"';?>>Caras Severin</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Cluj') === 0) echo'selected="true"';?>>Cluj</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Constanta') === 0) echo'selected="true"';?>>Constanta</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Covasna') === 0) echo'selected="true"';?>>Covasna</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Dambovita') === 0) echo'selected="true"';?>>Dambovita</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Dolj') === 0) echo'selected="true"';?>>Dolj</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Galati') === 0) echo'selected="true"';?>>Galati</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Giurgiu') === 0) echo'selected="true"';?>>Giurgiu</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Gorj') === 0) echo'selected="true"';?>>Gorj</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Harghita') === 0) echo'selected="true"';?>>Harghita</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Hunedoara') === 0) echo'selected="true"';?>>Hunedoara</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Ialomita') === 0) echo'selected="true"';?>>Ialomita</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Iasi') === 0) echo'selected="true"';?>>Iasi</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Ilfov') === 0) echo'selected="true"';?>>Ilfov</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Maramures') === 0) echo'selected="true"';?>>Maramures</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Mehedinti') === 0) echo'selected="true"';?>>Mehedinti</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Mures') === 0) echo'selected="true"';?>>Mures</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Neamt') === 0) echo'selected="true"';?>>Neamt</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Olt') === 0) echo'selected="true"';?>>Olt</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Prahova') === 0) echo'selected="true"';?>>Prahova</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Salaj') === 0) echo'selected="true"';?>>Salaj</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Satu-Mare') === 0) echo'selected="true"';?>>Satu-Mare</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Sibiu') === 0) echo'selected="true"';?>>Sibiu</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Suceava') === 0) echo'selected="true"';?>>Suceava</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Teleorman') === 0) echo'selected="true"';?>>Teleorman</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Timis') === 0) echo'selected="true"';?>>Timis</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Tulcea') === 0) echo'selected="true"';?>>Tulcea</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Valcea') === 0) echo'selected="true"';?>>Valcea</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Vaslui') === 0) echo'selected="true"';?>>Vaslui</option>
                    <option <?php if(isset($_GET['city']) && strcmp($_GET['city'], 'Vrancea') === 0) echo'selected="true"';?>>Vrancea</option>
                </select>
            </div> 

            <div class="col-md-4 col-sm-6 col-12">
                <label class="pb_label">Region</label><br>
                <div id="reg">

                    <?php 
                        if((isset($_GET['city']) && strcmp($_GET['city'], 'Select') === 0) || !isset($_GET['city'])) 
                            echo '
                        <select disabled class="pb_select_field">
                            <option>Select</option>
                        </select>';
                        else
                            require_once('romania_region.php');
                    ?>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <label class="pb_label">Ad</label><br>
                <select name="ad" id="type_propertie" class="pb_select_field">
                    <option <?php if(isset($_GET['ad']) && strcmp($_GET['ad'], 'Select') === 0) echo'selected="true"';?>>Select</option>
                    <option <?php if(isset($_GET['ad']) && strcmp($_GET['ad'], 'Rent') === 0) echo'selected="true"';?>>Rent</option>
                    <option <?php if(isset($_GET['ad']) && strcmp($_GET['ad'], 'Sale') === 0) echo'selected="true"';?>>Sale</option>
                </select>
            </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-4 col-12">
                    <label class="pb_label">Min</label><br>
                    <input <?php if(isset($_GET['min'])) echo'value="' . $_GET['min'] . '" ';?> class="pb_input_field" type="text" name="min">
                </div>

                <div class="col-md-3 col-sm-4 col-12">
                    <label class="pb_label">Max</label><br>
                    <input <?php if(isset($_GET['max'])) echo'value="' . $_GET['max'] . '" ';?> class="pb_input_field" type="text" name="max">
                </div>

                <div class="col-md-3 col-sm-4 col-12">
                    <label class="pb_label">Currency</label><br>
                    <select name="currency" class="pb_select_field">
                        <option <?php if(isset($_GET['currency']) && strcmp($_GET['currency'], 'Select') === 0) echo'selected="true"';?>>Select</option>
                        <option <?php if(isset($_GET['currency']) && strcmp($_GET['currency'], 'EUR') === 0) echo'selected="true"';?>>EUR</option>
                        <option <?php if(isset($_GET['currency']) && strcmp($_GET['currency'], 'USD') === 0) echo'selected="true"';?>>USD</option>
                        <option <?php if(isset($_GET['currency']) && strcmp($_GET['currency'], 'RON') === 0) echo'selected="true"';?>>RON</option>
                    </select>
                </div>

                <div class="col-md-3 col-sm-4 col-12">
                    <label class="pb_label">Surface</label><br>
                    <input <?php if(isset($_GET['surface'])) echo'value="' . $_GET['surface'] . '" ';?> name="surface" class="pb_input_field" type="text" name="" placeholder="m²">
                </div>
            </div>
            <div id="propertie_details">
                <?php 
                    if(isset($_GET['propertie']) && strcmp($_GET['propertie'], 'House') === 0)
                        require_once("house_fields.php");
                    else if(isset($_GET['propertie']) && strcmp($_GET['propertie'], 'Appartement') === 0)
                        require_once("appartement_fields.php");
                    else if(isset($_GET['propertie']) && strcmp($_GET['propertie'], 'Land') === 0)
                        require_once("land_fields.php");
                    else
                        require_once("house_fields.php");
                ?>  
            </div>
            </div>
        </div>
        </form>