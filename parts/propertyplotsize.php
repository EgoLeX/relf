<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - Property plot size
User needs to enter the plot size

*/
?>
<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questplotarea; ?></span></p>
    </div>
    <div class="col-12 d-flex align-items-center">
      <div class="w-100 relf-rbox text-center">
        <img src="img/propertytype_plotsize.png" alt="Plot area Image"/>
        <p><input placeholder="<?php echo $str_placeholderplotarea; ?>" type="number" oninput="this.className = ''" name="relf_propplotsize" min="0"></p>
        <p><?php echo $str_secplotsize; ?></p>
      </div>
    </div>
  </div>

</div>
