<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - PlotType
The different plot types available

*/
?>
<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questapartmenttype ?></span></p>
    </div>
  </div>
  <div class="row relf-scroll m-0 pb-2 relf-multimobile">
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="apartmenttype" value="<?php echo $str_firstfloor; ?>">
          <img src="img/propertytype_apartment.png" alt="<?php echo $str_firstfloor; ?>"><br/>
          <span><?php echo $str_firstfloor; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="apartmenttype" value="<?php echo $str_apartment; ?>">
          <img src="img/propertytype_apartment.png" alt="<?php echo $str_apartment; ?>"><br/>
          <span><?php echo $str_apartment; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="apartmenttype" value="<?php echo $str_topfloor; ?>">
          <img src="img/propertytype_apartment.png" alt="<?php echo $str_topfloor; ?>"><br/>
          <span><?php echo $str_topfloor; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="apartmenttype" value="<?php echo $str_maisonette; ?>">
          <img src="img/propertytype_apartment.png" alt="<?php echo $str_maisonette; ?>"><br/>
          <span><?php echo $str_maisonette; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="apartmenttype" value="<?php echo $str_loft; ?>">
          <img src="img/propertytype_apartment.png" alt="<?php echo $str_loft; ?>"><br/>
          <span><?php echo $str_loft; ?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="apartmenttype" value="<?php echo $str_other; ?>">
          <img src="img/propertytype_apartment.png" alt="<?php echo $str_other; ?>"><br/>
          <span><?php echo $str_other; ?></span>
        </label>
      </div>
    </div>

  </div>

</div>
