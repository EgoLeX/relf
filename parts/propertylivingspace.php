<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - Property Livingspace
User needs to enter the size of the living space

*/
?>
<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questlivingspace; ?></span></p>
    </div>
    <div class="col-12 d-flex align-items-center">
      <div class="w-100 relf-rbox text-center">
        <img src="img/property_floorplansize.png" alt="Living space Image"/>
        <p><input placeholder="<?php echo $str_placeholderlivingspace; ?>" type="number" oninput="this.className = ''" name="relf_proplivingspace" min="0"></p>
        <p><?php echo $str_seclivingspace; ?></p>
      </div>
    </div>
  </div>

</div>
