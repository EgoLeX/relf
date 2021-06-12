<?php
require "lang.php";
require "config.php";

$str_topheading = $str_topheading;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <div class="relf-body">
      <div class="relf-top">
        <div class="relf-logo"><img src="img/relf_logo.png" width="100%"/></div>
        <h1><?php echo $str_topheading; ?></h1>
      </div>
      <!-- Main body - Form -->
      <div class="relf-main">

        <?php if ($sett_onlinevaluation && $sett_personalvaluation && !isset($_GET['s'])):
          include "parts/start.php";?>

        <?php endif; ?>
        <?php if ((isset($_GET['s']) && $_GET['s'] === 'yes') || (isset($_GET['s']) && $_GET['s'] === 'no')): ?>

          <form id="regForm" method="post" action="func/action.php">

            <?php if ($_GET['s'] === 'no'):?>
              <input type="hidden" name="valu" value="p">

              <?php
              if ($sett_personal_location) { include "parts/propertyloc.php"; } if ($sett_personal_getintouch) { include "parts/getintouch.php"; }?>

              <div class="row m-0 mt-2 relf-stepfoo">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left p-2 d-flex justify-content-start align-items-center">
                  <?php if ($sett_personal_location) { ?> <span class="step"></span> <?php } if ($sett_personal_getintouch) { ?> <span class="step"></span> <?php }?>
                  <span class="step"></span>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right d-flex justify-content-end align-items-end">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)"><?php echo $str_previous; ?></button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)"><?php echo $str_next; ?></button>
                </div>
              </div>

              <?php endif; ?>


              <?php if ($_GET['s'] === 'yes' && !isset($_GET['pt'])):
                include "parts/propertytype.php";
              ?>
              <?php endif; ?>


              <?php if ($_GET['s'] === 'yes' && isset($_GET['pt'])):

                $count = 0;

                if ($_GET['pt'] === 'h') {
                  ?><input name="pt" type="hidden" value="h"><?php
                  if ($sett_house_type) { include "parts/housetype.php"; $count++; }
                  if ($sett_house_rooms) { include "parts/propertyrooms.php"; $count++; }
                  if ($sett_house_plotarea) { include "parts/propertyplotsize.php"; $count++; }
                  if ($sett_house_livingspace) { include "parts/propertylivingspace.php"; $count++; }
                  if ($sett_house_whenselling) { include "parts/whenselling.php"; $count++; }
                  if ($sett_house_location) { include "parts/propertyloc.php"; $count++; }
                  if ($sett_house_getintouch) { include "parts/getintouch.php"; $count++; }
                } if ($_GET['pt'] === 'a') {
                  ?><input name="pt" type="hidden" value="a"><?php
                  if ($sett_apartment_type) { include "parts/apartmenttype.php"; $count++; }
                  if ($sett_apartment_rooms) { include "parts/propertyrooms.php"; $count++; }
                  if ($sett_apartment_livingspace) { include "parts/propertylivingspace.php"; $count++; }
                  if ($sett_apartment_whenselling) { include "parts/whenselling.php"; $count++; }
                  if ($sett_apartment_location) { include "parts/propertyloc.php"; $count++; }
                  if ($sett_apartment_getintouch) { include "parts/getintouch.php"; $count++; }
                } if ($_GET['pt'] === 'p') {
                  ?><input name="pt" type="hidden" value="p"><?php
                  if ($sett_plot_type) { include "parts/plottype.php"; $count++; }
                  if ($sett_plot_size) { include "parts/propertyplotsize.php"; $count++; }
                  if ($sett_plot_whenselling) { include "parts/whenselling.php"; $count++; }
                  if ($sett_plot_location) { include "parts/propertyloc.php"; $count++; }
                  if ($sett_plot_getintouch) { include "parts/getintouch.php"; $count++; }
                }
                ?>

                <div class="row m-0 mt-2 relf-stepfoo">
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-left p-2 d-flex justify-content-start align-items-center">
                    <?php for ($i=0; $i < $count; $i++) {
                      ?> <span class="step"></span> <?php
                    } ?>
                    <span class="step"></span>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right d-flex justify-content-end align-items-end">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)"><?php echo $str_previous; ?></button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)"><?php echo $str_next; ?></button>
                  </div>
                </div>

                <?php endif; ?>
          </form>

        <?php endif; ?>

      </div>
      <!-- Footer -->
      <div class="relf-bottom">
        <p class="m-0"><?php echo $str_bottomtext; ?></p>
      </div>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
