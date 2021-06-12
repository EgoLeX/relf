<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

  Action handler on form submit

*/
require '../config.php';
require '../lang.php';
include 'mail.php';

function relf_redirect(){
  $redirect = 'location: ' . $sett_redirectpage;
  header($redirect);
}

$emailcontent = '';
$emailcontent .= $str_emailheadtext;
$var_propertytype = $_POST['pt'];

if (!isset($var_propertytype) && !isset($_POST['valu'])) {
  header('location: ../');
}

$var_contactgender = $_POST['relf_gender'];
$var_contactname = $_POST['relf_usrname'];
$var_contactmail = $_POST['relf_usrmail'];
$var_contacttel = $_POST['relf_usrtel'];

if (isset($_POST['valu']) && $_POST['valu'] === 'p') {
  echo 'Personal Valuation choosed with following values<br><br>Property Location: '.$_POST['relf_proplocation'].'<br>'.$var_contactgender.' '.$var_contactname.'<br>Mail: '.$var_contactmail. '<br>Phone: '.$var_contacttel;
  echo '<a href="/">Make a new Valuation request</a>';

} else if ($var_propertytype === 'h') {
  if($sett_house_type){ $emailcontent .= $str_placeholderhousetype . ': ' . $_POST['housetype'] . '<br>'; }
  if($sett_house_rooms){ $emailcontent .= $str_placeholderrooms . ': ' . $_POST['relf_proprooms'] . '<br>' . $str_placeholderyearofconstruct . ': ' . $_POST['relf_propyearofconstruction'] . '<br>'; }
  if($sett_house_plotarea){ $emailcontent .= $str_placeholderplotarea . ': ' . $_POST['relf_propplotsize'] . '<br>'; }
  if($sett_house_livingspace){ $emailcontent .= $str_placeholderlivingspace . ': ' . $_POST['relf_proplivingspace'] . '<br>'; }
  if($sett_house_whenselling){ $emailcontent .= $str_placeholderwhenselling . ': ' . $_POST['whenselling'] . '<br>'; }
  if($sett_house_location){ $emailcontent .= $str_placeholderproploc . ': ' . $_POST['relf_proplocation_street'] . ', ' . $_POST['relf_proplocation_zip'] . ' ' . $_POST['relf_proplocation_city'] . '<br>'; }

  $emailcontent .= $str_mailcontacttxt . $var_contactgender . $var_contactname . '<br>' . $var_contactmail . '<br>' . $var_contacttel;

  //echo $emailcontent;
  mailsender($sett_emailreceipent, $sett_emailsubject, $emailcontent);

} else if ($var_propertytype === 'a') {
  if($sett_apartment_type){ $emailcontent .= $str_placeholderhousetype . ': ' . $_POST['apartmenttype'] . '<br>'; }
  if($sett_apartment_rooms){ $emailcontent .= $str_placeholderrooms . ': ' . $_POST['relf_proprooms'] . '<br>' . $str_placeholderyearofconstruct . ': ' . $_POST['relf_propyearofconstruction'] . '<br>'; }
  if($sett_apartment_livingspace){ $emailcontent .= $str_placeholderlivingspace . ': ' . $_POST['relf_proplivingspace'] . '<br>'; }
  if($sett_apartment_whenselling){ $emailcontent .= $str_placeholderwhenselling . ': ' . $_POST['whenselling'] . '<br>'; }
  if($sett_apartment_location){ $emailcontent .= $str_placeholderproploc . ': ' . $_POST['relf_proplocation_street'] . ', ' . $_POST['relf_proplocation_zip'] . ' ' . $_POST['relf_proplocation_city'] . '<br>'; }

  $emailcontent .= $str_mailcontacttxt . $var_contactgender . ' ' . $var_contactname . '<br>' . $var_contactmail . '<br>' . $var_contacttel;

  //echo $emailcontent;
  mailsender($sett_emailreceipent, $sett_emailsubject, $emailcontent);

} else if ($var_propertytype === 'p') {
  if($sett_plot_type){ $emailcontent .= $str_placeholderplottype . ': ' . $_POST['plottype'] . '<br>'; }
  if($sett_plot_size){ $emailcontent .= $str_placeholderplotarea . ': ' . $_POST['relf_propplotsize'] . '<br>'; }
  if($sett_plot_whenselling){ $emailcontent .= $str_placeholderwhenselling . ': ' . $_POST['whenselling'] . '<br>'; }
  if($sett_plot_location){ $emailcontent .= $str_placeholderproploc . ': ' . $_POST['relf_proplocation_street'] . ', ' . $_POST['relf_proplocation_zip'] . ' ' . $_POST['relf_proplocation_city'] . '<br>'; }

  $emailcontent .= $str_mailcontacttxt . $var_contactgender . $var_contactname . '<br>' . $var_contactmail . '<br>' . $var_contacttel;

  //echo $emailcontent;
  mailsender($sett_emailreceipent, $sett_emailsubject, $emailcontent);
}

?>
