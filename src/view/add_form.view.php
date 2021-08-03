<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
    <div class="pb_header_body_add_propertie form-inline">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <h1 class="pb_nav_slogan_add_propertie">What do you want to do with your propertie?</h1>
          </div>
          <div class="offset-sm-2 col-sm-8">
            <select name="ad_type" class="pb_header_option_select_add_propertie">
              <option>Rent</option>
              <option>Sale</option>
            </select>
          </div>
        </div>
      </div>     
    </div>
    <div class="container">
        <div class="pb_spacer"></div>
        <div class="pb_container_add_properties">
        <label class="pb_label">Title</label>
        <label class="pb_error" id="title_error"></label><br>
        <input class="pb_input_field" type="text" name="title" id="title"><br>


        <label class="pb_label">Description</label>
        <label class="pb_error" id="description_error"></label><br>
        <textarea name="description" id="description" class="pb_input_field"></textarea><br>
        </div>

        <div class="pb_spacer"></div>
        <div class="pb_container_add_properties">
        <div class="row">
          <div class="col-sm-4">
            <label class="pb_label">City</label>
            <label class="pb_error" id="city_error"></label><br>
        <select name="city" id="city" class="pb_select_field">
          <option>Select</option>
          <option>Alba</option>
          <option>Arad</option>
          <option>Arges</option>
          <option>Bacau</option>
          <option>Bihor</option>
          <option>Bistrita Nasaud</option>
          <option>Botosani</option>
          <option>Braila</option>
          <option>Brasov</option>
          <option>Bucuresti Ilfov</option>
          <option>Buzau</option>
          <option>Calarasi</option>
          <option>Caras Severin</option>
          <option>Cluj</option>
          <option>Constanta</option>
          <option>Covasna</option>
          <option>Dambovita</option>
          <option>Dolj</option>
          <option>Galati</option>
          <option>Giurgiu</option>
          <option>Gorj</option>
          <option>Harghita</option>
          <option>Hunedoara</option>
          <option>Ialomita</option>
          <option>Iasi</option>
          <option>Ilfov</option>
          <option>Maramures</option>
          <option>Mehedinti</option>
          <option>Mures</option>
          <option>Neamt</option>
          <option>Olt</option>
          <option>Prahova</option>
          <option>Salaj</option>
          <option>Satu-Mare</option>
          <option>Sibiu</option>
          <option>Suceava</option>
          <option>Teleorman</option>
          <option>Timis</option>
          <option>Tulcea</option>
          <option>Valcea</option>
          <option>Vaslui</option>
          <option>Vrancea</option>
        </select>
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Region</label><br>
            <div id="reg">
            <select disabled class="pb_select_field">
                <option>Choose a region</option>
            </select>
            </div>
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Adress</label>
            <label class="pb_error" id="adress_error"></label><br>
          <input name="adress" id="adress" class="pb_input_field" type="text">
          </div>
        </div>
 
        <div class="row">
          <div class="col-sm-6">
            <label class="pb_label">Type of propertie</label>
            <label class="pb_error" id="type_propertie_error"></label><br>
            <select name="propertie_type" id="type_propertie" class="pb_select_field">
              <option>Select</option>
              <option>House</option>
              <option>Appartement</option>
              <option>Land</option>
              <option>Office</option>
            </select><br>
          </div>
        </div>
      
        <div id="propertie_details"></div>
        </div>
        <div class="pb_spacer"></div>
        <div class="pb_container_add_properties">
        <label class="pb_label">Price</label>
        <label class="pb_error" id="price_error"></label><br>
        <div class="row">
          <div class="col-sm-3">       
            <input name="price" id="price" class="pb_input_field" type="text" name="" placeholder="">
          </div>

          <div class="col-sm-2 px-0">
            <select name="curency" class="pb_select_field">
              <option>EUR</option>
              <option>USD</option>
              <option>RON</option>
            </select>

          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-3">
            <label class="pb_label">Surface</label>
            <label class="pb_error" id="surface_error"></label><br>
            <input name="surface" id="surface" class="pb_input_field" type="text" name="" placeholder="m²">
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-4">
            <label class="pb_label">Name</label>
            <label class="pb_error" id="name_error"></label><br>
            <input name="name" id="name" class="pb_input_field" type="text" name="">
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Email</label>
            <label class="pb_error" id="email_error"></label><br>
            <input name="email" id="email" class="pb_input_field" type="text" name="">
          </div>

          <div class="col-sm-4">
            <label class="pb_label">Phone</label>
            <label class="pb_error" id="phone_error"></label><br>
            <input name="phone" id="phone" class="pb_input_field" type="text" name="">
          </div>
        </div>
      </div>

    <div class="pb_spacer"></div>
    <div class="pb_container_add_properties">
      <div class="row">
        <div class="col-sm-12">
          <label class="pb_label">*The first image is also the thumbnail</label>
        </div>
      </div>

      <div class="row" style="margin-top:5px">
        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image1" name="upload_image1">
            <label class="custom-file-label" for="upload_image1">Thumbnail</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image2" name="upload_image2">
            <label class="custom-file-label" for="upload_image2">Choose file</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image3" name="upload_image3">
            <label class="custom-file-label" for="upload_image3">Choose file</label>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image4" name="upload_image4">
            <label class="custom-file-label" for="upload_image1">Choose file</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image5" name="upload_image5">
            <label class="custom-file-label" for="upload_image2">Choose file</label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="custom-file pb_upload_field">
            <input type="file" class="custom-file-input" id="upload_image6" name="upload_image6">
            <label class="custom-file-label" for="upload_image3">Choose file</label>
          </div>
        </div>
      </div>
    </div>

    <div class="pb_spacer"></div>
    <input class="btn btn-primary" type="submit" name="">
    <div class="pb_spacer"></div>
    </div>
</form>