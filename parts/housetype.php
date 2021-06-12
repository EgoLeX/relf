<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - HouseType
The different house types available

*/
?>
<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questhousetype ?></span></p>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="housetype" value="<?php echo $str_singlefamilyhouse; ?>">
          <img src="img/propertytype_house.png" alt=""><br/>
          <span><?php echo $str_singlefamilyhouse; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="housetype" value="<?php echo $str_rowhouse; ?>">
          <img src="img/propertytype_dobblehouse.png" alt=""><br/>
          <span><?php echo $str_rowhouse; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="housetype" value="<?php echo $str_semidetachedhouse; ?>">
          <img src="img/propertytype_house.png" alt=""><br/>
          <span><?php echo $str_semidetachedhouse; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="housetype" value="<?php echo $str_apartmenthouse; ?>">
          <img src="img/propertytype_apartment.png" alt=""><br/>
          <span><?php echo $str_apartmenthouse; ?></span>
        </label>
      </div>
    </div>

  </div>

</div>
