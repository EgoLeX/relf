<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

In this file are able to change some settings to personalize the form

How to:
Only change the text within the "xxxx". Otherwise the code can broke!


Note:
> Design aspects can be changed within the css-files inside the css/ folder
> The

*/
//
// General Settings
//
$sett_yourpagename = "My awesome page";
$sett_emailreceipent = "tomyemail@mymail.com";
$sett_emailsubject = "New lead form";
$sett_maxrooms = "10";
//send the user after submitting the form to your own landingpage
$sett_redirectpage = "https://myawesomewebsite.com/";

// Should email, telefon or message field required? Can be "true" or "false"
$sett_usermail_req = "true";
$sett_usertelefon_req = "true";
$sett_usermsg_req = "false"; //currently not in use

//
// Settings personal valuation
//
// Should personal valuation possible? Can be "true" or "false"
$sett_personalvaluation = "true";
$sett_personal_location = "true";
$sett_personal_getintouch = "true"; //currently not in use

//
// Settings online valuation
//
// Should online valuation possible? Can be "true" or "false"
$sett_onlinevaluation = "true";

//
// Settings for showing / hiding specific parts of form
// Important to know: All visible field are in default required to be filled out!!
//
// House
$sett_house_type = "true";
$sett_house_rooms = "true";
$sett_house_plotarea = "true";
$sett_house_livingspace = "true";
$sett_house_whenselling = "true";
$sett_house_location = "true";
$sett_house_getintouch = "true";
// Apartment
$sett_apartment_type = "true";
$sett_apartment_rooms = "true";
$sett_apartment_livingspace = "true";
$sett_apartment_whenselling = "true";
$sett_apartment_location = "true";
$sett_apartment_getintouch = "true";
// Plot
$sett_plot_type = "true";
$sett_plot_size = "true";
$sett_plot_whenselling = "true";
$sett_plot_location = "true";
$sett_plot_getintouch = "true";

?>
