<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - Whenselling
User can choose when he plan to sell his property

*/
?>
<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questwhenselling ?></span></p>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="whenselling" value="<?php echo $str_sellingonemonth; ?>">
          <img src="img/calender_months_1month.png" alt=""><br/>
          <span><?php echo $str_sellingonemonth; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="whenselling" value="<?php echo $str_sellingthreetosixmonths; ?>">
          <img src="img/calender_months_3to6months.png" alt=""><br/>
          <span><?php echo $str_sellingthreetosixmonths; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="whenselling" value="<?php echo $str_sellingwithintwelvemonths; ?>">
          <img src="img/calender_months_12months.png" alt=""><br/>
          <span><?php echo $str_sellingwithintwelvemonths; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="whenselling" value="<?php echo $str_sellingnotplaned; ?>">
          <img src="img/calender_months_dontwanttosell.png" alt=""><br/>
          <span><?php echo $str_sellingnotplaned; ?></span>
        </label>
      </div>
    </div>

  </div>

</div>
