<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - Property Type
User choose to type of property (e.g. House, Apartment ...)

*/
?>
<div class="tab">

  <div class="row justify-content-center">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questpropertype; ?></span></p>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <a href="?s=yes&pt=h" role="button">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <img src="img/propertytype_house.png" alt="" width="100%"><br/>
          <span><?php echo $str_house; ?></span>
        </label>
      </div>
      </a>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <a href="?s=yes&pt=a" role="button">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <img src="img/propertytype_apartment.png" alt="" width="100%"><br/>
          <span><?php echo $str_apartment; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <a href="?s=yes&pt=p" role="button">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <img src="img/propertytype_plot.png" alt="" width="100%"><br/>
          <span><?php echo $str_plot; ?></span>
        </label>
      </div>
    </div><!--
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <a href="?s=yes&pt=c">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <img src="img/propertytype_commercial.png" alt="" width="100%"><br/>
          <span><?php echo $str_commerical; ?></span>
        </label>
      </div>
    </div>-->

  </div>

</div>
