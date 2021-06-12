<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - Property Rooms
User needs to enter how many rooms the property has and when the property was constructed

*/
?>
<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questrooms; ?></span></p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
      <div class="w-100 relf-rbox text-center">
        <img src="img/property_floorplan.png" alt="<?php echo $str_secrooms; ?>"><br/>
        <p><input placeholder="<?php echo $str_placeholderrooms;?>" type="number" oninput="this.className = ''" name="relf_proprooms" min="1" max="<?php echo $sett_maxrooms; ?>"></p>
        <p><?php echo $str_secrooms; ?></p>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <div class="w-100 relf-rbox relf-higher text-center">
        <img src="img/property_yearofconstruction.png" alt="<?php echo $str_placeholderyearofconstruct;?>"><br/>
        <p><input placeholder="<?php echo $str_placeholderyearofconstruct;?>" type="number" oninput="this.className = ''" name="relf_propyearofconstruction" min="0"></p>
      </div>
    </div>
  </div>

</div>
