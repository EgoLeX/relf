<?php
/*
********************************************
      RELF - Real Estate Lead Form by
            AkEgo Development
********************************************

  Functions

*/

function relf_contactDetails(){

  $var_contactgender = $_POST['relf_gender'];
  $var_contactname = $_POST['relf_usrname'];
  $var_contactmail = $_POST['relf_usrmail'];
  $var_contacttel = $_POST['relf_usrtel'];

  $emailcontent .= $str_mailcontacttxt . $var_contactgender . $var_contactname . '<br>' . $var_contactmail . '<br>' . $var_contacttel;

}

?>
