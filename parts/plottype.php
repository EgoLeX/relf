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
      <p><span><?php echo $str_questplottype ?></span></p>
    </div>

    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="plottype" value="<?php echo $str_buildingplot;?>">
          <img src="img/propertytype_plot.png" alt=""><br/>
          <span><?php echo $str_buildingplot;?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="plottype" value="<?php echo $str_farmland;?>">
          <img src="img/propertytype_plot.png" alt=""><br/>
          <span><?php echo $str_farmland;?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="plottype" value="<?php echo $str_woodland;?>">
          <img src="img/propertytype_plot.png" alt=""><br/>
          <span><?php echo $str_woodland;?></span>
        </label>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex align-items-center">
      <div class="w-100 relf-box p-1">
        <label class="m-0 text-center">
          <input type="radio" name="plottype" value="<?php echo $str_other;?>">
          <img src="img/propertytype_plot.png" alt=""><br/>
          <span><?php echo $str_other;?></span>
        </label>
      </div>
    </div>

  </div>

</div>
