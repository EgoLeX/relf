<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - Property Location
User needs to enter where his location is (e.g. Berlin or the zip code => 10117 for Berlin Mitte)

*/
?><!--
<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questlocationproperty ?></span></p>
    </div>
    <div class="col-12 d-flex align-items-center">
      <div class="w-100 relf-rbox text-center">
        <img src="img/relf_location.png" alt="Location Image"/>
        <p><input placeholder="Location of your property" type="text" oninput="this.className = ''" name="relf_proplocation"></p>
        <p><?php echo $str_seclocationproperty; ?></p>
      </div>
    </div>
  </div>

</div>-->




<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questlocationproperty; ?></span></p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
      <div class="w-100 relf-rbox">

        <div class="row">
          <div class="col-12 d-flex align-items-center">
            <div class="w-100">
              <p><input placeholder="<?php echo $str_placeholderproploc_street ?>" type="text" oninput="this.className = ''" name="relf_proplocation_street"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4 d-flex align-items-center">
            <div class="w-100">
              <p><input placeholder="<?php echo $str_placeholderproploc_zip ?>" type="number" oninput="this.className = ''" name="relf_proplocation_zip"></p>
            </div>
          </div>
          <div class="col-8 d-flex align-items-center">
            <div class="w-100">
              <p><input placeholder="<?php echo $str_placeholderproploc_city ?>" type="text" oninput="this.className = ''" name="relf_proplocation_city"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p><?php echo $str_secproploc;?></p>
          </div>
        </div>

      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <div class="d-flex justify-content-center w-100 relf-startbox">
        <img src="img/relf_location.png" alt="Location of Property" width="100%" height="auto">
      </div>
    </div>

  </div>

</div>
