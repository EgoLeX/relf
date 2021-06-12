<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

Step part - Get in Touch with us
Entering the users contact data + openstreetmap of the contact address

*/
?>
<div class="tab">

  <div class="row">
    <div class="col-12 mb-2 relf-quest">
      <p><span><?php echo $str_questhowcontact; ?></span></p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
      <div class="w-100 relf-rbox">

        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 d-flex align-items-center">
            <div class="w-100">
              <p><select oninput="this.className = ''" name="relf_gender"><option value="<?php echo $str_contactsir;?>"><?php echo $str_contactsir;?></option><option value="<?php echo $str_contactmadam;?>"><?php echo $str_contactmadam;?></option></select></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 d-flex align-items-center">
            <div class="w-100">
              <p><input placeholder="<?php echo $str_contactyourname;?>" type="text" oninput="this.className = ''" name="relf_usrname"></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
            <div class="w-100">
              <p><input placeholder="<?php echo $str_contactyouremail;?>" type="email" oninput="this.className = ''" name="relf_usrmail"></p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
            <div class="w-100">
              <p><input placeholder="<?php echo $str_contactyourmobilenumber;?>" type="tel" oninput="this.className = ''" name="relf_usrtel"></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <p><?php echo $str_seccontact;?></p>
          </div>
        </div>

      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <div class="d-flex justify-content-center w-100 relf-startbox">
        <img src="img/property_valuation.png" alt="Documents" width="100%" height="auto">
      </div>
    </div>

  </div>

</div>
