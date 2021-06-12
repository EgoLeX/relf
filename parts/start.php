<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

This file contains the first screen where you can choose if you wish to choose between online valuation or directly personal valuation

*/
?>

<div id="main" class="row">
  <div class="col-sm-12 col-md-6 col-lg-6">
    <div class="relf-startbox">
      <a href="?s=yes" class="text-decoration-none">
        <div class="relf-box p-1">
          <h2><?php echo $str_onlinevaluation; ?></h2>
          <p><?php echo $str_onlinevaluation_bytext; ?></p>
          <img src="img/vecteezy_onlineform.png" alt="Online valuation">
        </div>
      </a>
    </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-6">
    <div class="relf-startbox">
      <a href="?s=no" class="text-decoration-none">
        <div class="relf-box p-1 special">
          <h2><?php echo $str_personalvaluation; ?></h2>
          <p><?php echo $str_personalvaluation_bytext; ?></p>
          <img src="img/vecteezy_contactus.png" alt="Personal valuation">
          <div class="specialbot"><span><?php echo $str_personalperfectforselling;?></span></div>
        </div>
      </a>
    </div>
  </div>
</div>
